<?php

echo "Hello Redo!";

?>

<!DOCTYPE html>
<html>
<head>


    <title>Dashboard - Insightify</title>
    <link rel="icon" href="logo/symbol_blue.png">

    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/ed08dfa832.js" crossorigin="anonymous"></script>

    <script src="dropdown.js" defer> </script>
    
</head>

<body>
    
    <header>
        <div class="logo_container">
            <a href="">
                <img class="logo" src="insightify web logo.png" alt="logo"></img>
            </a>
        </div>
                
        <nav class="nav">

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div> 

            <div class="nav_links_container">

                <ul class="nav_list">
                    <li><a href="html_dashboard.html">Dashboard</a></li>
                    <li><a href="html_collection.html">Collection</a></li>
                    <li><a href="html_gallery.html">About</a></li>
                    <li><a href="html_contact.html">Tools</a></li>
                </ul>

            </div>

            <div class="dropdown_container"> 
                <button class="dropdown_button">
                    <img src="profile.png" alt="Profile Icon">
                    <i class="fa-solid fa-angle-down"></i>
                </button>

                <div class="dropdown_content">

                    <div class="user_container">
                        <img src="profile.png" alt="Profile Icon">

                        <div class="user_info_dropdown">
                            <p style="font-weight: 700; font-size: 20px;"> @red.pogi</p>
                            <p class="email_dropdown">email@gmail.com</p>
                        </div>
                        
                    </div>

                    <hr class="divider1">

                    <a href="store_link_2">Account Settings</a>
                    <a href="store_link_3">About Insightify</a> 
                    <a href="store_link_3">Get Insightify App</a>
                    <a href="store_link_2">Privacy Policy</a>
                    <a href="store_link_3">Contact Us</a> 
                    <a href="store_link_3">Feedback</a>
                    <a href="store_link_3">Terms and Condition</a>

                    <hr class="divider2">

                    <a href="html_login-signup.html" style="font-size: 19px; margin: 8px 0px;">Log Out</a>
                </div>
            </div>

            <div class="sidebar">  
                <div class="nav_links_container">

                    <ul class="nav_list">
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="collection.html">Collection</a></li>
                        <li><a href="html_gallery.html">About</a></li>
                        <li><a href="html_contact.html">Merch</a></li>
                    </ul>
                
                    <div class="download_container">
                        <a class="download_button" href="html_contact.html">DOWNLOAD APP</a> 
                    </div>

                </div>
            </div>
        </nav>

        
        
        
    </header>

    <div class="content">

        <h1 class="welcome">Welcome back, Chingu</h1>


        <div class="stat_card">
            <div class="container">
                
                <div class="stat_container">
                    <h2 class="desc">Titles</h2>
                    <h1 class="figure">001</h1>
                </div>
                <div class="stat_container">
                    <h2 class="desc">Entries</h2>
                    <h1 class="figure">001</h1>
                </div>
                <div class="stat_container">
                    <h2 class="desc">Favorites</h2>
                    <h1 class="figure">001</h1>
                </div>

                <img src="img_dashboard_book.png" alt="studying_girl">
            </div>
            
        </div>


        <h1 class="feature">Features</h1>
        <div class="feature_card">
            <div class="feat_container">
                <div class="feat_btn">
                    <img class="icon" src="graphics/paraphrase1.png" alt="icon">
                    <div>
                        <h1 class="name">Paraphraser</h1>
                        <h2 class="desc">rewrite sentences</h2> 
                    </div>
                    <img class="arrow" src="graphics/arrow.png" alt="arrow">
                </div>
                <div class="feat_btn">
                    <img class="icon" src="graphics/translate.png" alt="icon">
                    <div>
                        <h1 class="name">Translator</h1>
                        <h2 class="desc">change language</h2> 
                    </div>
                    <img class="arrow" src="graphics/arrow.png" alt="arrow">
                </div>
                <div class="feat_btn">
                    <img class="icon" src="graphics/cite.png" alt="icon">
                    <div>
                        <h1 class="name">Cite Generator</h1>
                        <h2 class="desc">cite sources</h2> 
                    </div>
                    <img class="arrow" src="graphics/arrow.png" alt="arrow">
                </div>
                
            </div>
            <div class="feat_container">
                <div class="feat_btn">
                    <img class="icon" src="graphics/simplify.png" alt="icon">
                    <div>
                        <h1 class="name">Simplifier</h1>
                        <h2 class="desc">rewrite sentences</h2> 
                    </div>
                    <img class="arrow" src="graphics/arrow.png" alt="arrow">
                </div>
                <div class="feat_btn">
                    <img class="icon" src="logo/symbol_blue.png" alt="icon">
                    <div>
                        <h1 class="name">Feature</h1>
                        <h2 class="desc">description</h2> 
                    </div>
                    <img class="arrow" src="graphics/arrow.png" alt="arrow">
                </div>
                <div class="feat_btn">
                    <img class="icon" src="logo/symbol_blue.png" alt="icon">
                    <div>
                        <h1 class="name">Feature</h1>
                        <h2 class="desc">description</h2> 
                    </div>
                    <img class="arrow" src="graphics/arrow.png" alt="arrow">
                </div>
                
            </div>
        </div>
        <div class="other_card">
            <div class="news_main">
                <h1 class="news">News</h1>
                <img src="graphics/ad.png" alt="ad">
            </div>
            <div class="recos_main">
                <h1 class="reco">Recommendations</h1>
                <img src="graphics/reco.png" alt="reco">
            </div>
        </div>
    </div>


</body>

<style>

    

</style>

</html><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>