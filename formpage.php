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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-app.js"></script>

        <script src="script.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-analytics.js"></script>

        <script>
            // Your web app's Firebase configuration
            firebase.initializeApp({
                apiKey: 'AIzaSyDGCErP9k-oNVYdIXPDtGXTZi3QTOs_wUg',
                authDomain: 'phpbase-3ffca.firebaseapp.com',
                projectId: 'phpbase-3ffca'
            });

            const db = firebase.firestore();
            db.settings({timestampsInSnapshots: true});
            // Initialize Firebase

        </script>
<!--        <script src="form.js"></script>-->
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>DAILY REPORTS</h2>
<!--                    <form  action="dailyreports.php"  method="post" id="reused_form">-->
                    <form  action="dailyreports.php" >
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> FORWARD POWER:</label>
                                <label for="forward"></label><input type="text" class="form-control" id="forward" name="forward" maxlength="50" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> REFLECTED POWER:</label>
                                <label for="reflected"></label><input type="text" class="form-control" id="reflected" name="reflected" maxlength="50" required>
                            </div>
                        </div>
                        <section>
                            <h3>ERRORS</h3>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <div>
                                        <label for="element_4"> UPS error:   </label><select class="element select medium" id="element_4" name="element_4" required>
                                            <option value="" selected="selected"></option>
                                            <option value="1" >True</option>
                                            <option value="2" >False</option>


                                        </select>
                                    </div>
                                </div>

                            </div>
                        </section>


                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" onclick="sendreport()" name="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Send Report </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>

    <script>
        document.getElementById("login").onclick =  function sendreport() {

        }


    </script>


    </body>
</html>