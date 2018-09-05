<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0">
        <meta name="description" content="Matt Gabriele is a Computer Engineering graduate who currently works as a Software Engineer.">
        
        <link rel="stylesheet" type="text/css" href= "vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href= "vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href= "resources/css/queries.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href = "resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <title>Matt Gabriele</title>
        
        
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#00a300">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

    
    </head>
    
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logo.png" alt="Matt's logo" class = "logo" id="top">
                    <ul class="main-nav">
                        <li><a href="#aboutMe">My Background</a></li>
                        <li><a href="http://platinumcounter.com/">My Websites</a></li>
                        <li><a href="#form">Contact Me</a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Hello! This is Matt Gabriele! </h1>
            </div>
        
        </header>
        
        <section class="section-features" id ="aboutMe">
            <div class="row">
                
                <h2>Who am I?</h2>
                <p class = "long-copy">
                I am a Computer Engineering gradute who is currently a Software Engineer at Alteris Group. My passion for programming started in High School and continued to grow while I worked at CIBC and IBM during University.    
                <br>
                <br>
                Today, I now spend my free time learning new frameworks and making fun side projects. I strive to keep developing and challenging my programming skills even though I have now graduated from school.

                </p>
            </div>

        </section>
        
        <section class="section-testimonials">
            <div class= "row">
                <h2>Quick References</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2">
                    <blockquote>
                        Matt is very hard working and reliable. He always completed his assigned task on or ahead of schedules. He is very positive and a good listener and motivated to learn. 
                       
                        <cite>Ivy Ho, IBM</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-2">
                    <blockquote>
                        Matthew was an absolute pleasure to work with this summer. He is a hard worker and completely exceeded our expectations with his project. I couldn't be more pleased with the quality of his work.
                        
                        <cite>Lana Robinson, CIBC</cite>
                    </blockquote>
                </div>
            </div>
        </section>
        
        <section class="section-form" id="form">
            <div class="row">
                <h2 id="voice">Contact Me!</h2>
            </div>
            <div class= "row">
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">
                        
                        <?php
                            if($_GET['success']==1){
                                echo
                                    "<div class=\"form-messages success\">
                                        Thank you! Your message has been sent.
                                    </div>";
                            }
                            if($_GET['success']==-1){
                                echo
                                   "<div class=\"form-messages error\">
                                    Oops! Something went wrong!
                                    </div>";
                            }
                        ?>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How do you know me?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value ="linkedin" selected>LinkedIn</option>
                                <option value ="facebook">Facebook</option>
                                <option value ="search-engine">Search Engine</option>
                                <option value ="friend">Friend</option>
                                <option value ="ad">Ad</option>
                                <option value ="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>What's up?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value ="Send message!">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#top">Back to Top</a></li>
                        <li><a href="http://www.platinumcounter.com/">Matt's Side Project</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="https://www.linkedin.com/in/matthew-gabriele/"><i class="ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="row">
                    <p>
                        All content was created using CSS, HTML, and JavaScript
                    </p>
                </div>
            </div>
        
        </footer>
        
    </body>
    
</html>