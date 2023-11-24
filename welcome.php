<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>KOMODOHUB</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/c1b8fdcc5d.js" crossorigin="anonymous"></script>
    <style>
      .span{
        color: green;
      }
      .hedding{
        font-size: 35px;
      }
      </style>
</head>
  <body>
  <?php
    include "navbar.php";
    ?>    
    <body>




<!-- --------------------------login---------------------- -->
<div id="header">
    <div class="container">
        <nav>
            <img src="images/img2.jpeg" class="logo">
            <ul id="sidemenu">
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Courses</a></li>
                <li><a href="#portfolio">Game</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fa-solid fa-xmark" onclick="closemenu()"></i>

            </ul>
            <i class="fa-solid fa-bars" onclick="openmenu()"></i>
        </nav>
        <div class="header-text">
            <p>Jawan rahinos</p>
            <h4 class="hedding">Hi, Welcome <?php echo $_SESSION['username'] ?> To <br> <span class="span">KOMODOHUB</span> School</h4>
        </div>
    </div>
</div>
<!-- ----------------about school-------------------->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="images/img4.jpeg" >
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About School</h1>
                <p>
                    The school is dedicated to nurturing a generation of conservation champions by incorporating the Javan rhinoceros and other endangered species into its curriculum.
                    Through engaging educational materials, students learn about these incredible creatures' habitat, behavior, and conservation challenges.
                    Interactive games, puzzles, and activities make learning about endangered species fun and memorable, sparking curiosity and empathy among the children. 
                    By integrating these lessons into various subjects, the school fosters a deeper understanding of the importance of preserving biodiversity. 
                    Students not only gain knowledge but also actively participate in games and projects that promote awareness and support conservation efforts for endangered species like the Javan rhinoceros.
                </p>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('education')">Education</p>
                    <p class="tab-links" onclick="opentab('ConservKids Academy')">ConservKids Academy</p>
                    <p class="tab-links" onclick="opentab('Earth Guardians Elementary')">Earth Guardians Elementary</p>
                </div>
                <div class="tab-contents active-tab" id="education">
                    <ul>
                        <li><span>AccessEd Hub</span><br>Platform for Inclusive Learning</li>
                        <li><span>EngageU: Interactive Academia</span><br>Immersive Learning Community</li>
                        <li><span>RelevateEd Solutions</span><br>Relevant Curriculum Innovations</li>
                    </ul>
                </div>
                <div class="tab-contents" id="ConservKids Academy">
                    <ul>
                        <li><span>Wildlife Education</span><br>Species Conservation Lessons</li>
                        <li><span>Interactive Zoology</span><br>Hands-On Animal Exploration</li>
                        <li><span>Environmental Awareness</span><br>Nature Conservation Activities</li>
                    </ul>
                </div>
                <div class="tab-contents" id="Earth Guardians Elementary">
                    <ul>
                        <li><span>Biodiversity Studies</span><br>Exploring Ecosystems</li>
                        <li><span>Conservation Projects</span><br>Saving Endangered Species</li>
                        <li><span>Field Trips</span><br>Nature Excursions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ---------------services-------  -->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-code"></i>
                <h2>National Geographic Kids</h2>
                <p>This course engages children in interactive learning about endangered species worldwide. Through storytelling, games, and virtual tours, students explore habitats, understand threats to species, and learn conservation strategies.</p>
                <a href="https://www.worldwildlife.org/teaching-resources">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-crop-simple"></i>
                <h2>Saving Our Species</h2>
                <p>This course focuses on the importance of conservation actions. It involves hands-on activities, guest talks from wildlife experts, and projects where children develop initiatives to protect local endangered species.</p>
                <a href="https://sdzwildlifeexplorers.org/">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-tape"></i>
                <h2>Planet Protectors: Guardians of Wildlife</h2>
                <p> This course emphasizes the role of young individuals as stewards of the planet. It covers topics such as habitat preservation, sustainable practices, and encourages students to become ambassadors for endangered species in their communities.</p>
                <a href="https://defenders.org/">Learn more</a>
            </div>
        </div>
    </div>
</div>
<!-- ----------------------portfolio------------ -->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">Games</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/img5.jpeg" >
                <div class="layer">
                    <h3>Wildlife Rescue</h3>
                    <p>A virtual game where players act as wildlife rescuers. They encountering endangered species in need of help.
                         Players learn about the species, their habitats, and the challenges they face while trying to rescue and rehabilitate them.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.xstudios.wildliferescue&pcampaignid=web_share"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>

            </div>
            <div class="work">
                <img src="images/img6.jpeg" >
                <div class="layer">
                    <h3>Endangered Species</h3>
                    <p>An interactive game where children embark on a quest to save endangered animals. They solve puzzles, complete challenges, and make decisions that impact the survival of virtual endangered species.</p>
                    <a href="https://play.google.com/store/apps/details?id=cg.polytechbrazza.endangeredspecies&pcampaignid=web_share"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/img7.jpeg" >
                <div class="layer">
                    <h3>Idle Zoo Tycoon 3D - Animal Pa</h3>
                    <p>This simulation game allows kids to manage a virtual wildlife sanctuary or conservation center.
                         Players learn about different endangered species, their needs, and conservation efforts required to protect them.</p>
                    <a href="https://play.google.com/store/apps/details?id=com.idlezoo.game&pcampaignid=web_share"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="https://www.natgeotv.com/uk" class="btn">See More</a>
    </div>
</div>
<!-- -------------------contact---------------- -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-paper-plane"></i>savanpatel7914@gmail.com</p>
                <p> <i class="fa-solid fa-phone"></i>07767903611</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100011875957366"><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-twitter"></i></i></a>
                    <a href="https://www.instagram.com/stories/itz_me_sandy_patel/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/feed/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <a href="images/Reume_Savanp.pdf" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
                <form name="submit-to-google-sheet">
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="email" name="Email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © Savan. Made <i class="fa-solid fa-heart"></i> by Savan Patel </p>
    </div>
</div>


<script>
    // JavaScript code
function goToLogin() {
    document.getElementById('login').style.display = 'block';
    document.getElementById('signup').style.display = 'none';
}

function goToSignup() {
    document.getElementById('signup').style.display = 'block';
    document.getElementById('login').style.display = 'none';
}

</script>
<script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");
    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link")
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab")
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
</script>
<script>
    var sidemenu = document.getElementById("sidemenu")

    function openmenu(){
        sidemenu.style.right = "0"
    }
    function closemenu(){
        sidemenu.style.right = "-200px"
    }
</script>
<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycby_maZekOO-yfMcyDbcj2lrJUchWU03fpXXHAFKAKW3GF9GYy-QB_m7BDm959JYnpCB/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById("msg")
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            msg.innerHTML = "Message Sent Succesfully"
            setTimeout(function(){
                msg.innerHTML = ""
            },5000)
            form.reset()
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>

</body>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

