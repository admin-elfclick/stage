<?php require('./head.php') ?>

<body>
    <?php require('./components/Header/navbar/navbar.php'); ?>
    <?php require('./components/Header/header.php'); ?>
    <?php require('./components/Homepage/homepage.php') ?>
    <?php require('./components/Footer/Footer.php') ?>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->

    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyD8_4pjocuE4Ty8RC4lZCPKhMks4cpz2Vc",
        authDomain: "elfclicks-6f3b2.firebaseapp.com",
        projectId: "elfclicks-6f3b2",
        storageBucket: "elfclicks-6f3b2.appspot.com",
        messagingSenderId: "500940738969",
        appId: "1:500940738969:web:30f948a606572015c30308"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    </script>
</body>

</html>