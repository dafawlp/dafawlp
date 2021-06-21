<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- All the files that are required -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Login</title>
</head>

<body>
    <h1>WELCOME</h1>
    <!-- Where all the magic happens -->
    <!-- LOGIN FORM -->
    <div class="text-center" style="padding:50px 0">
        <div class="logo">login</div>
        <!-- Main Form -->
        <div class="login-form-1">
            <form id="login-form" class="text-left">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="lg_username" class="sr-only">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="lg_password" class="sr-only">Password</label>
                            <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
                        </div>
                        <div class="form-group login-group-checkbox">
                            <input type="checkbox" id="lg_remember" name="lg_remember">
                            <label for="lg_remember">remember</label>
                        </div>
                    </div>
                    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="etc-login-form">
                    <p>forgot your password? <a href="forgot.php">click here</a></p>
                    <p>new user? <a href="register.php">create new account</a></p>
                </div>
            </form>
        </div>
        <!-- end:Main Form -->
    </div>

    <style>
        /*------------------------------------------------------------------
[Master Stylesheet]

Project    	: Aether
Version		: 1.0
Last change	: 2015/03/27
-------------------------------------------------------------------*/
        /*------------------------------------------------------------------
[Table of contents]

1. General Structure
2. Anchor Link
3. Text Outside the Box
4. Main Form
5. Login Button
6. Form Invalid
7. Form - Main Message
8. Custom Checkbox & Radio
9. Misc
-------------------------------------------------------------------*/
        /*=== 1. General Structure ===*/
        html,
        body {
            background: lightgoldenrodyellow;
            padding: 10px;
            font-family: 'Varela Round';
        }

        /*=== 2. Anchor Link ===*/
        a {
            color: #aaaaaa;
            transition: all ease-in-out 200ms;
        }

        a:hover {
            color: #333333;
            text-decoration: none;
        }

        /*=== 3. Text Outside the Box ===*/
        .etc-login-form {
            color: #919191;
            padding: 10px 20px;
        }

        .etc-login-form p {
            margin-bottom: 5px;
        }

        /*=== 4. Main Form ===*/
        .login-form-1 {
            max-width: 300px;
            border-radius: 5px;
            display: inline-block;
        }

        .main-login-form {
            position: relative;
        }

        .login-form-1 .form-control {
            border: 0;
            box-shadow: 0 0 0;
            border-radius: 0;
            background: transparent;
            color: #555555;
            padding: 7px 0;
            font-weight: bold;
            height: auto;
        }

        .login-form-1 .form-control::-webkit-input-placeholder {
            color: #999999;
        }

        .login-form-1 .form-control:-moz-placeholder,
        .login-form-1 .form-control::-moz-placeholder,
        .login-form-1 .form-control:-ms-input-placeholder {
            color: #999999;
        }

        .login-form-1 .form-group {
            margin-bottom: 0;
            border-bottom: 2px solid #efefef;
            padding-right: 20px;
            position: relative;
        }

        .login-form-1 .form-group:last-child {
            border-bottom: 0;
        }

        .login-group {
            background: #ffffff;
            color: #999999;
            border-radius: 8px;
            padding: 10px 20px;
        }

        .login-group-checkbox {
            padding: 5px 0;
        }

        /*=== 5. Login Button ===*/
        .login-form-1 .login-button {
            position: absolute;
            right: -25px;
            top: 50%;
            background: #ffffff;
            color: #999999;
            padding: 11px 0;
            width: 50px;
            height: 50px;
            margin-top: -25px;
            border: 5px solid #efefef;
            border-radius: 50%;
            transition: all ease-in-out 500ms;
        }

        .login-form-1 .login-button:hover {
            color: #555555;
            transform: rotate(450deg);
        }

        .login-form-1 .login-button.clicked {
            color: #555555;
        }

        .login-form-1 .login-button.clicked:hover {
            transform: none;
        }

        .login-form-1 .login-button.clicked.success {
            color: #2ecc71;
        }

        .login-form-1 .login-button.clicked.error {
            color: #e74c3c;
        }

        /*=== 6. Form Invalid ===*/
        label.form-invalid {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 5;
            display: block;
            margin-top: -25px;
            padding: 7px 9px;
            background: #777777;
            color: #ffffff;
            border-radius: 5px;
            font-weight: bold;
            font-size: 11px;
        }

        label.form-invalid:after {
            top: 100%;
            right: 10px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: transparent;
            border-top-color: #777777;
            border-width: 6px;
        }

        /*=== 7. Form - Main Message ===*/
        .login-form-main-message {
            background: #ffffff;
            color: #999999;
            border-left: 3px solid transparent;
            border-radius: 3px;
            margin-bottom: 8px;
            font-weight: bold;
            height: 0;
            padding: 0 20px 0 17px;
            opacity: 0;
            transition: all ease-in-out 200ms;
        }

        .login-form-main-message.show {
            height: auto;
            opacity: 1;
            padding: 10px 20px 10px 17px;
        }

        .login-form-main-message.success {
            border-left-color: #2ecc71;
        }

        .login-form-main-message.error {
            border-left-color: #e74c3c;
        }

        /*=== 8. Custom Checkbox & Radio ===*/
        /* Base for label styling */
        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked,
        [type="radio"]:not(:checked),
        [type="radio"]:checked {
            position: absolute;
            left: -9999px;
        }

        [type="checkbox"]:not(:checked)+label,
        [type="checkbox"]:checked+label,
        [type="radio"]:not(:checked)+label,
        [type="radio"]:checked+label {
            position: relative;
            padding-left: 25px;
            padding-top: 1px;
            cursor: pointer;
        }

        /* checkbox aspect */
        [type="checkbox"]:not(:checked)+label:before,
        [type="checkbox"]:checked+label:before,
        [type="radio"]:not(:checked)+label:before,
        [type="radio"]:checked+label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 2px;
            width: 17px;
            height: 17px;
            border: 0px solid #aaa;
            background: #f0f0f0;
            border-radius: 3px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        /* checked mark aspect */
        [type="checkbox"]:not(:checked)+label:after,
        [type="checkbox"]:checked+label:after,
        [type="radio"]:not(:checked)+label:after,
        [type="radio"]:checked+label:after {
            position: absolute;
            color: #555555;
            transition: all .2s;
        }

        /* checked mark aspect changes */
        [type="checkbox"]:not(:checked)+label:after,
        [type="radio"]:not(:checked)+label:after {
            opacity: 0;
            transform: scale(0);
        }

        [type="checkbox"]:checked+label:after,
        [type="radio"]:checked+label:after {
            opacity: 1;
            transform: scale(1);
        }

        /* disabled checkbox */
        [type="checkbox"]:disabled:not(:checked)+label:before,
        [type="checkbox"]:disabled:checked+label:before,
        [type="radio"]:disabled:not(:checked)+label:before,
        [type="radio"]:disabled:checked+label:before {
            box-shadow: none;
            border-color: #8c8c8c;
            background-color: #878787;
        }

        [type="checkbox"]:disabled:checked+label:after,
        [type="radio"]:disabled:checked+label:after {
            color: #555555;
        }

        [type="checkbox"]:disabled+label,
        [type="radio"]:disabled+label {
            color: #8c8c8c;
        }

        /* accessibility */
        [type="checkbox"]:checked:focus+label:before,
        [type="checkbox"]:not(:checked):focus+label:before,
        [type="checkbox"]:checked:focus+label:before,
        [type="checkbox"]:not(:checked):focus+label:before {
            border: 1px dotted #f6f6f6;
        }

        /* hover style just for information */
        label:hover:before {
            border: 1px solid #f6f6f6 !important;
        }

        /*=== Customization ===*/
        /* radio aspect */
        [type="checkbox"]:not(:checked)+label:before,
        [type="checkbox"]:checked+label:before {
            border-radius: 3px;
        }

        [type="radio"]:not(:checked)+label:before,
        [type="radio"]:checked+label:before {
            border-radius: 35px;
        }

        /* selected mark aspect */
        [type="checkbox"]:not(:checked)+label:after,
        [type="checkbox"]:checked+label:after {
            content: '✔';
            top: 0;
            left: 2px;
            font-size: 14px;
        }

        [type="radio"]:not(:checked)+label:after,
        [type="radio"]:checked+label:after {
            content: '\2022';
            top: 0;
            left: 3px;
            font-size: 30px;
            line-height: 25px;
        }

        /*=== 9. Misc ===*/
        .logo {
            padding: 15px 0;
            font-size: 25px;
            color: #aaaaaa;
            font-weight: bold;
        }
    </style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
        (function($) {
            "use strict";

            // Options for Message
            //----------------------------------------------
            var options = {
                'btn-loading': '<i class="fa fa-spinner fa-pulse"></i>',
                'btn-success': '<i class="fa fa-check"></i>',
                'btn-error': '<i class="fa fa-remove"></i>',
                'msg-success': 'Mantap gan! Otw Redirecting...',
                'msg-error': 'Wrong login credentials!',
                'useAJAX': true,
            };

            // Login Form
            //----------------------------------------------
            // Validation
            $("#login-form").validate({
                rules: {
                    $username: "required",
                    $pas: "required",
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
                    window.location.href = "index.html";

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