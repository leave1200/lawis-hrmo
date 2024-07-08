<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Forget Password</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
    <style>
        .alert {
            display: none;
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: 5px;
            animation: slidein 0.5s, fadeout 5s 2.5s;
        }

        @keyframes slidein {
            from { top: -100px; opacity: 0; }
            to { top: 0; opacity: 1; }
        }

        @keyframes fadeout {
            from { opacity: 1; }
            to { opacity: 0; }
        }
    </style>
</head>

<body>
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="<?php echo base_url(); ?>login">
                    <img src="<?php echo base_url(); ?>assets/images/background/mad1.png" alt="" />
                </a>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="<?php echo base_url(); ?>vendors/images/forgot-password.png" alt="" />
                </div>
                <div class="col-md-6">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Forgot Password</h2>
                        </div>
                        <h6 class="mb-20">
                            Enter your email address to reset your password
                        </h6>
                        <?php echo form_open('login/forgot_password2'); ?>
                            <div class="input-group custom">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <div class="input-group mb-0">
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="font-16 weight-600 text-center" data-color="#707373">
                                        OR
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="<?php echo base_url(); ?>login">Login</a>
                                    </div>
                                </div>
                            </div>
                        <?php echo form_close(); ?>

                        <?php if($this->session->flashdata('feedback')): ?>
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('feedback'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="<?php echo base_url(); ?>vendors/scripts/core.js"></script>
    <script src="<?php echo base_url(); ?>vendors/scripts/script.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/scripts/process.js"></script>
    <script src="<?php echo base_url(); ?>vendors/scripts/layout-settings.js"></script>

    <script>
        // JavaScript function to show an animated alert
        function showAnimatedAlert(message) {
            var alertDiv = document.getElementById('alert');
            alertDiv.innerHTML = message;
            alertDiv.style.display = 'block';
        }

        // Call showAnimatedAlert function when the page loads
        window.onload = function() {
            var response = {"message": "A new password has been sent to your email."};
            showAnimatedAlert(response.message);
        };
    </script>
</body>
</html>
