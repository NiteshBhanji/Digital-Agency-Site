<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Sthayuu</title>

    <?php include "allcss.php"; ?>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body class="page page-id-004 contact-page">

    <?php
    // Get data from form 
    if (!empty($_POST)) {
        $name = $_POST['userName'];
        $email = $_POST['userEmail'];
        $company = $_POST['userCompany'];
        $project = $_POST['userProject'];

        $to = "hello@sthayuudesign.co.uk";
        $subject = "Form via Contact Page.";

        // The following text will be sent
        // Name = user entered name
        // Email = user entered email
        // Message = user entered message
        $txt = "Name = " . $name . "\r\n  Email = "
            . $email . "\r\n Company =" . $company . "\r\n Project =" . $project;

        $headers = "From: abhishek@Sthayuudesign.co.uk";
        if ($email != NULL) {
            mail($to, $subject, $txt, $headers);
        }
    }

    // Redirect to
    //header("Location:contact.php");
    ?>





    <!--Header Starts Here-->
    <?php include "header.php"; ?>

    <!--Main Content Starts Here-->
    <div id="luxy">

        <main>
            <section class="container hero-section">
                <div class="inner-container block-container">
                    <div class="content-container">
                        <div class="flex-row">
                            <div class="column column-one">
                                <div class="mail-box">
                                    <p class="title-text">DROP US A LINE</p>
                                    <a href="mailto:hello@sthayuu.design">
                                        <p class="content-text mail-text">hello@sthayuu.design</p>
                                    </a>
                                </div>
                                <div class="address-box hide-tablet hide-mobile">
                                    <p class="title-text">VISIT US</p>
                                    <p class="content-text address-text">THE COLONY<br>ALTRINCHAM ROAD<br>WILMSLOW, CHESHIRE<br>SK9 4LY</p>
                                </div>

                            </div>
                            <div class="column column-two">
                                <h2>WE’D <span>LOVE</span> TO <br>HEAR FROM YOU.</h2>
                                <p class="desc">Whether you want to tell us about a project, join our team, or just say hi, write to us! We’d love to hear from you.</p>
                                <div class="form-box">
                                    <form name="frmContact" id="" method="post" action="contact.php" enctype="multipart/form-data" onsubmit="return validateContactForm()">

                                        <span id="userName-info" class="info"></span><br />
                                        <input type="text" name="userName" id="userName" placeholder="Name*">

                                        <span id="userEmail-info" class="info"></span><br />
                                        <input type="email" name="userEmail" id="userEmail" placeholder="Email Address*">

                                        <span id="userCompany-info" class="info"></span><br />
                                        <input type="text" name="userCompany" id="userCompany" placeholder="Company">

                                        <span id="userProject-info" class="info"></span><br />
                                        <textarea name="userProject" id="userProject" cols="30" rows="1" placeholder="Tell us about your project"></textarea>

                                        <div class="terms-validation-box">
                                            <p>I have read and agree with <a href="privacy-policy.php"><u>Vayuu’s privacy policy.</u></a></p>
                                            <div class="btn-wrap-box">
                                                <input type="radio" id="termsRadioN" name="termsr" value="no" checked>
                                                <label for="termsRadioN">No</label>
                                                <input type="radio" id="termsRadioY" name="termsr" value="yes">
                                                <label for="termsRadioY">Yes</label>
                                            </div>
                                        </div>

                                        <div class="submit-box">
                                            <p>This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy?hl=en-GB"><u>Privacy Policy</u></a> and <a href="terms.php"><u>Terms of Service</u></a> apply.</p>
                                            <input type="submit" value="Send">

                                        </div>

                                        <div id="statusMessage">
                                            <?php if (!empty($message)) { ?>
                                                <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                                            <?php } ?>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!--Footer Starts Here-->
        <?php include "footer.php"; ?>
    </div>




    <!--Global Hover Cursor starts Here-->
    <?php include "cursor.php"; ?>





    <!--Script Starts Here-->
    <?php include "allscripts.php"; ?>


    <!--Form Validation Script-->
    <script>
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var userCompany = $("#userCompany").val();
            var userProject = $("#userProject").val();

            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border-bottom', '0.5px solid #e66262');
                valid = false;
            } else {
                $("#userName").css('border-bottom', '0.5px solid #323232');
            }

            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border-bottom', '0.5px solid #e66262');
                valid = false;
            } else {
                $("#userEmail").css('border-bottom', '0.5px solid #323232');
            }

            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border-bottom', '0.5px solid #e66262');
                valid = false;
            } else {
                $("#userEmail").css('border-bottom', '0.5px solid #323232');
            }

            if (userCompany == "") {
                $("#userCompany-info").html("Required.");
                $("#userCompany").css('border-bottom', '0.5px solid #e66262');
                valid = false;
            } else {
                $("#userCompany").css('border-bottom', '0.5px solid #323232');
            }

            if (userProject == "") {
                $("#userProject-info").html("Required.");
                $("#userProject").css('border-bottom', '0.5px solid #e66262');
                valid = false;
            } else {
                $("#userProject").css('bborder-bottom', '0.5px solid #323232');
            }

            if (termsRadioN == "Yes") {
                $("#userProject-info").html("Required.");
                $("#termsRadio").css('border-bottom', '0.5px solid #e66262');
                valid = false;
            } else {
                $("#userProject").css('bborder-bottom', '0.5px solid #323232');
            }

            if (document.getElementById('termsRadioN').checked == true) {
                alert("Please Accept the Sthayuu's Privacy Policy. ");
                valid = false;
            }

            return valid;
        }
    </script>


</body>

</html>