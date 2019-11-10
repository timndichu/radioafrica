<?php
//
//namespace Google\Cloud\Samples\Firestore;
//
//
//require __DIR__.'/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Contact Form Script With Validation - reusable form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <link rel="stylesheet" href="style.css" >


    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="style2.css" />


<!--    <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>-->
<!--    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />-->




</head>
<body>



<!--<script>-->
<!--    var uiConfig = {-->
<!--        callbacks: {-->
<!--            signInSuccessWithAuthResult: function(authResult, redirectUrl) {-->
<!--                // User successfully signed in.-->
<!--                // Return type determines whether we continue the redirect automatically-->
<!--                // or whether we leave that to developer to handle.-->
<!--                return true;-->
<!--            },-->
<!--            uiShown: function() {-->
<!--                // The widget is rendered.-->
<!--                // Hide the loader.-->
<!--              //  document.getElementById('loader').style.display = 'none';-->
<!--            }-->
<!--        },-->
<!--        // Will use popup for IDP Providers sign-in flow instead of the default, redirect.-->
<!--        signInFlow: 'popup',-->
<!--        signInSuccessUrl: 'localhost:3000/phpbase/formpage.php',-->
<!--        signInOptions: [-->
<!--            // Leave the lines as is for the providers you want to offer your users.-->
<!---->
<!--            firebase.auth.EmailAuthProvider.PROVIDER_ID,-->
<!---->
<!--        ],-->
<!---->
<!--    };-->
<!---->
<!---->
<!---->
<!--</script>-->


<div id="login_div" class="login-page">
  <div class="form">


    <form id="login-form" class="login-form" >
        <label>
            <input name="email" id="email" type="text" placeholder="email" required/>
        </label>
        <label>
            <input name="password" id="password" type="password" placeholder="password" required/>
        </label>
        <button id="loginB">login</button>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
        <button id="logout">LOG OUT</button>
    </form>
  </div>
</div>

<div id="alert-area" class="alert-area"></div>


<script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-auth.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>

<script src="login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




</body>
</html>