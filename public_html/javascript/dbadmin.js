/**
 * glFusion Database Administration Ajax Driver
 *
 * @author Mark R. Evans <mark AT glfusion DOT org>
 *
 */

var glfusion_dbadminInterface = (function() {

    // public methods/properties
    var pub = {};

    // private vars
    var items = null,
        item =  null,
        url =  null,
        done =  1,
        count = 0,
        $msg = null;

    var url = site_admin_url + '/database.php';

    /**
     * initialize everything
     */
    pub.init = function() {
        // $msg is the status message area
        $msg = $('#batchinterface_msg');

        // if $msg does not exist, return.
        if ( ! $msg) {
            return;
        }

        // init interface events
        $('#dbconvertbutton').click(pub.update);
    };

    var index = function() {
        if (item) {

            var dataS = {
                "mode" : "convertdb",
                "table" : item,
                "engine" : engine,
            };

            data = $.param(dataS);

            // ajax call to process item
            $.ajax({
                type: "POST",
                dataType: "json",
                url: url,
                data: data,
                success: function(data) {
                    var wait = 250;
                    var result = $.parseJSON(data["json"]);
                    try {
                        message('<p style="padding-left:20px;">' + lang_converting + ' ' + done + '/' + count + ' - '+ item + '</p>');
                        var percent = Math.round(( done / count ) * 100);
                        $('#progress-bar').css('width', percent + "%");
                        $('#progress-bar').html(percent + "%");
                        item = items.shift();
                        done++;
                        window.setTimeout(index, wait);
                    }
                    catch(err) {
                        alert(result.statusMessage);
                    }
                }
            });

        } else {
            finished();
        }
    };

    var finished = function() {
        // we're done
        $('#progress-bar').css('width', "100%");
        $('#progress-bar').html("100%");
        throbber_off();
        message(lang_success);
        window.setTimeout(function() {
            $('#dbconvertbutton').prop("disabled",false);
            $("#dbconvertbutton").html(lang_convert);
        }, 3000);
    };


    /**
     * Gives textual feedback
     * updates the ID defined in the $msg variable
     */
    var message = function(text) {
        if (text.charAt(0) !== '<') {
            text = '<p style="padding-left:20px;">' + text + '</p>'
        }
        $msg.html(text);
    };

    // update process
    pub.update = function() {
        done = 1;

        $("#dbadmin_batchprocesor").show();

        $('#dbconvertbutton').prop("disabled",true);
        $("#dbconvertbutton").html(lang_converting);

        throbber_on();

        $.ajax({
            type: "POST",
            dataType: "json",
            url: url,
            data: {"mode" : "dblist", "engine" : engine },
            success: function(data) {
                console.log(data);
                var result = $.parseJSON(data["json"]);
                items = result.tablelist;
                count = items.length;
                try {
                    item = items.shift();
                    message(lang_converting);
                    window.setTimeout(index,1000);
                }
                catch(err) {
                    alert(result.statusMessage);
                }
            }
        });
        return false; // prevent from firing
    };

    /**
     * add a throbber image
     */
    var throbber_on = function() {
        $msg.addClass('tm-updating');
    };

    /**
     * Stop the throbber
     */
    var throbber_off = function() {
        $msg.removeClass('tm-updating');
    };

    // return only public methods/properties
    return pub;
})();

$(function() {
    glfusion_dbadminInterface.init();
});