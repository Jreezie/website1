<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="./home.css">
</head>
<body>
    <header>
        <div class="logo"><img src="./images/logo_11.png" alt=""></div>
        <a href="./reg.php" class="button">LOGIN/SIGNUP</a>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Rentals</a></li>
                <li><a href="#">Real Estates</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-banner" >
        <div class="banner">
        <h1>Find a home that doesnt hurt your pockets</h1>
        <p>Answer a few questions. We'll highlight homes that are fit your choices</p>
            <button >let's get started</button>
        </div>
    </div>
    <div class="container">
        <div class="property-card">
            <div class="fav1"><img src="./images/buya house.png" alt=""></div>
            <h1>Buy a House</h1>
            <br>
            <h2>Experience homes in a whole new way. Immersive photos & exclusive listings await.</h2>
        </div>
        <div class="property-card">
            <div class="fav1"><img src="./images/fav2.webp" alt=""></div>
            <h1>Rent you house</h1>
            <h2>Experience homes in a whole new way. Immersive photos & exclusive listings await.</h2>
        </div>
    <div class="property-card">
            <div class="fav1"><img src="./images/fav3..png" alt=""></div>
            <h1>Sell a House</h1>
            <h2>Experience homes in a whole new way. Immersive photos & exclusive listings await.</h2>
        </div>
    </div>
    
    
    <div class="about"><h1>About Crib Hunt's Recommendations</h1>
    <p>Recommendations are based on your location and search activity, such as the homes you've viewed and saved and the filters you've used. We use this information to bring similar homes to your attention, so you don't miss out.</p>
    </div>
    <br>
    <hr>
    <div class="lower-list">
        <ul>
            <li><a href="">Real estates</a></li>
            <li><a href="">Regions of operations</a>
            <ul>
                <li>Kampala</li>
                <li>Mbarara</li>
                <li>Bushenyi</li>
                <li>Fort Portal</li>
                <li>Kabale</li>
            </ul>
            </li>
            <li><a href="">About Us</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div> 


    <footer>
        <p>&copy; 2025 Crib-Hunt. All Rights Reserved.</p>
        <div class="social-icons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/your_fontawesome_key.js" crossorigin="anonymous"></script>
    
    <script>
        const footer = document.querySelector('footer');
        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                // Scrolling down
                footer.classList.add('hidden');
            } else {
                // Scrolling up
                footer.classList.remove('hidden');
            }
            lastScrollTop = scrollTop;
        });
    </script>
</body>
</html>
