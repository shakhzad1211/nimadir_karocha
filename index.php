
<?php
    include '_database/database.php';
    include 'dae.php';
    // $number1="SELECT COUNT(Article_id) FROM article";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Deus | Home 1 Default</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='../../../css-1.css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light style-default style-rounded">



    <main class="main oh" id="main">

        <!-- Top Bar -->
        <div class="top-bar d-none d-lg-block">
            <div class="container">
                <div class="row">

                    <!-- Top menu -->
                    <div class="col-lg-6">
                        <ul class="top-menu">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Socials -->
                    <div class="col-lg-6">
                        <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                            </a>
                            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                                <i class="ui-twitter"></i>
                            </a>
                            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                                <i class="ui-google"></i>
                            </a>
                            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                            </a>
                            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                                <i class="ui-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end top bar -->


        <!-- Navigation -->
        <header class="nav">

            <div class="nav__holder nav--sticky">
                <div class="container relative">
                    <div class="flex-parent">

                        <!-- Side Menu Button -->
                        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
            <span class="nav-icon-toggle__box">
              <span class="nav-icon-toggle__inner"></span>
            </span>
          </button>

                        <!-- Logo -->
                        <a href="index.php" class="logo">
                            <img class="logo__img" src="img/logo_default.png" srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">
                        </a>

                        <!-- Nav-wrap -->
                        <nav class="flex-child nav__wrap d-none d-lg-block">
                            <ul class="nav__menu">

                                <li class="nav_dropdown ">
                                    <a href="index.php">Home</a>

                                </li>
                                <li class="nav_dropdown">
                                    <a href="categories.php">Categories</a>
                                </li>


                                <li class="nav_dropdown">
                                    <a href="#">Archives</a>
                                </li>

                                <li class="nav_dropdown">
                                    <a href="about.php">About journal</a>
                                </li>
                                <li class="nav_dropdown">
                                    <a href="contact.php">Contact us</a>
                                </li>

                                <li class="nav__dropdown">
                                    <a href="#">language</a>
                                    <ul class="nav__dropdown-menu">
                                        <li><a href="#">UZ</a></li>
                                        <li><a href="#">ENG</a></li>
                                        <li><a href="#">RU</a></li>

                                    </ul>
                                </li>

                            </ul>
                            <!-- end menu -->
                        </nav>
                        <!-- end nav-wrap -->

                        <!-- Nav Right -->
                        <div class="nav__right">

                            <!-- Search -->
                            <!-- <div class="nav__right-item nav__search">
                                <form role="search" method="get" class="search-form relative">
                                    <input type="search" class="widget-search-input mb-0" placeholder="Search an article">
                                    <button type="submit" class="widget-search-button btn btn-color"><i class="ui-search widget-search-icon"></i></button>
                                </form>
                            </div> -->

                        </div>
                        <!-- Search -->
                        <div class="nav__right-item nav__search">

                        </div>

                        <!-- end nav right -->

                    </div>
                    <!-- end flex-parent -->
                </div>
                <!-- end container -->

            </div>
        </header>
        <!-- end navigation -->


        <!-- Trending Now -->
        <div class="container"><br>
            <form role="search" action="search-result.php" method="post" class="search-form relative">
                <input type="search" class="widget-search-input mb-0" placeholder="Search an article">
                <button type="submit" class="widget-search-button btn btn-color" name="search-form"><i class="ui-search widget-search-icon"></i></button>
            </form>
        </div>

        <!-- Featured Posts Grid -->
        <section class="featured-posts-grid">
            <div class="container">
                <div class="row row-8">

                    <div class="col-lg-6">

                        <!-- Small post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                        <?php
        $sql = "SELECT * FROM article  ";
      
        $result = mysqli_query($database,$sql) or die(mysqli_error($database));
        while($rws = mysqli_fetch_array($result)){ 
    

  
?>
                            <article class="entry card post-list featured-posts-grid__entry">
                                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_1.jpg)">
                                    <a href="single-post.php" class="thumb-url"></a>
                                    <img src="img/content/hero/hero_post_1.jpg" alt="" class="entry__img d-none">
                                    <a href="categories.php" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">World</a>
                                </div>

                                <div class="entry__body post-list__body card__body">
                                    <h2 class="entry__title">
                                        <a href="single-post.php"><?php echo $rws['Theme'] ?></a>
                                    </h2>
                                   
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <?php }?>
                        </div>
                        <!-- end post -->

                        <!-- Small post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                            <article class="entry card post-list featured-posts-grid__entry">
                                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_2.jpg)">
                                    <a href="single-post.php" class="thumb-url"></a>
                                    <img src="img/content/hero/hero_post_2.jpg" alt="" class="entry__img d-none">
                                    <a href="categories.php" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">Fashion</a>
                                </div>

                                <div class="entry__body post-list__body card__body">
                                    <h2 class="entry__title">
                                        <a href="single-post.php"><?php echo $rws['Theme'] ?></a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- end post -->

                        <!-- Small post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
                            <article class="entry card post-list featured-posts-grid__entry">
                                <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url(img/content/hero/hero_post_3.jpg)">
                                    <a href="single-post.php" class="thumb-url"></a>
                                    <img src="img/content/hero/hero_post_3.jpg" alt="" class="entry__img d-none">
                                    <a href="categories.php" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">Business</a>
                                </div>

                                <div class="entry__body post-list__body card__body">
                                    <h2 class="entry__title">
                                        <a href="single-post.php"><?php echo $rws['Theme'] ?></a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- end post -->

                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">

                        <!-- Large post -->
                        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
                            <article class="entry card featured-posts-grid__entry">
                                <div class="entry__img-holder card__img-holder">
                                    <a href="single-post.php">
                                        <img src="img/content/hero/hero_post_4.jpg" alt="" class="entry__img">
                                    </a>
                                    <a href="categories.php" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">Lifestyle</a>
                                </div>

                                <div class="entry__body card__body">
                                    <h2 class="entry__title">
                                        <a href="single-post.php"><?php echo $rws['Theme'] ?></a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- end large post -->
                    </div>

                </div>
            </div>
        </section>
        <!-- end featured posts grid -->

        <div class="main-container container pt-24" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content">

                    <!-- Latest News -->
                    <section class="section tab-post mb-16">
                        <div class="title-wrap title-wrap--line">
                            <h3 class="section-title">Latest Articles</h3>

                            <div class="tabs tab-post__tabs">
                                <ul class="tabs__list">
                                    <li class="tabs__item tabs__item--active">
                                        <a href="#tab-all" class="tabs__trigger">All</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-world" class="tabs__trigger">World</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-lifestyle" class="tabs__trigger">Lifestyle</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-business" class="tabs__trigger">Business</a>
                                    </li>
                                    <li class="tabs__item">
                                        <a href="#tab-fashion" class="tabs__trigger">Fashion</a>
                                    </li>
                                </ul>
                                <!-- end tabs -->
                            </div>
                        </div>

                        <!-- tab content -->
                        <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

                            <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 1 -->

                            <div class="tabs__content-pane" id="tab-world">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 2 -->

                            <div class="tabs__content-pane" id="tab-lifestyle">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 3 -->

                            <div class="tabs__content-pane" id="tab-business">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 4 -->

                            <div class="tabs__content-pane" id="tab-fashion">
                                <div class="row card-row">
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6">
                                        <article class="entry card">
                                            <div class="entry__img-holder card__img-holder">
                                                <a href="single-post.php">
                                                    <div class="thumb-container thumb-70">
                                                        <img data-src="img/content/grid/grid_post_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                                                    </div>
                                                </a>
                                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
                                            </div>

                                            <div class="entry__body card__body">
                                                <div class="entry__header">

                                                    <h2 class="entry__title">
                                                        <a href="single-post.php">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                                                    </h2>
                                                    <ul class="entry__meta">
                                                        <li class="entry__meta-author">
                                                            <span>by</span>
                                                            <a href="#">DeoThemes</a>
                                                        </li>
                                                        <li class="entry__meta-date">
                                                            Jan 21, 2018
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry__excerpt">
                                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end pane 5 -->
                        </div>
                        <!-- end tab content -->
                    </section>
                    <!-- end latest news -->

                </div>
                <!-- end posts -->

                <!-- Sidebar -->
                <aside class="col-lg-4 sidebar sidebar--right">

                    <!-- Widget Popular Posts -->
                    <aside class="widget widget-popular-posts">
                        <h4 class="widget-title">Popular Posts</h4>
                        <ul class="post-list-small">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.php">
                                                <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.php">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.php">
                                                <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.php">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.php">
                                                <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.php">June in Africa: Taxi wars, smarter cities and increased investments</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.php">
                                                <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.php">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>by</span>
                                                <a href="#">DeoThemes</a>
                                            </li>
                                            <li class="entry__meta-date">
                                                Jan 21, 2018
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </aside>
                    <!-- end widget popular posts -->


                    <!-- Widget Socials -->
                    <aside class="widget widget-socials">
                        <h4 class="widget-title">Let's hang out on social</h4>
                        <div class="socials socials--wide socials--large">
                            <div class="row row-16">
                                <div class="col">
                                    <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                                        <i class="ui-facebook"></i>
                                        <span class="social__text">Facebook</span>
                                    </a>
                                    <!--
                  -->
                                    <a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                                        <i class="ui-twitter"></i>
                                        <span class="social__text">Twitter</span>
                                    </a>
                                    <!--
                  -->
                                    <a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                                        <i class="ui-youtube"></i>
                                        <span class="social__text">Youtube</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                                        <i class="ui-google"></i>
                                        <span class="social__text">Google+</span>
                                    </a>
                                    <!--
                  -->
                                    <a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                                        <i class="ui-instagram"></i>
                                        <span class="social__text">Instagram</span>
                                    </a>
                                    <!--
                  -->
                                    <a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                                        <i class="ui-rss"></i>
                                        <span class="social__text">Rss</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- end widget socials -->

                </aside>
                <!-- end sidebar -->

            </div>
            <!-- end content -->



            <!-- Carousel posts -->
            <section class="section mb-0">
                <div class="title-wrap title-wrap--line title-wrap--pr">
                    <h3 class="section-title">editors picks</h3>
                </div>

                <!-- Slider -->
                <div id="owl-posts" class="owl-carousel owl-theme owl-carousel--arrows-outside">
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_1.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.php">9 Things to Consider Before Accepting a New Job</a>
                                </h2>
                            </div>
                            <a href="single-post.php" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_2.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.php">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                                </h2>
                            </div>
                            <a href="single-post.php" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_3.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.php">(Infographic) Is Work-Life Balance Even Possible?</a>
                                </h2>
                            </div>
                            <a href="single-post.php" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_4.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.php">Is Uber Considering To Sell its Southeast Asia Business to Grab?</a>
                                </h2>
                            </div>
                            <a href="single-post.php" class="thumb-url"></a>
                        </div>
                    </article>
                    <article class="entry thumb thumb--size-1">
                        <div class="entry__img-holder thumb__img-holder" style="background-image: url('img/content/carousel/carousel_post_2.jpg');">
                            <div class="bottom-gradient"></div>
                            <div class="thumb-text-holder">
                                <h2 class="thumb-entry-title">
                                    <a href="single-post.php">Gov’t Toughens Rules to Ensure 3rd Telco Player Doesn’t Slack Off</a>
                                </h2>
                            </div>
                            <a href="single-post.php" class="thumb-url"></a>
                        </div>
                    </article>
                </div>
                <!-- end slider -->

            </section>
            <!-- end carousel posts -->




            <!-- Content Secondary -->
            <div class="row">

                <!-- Sidebar 1 -->
                <aside class="col-lg-4 sidebar sidebar--1 sidebar--right">


                </aside>
                <!-- end sidebar 1 -->
            </div>
            <!-- content secondary -->


        </div>
        <!-- end main container -->

        <!-- Footer -->
        <footer class="footer footer--dark">
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget-logo">
                                <h4 class="widget-title ">
                                    Our adress:
                                    <p>Mironshoh 123, Mirobod district,<br> Tashkent, Uzbekistan</p>
                                    <p>Buses: <br> <b> 2,12,80,140</b></p>


                            </aside>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <aside class="widget widget_nav_menu">
                                <h4 class="widget-title">Useful Links</h4>
                                <ul>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">News</a></li>
                                    <li><a href="categories.php">Advertise</a></li>
                                    <li><a href="shortcodes.php">Support</a></li>
                                    <li><a href="shortcodes.php">Features</a></li>
                                    <li><a href="shortcodes.php">Contact</a></li>
                                </ul>
                            </aside>
                        </div>


                        <div class="col-lg-3 col-md-6">
                            <div class="adress ">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d594.9322342948559!2d69.26886255922855!3d41.28121478600739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8abebdb4e609%3A0x3b3c4fbc2fe831bd!2sNational%20Institute%20of%20Fine%20art%20and%20Design!5e0!3m2!1suz!2s!4v1614273732731!5m2!1suz!2s"
                                    width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main>
    <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="js/jquery.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/easing.min.js "></script>
    <script src="js/owl-carousel.min.js "></script>
    <script src="js/flickity.pkgd.min.js "></script>
    <script src="js/twitterFetcher_min.js "></script>
    <script src="js/jquery.newsTicker.min.js "></script>
    <script src="js/modernizr.min.js "></script>
    <script src="js/scripts.js "></script>

</body>
<!-- Copied from https://deothemes.com/envato/deus/php/index.php by Cyotek WebCopy 1.8.0.620, 30 декабря 2019 г., 6:28:59 -->

</html>



SELECT * FROM  `articles`
INNER JOIN `author`
ON `articles`.`Author_id`=`author`.`AUTHOR_id`;

SELECT * FROM `articles` INNER JOIN `author` ON `articles`.`Author_id`=`author`.`AUTHOR_id`|


