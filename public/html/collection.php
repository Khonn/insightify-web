<html>

    <head>
        <title>Collection - Insightify</title>
        <link rel="icon" href="/public/logo/symbol_blue.png">

        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/public/css/collection-title_entries.css">
        <link rel="stylesheet" href="/public/css/footer.css">

        <script src="/public/js/collection-title_entries.js" defer> </script>

        <script src="https://kit.fontawesome.com/ed08dfa832.js" crossorigin="anonymous"></script>
    </head>



    <body>

        <header>
            <div class="logo_container">
                <a href="">
                    <img class="logo" src="/public/logo/symbol+full_blue.png" alt="logo"></img>
                </a>
            </div>
                    
            <nav class="nav">
    
                <!-- <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>  -->
    
                <div class="nav_links_container">
    
                    <ul class="nav_list">
                        <li><a href="/public/html/dashboard.php">Dashboard</a></li>
                        <li><a href="/public/html/collection.php">Collection</a></li>
                        <li><a href="html_about.html">About</a></li>
                        <li><a href="html_tools.html">Tools</a></li>
                    </ul>
    
                </div>
    
                <div class="dropdown_container"> 
                    <button class="dropdown_button">
                        <img src="/img/profile.png" alt="Profile Icon">
                        <i class="fa-solid fa-angle-down"></i>
                    </button>
    
                    <div class="dropdown_content">
    
                        <div class="user_container">
                            <img src="/img/profile.png" alt="Profile Icon">
    
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
    
                        <a href="/public/html/login-signup.php" style=" margin: 8px 0px;">Log Out</a>
                    </div>
                </div>
    
                <!-- <div class="sidebar">  
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
                </div> -->
            </nav>
        </header>


            <p style="color: #505050; font-size: 20px; margin-left: 130px; margin-top: 100px;">Collection</p>

            <div class="row">
                <div class="column">
                    <div class="tab" style="margin-left: 130px;">
                        <button class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen">All</button>
                        <button class="tablinks" onclick="openCity(event, 'Favorites')">Favorites</button>
                        <button class="tablinks" onclick="openCity(event, 'Book')">Book</button>
                        <button class="tablinks" onclick="openCity(event, 'Others')">Others</button>
                    </div>
                </div>
                <div class="column">
                    <button class="buttonaddtitle" style="margin-left: 20px; margin-right: 20px;">Add Title </button>
                </div>
                <div class="column">
                    <div style="border-bottom: 0.5px solid #9E9E9E;"></div>
                </div>
              </div>



            <div id="All" class="tabcontent">
                <div class="rowall">
                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>

                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>

                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>
                  </div>


                  <div class="rowall">
                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>

                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>


                    <div class="columnall">
                        <div class="card add-card">
                            <img style="height: 100px; width: 100px; padding-top: 90px;" src="/img/addcard.png">
                            <button style="padding-bottom: 80px;">Add Title</button>
                        </div>
                    </div>

                  </div>
            </div>
            
            <div id="Favorites" class="tabcontent">
            </div>
            
            <div id="Book" class="tabcontent">
            </div>

            <div id="Others" class="tabcontent">
            </div>

        
    </body>




</html>