 <?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>JK</strong>medicals </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#doctors">doctors</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
        <a href="login.php">Login/Signup</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> We believe that the greatest gift you can give your family and the world is a healthy you.</p>
        <a href="#appointment" class="btn"> Book a appointment with us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1080+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>550+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>50+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>JK Medicals is a premier healthcare institution that offers patients the opportunity to receive some of the world's best treatments for a wide range of medical conditions. With a team of highly skilled and experienced medical professionals, state-of-the-art facilities, and access to the latest medical technologies, JK Medicals is dedicated to providing the highest level of care to every patient. From advanced cancer treatments to cutting-edge surgical procedures, JK Medicals offers a wide range of options for patients seeking the best possible outcomes.</p>
            <p>Additionally, JK Medicals is committed to providing patients with a comfortable and welcoming environment, and their patient-centered approach ensures that every patient receives the personalized care and attention they need to recover and heal.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>JK Medicals offers free checkups for patients to ensure they receive the best possible care.</p>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>We have 24/7 ambulance services available to ensure patients receive timely medical attention.</p>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Expert doctors are on staff to provide top-notch medical care, with years of experience and specialized training.</p>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Patients have access to essential medicines at JK Medicals, to ensure the best treatment outcome.</p>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>The hospital also provides bed facility for patients in need, with comfortable accommodation and medical staff always on call.</p>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>JK Medicals aims to provide total care for their patients, with a focus on patient-centered approach and an environment of comfort and healing.</p>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Dr. John Karki</h3>
            <span>Surgeon</span>
            <div class="share">
            <a href="https://www.facebook.com/john.karki.1884" class="fab fa-facebook-f"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Dr. shashank Pyakurel</h3>
            <span>Physician</span>
            <div class="share">
            <a href="https://www.facebook.com/shasank.pyakurel.9" class="fab fa-facebook-f"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Dr. Saurav Koirala</h3>
            <span>Urologist</span>
            <div class="share">
            <a href="https://www.facebook.com/saurav.koirala.52" class="fab fa-facebook-f"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Dr. Aayush Tiruwa</h3>
            <span>Cardiologist</span>
            <div class="share">
            <a href="https://www.facebook.com/aayush.tiruwa" class="fab fa-facebook-f"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Dr. Aaditya Pokhrel</h3>
            <span>Neurologist</span>
            <div class="share">
            <a href="https://www.facebook.com/pokhrel.aaditya.5" class="fab fa-facebook-f"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>Dr. Tony Stark</h3>
            <span>Dentist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                
            
            </div>
        </div>
        <div class="box" >
            <img src="image/doc-7.jpg" alt="" id="in">
            <h3>Dr. Joker</h3>
            <span>Plastic Surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                
                <p></p> 
            </div>
        </div>
        <div class="box">
            <img src="image/doc-8.jpg" alt="">
            <h3>Dr. Sharukhe poudel</h3>
            <span>Pyschiatrist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                
            </div>
        </div>
        <div class="box" >
            <img src="image/doc-9.jpg" alt="" id="im">
            <h3>Dr. Morty Smith</h3>
            <span>Radiologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="Get appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-2.jpg" alt="">
            <h3>Alin Ale</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">I recently had to take my mother to JK Medicals for a surgery and I have to say, I was extremely impressed with the level of care we received. The staff was incredibly kind and attentive, and the facilities were top-notch. My mother's surgeon was an expert in his field and the surgery went smoothly. We were also provided with all the necessary medicines and post-surgery care. Overall, we had a great experience at JK Medicals and I would highly recommend them to others.</p>
        </div>

        <div class="box">
            <img src="image/pic-3.jpg" alt="">
            <h3>Bibbek Bhattrai</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">I was hesitant about going to JK Medicals at first, but I'm so glad I did. The staff was incredibly friendly and made me feel at ease right away. The doctor I saw was incredibly knowledgeable and took the time to explain everything to me. I also liked that they had a 24/7 ambulance service, it made me feel more secure. I received my treatment, medicines, and recovery were smooth and easy. I highly recommend JK Medicals to anyone in need of medical treatment.</p>
        </div>

        <div class="box">
            <img src="image/Pic- 1.jpg" alt="">
            <h3>Bhola Rouniyar</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt">
                </i>
            </div>
            <p class="text">I have been a regular patient of JK Medicals for the last few months and I have nothing but praise for the staff and facilities. The doctors are expert in their field and the nurses are always so kind and attentive. The bed facility is comfortable and clean and the medicines are always readily available. I also appreciated the free checkups they offer. JK Medicals truly goes above and beyond to provide total care for their patients. I would recommend them to anyone in need of medical treatment.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 December, 2020 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>blog with JK Medicals</h3>
                <p>JK Medicals has a blog that provides informative and educational articles about various medical conditions, treatment options, and overall health and wellness.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>A day in healthy life.</h3>
                <p>JK Medicals blog about tips, articles, and information on how to lead a healthy life, including information on healthy habits, nutrition, and fitness.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>A day in an life of Neuro surgeon</h3>
                <p>A blog that provides an insight into the day to day life of a Neuro surgeon, including the challenges, the procedures, and the rewards of the job.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 2 October, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>JK Medicals in association with JK Corp</h3>
                <p>JK Medicals has a blog that provides information about the association with JK Corp, including the services and programs offered by JK Corp and how they contribute to the overall healthcare experience at JK Medicals.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 4 May, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>JK Medicals only for people.</h3>
                <p>JK Medicals which is dedicated to providing information and resources specifically for patients, including tips on how to navigate the healthcare system, understanding treatment options, and managing chronic conditions.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 7 June, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                </div>
                <h3>Hospital's best treatments</h3>
                <p>JK Medicals offers some of the best treatments available in the medical field, utilizing the latest technologies, expert doctors, and state-of-the-art facilities to provide the highest level of care for patients.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +977 014252552 </a>
            <a href="#"> <i class="fas fa-phone"></i> +977 014252662</a>
            <a href="#"> <i class="fas fa-envelope"></i> Johnkarki028@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> JKCorp@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> KTM, Nepal </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    

</section>


<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

