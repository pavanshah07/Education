<nav class="navbar">
        <ul class="nav-list">
            <div class="logo"><img src="images/edu.jpg" alt="logo"></div>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="rightnav">
            <form action="" method="POST">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm" name="sub">Search</button>
</form>
        </div>
    </nav>
    <?php
        $searchUrl = "http://www.google.com/search?q=";
        if(isset($_POST['sub'])){
            $base = "study";
            $keyword = $_POST['search'];
            header("location: ".$searchUrl.$keyword." ".$base);
        }
?>