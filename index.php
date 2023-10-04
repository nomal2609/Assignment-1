<!-- HTML Document Structure -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
    <!-- Favicon - Uncomment and modify the line below to set your favicon -->
<!-- <link rel="icon" type="image/x-icon" href="radio.png"> -->
    <link rel="icon" type="image/x-icon" href="radio.png">
    <!-- Link to External Stylesheet -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- Heading for Shipping Information -->
        <p class="heading">Free shipping Across Canada for orders over $80</p>
        <!-- Main Heading for the Page -->
        <h1 class="head">Official Carvaan Distributor in Canada</h1>
    
        <!-- Mobile Menu Icon -->
        <div id="menu" class="fas fa-bars"></div>
    
        <!-- Navigation Bar -->
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Index</a></li>
                <li><a href="second.php">Retrieve</a></li>
              
            </ul>
        </nav>
    
    </header> 

    <!-- Container for Main Content -->
    <div class="container">
        <main>
            <!-- Feedback Form -->
            <div id="feedback">
            <form action="/ass1/index.php" method="POST">
                <!-- Form Title -->
                <h1>Product Customer Feedback Form</h1>
                <!-- Form Introduction Paragraph -->
                <p>Thank you for taking time to provide feedback. We appreciate hearing from you and will review your comments carefully</p>
                <hr>
                <!-- Recommendation Question -->
                
                <!-- Suggestion Question -->
                <p><label for="review">Do you have any suggestions to improve our product and service?</label></p>
                <!-- Textarea for Suggestions -->
                <textarea id="review" name="review" rows="4" cols="50"></textarea>
                <br>
                <!-- Satisfaction Question -->
                <p>How satisfied are you with our company overall?</p>
                <!-- Star Rating -->
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                </div>
                <!-- Shared Feedback Question -->
                <p>To the best of your knowledge, is this feedback something that others in your situation would also share?</p>
               
                <!-- Email Request -->
                <p>Please leave your email address if you would like us to contact you regarding any questions</p>
                <!-- Fieldset for Full Name and Email Address -->
                <fieldset id="payment">
                    <h2>Full Name</h2>
                    <!-- First Name Input -->
                    <input type="text" id="fname" name="fname" placeholder="First name" style="height:30px;" pattern="[a-zA-Z]{2,}" required>
                    <label for="fname"></label>

                    <!-- Last Name Input -->
                    <input type="text" id="lname" name="lname" placeholder="Last name" style="height:30px;" pattern="[a-zA-Z]{2,}" required>
                    <label for="lname"></label>
                    <br>
                    <h2>Email Address</h2>
                    <!-- Email Input -->
                    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <label for="email"></label>
                    <br>
                    <!-- Submit Button -->
                    <button type="submit">Submit</button>
                </fieldset>
            </form>
        </main>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <!-- Footer Box Container -->
        <div class="box-container">
            <!-- Box for "Why Choose Us?" -->
            <div class="box">
                <h3>why choose us?</h3>
                <p>Saregama carvaan is a blessing for the Bollywood music lovers. It's made with simplicity to use. And has a robust built quality with a crisp sound quality.</p>
            </div>
            <!-- Box for Quick Links -->
            <div class="box">
                <h3>quick links</h3>
                <a href="index.html">home</a>
                <a href="feedback.html">Feedback</a>
                <a href="contact.html">contact</a>
                <a href="terms.html">Policy</a>
            </div>
            <!-- Box for Newsletter Subscription -->
            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe us for latest updates</p>
                <form action="">
                    <input type="email" placeholder="your email">
                    <input type="submit" class="btn" value="subscribe">
                </form>
            </div>
        </div>
        <!-- Footer Credit Line -->
        <h1 class="credit"> created by <a href="#">MiscellaneousGroup</a> | all rights reserved. </h1>
    </div>
    <!-- Link to External JavaScript File -->
    <script src="script.js"></script>
     <?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    

    //Database Connectivity
    $servername="localhost";
    $username="root";
    $password="Nomal@260904";
    $database="Nomi";

    //creating a connection

    $conn=mysqli_connect($servername, $username, $password, $database);
   
    //die if connection failed
    if(!$conn)
    {
        die("Sorry, connection failed!!".mysqli_connect_error());
    }
    else
    {
        //submit the insertion queries/data to database

        $sql="INSERT INTO feedback( fname,lname,email) VALUES ( '$fname', '$lname', '$email')";
        $selectQuery = "SELECT * FROM feedback";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);

        if($result)
        {
            echo "Data inserted successfully";

        }
        else{
            echo "Data not inserted due to  ".mysqli_error($conn);
        }
    }



}

?>
</body>

</html>

