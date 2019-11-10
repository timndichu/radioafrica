//signup
const config =
    {
        apiKey: 'AIzaSyDGCErP9k-oNVYdIXPDtGXTZi3QTOs_wUg',
        authDomain: 'phpbase-3ffca.firebaseapp.com',
        projectId: 'phpbase-3ffca'
    };


 const signupForm = document.querySelector('#sign-up');

signupForm.addEventListener('submit', (e) => {
 e.preventDefault();

    const email = signupForm['email'].value;
    const password = signupForm['password'].value;

    console.log(email, password);
    firebase.initializeApp(config);
    firebase.auth().createUserWithEmailAndPassword(email, password)
        .then(cred => {
        console.log(cred.user);
            window.location = './formpage.php';
    }).catch(
        function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // ...
            console.log(errorMessage, errorCode);
        }
    )
    ;

    // firebase.auth().onAuthStateChanged(user => {
    //     if(user) {
    //         window.location = '/formpage.php'; //After successful login, user will be redirected to home.html
    //     }
    // });
});