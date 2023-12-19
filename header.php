<?php
?>
<style>
    #header.onscroll nav {top: 0;background-color: var(--primary-color) !important;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);}
    .navbar-nav a.active,.navbar-nav a:hover {color: #9C07DC !important;font-weight: 800;border-bottom: 2px solid #9C07DC;width:fit-content}
    .classic-language-bar .dropdown-menu ol {list-style-type: none;padding-left: 0px;margin-bottom: 0px;}
    .classic-language-bar .dropdown-menu ol li {padding: 0px 0;}
    .classic-language-bar .dropdown-menu a {padding: 10px 20px !important;}
    .navpadding {margin: 0;}
    .navpadding {padding: 0px 100px;}
    .classic-language-bar .dropdown button {padding: 10px 15px;}
    @media (max-width: 1023px) {
        .navbar-toggler {position: absolute;right: 14vw;top:0;}
        .navbar-toggler:focus {text-decoration: none;outline: 0;box-shadow: 0 0 0 transparent;}
        .top-nav {position: relative !important;padding: 0;}
        .navpadding {padding: 0px 10px;}
    }
    @media (max-width: 350px) {
        .navbar-toggler {position: absolute;right: 18vw;top:0;}
    }
    @media (max-width: 1025px) and (min-width: 1024px) {
        .navbar a, .navbar a:focus {margin: 10px 10px;font-size: 14px;}
    }
</style>

<header id="header" class="align-items-center">
    <nav class="navbar navbar-expand-lg top-nav nav-bg">
        <div class="container-fluid justify-content-between navpadding">
            <a class="navbar-brand logo" href="index.php"><img src="./assets/img/logo.png" class="img-fluid" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <div class="classic-language-bar d-block d-sm-block d-lg-none">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?xml version="1.0" ?><svg aria-labelledby="languageIconTitle" color="#02167F" fill="none" height="32px" role="img" stroke="#02167F" stroke-linecap="square" stroke-linejoin="miter" stroke-width="1" viewBox="0 0 24 24" width="32px" xmlns="http://www.w3.org/2000/svg"><title id="languageIconTitle"/><circle cx="12" cy="12" r="10"/><path d="M12,22 C14.6666667,19.5757576 16,16.2424242 16,12 C16,7.75757576 14.6666667,4.42424242 12,2 C9.33333333,4.42424242 8,7.75757576 8,12 C8,16.2424242 9.33333333,19.5757576 12,22 Z" stroke-linecap="round"/><path d="M2.5 9L21.5 9M2.5 15L21.5 15" stroke-linecap="round"/></svg>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <ol>
                            <li>
                                <a href="index.php" class="justify-content-start active">
                                    <span><img src="assets/img/united-states-of-america.png" class="img-fluid" style="width:24px;">&nbsp;&nbsp;&nbsp;&nbsp;ENGLISH</span>
                                </a>
                            </li>
                            <li>
                                <a href="ar/" class="justify-content-start"><img src="assets/img/united-arab-emirates.png" class="img-fluid" style="width:24px;">&nbsp;&nbsp;&nbsp;&nbsp;العربية</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div> 
            
            <div class="collapse navbar-collapse justify-content-end w-75" id="navbarNavAltMarkup">
                <div class="navbar-nav justify-content-end w-100 text-center">
                    <a class="nav-link" href="solutions.php">OUR SOLUTIONS</a>
                    <a class="nav-link" href="about.php">ABOUT</a>
                    <a class="nav-link" href="pricing.php">PRICING</a>
                    <a class="nav-link " href="blog.php">BLOG</a>
                    <a class="nav-link " href="blognewsline.php">IN THE NEWS</a>
                    <a class="nav-link" href="contact.php">CONTACT</a>     
                    <li class="classic-language-bar d-block d-lg-block d-none">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?xml version="1.0" ?><svg aria-labelledby="languageIconTitle" color="#02167F" fill="none" height="38px" role="img" stroke="#02167F" stroke-linecap="square" stroke-linejoin="miter" stroke-width="1" viewBox="0 0 24 24" width="38px" xmlns="http://www.w3.org/2000/svg"><title id="languageIconTitle"/><circle cx="12" cy="12" r="10"/><path d="M12,22 C14.6666667,19.5757576 16,16.2424242 16,12 C16,7.75757576 14.6666667,4.42424242 12,2 C9.33333333,4.42424242 8,7.75757576 8,12 C8,16.2424242 9.33333333,19.5757576 12,22 Z" stroke-linecap="round"/><path d="M2.5 9L21.5 9M2.5 15L21.5 15" stroke-linecap="round"/></svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <ol>
                                    <li>
                                        <a href="index.php" class="justify-content-start active">
                                            <span><img src="assets/img/united-states-of-america.png" class="img-fluid" style="width:24px;">&nbsp;&nbsp;&nbsp;&nbsp;ENGLISH</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ar/" class="justify-content-start"><img src="assets/img/united-arab-emirates.png" class="img-fluid" style="width:24px;">&nbsp;&nbsp;&nbsp;&nbsp;العربية</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </li>    
                </div>
            </div>
        </div>
    </nav>
</header>