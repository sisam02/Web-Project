
<?php
include("connection.php");

if(isset($_POST["username"])){
    $username = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $sql = "insert into `contactus`(`name`,`email`,`message`) values('$username','$email','$message')";
   
    $result = mysqli_query($conn,$sql);

    if($result== true){
        // echo"Data insertion succesfull";
    }

    else{
        echo"Failed to insert data";
    }
    $conn->close();
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find your dream home with our elegant real estate solutions.">
    <title>Real Estate</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script async
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>



</head>
<body>




    <!-- Header Section -->
    <header >
        <nav >
            <div class="logo">Green<span>Estate</span></div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#properties">Properties</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section with Location Search -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Find Your Dream Home</h1>
            <p>Discover the perfect place to call home with our trusted real estate solutions.</p>
            <div class="search-container">
                <input type="text" id="locationSearch" placeholder="Enter Location" />
                <select id="propertyTypeFilter">
                    <option value="all">All</option>
                    <option value="buy">Buy</option>
                    <option value="rent">Rent</option>
                </select>
                <!-- <button class="search-button" onclick="filterProperties()">Search</button> -->
                <a href="#properties"> <button class="search-button" onclick=" filterProperties()">Search</button></a>
            </div>
        </div>
        
        
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2>About Us</h2>
        <p>
            At <span style="color: #086e4b; font-weight: bold;">GreenEstate</span>, we bring over a decade of experience in connecting people with their dream homes. 
            With a reputation built on trust, transparency, and top-notch service, our platform ensures a seamless and personalized property search experience.
        </p>
        <p>
            Whether you're buying your first home, upgrading to your next, or investing in real estate, 
            we guide you through every step with unparalleled expertise and market insights.
        </p>
        <div class="experience-highlights">
            <div class="highlight">
                <i class="fas fa-home" style="color: #086e4b; font-size: 2rem;"></i>
                <h3>10+ Years of Excellence</h3>
                <p>Helping clients find properties that perfectly match their needs.</p>
            </div>
            <div class="highlight">
                <i class="fas fa-users" style="color: #086e4b; font-size: 2rem;"></i>
                <h3>5,000+ Happy Clients</h3>
                <p>Trusted by thousands of homeowners and investors worldwide.</p>
            </div>
            <div class="highlight">
                <i class="fas fa-map-marked-alt" style="color: #086e4b; font-size: 2rem;"></i>
                <h3>Global Reach</h3>
                <p>Extensive property listings from urban apartments to countryside estates.</p>
            </div>
        </div>
    </section>


    <!-- Added Review -->
<section id="reviews" class="reviews">
    <h2>What Our Clients Say</h2>
    <div class="review-cards">
        <div class="review-card">
            <p class="review-text">
                "GreenEstate made finding my dream home a breeze! The team was professional and attentive to all my needs."
            </p>
            <div class="review-author">
                <img src="assets/images/family1.jpg" alt="Client 1">
                <h4>Jane Doe</h4>
                <p>Home Buyer</p>
            </div>
        </div>
        <div class="review-card">
            <p class="review-text">
                "As a property investor, I appreciate the transparency and excellent service provided by GreenEstate."
            </p>
            <div class="review-author">
                <img src="assets/images/family2.jpg" alt="Client 2">
                <h4>John Smith</h4>
                <p>Investor</p>
            </div>
        </div>
        <div class="review-card">
            <p class="review-text">
                "Listing my property for rent was effortless, and I found tenants quickly thanks to GreenEstate."
            </p>
            <div class="review-author">
                <img src="assets/images/family3.jpg" alt="Client 3">
                <h4>Emily Clark</h4>
                <p>Landlord</p>
            </div>
        </div>
    </div>
</section>
    

    <!-- Properties Section -->
<section id="properties" class="properties">
    <h2>Featured Properties</h2>
    <div class="property-cards">
        <div class="card" data-type="buy" data-location="Beverly Hills, CA" data-lat="34.090009" data-lng="-118.406844">
            
            <img src="assets/images/property1.jpg" alt="Luxury Villa">
            <h3>Luxury Villa</h3>
            <p>Price: $500,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Beverly Hills, CA</p>
                <p><i class="fas fa-bed"></i> 4 Rooms</p>
                <p><i class="fas fa-bath"></i> 3 Bathrooms</p>
                
            </div>
            
        </div>


        <div class="card" data-type="rent" data-location="New York, NY">
            <img src="assets/images/property2.jpg" alt="Modern Apartment">
            <h3>Modern Apartment</h3>
            <p>Price: $3500/month </p>
            <span class="property-type">For Rent</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> New York, NY</p>
                <p><i class="fas fa-bed"></i> 2 Rooms</p>
                <p><i class="fas fa-bath"></i> 1 Bathroom</p>
            </div>
        </div>

        <div class="card" data-type="buy" data-location="Asheville, NC">
            <img src="assets/images/property3.jpg" alt="Cozy Cottage">
            <h3>Cozy Cottage</h3>
            <p>Price: $200,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Asheville, NC</p>
                <p><i class="fas fa-bed"></i> 3 Rooms</p>
                <p><i class="fas fa-bath"></i> 2 Bathrooms</p>
            </div>
        </div>

        <div class="card" data-type="buy" data-location="Napa Valley, CA">
            <img src="assets/images/property4.jpg" alt="Country Retreat">
            <h3>Country Retreat</h3>
            <p>Price: $300,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Napa Valley, CA</p>
                <p><i class="fas fa-bed"></i> 5 Rooms</p>
                <p><i class="fas fa-bath"></i> 4 Bathrooms</p>
            </div>
        </div>


        <div class="card" data-type="buy" data-location="Beverly Hills, CA">
            <img src="assets/images/propertyy1.jpg" alt="Green Grove Realty">
            <h3>Green Grove Realty</h3>
            <p>Price: $300,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Beverly Hills, CA</p>
                <p><i class="fas fa-bed"></i> 5 Rooms</p>
                <p><i class="fas fa-bath"></i> 4 Bathrooms</p>
            </div>
        </div>

        
        <div class="card" data-type="buy" data-location="Napa Valley, CA">
            <img src="assets/images/propertyy2.jpg" alt="Vista Luxe">
            <h3>Vista Luxe</h3>
            <p>Price: $400,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Napa Valley, CA</p>
                <p><i class="fas fa-bed"></i> 6 Rooms</p>
                <p><i class="fas fa-bath"></i> 5 Bathrooms</p>
            </div>
        </div>

        <div class="card" data-type="buy" data-location="Los Angeles, CA">
            <img src="assets/images/propertyy3.jpg" alt="Open Door Estates">
            <h3>Open Door Estates</h3>
            <p>Price: $300,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Los Angeles, CA</p>
                <p><i class="fas fa-bed"></i> 6 Rooms</p>
                <p><i class="fas fa-bath"></i> 4 Bathrooms</p>
            </div>
        </div>


        <div class="card" data-type="buy" data-location="Seattle, WA">
            <img src="assets/images/propertyy8.jpg" alt="LuxeLine Homes">
            <h3>LuxeLine Homes</h3>
            <p>Price: $400,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Seattle, WA</p>
                <p><i class="fas fa-bed"></i> 5 Rooms</p>
                <p><i class="fas fa-bath"></i> 4 Bathrooms</p>
            </div>
        </div>


        <div class="card" data-type="buy" data-location="Chicago, IL">
            <img src="assets/images/propertyy7.jpg" alt="Elite Estates">
            <h3>Elite Estates</h3>
            <p>Price: $400,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Chicago, ILS</p>
                <p><i class="fas fa-bed"></i> 5 Rooms</p>
                <p><i class="fas fa-bath"></i> 4 Bathrooms</p>
            </div>
        </div>

        <div class="card" data-type="buy" data-location="Nashville, TN">
            <img src="assets/images/new1.jpg" alt="Willow Creek Properties">
            <h3> Willow Creek Properties</h3>
            <p>Price: $500,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Nashville, TN</p>
                <p><i class="fas fa-bed"></i> 6 Rooms</p>
                <p><i class="fas fa-bath"></i> 5 Bathrooms</p>
            </div>
        </div>

        <div class="card" data-type="buy" data-location="Denver, CO">
            <img src="assets/images/new2.jpg" alt="Summit Living Realty">
            <h3>Summit Living Realty</h3>
            <p>Price: $800,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Denver, CO</p>
                <p><i class="fas fa-bed"></i> 7 Rooms</p>
                <p><i class="fas fa-bath"></i> 5 Bathrooms</p>
            </div>
        </div>


        <div class="card" data-type="buy" data-location="Miami, ML">
            <img src="assets/images/propertyy9.jpg" alt="Serene Heights Realty">
            <h3>Serene Heights Realty</h3>
            <p>Price: $400,000</p>
            <span class="property-type">For Sale</span> <!-- Badge or Label -->
            <div class="property-details">
                <p><i class="fas fa-map-marker-alt"></i> Miami, ML</p>
                <p><i class="fas fa-bed"></i> 5 Rooms</p>
                <p><i class="fas fa-bath"></i> 4 Bathrooms</p>
            </div>
        </div>

        
        <div class="card harayo1" data-type="rent" data-location="Chicago, IL">
                    <img src="assets/images/property5.jpg" alt="Urban Loft">
                    <h3>Urban Loft</h3>
                    <p>Price: $5000/month </p>
                    <span class="property-type">For Rent</span> <!-- Badge or Label -->
                    <div class="property-details">
                        <p><i class="fas fa-map-marker-alt"></i> Chicago, IL</p>
                        <p><i class="fas fa-bed"></i> 2 Rooms</p>
                        <p><i class="fas fa-bath"></i> 2 Bathrooms</p>
                    </div>
                </div>
                <div class="card harayo2" data-type="buy" data-location="Miami, FL">
                    <img src="assets/images/property6.jpg" alt="Seaside Escape">
                    <h3>Seaside Escape</h3>
                    <p>Price: $600,000</p>
                    <span class="property-type" >For Sale</span> <!-- Badge or Label -->
                    <div class="property-details">
                        <p><i class="fas fa-map-marker-alt"></i> Miami, FL</p>
                        <p><i class="fas fa-bed"></i> 4 Rooms</p>
                        <p><i class="fas fa-bath"></i> 3 Bathrooms</p>
                    </div>
                </div>      
                
                <div class="card harayo3" data-type="Rent" data-location="Miami, FL">
                    <img src="assets/images/property7.jpg" alt="Seaside Escape">
                    <h3>Luxury Apartment</h3>
                    <p>Price: $6000/month</p>
                    <span class="property-type" style='background-color:red;'>For Rent</span> <!-- Badge or Label -->
                    <div class="property-details">
                        <p><i class="fas fa-map-marker-alt"></i> Miami, FL</p>
                        <p><i class="fas fa-bed"></i> 4 Rooms</p>
                        <p><i class="fas fa-bath"></i> 3 Bathrooms</p>
                    </div>
                </div>

    </div>

    

        <div class="view-more">
            <button id="loadMoreBtn" class="btn-view-more">View More Properties</button>
        </div>
        
        <!-- <div id="moreProperties" style="display: none; "> -->
            
           <!-- <div class="property-cards">                 -->
                  
            <!-- </div> -->

        <!-- </div> -->
        
    
</section>



<!-- Map Modal -->
<div id="mapModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">×</span>
        <div id="map" style="width: 100%; height: 400px;"></div>
    </div>
</div>


    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <form action="" method="POST" id="contactForm">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>
            <button type="submit" name="username">Send</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Green Estate. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>





