<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ron B. | Portfolio</title>

    <link rel="icon" href="./images/logo1.png">
    <!--Import fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Playfair+Display:wght@400;600&display=swap"
        rel="stylesheet" />
    <!--Import icons-->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="styles.css" />
</head>


<body>
    <div class="hambuger-menu">
        <i class="ion-navicon open"></i>
        <i class="ion-android-close close"></i>
    </div>

    <nav class="nav">
        <div class="intro">
            <a class="nav-link" href="#main">
                <h1 class="intro-heading">Ron Beraha</h1>
                <h2 class="intro-subhead">Software Engineer <br>&<br> Full Stack Developer</h2>
            </a>
        </div>

        <ul class="nav-list">
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./files/My_Resume.pdf" target="_blank" rel="noopener noreferrer">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" #id="contact_nav" href="#" onclick="return modal_function()">Contact</a>
            </li>
        </ul>

        <div class="social-media-wrapper">
            <span>Follow me</span>
            <div class="social-media">
                <a href="https://www.linkedin.com/in/ron-beraha-9454741bb/" class="sm-link" target="_blank"
                    rel="noopener noreferrer"><i class="ion-social-linkedin"></i></a>
                <a href="https://github.com/RonBless" class="sm-link" target="_blank" rel="noopener noreferrer"><i
                        class="ion-social-github"></i></a>
                <a href="https://www.instagram.com/ron_beraha14/" class="sm-link" target="_blank"
                    rel="noopener noreferrer"><i class="ion-social-instagram"></i></a>

            </div>
        </div>

        <div class="copy-right-notice">
            <p>Copyright &copy; 2021. All rights reserved.</p>
        </div>
    </nav>


    <main class="main" id="main">
        <section class="logo">
            <img class="logo-img" src="./images/logo.png" alt="">
            <a href="#about" class="scroll-down">
                <div class="mouse">
                    <span></span>
                </div>
                <div class="arrow">
                    <span></span>
                </div>
            </a>
        </section>


        <section class="about-me" id="about">
            <div class="container">
                <div class="heading-group">
                    <span class="section-head-small">About</span>
                    <h5 class="section-head-large">Who Am I?</h5>
                </div>
                <div class="about-me-intro">
                    <div class="intro-description">
                        <p>
                            <span>Hey I'm Ron Beraha</span>
                            Hey, I am a 3rd year software enginner student currently Specializing in AI & Machine
                            Learning
                            (4 semesters till graduaition)
                            I am a full stack developer who loves enriching myself with various technoligies and
                            knowledge.
                            Love pushing myself and my sourrndings for the best and I love working both alone and as a
                            part of a team.
                        </p>
                    </div>
                    <div class="call-to-action">
                        <p>
                            I am a driven individual and I am always eager to start a new project. So what are you
                            waiting for?
                            Send me a message and let's start something new!
                        </p>
                        <a href="#" class="btn cta-btn" onclick="return modal_function()">Contact me</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-expertise" id="skills">
            <div class="container">
                <div class="heading-group">
                    <span class="section-head-small">What I do</span>
                    <h5 class="section-head-large">My Expertise</h5>
                </div>

                <div class="grid">
                    <div class="grid-item yellow">
                        <span class="item-icon">
                            <i class="ion-ios-lightbulb-outline">

                            </i>
                        </span>
                        <h3 class="item-heading">Back End</h3>
                    </div>
                    <div class="grid-item blue">
                        <span class="item-icon">
                            <i class="ion-images">

                            </i>
                        </span>
                        <h3 class="item-heading">Front End</h3>
                    </div>
                    <div class="grid-item red">
                        <span class="item-icon">
                            <i class="ion-android-desktop">

                            </i>
                        </span>
                        <h3 class="item-heading">Full Stack</h3>
                    </div>
                </div>

                <div class="heading-group margin-top">
                    <span class="section-head-small">What I Use</span>
                    <h5 class="section-head-large">Technoligies</h5>
                </div>

                <div class="grid">

                    <div class="grid-item yellow">
                        <div class="item-skill">
                            <h5 class="skill-name">Python</h5>
                        </div>
                        <p class="skill-description">
                            Python libraries and easy of use is unmatched (don't tell Java I said that)
                        </p>
                    </div>

                    <div class="grid-item blue">
                        <div class="item-skill">
                            <h5 class="skill-name">HTML</h5>
                        </div>
                        <p class="skill-description">
                            Web page development, mostly for the starcture of the pages.
                        </p>
                    </div>

                    <div class="grid-item red">
                        <div class="item-skill">
                            <h5 class="skill-name">Java</h5>
                        </div>
                        <p class="skill-description">
                            My first love.
                            If I had to pick only one programing language I would probably pick Java.
                        </p>
                    </div>

                    <div class="grid-item yellow">
                        <div class="item-skill">
                            <h5 class="skill-name">C</h5>
                        </div>
                        <p class="skill-description">
                            Who dosen't love the classic.
                        </p>
                    </div>

                    <div class="grid-item blue">
                        <div class="item-skill">
                            <h5 class="skill-name">CSS</h5>
                        </div>
                        <p class="skill-description">
                            Where the magic happens, the ultimate styling tool.
                        </p>
                    </div>

                    <div class="grid-item red">
                        <div class="item-skill">
                            <h5 class="skill-name">C#</h5>
                        </div>
                        <p class="skill-description">
                            My very first programing language I learned back in high school.
                            We go way back.
                        </p>
                    </div>

                    <div class="grid-item yellow">
                        <div class="item-skill">
                            <h5 class="skill-name">Assembley</h5>
                        </div>
                        <p class="skill-description">
                            To think I called C a classic a minute ago...
                        </p>
                    </div>

                    <div class="grid-item blue">
                        <div class="item-skill">
                            <h5 class="skill-name">Bootstarp</h5>
                        </div>
                        <p class="skill-description">
                            When I need it fast there is no place I rather go.
                        </p>
                    </div>

                    <div class="grid-item yellow">
                        <div class="item-skill">
                            <h5 class="skill-name">SQL</h5>
                        </div>
                        <p class="skill-description">
                            The best way to connect with your long time no see database (MySql Workbench)
                        </p>
                    </div>

                    <div class="grid-item yellow">
                        <div class="item-skill">
                            <h5 class="skill-name">PHP & Javascript</h5>
                        </div>
                        <p class="skill-description">
                            Still fresh with those but I am working on it!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="motto">
            <div class="container">
                <div class="quote-wrapper">
                    <blockquote class="quote">
                        In order to obtain something, something else of equal value must be lost. That's the law of
                        equivalent exchange.
                    </blockquote>
                    <cite class="quote-by">Edward Elric</cite>
                </div>
            </div>
        </section>

        <!-- <section class="work-experience" id="experience">
        <div class="container">
            <div class="heading-group">
                <span class="section-head-small">What I do</span>
                <h5 class="section-head-large">My Expertise</h5>
            </div>
        </div>
    </section> -->

        <section class="my-portfolio" id="portfolio">
            <div class="container">
                <div class="heading-group">
                    <span class="section-head-small">What can I show?</span>
                    <h5 class="section-head-large">My Projects</h5>
                </div>
                <div class="grid">
                    <div class="grid-item">
                        <img src="./images/Web_Project.JPG" alt="" class="portfolio-item-image">
                        <div class="portfolio-item-info">
                            <h5 class="project-name">Portfolio</h5>
                            <span class="project-type">Website</span>
                            <div class="info-cta">
                                <a href="https://ronberaha.site/" class="btn info-btn" target="_blank"
                                    rel="noopener noreferrer">Live Demo</a>
                                <a href="https://github.com/RonBless/My-Website" class="btn info-btn" target="_blank"
                                    rel="noopener noreferrer">Source Code</a>

                            </div>
                        </div>
                    </div>

                    <div class="grid-item">
                        <img src="./images/Store.JPG" alt="" class="portfolio-item-image">
                        <div class="portfolio-item-info">
                            <h5 class="project-name">Store<span>02</span></h5>
                            <span class="project-type">Java full stack app</span>
                            <div class="info-cta">
                                <a href="https://github.com/RonBless/Store-Project/archive/refs/heads/main.zip"
                                    class="btn info-btn">Live Demo</a>
                                <a href="https://github.com/RonBless/Store-Project" class="btn info-btn" target="_blank"
                                    rel="noopener noreferrer">Source Code</a>

                            </div>
                        </div>
                    </div>

                    <div class="grid-item">
                        <img src="./images/coming_soon.gif" alt="" class="portfolio-item-image">
                        <div class="portfolio-item-info">
                            <h5 class="project-name">Coming Soon...<span>03</span></h5>
                            <span class="project-type"></span>
                            <div class="info-cta">
                                <a href="#" class="btn info-btn">Live Demo</a>
                                <a href="#" class="btn info-btn">Source Code</a>

                            </div>
                        </div>
                    </div>

                    <div class="grid-item">
                        <img src="./images/coming_soon.gif" alt="" class="portfolio-item-image">
                        <div class="portfolio-item-info">
                            <h5 class="project-name">Coming Soon...<span>04</span></h5>
                            <span class="project-type"></span>
                            <div class="info-cta">
                                <a href="#" class="btn info-btn">Live Demo</a>
                                <a href="#" class="btn info-btn">Source Code</a>

                            </div>
                        </div>
                    </div>

                    <!-- <div class="load-more">
                <a href="#" class="btn btn-blue">Load more <i class="ion-refresh"></i></a>
            </div> -->
                </div>
            </div>

        </section>

        <section class="contact" id="contact">
            <div class="container">
                <span class="close_btn">&times;</span>
                <div class="heading-group">
                    <span class="section-head-small">Contact Me</span>
                    <h5 class="section-head-large">Let's work together</h5>
                </div>

                <div class="contact-info-wrapper">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="info-item-icon">
                                <i class="ion-ios-telephone"></i>
                            </div>
                            <div class="data-wrapper">
                                <span class="info-item-data">+972 54-6886555</span>
                            </div>
                        </div>
                    </div>


                    <form class="contact-form" action="contact.php" method="post">
                        <input type="text" id="name" name="name" class="input" placeholder="Full name" required>
                        <input type="text" id="email" name="email" class="input" placeholder="Email address" required>
                        <select class="select" id="subject" name="subject" required>
                            <option value="" disabled selected hidden>Subject</option>
                            <option value="message"> Message </option>
                            <option value="job"> Job offer </option>
                            <option value="report"> Report a bug </option>
                        </select>

                        <textarea id="tmm" name="tmm" rows="7"
                            placeholder="I would love to hear more from you..."></textarea>

                        <button class="btn btn-blue" type="submit" id="sumbit" name="sumbit">Sumbit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!--Link JS-->
    <script src="main.js"></script>
</body>

</html>