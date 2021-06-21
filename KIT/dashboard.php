<!DOCTYPE html>
<html lang="en">

<head>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>

<body>
    <!-- All the files that are required -->



    <!-- Where all the magic happens -->
    <!-- LOGIN FORM -->

    <div class="text-center" style="padding:50px 0">
        <div class="logo">Login to Smartmeter system</div>
        <!-- Main Form -->
        <div class="login-form-1">
            <form id="login-form" class="text-left">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="lg_username" class="sr-only">Username</label>
                            <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="lg_password" class="sr-only">Password</label>
                            <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="etc-login-form">
                    <center>
                        <p>Additional Text can input here</a></p>
                    </center>
                </div>
            </form>
        </div>
        <!-- end:Main Form -->
    </div>




    <!-- Ajax Script -->

    <script type="text/javascript">
        (function($) {
            "use strict";

            // Options for Message
            //----------------------------------------------
            var options = {
                'btn-loading': '<i class="fa fa-spinner fa-pulse"></i>',
                'btn-success': '<i class="fa fa-check"></i>',
                'btn-error': '<i class="fa fa-remove"></i>',
                'msg-success': 'Login Success! Redirecting...',
                'msg-error': 'Wrong login credentials!',
                'useAJAX': true,
            };

            // Login Form
            //----------------------------------------------
            // Validation
            $("#login-form").validate({
                rules: {
                    lg_username: "required",
                    lg_password: "required",
                },
                errorClass: "form-invalid"
            });

            // Form Submission
            $("#login-form").submit(function() {
                remove_loading($(this));

                if (options['useAJAX'] == true) {
                    // Dummy AJAX request (Replace this with your AJAX code)
                    // If you don't want to use AJAX, remove this
                    dummy_submit_form($(this));
                    window.location.href = "mypage.php";
                    // Cancel the normal submission.
                    // If you don't want to use AJAX, remove this
                    return false;
                }
            });

            // Register Form
            //----------------------------------------------
            // Validation
            $("#register-form").validate({
                rules: {
                    reg_username: "required",
                    reg_password: {
                        required: true,
                        minlength: 5
                    },
                    reg_password_confirm: {
                        required: true,
                        minlength: 5,
                        equalTo: "#register-form [name=reg_password]"
                    },
                    reg_email: {
                        required: true,
                        email: true
                    },
                    reg_agree: "required",
                },
                errorClass: "form-invalid",
                errorPlacement: function(label, element) {
                    if (element.attr("type") === "checkbox" || element.attr("type") === "radio") {
                        element.parent().append(label); // this would append the label after all your checkboxes/labels (so the error-label will be the last element in <div class="controls"> )
                    } else {
                        label.insertAfter(element); // standard behaviour
                    }
                }
            });

            // Form Submission
            $("#register-form").submit(function() {
                remove_loading($(this));

                if (options['useAJAX'] == true) {
                    // Dummy AJAX request (Replace this with your AJAX code)
                    // If you don't want to use AJAX, remove this
                    dummy_submit_form($(this));

                    // Cancel the normal submission.
                    // If you don't want to use AJAX, remove this
                    return false;
                }
            });

            // Forgot Password Form
            //----------------------------------------------
            // Validation
            $("#forgot-password-form").validate({
                rules: {
                    fp_email: "required",
                },
                errorClass: "form-invalid"
            });

            // Form Submission
            $("#forgot-password-form").submit(function() {
                remove_loading($(this));

                if (options['useAJAX'] == true) {
                    // Dummy AJAX request (Replace this with your AJAX code)
                    // If you don't want to use AJAX, remove this
                    dummy_submit_form($(this));

                    // Cancel the normal submission.
                    // If you don't want to use AJAX, remove this
                    return false;
                }
            });

            // Loading
            //----------------------------------------------
            function remove_loading($form) {
                $form.find('[type=submit]').removeClass('error success');
                $form.find('.login-form-main-message').removeClass('show error success').html('');
            }

            function form_loading($form) {
                $form.find('[type=submit]').addClass('clicked').html(options['btn-loading']);
            }

            function form_success($form) {
                $form.find('[type=submit]').addClass('success').html(options['btn-success']);
                $form.find('.login-form-main-message').addClass('show success').html(options['msg-success']);
            }

            function form_failed($form) {
                $form.find('[type=submit]').addClass('error').html(options['btn-error']);
                $form.find('.login-form-main-message').addClass('show error').html(options['msg-error']);
            }

            // Dummy Submit Form (Remove this)
            //----------------------------------------------
            // This is just a dummy form submission. You should use your AJAX function or remove this function if you are not using AJAX.
            function dummy_submit_form($form) {
                if ($form.valid()) {
                    form_loading($form);

                    setTimeout(function() {
                        form_success($form);
                    }, 2000);
                }
            }

        })(jQuery);
    </script>
</body>

</html>