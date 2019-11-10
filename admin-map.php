<?php
//
//namespace Google\Cloud\Samples\Firestore;
//
//
//
//require __DIR__.'/vendor/autoload.php';




include_once 'header.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>

<div id="map"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
   // const { GeoCollectionReference, GeoFirestore, GeoQuery, GeoQuerySnapshot } = require('geofirestore');
   // const firebase = require("firebase/firebase-firestore");
    // Required for side-effects
    //require("firebase/firestore");
 //  import {LatLng} from "@firebase/firestore/dist/src/protos/firestore_proto_api";

  // import {ActionCodeInfo as documentSnapshot} from "firebase";

   firebase.initializeApp({
       apiKey: 'AIzaSyDGCErP9k-oNVYdIXPDtGXTZi3QTOs_wUg',
       authDomain: 'phpbase-3ffca.firebaseapp.com',
       projectId: 'phpbase-3ffca'
   });

   const db = firebase.firestore();
   db.settings({timestampsInSnapshots: true});




    var map;
    var marker;
    var infowindow;
    var green_icon =  'http://maps.google.com/mapfiles/ms/icons/green-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;




    function initMap() {

        var options = {
            zoom: 8,
            center:  {lat: 1.2921, lng: 36.8219}
        };

        var map = new google.maps.Map(document.getElementById('map'),options);


        function addMarker(coords, icon, content, animation){
            var marker = new google.maps.Marker({
                position:  coords,

                map: map,
                icon: icon,
                // IF THERE'S AN ERROR, BOUNCE IT
                animation: animation
            });

            var infoWindow = new google.maps.InfoWindow({
                content: content

            });

            marker.addListener('click', function() {
                infoWindow.open(map,marker);
            });
        }
        db.collection('Stations').get().then((snapshot) => {

            // var data = snapshot.data();
            snapshot.docs.forEach(function(child){
            var name_loc = child.id;
            var loc = child.data().marker;

            var ups = child.data().UPSError;
                var upsDesc = child.data().UPSDesc;
            var trans = child.data().TransmitterError;
                var transDesc = child.data().TransDesc;
            
            if(ups === 'true' && trans ==='true'){
                addMarker(
                    {lat: loc.latitude, lng: loc.longitude },
                    'http://maps.google.com/mapfiles/ms/icons/red-dot.png', '' +
                    `<h1> ${name_loc}</h1>` + "<br/>" + '<h2> UPS Error: </h2> ' + upsDesc
                    + "<br/>" + '<h2> Transmitter Error: </h2>' + transDesc
                    , google.maps.Animation.BOUNCE
                );
            }


                if(ups === 'true' && trans ==='false'){
                    addMarker(
                        {lat: loc.latitude, lng: loc.longitude },
                        'http://maps.google.com/mapfiles/ms/icons/red-dot.png', '' +
                        `<h1> ${name_loc}</h1>` + "<br/>" + '<h2> UPS Error: </h2> ' + upsDesc

                        , google.maps.Animation.BOUNCE
                    );
                }

                if(ups === 'false' && trans ==='true'){
                    addMarker(
                        {lat: loc.latitude, lng: loc.longitude },
                        'http://maps.google.com/mapfiles/ms/icons/red-dot.png', '' +
                        `<h1> ${name_loc}</h1>`
                        + "<br/>" + '<h2> Transmitter Error: </h2>' + transDesc
                        , google.maps.Animation.BOUNCE
                    );
                }


                if(ups === 'false' && trans ==='false'){
                    addMarker(
                        {lat: loc.latitude, lng: loc.longitude },
                        'http://maps.google.com/mapfiles/ms/icons/green-dot.png', '' +
                        `<h1> ${name_loc}</h1>` +  '<h2> Running well </h2>'

                    );
                }
                console.log(child.id, child.data());
            });

   })
   }





    // function downloadUrl(url, callback) {
    //     var request = window.ActiveXObject ?
    //         new ActiveXObject('Microsoft.XMLHTTP') :
    //         new XMLHttpRequest;
    //
    //     request.onreadystatechange = function() {
    //         if (request.readyState === 4) {
    //             callback(request.responseText, request.status);
    //         }
    //     };
    //
    //     request.open('GET', url, true);
    //     request.send(null);
    // }


</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA2FJ2acTYSPZTnjzL4bV5MJxxTY3xoLJ8&callback=initMap">
</script>