<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Harvest</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
    position: relative;
    background-color: rgb(96, 226, 129);
    color: white;
    text-align: center;
    font-family: 'Signika', sans-serif; /* Use Signika font for the main header */
    text-shadow: 10px 10px 12px rgba(0, 0, 0, 0.5); /* Add a black stroke */
}



        header img {
            width: 100%;
            max-height: 400px; /* Adjust this value as needed */
            object-fit: cover;
        }

        header .title-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            font-weight: bold;
        }
      nav {
        background-color: rgb(96, 226, 129);
        overflow: hidden;
        font-family: 'Signika', sans-serif;
        display: flex;
        align-items: center;
        padding: 10px 20px; /* Add padding for spacing */
    }

    .logo {
        max-height: 50px; /* Set the maximum height for your logo */
        margin-right: 20px; /* Adjust the right margin for spacing between logo and links */
    }

    .nav-links {
        display: flex;
        justify-content: flex-end; /* Align the navigation links to the right */
        gap: 10px; /* Adjust the gap for spacing between links */
    }

nav a {
    float: left;
    display: block;
    color: rgb(2, 39, 10);
    text-align: center;
    font-weight: bold;
    margin-right: 10px;
    padding: 14px 16px;
    text-decoration: none;
    transition: background-color 0.3s;
    font-family: 'Signika', sans-serif; /* Use Signika font for the links */
}
nav a:last-child {
        margin-right: 0; /* Remove the right margin for the last link */
    }

nav a:hover {
    background-color: #169b11;
    color: black;
}


        section {
            padding: 20px;
            max-width: 2000px; /* Adjust this value as needed */
            margin: 100 auto; /* Center content */
        }
        section h2 {
        text-align: center;
        margin-bottom: 20px; /* Add some bottom margin for spacing */
        }
        /* ... previous styles ... */

        section {
        padding: 20px;
        max-width: 2000px; /* Adjust this value as needed */
        margin: 100 auto; /* Center content */
        }

        section h2 {
    text-align: center;
    margin-bottom: 20px;
    font-family: 'Signika', sans-serif; /* Use Signika font */
    color: rgb(2, 39, 10) /* Change the color to your desired color (e.g., teal) */
}


        /* ... remaining styles ... */


        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-auto-rows: 280px; /* Set a fixed height for each row */
            gap: 30px; /* Increased gap between images */
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 10px;
            margin: 0;
            font-size: 14px;
        }

        .gallery-item:hover {
            transform: scale(1.1);
        }
    
        .gallery2 {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(600px, 1fr));
            grid-auto-rows: 300px; /* Set a fixed height for each row */
            gap: 30px; /* Increased gap between images */
        }

        .gallery2-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .gallery2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .gallery2-paragraph {
    font-weight: bold;
    text-align: justify;
    font-family: 'Signika', sans-serif; /* Use Signika font */
    color: rgb(9, 104, 29); /* Ash color (gray) */
}

.gallery3 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin-top: 50px;
}

.gallery3-item {
    width: 220px; /* Set a fixed width for each item */
    height: 220px;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.gallery3-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}


        .gallery3-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 10px;
            margin: 0;
            font-size: 14px;
        }

       
        
        footer {
            background-color:rgb(96, 226, 129);
            color: black;
            text-align: center;
            font-weight: bold;
            padding: 20px; /* Adjust the padding as needed */
            width: 100%;
            box-sizing: border-box; /* Include padding and border in the total width */
        }

        footer nav {
            margin-top: 10px;
        }

        footer a {
            color: rgb(2, 39, 10);
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
        }

        footer a:hover {
            text-decoration: none;
        }

        footer .social-icons {
            margin-top: 10px;
        }

        footer .social-icons a {
            display: inline-block;
            margin: 0 10px;
            color: rgb(2, 39, 10);
            font-size: 24px;
        }

        /* Responsive Design */
        @media screen and (max-width: 600px) {
            nav a {
                float: none;
                width: 100%;
                text-align: left;
            }

            section {
                max-width: 100%; /* Full width on small screens */
            }
        }
    </style>
</head>
<body>

<header>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Signika:wght@400;700&display=swap">
    <img src="images/index/main.png" alt="Your Website Logo">
    <div class="title-text">Eco Harvest</div>
</header>

<nav>
    <img src="images/index/logo.png" alt="Your Logo" class="logo">

    <a href="index.php">Home</a>
    <a href="about.html">About</a>
    <a href="Blog.html">Blog</a>
    <a href="contact.html">Contact</a>
    <a href="events.html">Events</a>
    <a href="services.html">Services</a>
    <a href="farm.html">Farm</a>
    <a href="weather.html">Weather</a>
    <a href="map.html">Map</a>
    <a href="schedule.html">Schedule</a>
    <a href="gallery.html">Gallery</a>
    <a href="flogin.php">Farmer</a>
    <a href="ologin.php">Officer</a>
    <a href="alogin.php">Admin</a>
    
</nav>

<section>
    <h2>Discover the Goodness of Our Fresh and Healthy Foods</h2>
    

    <div class="gallery">
        <div class="gallery-item">
            <a href="vegitables.html">
            <img src="images/index/vegitabels.jpg" alt="Image 1"></a>
            <p class="gallery-text">Vegitabels</p>
        </div>
        <div class="gallery-item">
            <a href="fruits.html">
            <img src="images/index/fruits.jpg" alt="Image 2"></a>
            <p class="gallery-text">Fruits</p>
        </div>
        <div class="gallery-item">
            <a href="dairypro.html">
            <img src="images/index/milk.jpg" alt="Image 3"></a>
            <p class="gallery-text">Dairy Products</p>
        </div>
        <div class="gallery-item">
            <a href="fish.html">
            <img src="images/index/fish.jpg" alt="Image 4"></a>
            <p class="gallery-text">Fish & Meat</p>
        </div>
        <div class="gallery-item">
            <a href="beans.html">
            <img src="images/index/seeds.jpg" alt="Image 5"></a>
            <p class="gallery-text">Beans</p>
        </div>
        
        <!-- Add more images as needed -->
    </div>
     </section>
    <section>
        <h2> Empowering Farmers, Uplifting Dairy Production</h2>
    
        <div class="gallery2">
            <p class="gallery2-paragraph">In a visionary effort to bolster domestic dairy production
                , our recent event, aptly titled "Cows for Progress: Cultivating Prosperity in Agriculture,
                " unfolded as a beacon of hope for farmers in our community. The primary aim was to gift farmers
                 with robust and high-yielding cows, providing them not only with a valuable asset but also a pathway
                  to self-reliance and economic growth. This initiative goes beyond the mere act of gifting livestock; 
                  it symbolizes a commitment to sustainable farming practices and responsible animal husbandry. Alongside 
                  the generous donation of cows, farmers received comprehensive training and ongoing support to empower them 
                  with modern dairy farming techniques. The event is a testament to our dedication to fostering a close-knit 
                  agricultural community and catalyzing a positive impact on domestic dairy production. Through "Cows for Progress,
                  " we envision a future where thriving farmers contribute to a robust and sustainable dairy industry,
                 creating a ripple effect of prosperity within our local communities.</p>

            <div class="gallery2-item">
                <img src="images/index/2.jpg" alt="Image 1">
                <p class="gallery2-text">Description 1</p>
            </div>
            <!-- Add more gallery2-items as needed -->
        </div>
    </section>
    <section>
        <h2>Empowering Fruit Farmers through Financial Support and Crop Diversity Initiatives</h2>
    
        <div class="gallery2">
            <p class="gallery2-paragraph">In an effort to fortify the orchards and broaden the horizons of fruit farmers,
                 our recent event, titled "Fruition Funding: Cultivating Diversity in Fruit Farms," unfolded as a pioneering
                  venture. The event centered around providing financial assistance to fruit farmers through strategic loans,
                   empowering them to invest in their crops and expand their agricultural ventures. Beyond monetary support, 
                   the initiative also introduced farmers to a diverse range of new fruit varieties, encouraging the cultivation
                    of unique and market-savvy crops. This event is a testament to our commitment to the agricultural community's 
                    prosperity, as we strive to create an environment where fruit farmers not only receive financial aid but also 
                    gain access to innovative practices that diversify and elevate their produce. "Fruition Funding" marks a 
                    significant step towards a more resilient and dynamic future for fruit farming, ensuring a bountiful harvest
                     and sustainable growth for farmers and their lands.</p>
            <div class="gallery2-item">
                <img src="images/index/1.jpg" alt="Image 1">
                <p class="gallery2-text">Description 1</p>
            </div>
            <!-- Add more gallery2-items as needed -->
        </div>
    </section>
    <section>
        <h2>A Fertilizer Donation Event Empowering Farmers for Sustainable Agriculture</h2>
    
        <div class="gallery2">
            <p class="gallery2-paragraph">In a heartfelt initiative aimed at uplifting the livelihoods of underprivileged
                 farmers, our recent event, "Fertile Fields: A Harvest of Hope," focused on donating essential fertilizers
                  to those in need. The core objective was to empower impoverished farmers by providing them with the key 
                  resources to enhance crop yields and secure a more sustainable future. The event not only involved the 
                  distribution of quality fertilizers but also featured comprehensive guidance sessions on optimal fertilizer
                   utilization. Our team of agricultural experts offered valuable advice and insights on the judicious application
                    of fertilizers, ensuring that farmers maximize their benefits while minimizing environmental impact. 
                    "Fertile Fields" stands as a beacon of support for disadvantaged farmers, fostering agricultural 
                resilience and cultivating a shared vision of prosperity through informed and sustainable farming practices.</p>
            <div class="gallery2-item">
                <img src="images/index/event 2.jpg" alt="Image 1">
                <p class="gallery2-text">Description 1</p>
            </div>
            <!-- Add more gallery2-items as needed -->
        </div>
    </section>
    

    <section>
        <h2>  Unveiling the Mosaic of Talents in Eco Harvest </h2>
        
    
        <div class="gallery3">
            <div class="gallery3-item">
                <img src="images/index/CEO.jpg" alt="Image 1"></a>
                <p class="gallery-text">Roy Harper (CEO)</p>
            </div>
            <div class="gallery3-item">
                <img src="images/index/CMO.jpg" alt="Image 2">
                <p class="gallery3-text">Ema Katlin (CMO)</p>
            </div>
            <div class="gallery3-item">
                <img src="images/index/HRM.jpg" alt="Image 3">
                <p class="gallery3-text">Oliver Marsh (HRM)</p>
            </div>
            <div class="gallery3-item">
                <img src="images/index/VP.jpg" alt="Image 3">
                <p class="gallery3-text">Laural Lance (VP)</p>
            </div>
        </div>
         </section>


    


<footer>
    <nav>
    <a href="index.php">Home</a>
    <a href="about.html">About</a>
    <a href="Blog.html">Blog</a>
    <a href="contact.html">Contact</a>
    <a href="events.html">Events</a>
    <a href="services.html">Services</a>
    <a href="farm.html">Farm</a>
    <a href="weather.html">Weather</a>
    <a href="map.html">Map</a>
    <a href="schedule.html">Schedule</a>
    <a href="gallery.html">Gallery</a>
    <a href="flogin.php">Farmer</a>
    <a href="ologin.php">Officer</a>
    <a href="alogin.php">Admin</a>
    </nav>

    <div class="social-icons">
        <a href="#" target="_blank">Facebook</a>
        <a href="#" target="_blank">Twitter</a>
        <a href="#" target="_blank">Instagram</a>
    </div>
    <p>&copy; 2024 Your Website. All rights reserved.</p>
</footer>

</body>
</html>
