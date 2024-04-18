<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital management system</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css"/>

</head>
<body>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connec
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted data from the form
$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$date = $_POST["date"];


    // Insert the data into the database
    $sql = "INSERT INTO contact_form (name, email,number,date) VALUES ('$name', '$email','$number','$date')";
    if ($conn->query($sql) === TRUE) {
       // echo "Data submitted successfully";
       echo '<script>alert("Appointment Booked successfully!");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close the database connection
$conn->close();
?>



    <header class="header">
        <a href ="#" class = "logo"><i class ="fas fa-heartbeat"></i> <strong>WC</strong> Medical </a>
        <nav class="navbar">
            <a href="#home"> Home</a>
            <a href="#about"> About</a>
            <a href="#services"> Services</a>
            <a href="#doctors"> Doctors</a>
            <a href="#appointment"> Appointment</a>
            <a href="#review">Review</a>
            <a href="#blog">Blog</a>
        </nav>

        <div id="menu-btn" class="fas fas-bars"></div>
    </header>

    <section class="home" id="home">
        <div class="image">
            <img src="./home.jpg " alt="">
        </div>

        <div class="content">
            <h3>We take care of your healthy life</h3>
            <p>A person who has good physical health is likely to have bodily function and processes working at their peak</p>
            <a href="#appointment" class="btn">Book appointment <span class="fas fa-chevron-right"></span></a>
        </div>
    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>150+</h3>
            <p>Doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1030+</h3>
            <p>Satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>490+</h3>
            <p>Bed facility</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>70+</h3>
            <p>Available hospitals</p>
        </div>

    </section>
    
    <section class="about" id="about">
        <h1 class="heading"><sapn>About</sapn> us</h1>

        <div class="image">
            <img src="hospital.avif" alt="">
        </div>

        <div class="content">
            <h3>Take the world's best quality treatment</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab vitae perspiciatis sit, quis debitis error non? Fugiat corrupti earum aperiam quos explicabo, odit minus maxime eaque cum sunt magnam sit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus atque possimus voluptates vero doloremque, saepe esse quas perspiciatis adipisci doloribus unde suscipit voluptas repellat cumque, architecto nostrum quibusdam rerum nemo!</p>
            <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
        </div>
    </section>

    <section class="services" id="services">

        <h1 class="heading">Our <span>Services</span></h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>Free checkups</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquam vel atque temporibus officiis consequatur, ducimus libero odit hic cumque vitae nihil quidem dolor! Tempora quaerat voluptates recusandae sint maxime.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquam vel atque temporibus officiis consequatur, ducimus libero odit hic cumque vitae nihil quidem dolor! Tempora quaerat voluptates recusandae sint maxime.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquam vel atque temporibus officiis consequatur, ducimus libero odit hic </p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus aliquam vel atque </p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>bed facility</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>

        </div>

    </section>

    <section class="doctors" id="doctors">

        <h1 class="heading">Our <span>doctors</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="doc-1.jpg" alt="">
                <h3>Suraj </h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fas fa-facebook"></a>
                    <a href="#" class="fas fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="doc-2.webp" alt="">
                <h3>Suraj </h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fas fa-facebook"></a>
                    <a href="#" class="fas fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="doc-3.jpg" alt="">
                <h3>Suraj </h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fas fa-facebook"></a>
                    <a href="#" class="fas fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="doc-4.jpg" alt="">
                <h3>Suraj </h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fas fa-facebook"></a>
                    <a href="#" class="fas fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="doc-5.webp" alt="">
                <h3>Suraj </h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fas fa-facebook"></a>
                    <a href="#" class="fas fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="doc-6.avif" alt="">
                <h3>Suraj </h3>
                <span>expert doctor</span>
                <div class="share">
                    <a href="#" class="fas fa-facebook"></a>
                    <a href="#" class="fas fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
            
        </div>
    </section>

    <section class="appointment" id="appointment">

        <h1 class="heading"><span>appointment</span>now</h1>

        <div class="row">

            <div class="image">
                <img src="appointment.1.jpg" alt="">
            </div>

            <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class ="message">'.$message.'</p>';
                    }
                }
            ?>

                <h3>Make appointments</h3>
                <input type="text" name="name" placeholder="your name" class="box">
                <input type="number" name="number" placeholder="your number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="date" name="date"  class="box">
                <input type="submit" name="submit" placeholder="appointment now" class="box">
            </form>
        </div>
    </section>

    <section class="review" id="review">

        <h1 class="heading" >Client's<span>review</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="review.1.jpeg" alt="">
                <h3>Sumitra devi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et voluptate eum debitis enim officia, inventore ratione velit perspiciatis nihil nemo sapiente atque est, ut tenetur aperiam? Aspernatur perspiciatis officia provident!</p>
            </div>
            <div class="box">
                <img src="review.2.jpeg" alt="">
                <h3>Sumitra devi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et voluptate eum debitis enim officia, inventore ratione velit perspiciatis nihil nemo sapiente atque est, ut tenetur aperiam? Aspernatur perspiciatis officia provident!</p>
            </div>
            <div class="box">
                <img src="review.3.jpeg" alt="">
                <h3>Sumitra devi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et voluptate eum debitis enim officia, inventore ratione velit perspiciatis nihil nemo sapiente atque est, ut tenetur aperiam? Aspernatur perspiciatis officia provident!</p>
            </div>


        </div>
    </section>

    <section class="blogs" id="blogs">

        <h1 class="heading">Our <span>blogs</span></h1>

        <div class="box-container">

            <div class="box">
                <div  class="image">
                    <img src="blog.1.jpg" alt="">

                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#" ><i class="fas fa-calendar"></i> 21 November , 2023</a>
                        <a href="#"><i class="fas fa-user"></i>By Hopital</a>
                    </div>
                    <h3>Blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa animi quaerat numquam error nulla eum rem consequuntur nisi quis quia, mollitia labore consequatur distinctio repellendus asperiores ducimus nostrum aperiam quos?</p>
                    <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div  class="image">
                    <img src="blog.2.jpg" alt="">

                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#" ><i class="fas fa-calendar"></i> 21 November , 2023</a>
                        <a href="#"><i class="fas fa-user"></i>By Hopital</a>
                    </div>
                    <h3>Blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa animi quaerat numquam error nulla eum rem consequuntur nisi quis quia, mollitia labore consequatur distinctio repellendus asperiores ducimus nostrum aperiam quos?</p>
                    <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div  class="image">
                    <img src="blog.3.jpg" alt="">

                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#" ><i class="fas fa-calendar"></i> 21 November , 2023</a>
                        <a href="#"><i class="fas fa-user"></i>By Hopital</a>
                    </div>
                    <h3>Blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa animi quaerat numquam error nulla eum rem consequuntur nisi quis quia, mollitia labore consequatur distinctio repellendus asperiores ducimus nostrum aperiam quos?</p>
                    <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

        </div>
    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="#" ><i class="fas fa-chevron-right"></i>Home</a>
                <a href="#" ><i class="fas fa-chevron-right"></i>About</a>
                <a href="#" ><i class="fas fa-chevron-right"></i>Services</a>
                <a href="#" ><i class="fas fa-chevron-right"></i>Doctors</a>
                <a href="#" ><i class="fas fa-chevron-right"></i>Appointment</a>
                <a href="#" ><i class="fas fa-chevron-right"></i>Review</a>
                <a href="#" ><i class="fas fa-chevron-right"></i>Blog</a>
            </div>

            <div class="box">
                <h3>Our services</h3>
                <a href="#"><i class="fas fa-chevron-right"></i>Dental care</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Message therapy</a>
                <a href="#"><i class="fas fa-chevron-right"></i>cardiology</a>
                <a href="#"><i class="fas fa-chevron-right"></i>diagnosis</a>
                <a href="#"><i class="fas fa-chevron-right"></i>ambulance services</a>
            </div>

            <div class="box">
                <h3>Appointment info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+918888001684</a>
                <a href="#"> <i class="fas fa-phone"></i>+918888001672</a>
                <a href="#"> <i class="fas fa-envelope"></i>healthcare@gmail.com</a>
                <a href="#"> <i class="fas fa-envelope"></i>hospital@gamil.com</a>
                <a href="#"> <i class="fas fa-map-maker-alt"></i>wagholi, pune</a>

            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#" > <i class="fab faceappointment"></i>Face-appointment</a>
                <a href="#" > <i class="fab fa-twitter"></i>Twitter</a>
                <a href="#" > <i class="fab fa-twitter"></i> Twitter</a>
                <a href="#" > <i class="fab fa-instagram"></i>instagram</a>
                <a href="#" > <i class="fab fa-linkedin"></i>linkedin</a>
                <a href="#" > <i class="fab fa-pinterest"></i>pinterest</a>
            </div>
        </div>

        <div class="credit">Created by <span>Sakshi shinde</span> | all rights are reserved </div>
    </section>
   <script src="script.js"></script>
</body>
</html> 