<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aatreyee Joshi | Portfolio</title>
    <link rel="icon" href="components/title_icon.png" type="image/x-icon">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' style='color:#f6f4f4' id="menu-icon" ></i>

        <nav class="navBar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#skills">Skills</a>
            <a href="#portfolio">Projects</a>
            <a href="#events">Events</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    
    <!-- home section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hi, I'm</h3>
            <h1>Aatreyee Joshi</h1>
            <h3>And I'm a <span class="multiple-text">Student</span></h3>
            <p>
                I'm a web developer based in India. I have a passion for web development and love to create for web and mobile devices.
            </p>
            <div class="socialMedia">
                <a href="https://www.linkedin.com/in/aatreyee-joshi-7b0515261/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/Aatreyee23"><i class='bx bxl-github'></i></a>
            </div>
            <!-- <a href="#" class="btn">Download CV</a> -->
        </div>

        <div class="home-img">
            <img src="components/AatreyeeProfilePic.png" alt="home-img" id="devPic">
        </div>

    </section>

    <!-- about section -->

        <section class="about" id="about">
            <div class="about-img">
                <img src="components/AatreyeeProfilePic.png" alt="about-img" id="aboutDevPic">
            </div>
            <div class="about-content">
                <h2 class="heading">About <span>Me</span></h2>
                <h3>Web Developer</h3>
                <p>
                    I'm a web developer with a passion for creating web and mobile applications. I have a strong knowledge of HTML, CSS, JavaScript, PHP, MySQL, and Git. Additionally, I am familiar with Python, Java, and C++. I am always eager to learn new technologies and frameworks, and I work well both independently and as part of a team.I am a student at the Gujarat University pursuing a Bachelors in Computer Science degree. I have worked on several projects. I am currently looking for opportunities to work as a web developer.      
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
        </section>

    <!-- services section -->
    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <p>
                    I create responsive websites and web applications using HTML, CSS, and JavaScript. I also have experience with PHP, MySQL, and Git.
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
            <div class="services-box">
                <i class='bx bxs-paint'></i>
                <h3>Graphic Design</h3>
                <p>
                    I design logos, banners, and other graphics for websites and social media. I create custom graphics for web and mobile applications.
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
            <div class="services-box">
                <i class='bx bxs-edit-alt'></i>
                <h3>Author</h3>
                <p>
                    I write creative content.I've achieved many prizes for various levels for my writing skills.I've tried my hands on writing in Gujarati language.
                </p>
                <!-- <a href="#" class="btn">Read More</a> -->
            </div>
        </div>
    </section>

    <!-- skills section -->
    <section class="skills" id="skills">

        <div class="skills-container">
            <h2 class="heading">My <span>Skills</span></h2>
            
            
            <ul class="skills-list">
                <li>
                <i class="bx bxl-html5"></i>  
                <h3>HTML</h3>
                </li>
                <li>
                <i class="bx bxl-css3"></i>  
                <h3>CSS</h3>
                </li>
                <li>
                <i class="bx bxl-javascript"></i>  
                <h3>JavaScript</h3>
                </li>
                <li>
                <i class="bx bxl-jquery"></i>  
                <h3>jQuery</h3>
                </li>
                <li>
                <i class="bx bxl-bootstrap"></i>  
                <h3>Bootstrap</h3>
                </li>
                <li>
                <i class="bx bxl-php"></i>
                <h3>PHP</h3>
                </li>
                <li>
                    <i class="fas fa-database"></i>
                    <h3>MySQL</h3>
                </li>
                <li>
                <i class="bx bxl-git"></i>
                    <h3>Git</h3>
                </li>
                <li>
                <i class="bx bxl-python"></i>
                <h3>Python</h3>
                </li>
                <li>
                <i class="bx bxl-java"></i>
                <h3>Java</h3>
                </li>
                <li>
                    <i class="fas fa-c"></i>
                    <h3>C</h3>
                </li>
                <li>
                <i class="bx bxl-c-plus-plus"></i>
                <h3>C++</h3>
                </li>
                <li>
                    <i class="bx bxl-figma"></i>
                    <h3>Figma</h3>
                </li>
                <li>
                    <i class="bx bxl-tux"></i>
                    <h3>Linux</h3>
                </li>  
            </ul>
        </div>
    </section>

    <!-- portfolio project section -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Projects</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="components/project1.png" alt="portfolio-img">
                <div class="portfolio-layer">
                    <h4>Cityscape Challenge</h4>
                    <p>
                        A web game where player explores the city and finds hidden objects to reach to the treasure. The game is built using HTML, CSS, JavaScript, jQuery and Canvas.For making the game more challenging, it has different levels. The game is responsive and can be played on mobile devices.
                    </p>
                    <a href="https://aatreyee23.github.io/Cityscape_Challenge_Game/"><i class='bx bx-link-external'></i></a>
                </div>   
            </div>
            <div class="portfolio-box">
                <img src="components/project2.png" alt="portfolio-img">
                <div class="portfolio-layer">
                    <h4>Word Search</h4>
                    <p>
                        Dive into an engaging web-based Word Search experience! This interactive puzzle utilizes HTML, CSS, JavaScript, and jQuery to deliver a stimulating challenge. Sharpen your vocabulary and test your focus to hunt for hidden words.The game is responsive and can be played on mobile devices.The game has different levels and categories.Its dynamic Word arrangement makes it a new game every time you play. 
                    </p>
                    <a href="https://aatreyee23.github.io/Word_Search/"><i class='bx bx-link-external'></i></a>
                </div>   
            </div>
            <div class="portfolio-box">
                <img src="components/project3.png" alt="portfolio-img">
                <div class="portfolio-layer">
                    <h4>Academic Insights</h4>
                    <p>
                        Streamline your academic journey with Academic Insights! This web app, built with powerful frameworks, provides a one-stop shop for educators, scholars, and learners.  Explore dynamic classrooms, access scholarly resources, connect with your community, and stay informed – all in one place.
                    </p>
                    <a href="https://aatreyeejoshi.my.canva.site/academicinsights"><i class='bx bx-link-external'></i></a>
                </div>   
            </div>
        </div>
    </section>    

    <!-- Events section -->
    <section class="events" id="events">
        <h2 class="heading">Recent <span>Events</span></h2>
        <div class="events-container">
            <div class="events-box">
                <img src="components/event5.jpg" alt="event-img">
                <div class="events-layer">
                    <h4>Tech Kaushalya 2K24</h4>
                    <p>
                        A state level Tech Event organized by Department of Computer Science, Gujarat University.I volunteered and played pivotal role in the TK24 Event.
                    </p>
                </div>
            </div>
            <div class="events-box">
                <img src="components/event1.png" alt="event-img">
                <div class="events-layer">
                    <h4>Web Application Security Workshop</h4>
                    <p>
                        A workshop on Web Application Security was organized by DIASVPCoE, Gujarat University Campus, sponsored by DRDO. The workshop was conducted by industry experts.
                    </p>
                </div>
            </div>
            <div class="events-box">
                <img src="components/event6.png" alt="event-img">
                <div class="events-layer">
                    <h4>Tech Kaushalya 2K23</h4>
                    <p>
                        A state level Tech Event organized by Department of Computer Science, Gujarat University.I volunteered in the event as 
                    </p>
                </div>
            </div>
            <div class="events-box">
                <img src="components/event2.jpg" alt="event-img">
                <div class="events-layer">
                    <h4>Kala Utsav: 2021-'22</h4>
                    <p>
                        A state level competition was organized by the Gujarat Council of Educational Research and Training.The competition was based on the theme of "Aazadi Ka Amrit Mahotsav". I participated in the competition. I was awarded a certificate and a shield.
                    </p>
                </div>
            </div>
            <div class="events-box">
                <img src="components/event3.png" alt="event-img">
                <div class="events-layer">
                    <h4>Essay Competition</h4>
                    <p>
                        An essay competition about the "Corona Warriors" was organized by the Government of Gujarat. I participated in the competition and won the competition and achieved third position and was awarded by a cash prize.
                    </p>
                </div>
            </div>
            <div class="events-box">
                <img src="components/event4.png" alt="event-img">
                <div class="events-layer">
                    <h4>Smart India Hackathon: 2023</h4>
                    <p>
                        A national level hackathon was organized by the Government of India. I participated in the internal hackathon for Smart India Hackathon 2023. I got a participation certificate.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        
        <form action="" method="post" name="myfrm">
            <div class="input-box">
                <input name="name" id="name" type="text" placeholder="Full Name" required>
                <input name="email" id="email" type="email" placeholder="Email Address" required>
            </div>
            <div class="input-box">
                <input name="mobile" id="mobile" type="number" placeholder="Mobile Number" required>
                <input name="subject" id="subject" type="text" placeholder="Email Subject" required>
            </div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input name="submit" type="submit" value="Send Message" class="btn">
        </form>
    </section>

<?php

    if(isset($_POST['submit'])){

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['subject']) && isset($_POST['message']))
        {
            echo '<script>alert("Form submitted");</script>';
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;
    
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';
    
            $mail->Username='mahadev1008aj@gmail.com'; 
            $mail->Password='jjsf ysrx cxpk tkqo'; 
    
            $mail->setFrom('mahadev1008aj@gmail.com', 'Aatreyee Portfolio'); 
            $mail->addAddress('shivashakti301@gmail.com'); 
    
            $mail->isHTML(true);
            $mail->Subject=$subject;
            $mail->Body="<b>New Inquiry on portfolio website :</b><br><br>Enterred Details are:<br><br>Name : ".$name."<br><br>Email : ".$email."<br><br>Mobile : ".$mobile."<br><br>Message : <br>".$message."<br><br>";
    
            if(!$mail->send()){
                echo '<script>alert("Failed to send email notification.");</script>';
            } else {
                echo '<script>alert("Email notification sent successfully.");</script>';
            }
    
        }
        else{
            echo '<script>alert("Please fill all the fields.");</script>';
        }
    }
        
?>    

    <!-- footer section -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; <i id="year"></i> Aatreyee Joshi | All rights reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    
    <script src="script.js"></script>
</body>
</html>
