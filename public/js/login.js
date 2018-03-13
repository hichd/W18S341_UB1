$(function(){
    $("#loginButton").click(function () {
        var request = $.get('/login', $('#loginForm').serialize());

        request.done(function () {
            window.location = '/';
        });

        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#loginError").empty().append(errMsg);
            /*alert('Error while logging in.');
            window.location = '/';*/
        });
    });
});