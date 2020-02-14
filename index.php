<?php 
    include_once('login/config.php');    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knife</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery js -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- particle js -->
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- pts js -->
    <!-- <script src="js/pts.js"></script> -->
    <!-- custom js -->
    <script src="js/main.js"></script>
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
</head>

<body>
    <!-- START Header -->

    <header id="header">
        <div id="particles-js">
            <div class="bio">
                <h1 class="site-url">knife</h1>
                <h2 class="para pt-2">Hello World! I'm <span class="para-admin-name">Rakib Hossain</span></h2>
                <h2 class="para">I'm a full-stack web developer</h2>
                <div class="pt-3 pb-5"><a href="#about"><button class="view-work-btn">view my work <i
                                class="fa fa-arrow-right"></i></button></a></div>

            </div>
        </div>
        <div class="menu-container pt-2 pb-2 sticky-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active-link">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#blog">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- END Header -->

    <!-- START About -->

    <div class="about-container mt-3 mb-3" id="about">
        <div class="container">
            <div class="row">
                <div class="about-text">
                    <h1>About</h1>
                </div>
            </div>
            <div class="row mt-1 mt-md-5">
                <div class="col-md-6 p-5">
                    <div class="admin-image">
                        <div class="hexagon">
                            <div class="hexTop"></div>
                            <div class="hexBottom"></div>
                        </div>
                        <div class="biodata text-center">
                            <div>
                                <h3>Who's this guy?</h3>
                            </div>
                            <div>
                                I'm a Full-Stack Web Developer. <br>
                                I completed Diploma in Computer Science and currently studying B.Tech in Computer
                                Science from the Maulana Abul Kalam Azad University of Technology.
                            </div>
                            <div class="admin-social-icons">
                                <a href="https://www.github.com/iamrk1811"><i class="fa fa-github-square"></i></a>
                                <a href="https://www.instagram.com/rakibrk1811"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/rakibrk1811"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.facebook.com/rakibrk1811"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-1 pt-md-2">
                    <div class="chart-div p-3">
                        <div class="row skills mb-2">
                            <h2>Skills</h2>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">HTML</div>
                            <div class="column-right">
                                <div class="per80"></div>
                                <div class='pernum'>80%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">CSS</div>
                            <div class="column-right">
                                <div class="per80"></div>
                                <div class='pernum'>80%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">JavaScript</div>
                            <div class="column-right">
                                <div class="per85"></div>
                                <div class='pernum'>85%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">Python</div>
                            <div class="column-right">
                                <div class="per90"></div>
                                <div class='pernum'>90%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">Java</div>
                            <div class="column-right">
                                <div class="per90"></div>
                                <div class='pernum'>90%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">PHP</div>
                            <div class="column-right">
                                <div class="per70"></div>
                                <div class='pernum'>70%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">C++/C</div>
                            <div class="column-right">
                                <div class="per80"></div>
                                <div class='pernum'>80%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">MySQL</div>
                            <div class="column-right">
                                <div class="per75"></div>
                                <div class='pernum'>75%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">Django</div>
                            <div class="column-right">
                                <div class="per80"></div>
                                <div class='pernum'>80%</div>
                            </div>
                        </div>
                        <div class="row chart-row">
                            <div class="column-left">Bootstrap</div>
                            <div class="column-right">
                                <div class="per85"></div>
                                <div class='pernum'>85%</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- END About -->

    <!-- START Portolfio -->

    <section class="portfolio-container mt-2 mb-5" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="portfolio-text">
                    <h1>Portfolio</h1>
                </div>
            </div>
            <div class="button-group pt-3 pb-3 text-center">
                <button type="button" class="active-btn" id="btn1" data-filter="*"
                    onclick="filter_cards(this)">All</button>
                <button type="button" data-filter=".php" onclick="filter_cards(this)">PHP</button>
                <button type="button" data-filter=".nodejs" onclick="filter_cards(this)">NodeJs</button>
                <button type="button" data-filter=".angularjs" onclick="filter_cards(this)">AngularJs</button>
                <button type="button" data-filter=".wordpress" onclick="filter_cards(this)">Wordpress</button>
            </div>

            <div class="row grid pl-2 pr-2">
                <div class="col-lg-4 col-md-6 col-sm-12 element-item php">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p1.jpg">
                                <img src="./img/portfolio/p1.jpg" alt="portfolio-1" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item nodejs">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p2.jpg">
                                <img src="./img/portfolio/p2.jpg" alt="portfolio-2" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item php">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                                <img src="./img/portfolio/p3.jpg" alt="portfolio-3" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item angularjs">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                <img src="./img/portfolio/p4.jpg" alt="portfolio-4" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item wordpress">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                                <img src="./img/portfolio/p5.jpg" alt="portfolio-5" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item nodejs">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p6.jpg">
                                <img src="./img/portfolio/p6.jpg" alt="portfolio-6" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item wordpress">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p7.jpg">
                                <img src="./img/portfolio/p7.jpg" alt="portfolio-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item php">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                                <img src="./img/portfolio/p8.jpg" alt="portfolio-8" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item angularjs">
                    <div class="our-project" onmouseout="project_details_animate_mouse_leave(this)"
                        onmouseover="project_details_animate_mouse_hover(this)">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                                <img src="./img/portfolio/p9.jpg" alt="portfolio-9" class="img-fluid">
                            </a>
                        </div>
                        <div class="project-short-information-container d-none">
                            <div class="project-short-information">
                                <div class="project-short-information-title">
                                    <h5>JavaScript Demo</h5>
                                </div>
                                <div class="project-short-information-used-technology">
                                    <p>JavaScript , MySQL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  END Portfolio  -->

    <!-- START Blog -->

    <div class="blog-container">
        <div class="container">
            <div class="row">
                <div class="blog-text">
                    <h1>Blog</h1>
                </div>
            </div>
            <div class="row mt-3 blog-post">

                <?php
                    $sql = "SELECT * FROM knife_blog_posts ORDER BY blog_id DESC LIMIT 4";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {   ?>



                <div class="col-md-3" id="independent-blog">
                    <a href="single-blog.php?id=<?php echo $row['blog_id'] ;?>">
                        <div class="blog" onmouseover="blur_other_blog(this)" onmouseout="clear_other_blog(this)">
                            <div class="blog-img">
                                <img src="<?php echo str_replace("../","",$row['blog_thumbnail']); ?>" class="img-fluid"
                                    alt="blog">
                            </div>
                            <div class="blog-title">
                                <h5><?php echo $row['blog_title']; ?></h5>
                            </div>
                            <div class="blog-date">
                                <p><?php echo $row['blog_post_date']; ?></p>
                            </div>
                            <div class="hr"></div>
                            <div class="blog-description">
                                <p><?php echo $row['blog_description']; ?></p>
                            </div>
                            <div class="blog-overlay"></div>
                        </div>
                    </a>
                </div>


                <?php }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- END Blog -->

    <!-- START Contact -->

    <div class="contact-container mt-3" id="contact">
        <div class="container pt-3 pb-3">
            <div class="contact-text">
                <h1>Contact</h1>
                <p>Feel free to contact Rakib</p>
            </div>
        </div>
        <div class="contact">
            <div class="contact-form">
                <form action="#" method="GET">
                    <input class="contact-form-input" type="text" placeholder="Name"> <br>
                    <input class="contact-form-input" type="email" placeholder="Enter Email"> <br>
                    <textarea class="contact-form-input" name="contact-msg" id="contact-msg" cols="40" rows="7"
                        placeholder="Your Message"></textarea> <br>
                    <button type="submit" class="contact-submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- END Contact -->

    <!-- START Footer -->

    <footer>
        <div class="go-to-top">
            <div class="up-arrow">
                <a href="#header"><i class="fa fa-arrow-up"></i></a>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-text text-center">
                <h6>Designed by <span>Rakib Hossain</span> &copy; <?php echo date("Y"); ?></h6>
            </div>
        </div>
    </footer>

    <!-- END Footer -->

</body>

</html>