<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile - Music Beats</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/ITC_Busorama_500.font.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        a {
            color: white;
            text-decoration: none;
        }
        .profile-header img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .profile-section {
            margin-bottom: 20px;
        }
        .profile-section h3 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .profile-section ul {
            list-style-type: none;
            padding: 0;
        }
        .profile-section ul li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body id="page1">
    <!-- START PAGE SOURCE -->
    <div class="wrap">
        <header>
            <div class="container">
                <h1><a href="#">Music Beats</a></h1>
                <nav>
                    <ul>
                        <li class="m1"><a href="/songs"><span>Songs</span></a></li>
                        <li class="m2"><a href="/playlists"><span>Playlists</span></a></li>
                        <li class="m2"><a href="/profile" class="active"><span>Profile</span></a></li>
                        <li class="m3"><a href="/contribute"><span>Contribute</span></a></li>
                        <li class="m4"><a href="/about"><span>About Us</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="container">
            <section id="content">
                <div class="wrapper">
                    <article class="col-1 profile-header">
                        <img src="images/profile-picture.jpg" alt="Profile Picture">
                        <h2>User Name</h2>
                        <p>Email: user@example.com</p>
                        <p>Phone: (123) 456-7890</p>
                    </article>
                    <article class="col-2">
                        <div class="profile-section">
                            <h3>Personal Information</h3>
                            <p>Full Name: John Doe</p>
                            <p>Date of Birth: January 1, 1990</p>
                            <p>Address: 123 Main St, Anytown, USA</p>
                            <p>Gender: Male</p>
                        </div>
                        <div class="profile-section">
                            <h3>Account Settings</h3>
                            <a href="/change-password">Change Password</a>
                            <a href="/update-info">Update Personal Information</a>
                        </div>
                        <div class="profile-section">
                            <h3>Your Activities</h3>
                            <h4>Liked Songs</h4>
                            <ul>
                                <li><a href="#">Song Title 1</a></li>
                                <li><a href="#">Song Title 2</a></li>
                            </ul>

                            <h4>Commented Songs</h4>
                            <ul>
                                <li><a href="#">Song Title 3</a></li>
                                <li><a href="#">Song Title 4</a></li>
                            </ul>

                            <h4>Rated Songs</h4>
                            <ul>
                                <li><a href="#">Song Title 5</a></li>
                                <li><a href="#">Song Title 6</a></li>
                            </ul>

                            <h4>Your Playlists</h4>
                            <ul>
                                <li><a href="#">Playlist Title 1</a></li>
                                <li><a href="#">Playlist Title 2</a></li>
                            </ul>
                        </div>
                        <div class="profile-section">
                            <h3>Your Contributions</h3>
                            <p>Contributed Songs:</p>
                            <ul>
                                <li><a href="#">Song Contribution 1</a> - Status: Pending</li>
                                <li><a href="#">Song Contribution 2</a> - Status: Approved</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </section>
            <div class="clear"></div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="cont-bot"></div>
            <div class="footerlink">
                <p class="lf">Copyright &copy; 2023 <a href="#">Music Beats</a> - All Rights Reserved</p>
                <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
                <div style="clear:both;"></div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        Cufon.now();
    </script>
    <!-- END PAGE SOURCE -->
</body>

</html>
