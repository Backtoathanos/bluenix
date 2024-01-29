
    <?php 
        $title=isset($_GET['page']) ? $_GET['page'] : "Home";
        if($title=="home"){
            $title="Home";
        }else if($title=="aboutus"){
            $title="About us";
        }else if($title=="services"){
            $title="Services";
        }else if($title=="portfolio"){
            $title="Portfolio";
        }else if($title=="blog"){
            $title="Blog";
        }else if($title=="contact"){
            $title="Contact";
        }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="googlebot" content="index">
    <meta property="og:title" content="<?php echo $title.' || Bluenix'; ?>" />
    <meta name="keywords" content="Bluenix bluenix Jamshedpur website development company bluenix.in bluenix.com Top 10 website company in jamshedpur top website development company in jamshedpur bluenix website development company india bluenix website development company jharkhand construction in indian organizqation L&T Construction bluenix website development bluenix.in ">
    <meta name="description" content="bluenix website development is here to make a difference. We stand out in several key ways. We prioritize a meticulous approach to every project, blending years of experience with a commitment to innovation. What truly distinguishes us is our unwavering dedication to safety protocols, ensuring not just quality results but also peace of mind for our clients. Additionally, our seamless project management and a track record of timely completions set us apart in the industry, demonstrating our reliability and consistency in delivering excellence.">
    
    <link rel="icon" href="img/short-icon.png" type="image/x-icon" />
    <?php echo '<title>'.$title.' || Bluenix</title>'; ?>

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">

    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->