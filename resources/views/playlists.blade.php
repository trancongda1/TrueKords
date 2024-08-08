<!DOCTYPE html>
<html lang="en">

<head>
    <title>Music Beats - Playlists</title>
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
        
         body, h1, h2, p, ul, li {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
        }

        header .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        header h1 a {
            color: #007bff;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            padding: 0;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a.active {
            color: #0056b3;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-direction: row;
        }

        aside {
            width: 25%;
            margin-right: 20px;
        }

        aside h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        aside .news {
            list-style: none;
            padding: 0;
        }

        aside .news li {
            margin-bottom: 15px;
        }

        aside .news a {
            color: #007bff;
            text-decoration: none;
        }

        section#content {
            width: 75%;
        }

        article {
            margin-bottom: 20px;
        }

        article h2 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        article img {
            max-width: 100%;
            height: auto; /* Để giữ tỷ lệ khung hình */
            object-fit: cover; /* Để ảnh không bị biến dạng */
        }

        .p1, .p0 {
            margin-bottom: 20px;
        }

        .list {
            list-style: none;
            padding: 0;
        }

        .list li {
            margin-bottom: 15px;
        }

        .list a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background-color: #fff;
            border-top: 1px solid #ddd;
            padding: 20px 0;
            text-align: center;
        }

        footer .footerlink p {
            font-size: 14px;
            margin: 0;
        }

        footer .footerlink a {
            color: #007bff;
            text-decoration: none;
        }
        
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="#">Music Beats</a></h1>
            <nav>
                <ul>
                    <li><a href="/songs" class="active"><span>Songs</span></a></li>
                    <li><a href="/playlists"><span>Playlists</span></a></li>
                    <li><a href="/profile"><span>Profile</span></a></li>
                    <li><a href="/contribute"><span>Contribute</span></a></li>
                    <li><a href="/about"><span>About Us</span></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <aside>
            <div class="inside">
                <h2>Latest News</h2>
                <ul class="news">
                    <li><a href="#">June 30, 2023</a><strong>New Chord Progressions Added</strong> Explore our latest collection of chord progressions to enhance your musical compositions.</li>
                    <li><a href="#">June 14, 2023</a><strong>Updated Song Charts</strong> Check out the updated song charts featuring popular tracks and their chord structures.</li>
                    <li><a href="#">May 29, 2023</a><strong>New Tutorials Available</strong> Learn new techniques with our latest tutorials on playing and composing music.</li>
                </ul>
            </div>
        </aside>

        <section id="content">
            <div class="wrapper">
                <article class="col-1">
                    <h2>Explore Our Guitar Chords and Sheet Music</h2>
                    <!-- Thay thế ảnh bên dưới bằng ảnh liên quan đến guitar -->
                    <img src="images/guitar1.jpg" alt="Guitar Chords">
                    <p class="p1">At Music Beats, we offer a comprehensive library of guitar chord progressions and sheet music to inspire and support musicians of all levels. Whether you're an aspiring songwriter or an experienced composer, our resources can help you find the perfect chords for your next project.</p>
                    <p class="p0">Browse our extensive collection of guitar chord charts, explore various musical styles, and find detailed sheet music to guide you through your musical journey. Our platform is designed to provide you with the tools you need to enhance your creativity and improve your musical skills.</p>
                </article>

                <article class="col-2">
                    <h2>Recent Articles</h2>
                    <ul class="list">
                        <li><strong>Understanding Guitar Chord Progressions</strong> Learn the fundamentals of guitar chord progressions and how they shape your music. Discover the theory behind popular progressions and how to apply them in your compositions. <a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><strong>Sheet Music for Guitarists</strong> Get started with our guitarist-friendly sheet music and tutorials. Perfect for those new to reading music and looking to improve their skills. <a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><strong>Advanced Guitar Techniques</strong> Explore advanced techniques for writing compelling guitar music. From complex chord changes to intricate melodies, our articles provide valuable insights for seasoned guitarists. <a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                        <li><strong>Popular Songs and Their Guitar Chords</strong> Discover the guitar chords used in popular songs and how to recreate them. Analyze the chord structures of famous tracks and learn how to incorporate them into your own music. <a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                    </ul>
                </article>
            </div>
        </section>

        <div class="clear"></div>
    </div>

    <footer>
        <div class="container">
            <div class="footerlink">
                <p class="lf">Copyright &copy; 2023 <a href="#">Music Beats</a> - All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>
