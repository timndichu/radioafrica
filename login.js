



//login
const config =
    {
        apiKey: 'AIzaSyDGCErP9k-oNVYdIXPDtGXTZi3QTOs_wUg',
        authDomain: 'phpbase-3ffca.firebaseapp.com',
        projectId: 'phpbase-3ffca'
    };

// firebase.auth().onAuthStateChanged(user=>{
//
//     if(user){
//         console.log('user logged in: ', user)
//     }
//     else{
//         console.log('user logged out')
//     }
//
//
// });

 const loginForm = document.querySelector('#login-form');

loginForm.addEventListener('submit', (e) => {
 e.preventDefault();

    const email = loginForm['email'].value;
    const password = loginForm['password'].value;

    console.log(email, password);
    firebase.initializeApp(config);
    firebase.auth().signInWithEmailAndPassword(email, password)
        .then(cred => {
       // console.log(cred.user);

        if(email ==='admin@mombasa.com' && password ==='adminMomb') {
            window.location = './admin-map.php';
        }
            else if(email ==='admin@nairobi.com' && password ==='adminNai') {
                window.location = './admin-map.php';
            }
           else if(email ==='admin@eldoret.com' && password ==='adminEld') {
                window.location = './admin-map.php';
            }


           else firebase.auth().onAuthStateChanged(function(user) {
                // if (user) {
                    window.user = user;
                    console.log('logged in ', user);
                    window.location = './dailyreports.php';
                    console.log('logged in ', user);
              //  }
            });

        }).catch(
        function(error) {
            // Handle Errors here.

            var errorCode = error.code;
            var errorMessage = error.message;
            // ...
            // var AlertBox = function(id, option) {
            //     this.show = function(msg) {
            //
            //
            //             var alertArea = document.querySelector(id);
            //             var alertBox = document.createElement('DIV');
            //             var alertContent = document.createElement('DIV');
            //             var alertClose = document.createElement('A');
            //             var alertClass = this;
            //             alertContent.classList.add('alert-content');
            //             alertContent.innerText = msg;
            //             alertClose.classList.add('alert-close');
            //             alertClose.setAttribute('href', '#');
            //             alertBox.classList.add('alert-box');
            //             alertBox.appendChild(alertContent);
            //             if (!option.hideCloseButton || typeof option.hideCloseButton === 'undefined') {
            //                 alertBox.appendChild(alertClose);
            //             }
            //             alertArea.appendChild(alertBox);
            //             alertClose.addEventListener('click', function(event) {
            //                 event.preventDefault();
            //                 alertClass.hide(alertBox);
            //             });
            //             if (!option.persistent) {
            //                 var alertTimeout = setTimeout(function() {
            //                     alertClass.hide(alertBox);
            //                     clearTimeout(alertTimeout);
            //                 }, option.closeTime);
            //             }
            //
            //     };
            //
            //     this.hide = function(alertBox) {
            //         alertBox.classList.add('hide');
            //         var disperseTimeout = setTimeout(function() {
            //             alertBox.parentNode.removeChild(alertBox);
            //             clearTimeout(disperseTimeout);
            //         }, 500);
            //     };
            // };
            // var alertboxPersistent = new AlertBox('#alert-area', {
            //     closeTime: 5000,
            //     persistent: true,
            //     hideCloseButton: false
            // });
            //
            //     alertboxPersistent.show(alertMessageBox.value);
            //     alertMessageBox.value = errorMessage;

            console.log(errorMessage, errorCode);
        }
    )
    ;
    // firebase.auth().onAuthStateChanged(user => {
    //     if(user) {
    //         //After successful login, user will be redirected to home.html
    //     }
    // });

});

//logout
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) =>{
    e.preventDefault();
    firebase.auth().signOut();
});