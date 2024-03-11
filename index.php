<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Chess Blog - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Section -->
    <header>
    <div class="header-container">
        <div class="chess-piece">&#9814;</div>
        <form class="search-bar">
            <input type="text" id="searchInput" placeholder="Search">
            <ul id="searchResults"></ul>
            <button type="submit">Go</button>
        </form>
    </div>
</header>


    <!-- Navigation Bar -->
    <nav>
    <a href="index.php">
        <div class="logo">
            <img src="assets/img/chess-159693_1280.png" alt="Queen'sGambit">
            <span>Queen'sGambit</span>
        </div>
    </a>

    <div class="nav-toggle" onclick="toggleNav()">&#9776; Menu</div>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="recent_posts.php">Posts</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <div class="dropdown">
            <button class="dropbtn">Rankings &#9662;</button>
            <div class="dropdown-content">
                <a href="maleplayers.php">Top 100</a>
                <a href="femaleplayers.php">Top 100 Women</a>
                <a href="junior.php">Top 100 Junior</a>
                <a href="girls.php">Top 100 Junior Girls</a>
            </div>
        </div>
        <a href="subscribe.php">Subscribe</a>
        <!-- Add more navigation links as needed -->
    </div>
</nav>


    <!-- Featured Posts Section -->
    <section id="featured-posts">
        

        <!-- Container to hold featured posts dynamically loaded from the backend -->
        <div id="featuredPostsContainer"></div>

    </section>


    <!-- Footer Section -->
<footer>
    <div class="footer-content">
        <div class="footer-info">
            
            <p>Email: info@yourchessblog.com</p>
        </div>

        
    </div>

    

    <p>&copy; 2024 Your Chess Blog. All rights reserved.</p>
</footer>

    
    <script src="script.js"></script>
    
</body>
</html>
