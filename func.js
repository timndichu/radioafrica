
const config =
    {
        apiKey: 'AIzaSyDGCErP9k-oNVYdIXPDtGXTZi3QTOs_wUg',
        authDomain: 'phpbase-3ffca.firebaseapp.com',
        projectId: 'phpbase-3ffca'
    };
//

//




const reportForm = document.querySelector('#daily-reports');



reportForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const forward = reportForm['forward'].value;
    const reflected = reportForm['reflected'].value;
    const upserror = reportForm['ups-switch'].value;
    const transerror = reportForm['trans-switch'].value;
    const transDesc = reportForm['transDesc'].value;
    const upsDesc = reportForm['upsDesc'].value;


    console.log(forward, reflected, upserror, transerror, transDesc, upsDesc);
    firebase.initializeApp(config);
    const db = firebase.firestore();
    db.settings({timestampsInSnapshots: true});
    firebase.auth().onAuthStateChanged(user => { 
         if(user) {
      console.log(user.uid); 
      console.log(user.email);

      //getting data
       db.collection('Stations').where('userId', "==", user.uid).get().then(function(querySnapshot) {
                 querySnapshot.forEach(function (doc) {
                     doc.ref.update(
                         {
                                          "ForwardPower": forward,
                                          "ReflectedPower": reflected,
                                          "TransDesc": transDesc,
                                          "TransmitterError": transerror,
                                          "UPSError" : upserror,
                                          "UPSDesc": upsDesc}
                     );
                     console.log(doc.id, " => ", doc.data());
                 });
             }).catch(function(error) {
                 console.log("Error getting documents: ", error);
             });

            //.update({
             //                  "ForwardPower": forward,
             //                  "ReflectedPower": reflected,
             //                  "TransDesc": transDesc,
             //                  "TransmitterError": transerror,
             //                  "UPSError" : upserror,
             //                  "UPSDesc": upsDesc})

      }
      else{

      }
});



});





function myFunction() {
    // Get the checkbox


    var checkBox = document.getElementById("ups-switch");
    // Get the output text


    var upsdiv = document.getElementById("ups-div");

    // If the checkbox is checked, display the output text
    if (checkBox.checked === true){
        upsdiv.style.display = "block";
        $('#ups-switch').change(function(){

            cb = $(this);
            cb.val(cb.prop('checked'));


        });

    } else {
        upsdiv.style.display = "none";

    }



}


function myFunction2() {
    // Get the checkbox
    var checkBox2 = document.getElementById("trans-switch");
    // Get the output text
    var transdiv = document.getElementById("trans-div");

    // If the checkbox is checked, display the output text
    if (checkBox2.checked === true){
        transdiv.style.display = "block";
        $('#trans-switch').change(function(){

            cb = $(this);
            cb.val(cb.prop('checked'));


        });
    } else {
        transdiv.style.display = "none";
    }



}




//signup



