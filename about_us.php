<?php 
    include('admin/Class/adminBack.php');
    $obj = new adminBack();
    $ctg = $obj->p_display_category();
    $ctgDatas = array();
    while($data=mysqli_fetch_assoc($ctg)){
        $ctgDatas[]= $data;
    }
    if(isset($_POST['user_register_btn'])){
        $msg = $obj->user_register($_POST);
    }
?>

<?php include_once('includes/head.php')?>

<body class="biolife-body">
    <?php include_once('includes/preloader.php')?>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        <?php include_once('includes/header_top.php')?>
        <?php include_once('includes/header_middle.php')?>
        <?php include_once('includes/header_bottom.php')?>
    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <div class="welcome-us-block">
                <div class="container">
                    <h4 class="title">Welcome to Biolife store!</h4>
                    <div class="text-wraper">
                        <p class="text-info">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
                            of the more obscure Latin words, consectetur,</p>
                        <p class="qt-text">“There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form.”</p>
                    </div>
                </div>
            </div>

            <div class="why-choose-us-block">
                <div class="container">
                    <h4 class="box-title">Why Choose us</h4>
                    <b class="subtitle">Natural food is taken from the world's most modern farms with strict safety
                        cycles</b>
                    <div class="showcase">
                        <div class="sc-child sc-left-position">
                            <ul class="sc-list">
                                <li>
                                    <div class="sc-element color-01">
                                        <span class="biolife-icon icon-fresh-drink"></span>
                                        <div class="txt-content">
                                            <span class="number">01</span>
                                            <b class="title">Always Fresh</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure
                                                always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-02">
                                        <span class="biolife-icon icon-healthy-about"></span>
                                        <div class="txt-content">
                                            <span class="number">02</span>
                                            <b class="title">Overall Healthy</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure
                                                always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-03">
                                        <span class="biolife-icon icon-green-safety"></span>
                                        <div class="txt-content">
                                            <span class="number">03</span>
                                            <b class="title">Encironmental Safety</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure
                                                always fresh</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sc-child sc-center-position">
                            <figure><img src="assets/images/about-us/bn04.jpg" alt="" width="622" height="656"></figure>
                        </div>
                        <div class="sc-child sc-right-position">
                            <ul class="sc-list">
                                <li>
                                    <div class="sc-element color-04">
                                        <span class="biolife-icon icon-capacity-about"></span>
                                        <div class="txt-content">
                                            <span class="number">04</span>
                                            <b class="title">Antioxidant Capacity</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure
                                                always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-05">
                                        <span class="biolife-icon icon-arteries-about"></span>
                                        <div class="txt-content">
                                            <span class="number">05</span>
                                            <b class="title">Good For Arteries</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure
                                                always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-06">
                                        <span class="biolife-icon icon-title"></span>
                                        <div class="txt-content">
                                            <span class="number">06</span>
                                            <b class="title">Quality Standards</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure
                                                always fresh</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-block">
                <div class="container">
                    <h4 class="box-title">Testimonial</h4>
                    <ul class="testimonial-list biolife-carousel"
                        data-slick='{"arrows":false,"dots":true,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-01.png" alt="" width="217"
                                            height="217"></figure>
                                </div>
                                <p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look like readable English. Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <b class="name">Ms. Jay Doe</b>
                                <b class="title">Manager, Mycrosoft co.</b>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-02.png" alt="" width="217"
                                            height="217"></figure>
                                </div>
                                <p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look like readable English. Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <b class="name">Mr. Braun</b>
                                <b class="title">Sales Manager</b>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-90percent"></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-03.png" alt="" width="217"
                                            height="217"></figure>
                                </div>
                                <p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look like readable English. Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <b class="name">Ms. Danien</b>
                                <b class="title">Marketing</b>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-100percent"></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-01.png" alt="" width="217"
                                            height="217"></figure>
                                </div>
                                <p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look like readable English. Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <b class="name">Ms. Jay Doe</b>
                                <b class="title">Manager, Mycrosoft co.</b>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-02.png" alt="" width="217"
                                            height="217"></figure>
                                </div>
                                <p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look like readable English. Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <b class="name">Mr. Braun</b>
                                <b class="title">Sales Manager</b>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-90percent"></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testml-elem">
                                <div class="avata">
                                    <figure><img src="assets/images/about-us/author-03.png" alt="" width="217"
                                            height="217"></figure>
                                </div>
                                <p class="desc">The point of using Lorem Ipsum is that it has a more-or-less normal
                                    distribution of letters, as opposed to using 'Content here, content here', making it
                                    look like readable English. Many desktop publishing packages and web page editors
                                    now use Lorem Ipsum as their default model text.</p>
                                <b class="name">Ms. Danien</b>
                                <b class="title">Marketing</b>
                                <div class="rating">
                                    <p class="star-rating"><span class="width-100percent"></span></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    </div>

    <!-- FOOTER -->
    <?php include_once('includes/footer.php')?>

    <!--Footer For Mobile-->
    <?php include_once('includes/mobile_footer.php')?>
    <?php include_once('includes/mobile_global_block.php')?>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>
    <?php include_once('includes/scripts.php')?>
</body>

</html>