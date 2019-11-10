
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
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >





</head>
<body >


    <div class="login-page">
        <div class="form">


            <form id = "sign-up" class="login-form" >
<!--        <label>-->
<!--            <input id = "username" name="username" type="text" placeholder="name" required/>-->
<!--        </label>-->

        <label>
            <input id="email" name="email" type="text" placeholder="email address" required/>
        </label>
                <label>
                    <input  id="password" name= "password" type="password" placeholder="password" required/>
                </label>
        <button  id="create" name="create">create</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>

  </div>
    </div>


    <script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-auth.js"></script>
    <script defer src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>

    <script>
        //  const firebase = require("firebase/firebase-auth.js");


        const auth = firebase.auth();
    </script>


    <script src="signup.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




</body>

</html>