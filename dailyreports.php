<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">

    <div class="wrap-contact100">
        <form id="daily-reports" class="contact100-form validate-form">
				<span class="contact100-form-title">
					DAILY REPORTS
				</span>

            <div class="wrap-input100 validate-input" data-validate="Please input Forward Power">

                <input id="forward" class="input100" type="text" name="name" placeholder="Forward Power">
                <span class="focus-input100"></span>
            </div>

            <div style="margin-bottom:40px" class="wrap-input100 validate-input" data-validate = "Please input Reflected Power">
                <input id="reflected" class="input100" type="text" name="reflected" placeholder="Reflected Power">
                <span class="focus-input100"></span>
            </div>
    <section>
       	<span class="contact100-form-title">
					ERRORS
				</span>


        <div class="row">
            <div class="col-sm-6 form-group">
                <h4>UPS Error</h4>

                <div style="margin:20px;" class="onoffswitch">
                    <input type="checkbox" value="false" name="onoffswitch" class="onoffswitch-checkbox" id="ups-switch" onclick="myFunction()">
                    <label class="onoffswitch-label" for="ups-switch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>

                <div id="ups-div" style="display:none">
                <h5>What is wrong with UPS?</h5>

                <div  style=" margin:40px auto;[B]padding:20px 0;[/B]" class="wrap-input100 validate-input" >
                    <label>
                        <textarea id="upsDesc" class="input100" name="message" placeholder="Your Message"></textarea>
                    </label>
                    <span class="focus-input100"></span>
                </div>
                </div>
            </div>
            <div class="col-sm-6 form-group">
                <h4>Transmitter Error</h4>
                <div style="margin:20px;" class="onoffswitch">
                    <input type="checkbox" value="false" name="onoffswitch" class="onoffswitch-checkbox" id="trans-switch" onclick="myFunction2()">
                    <label class="onoffswitch-label" for="trans-switch">
                        <span  class="onoffswitch-inner"></span>
                        <span  class="onoffswitch-switch"></span>
                    </label>


                </div>

                <div id="trans-div" style="display:none">
                <h5>What is wrong with Transmitter?</h5>

                <div style=" margin:20px auto;[B]padding:20px 0;[/B]" class="wrap-input100 validate-input" >
                    <label>
                        <textarea id="transDesc" class="input100" name="message" placeholder="Your Message"></textarea>
                    </label>
                    <span class="focus-input100"></span>
                </div>
                </div>

            </div>
        </div>





    </section>


            <div class="container-contact100-form-btn">
                <button type="submit"  class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Submit
						</span>
                </button>
            </div>
        </form>
    </div>



</div>



<div id="dropDownSelect1"></div>



<script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-auth.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>
<script src="func.js"></script>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

