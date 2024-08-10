<!DOCTYPE html>
<html class="no-js" lang="Eng">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<title>Entrepreneur 2023</title>
<meta name="description" content="Entrepreneur 2023">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="manifest" href="assets/img/favicon.png">
<link
  href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/slick.min.css">
<link rel="stylesheet" href="assets/css/style.css?ver=18">
<link rel="stylesheet" href="assets/css/custome.css?ver=20">
<link rel="icon" href="assets/img/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@700&display=swap" rel="stylesheet">
<!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!--************* Code Start From Here ************* -->

<!--========== Preloader =========
    <div class="preloader">
        <button class="vs-btn wave-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div>
    -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8863112-18"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'UA-8863112-18');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-984336036"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'AW-984336036');
</script>

<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
    w[l] = w[l] || []; w[l].push({
      'gtm.start':
        new Date().getTime(), event: 'gtm.js'
    }); var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-5BSTWRWJ');</script>
<!-- End Google Tag Manager -->

<style type="text/css">
  /* CAPTCHA CSS */
  .clist {
    display: flex;
    justify-content: center;
  }

  #captcha-message {
    color: #ff9e9e;
    font-size: 15px;
    padding-top: 10px;
  }

  #refresh-captcha {
    height: 39px;
    background: transparent;
    border: none;
    outline: none;
    margin-top: 14px;
    box-shadow: none;
  }

  #refresh-captcha .fa {
    color: #ffe4a5;
    font-size: 21px;
  }

  ul.pop-form {
    width: 500px;
    max-width: 96%;
    margin: auto;
  }

  /* CAPTCHA CSS */
</style>

</head>
<div class="popup-search-box d-none d-lg-block  ">
  <button class="searchClose border-theme text-theme"><i class="fal fa-times"></i></button>
  <form id="popupform" action="register_update.php" name="msform1" method="post">
    <input type="hidden" name="ref" id="ref" value="EI-Insta">
    <input type="hidden" value="Entrepreneur" id="hideType" name="hideType">
    <input type="hidden" value="Website" id="src" name="src">
    <input id="event_year" name="event_year" type="hidden" value="Delhi September 2024">
    <input id="event_city" name="event_city" type="hidden" value="Delhi">
    <div class="pform">
      <div class="pform-head">Register for Entrepreneur 2024</div>
      <ul class="pop-form">

        <li>
          <select id="want" name="want" class="form-control myselectclass3" required>
            <option value=""> I Want to</option>
            <option value="Conference Registration">Attend the summit</option>
            <option value="Exhibitor Registration">Exhibit at the show</option>
            <option value="Sponsorship Registration">Sponsor the show</option>
            <option value="Nominate for Awards">Nominate for Award
            </option>
          </select>
        </li>
        <li>
          <input type="text" class="form-control" name="txtname" id="txtname"
            onKeyDown="return /[a-zA-Z\s]/i.test(event.key)" required placeholder="Enter Name" autocomplete="nope"
            tabindex="-1">
        </li>
        <li>
          <input type="text" class="form-control" maxlength="250" value="" placeholder="Enter Email" title="Enter Email"
            id="txtemail" name="txtemail" pattern="^[^ ]+@[^ ]+\.[a-z]{2,6}$" required>
        </li>
        <li>
          <input type="text" class="form-control" title="Enter Mobile Number" placeholder="Enter Mobile Number"
            pattern="[6789][0-9]{9}" maxlength="10" maxlength="10" id="txtphone" name="txtphone"
            onKeyPress="return isNumber(event)" required>
        </li>
        <li>
          <input type="text" class="form-control" name="txtcompany" id="txtcompany" placeholder="Enter Company"
            title="Enter Company" onKeyDown="return /[a-zA-Z\s]/i.test(event.key)" required>
        </li>
        <li class="clist">

          <canvas id="captcha" width="200" height="80"></canvas>
          <button type="button" class="btn btn-secondary" id="refresh-captcha">
            <i class="fa fa-refresh"></i>
          </button>

        </li>

        <li>
          <input type="text" class="form-control" id="captcha-input" required placeholder="Enter captcha shown above">
          <span id="captcha-message"></span>
        </li>
        <li><button type="submit" class="vs-btn">SUBMIT</button></li>
      </ul>
  </form>
</div>
</div></head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BSTWRWJ" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="vs-menu-wrapper">
    <div class="vs-menu-area">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="./"><img src="assets/img/logonew.png?ver=3" alt="Evona"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <!--  <li class="menu-item-has-children">
                        <a href="./">Home</a>
                        <ul class="sub-menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Photo and Video Gallery</a></li>
                            <li><a href="partner.php">Partners & Associations</a></li>
                            <li><a href="when.php">When & Where</a></li>
                        </ul>
                    </li> -->
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">Conference</a>
                    <ul class="sub-menu">
                        <!--  <li><a href="about.php">About Us</a></li> -->
                        <li><a href="conference-overview.php">Conference Overview</a></li>
                        <!-- <li><a href="when.php">When & Where</a></li> -->
                        <li><a href="conference-agenda.php">Conference Agenda</a></li>
                        <li><a href="speakers.php">Speakers</a></li>
                        <li><a href="why-attend.php">Why Attend</a></li>
                        <li><a href="attendee-profile.php">Attendee Profile</a></li>
                        <li><a href="conference-registration.php">Conference Registration</a></li>
                        <li><a href="speaker-registration.php">Speakers Registration</a></li>
                        <!-- <li><a href="download-brochure.php">Download Brochure</a></li> -->
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0);">Exhibit</a>
                    <ul class="sub-menu">
                        <li><a href="exhibition-overview.php">Exhibition Overview</a></li>
                        <li><a href="why-exhibit.php">Why Exhibit</a></li>
                        <li><a href="who-exhibit.php">Who Exhibit</a></li>
                        <li><a href="exhibition-registration.php">Exhibition Registration</a></li>
                        <li><a href="download-floor-plan.php">Floor plan</a></li>
                        <li><a href="exhibitors.php">Exhibit List</a></li>
                        <li><a href="sonsorship-registration.php">Partner with us</a></li>
                        <li><a href="partner.php">Partners & Associations</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="Javascript:void(0);">Awards</a>
                    <ul class="sub-menu">
                        <li><a href="award-overview.php">Award Overview</a></li>
                        <li><a href="award-categories.php">Award Categories</a></li>
                        <li><a href="why-nominate.php">Why Nominate</a></li>
                        <li><a href="who-nominate.php">Who Should Nominate</a></li>
                        <li><a href="award-winners.php"> Winners 2023</a></li>
                        <li><a href="award-registration.php">Nominate Now</a></li>
                        <!-- <li><a href="previous-winners.php">Previous Winners </a></li> -->
                        <!--  <li><a href="https://www.entrepreneurindia.com/2021/award-winners.php">Previous Winners 2021</a></li> -->
                        <!--  <li><a href="https://www.entrepreneurindia.com/virtual-awards/awards_winner.php">Previous Winners 2020</a></li> -->
                        <li><a href="terms.php">Terms & Conditions</a></li>
                    </ul>
                </li>
                <li><a href="https://www.entrepreneurindia.com/pitch/" target="_blank">Startup Kickoff </a></li>
                <li class="menu-item-has-children">
                    <a href="Javascript:void(0);">Previous Shows</a>
                    <ul class="sub-menu">
                        <li><a href="https://www.entrepreneurindia.com/2022/" target="_blank">2022</a></li>
                        <li><a href="https://www.entrepreneurindia.com/2021/" target="_blank">2021</a></li>
                        <li><a href="https://www.entrepreneurindia.com/virtual-awards" target="_blank">2020</a></li>
                        <li><a href="https://www.entrepreneurindia.com/2019/" target="_blank">2019</a></li>
                        <li><a href="https://www.entrepreneurindia.com/2018/" target="_blank">2018</a></li>
                        <li><a href="https://www.entrepreneurindia.com/2017/" target="_blank">2017</a></li>
                        <li><a href="https://www.entrepreneurindia.com/2016/" target="_blank">2016</a></li>
                        <li><a href="https://www.entrepreneurindia.com/2015/" target="_blank">2015</a></li>
                        <li><a href="https://www.entrepreneurindia.com/2014/" target="_blank">2014</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- Menu Will Append With Javascript -->
    </div>
</div>
<!--vs-mobile-menu end-->

<!--======== Header ========-->
<header class="vs-header header-layout3">
    <!--header-top-wrapper start-->
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="header-links">
                        <ul class="hul">
                            <li>
                                <marquee>Entrepreneur India is the Official Licensee of Entrepreneur USA </marquee>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 offset-md-8">
                    <div class="header-links">
                        <span class="header-links-title">Follow Us:</span>
                        <ul>
                            <li><a href="https://www.facebook.com/EntrepreneurInd" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/EntrepreneurIND" target="_blank"><img
                                        src="assets/img/twitter.png" style="margin-top: -6px; width: 80%"></a></li>
                            <li><a href="https://www.instagram.com/EntrepreneurIND" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/entrepreneur-media-india/mycompany/"
                                    target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header-top-wrapper end-->
    <!--vs-main-menu-wrapper start-->
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container">
                <div class="row gx-35 align-items-center">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="./">
                                <img src="assets/img/logonew.png" alt="Evona">
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <nav class="main-menu menu-style1 d-none d-lg-inline-block">
                                    <ul>
                                        <!-- <li class="menu-item-has-children">
                        <a href="./">Home</a>
                        <ul class="sub-menu">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Photo and Video Gallery</a></li>
                            <li><a href="partner.php">Partners & Associations</a></li>
                            <li><a href="when.php">When & Where</a></li>
                        </ul>
                    </li> -->
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Conference</a>
                                            <ul class="sub-menu">
                                                <!--                             <li><a href="about.php">About Us</a></li> -->
                                                <li><a href="conference-overview.php">Conference Overview</a></li>
                                                <!-- <li><a href="when.php">When & Where</a></li> -->
                                                <li><a href="conference-agenda.php">Conference Agenda</a></li>
                                                <li><a href="speakers.php">Speakers</a></li>
                                                <li><a href="why-attend.php">Why Attend</a></li>
                                                <li><a href="attendee-profile.php">Attendee Profile</a></li>
                                                <li><a href="conference-registration.php">Conference Registration</a>
                                                </li>
                                                <li><a href="speaker-registration.php">Speakers
                                                        Registration</a></li>
                                                <!--   <li><a href="download-brochure.php">Download Brochure</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Exhibit</a>
                                            <ul class="sub-menu">
                                                <li><a href="exhibition-overview.php">Exhibition Overview</a></li>
                                                <li><a href="why-exhibit.php">Why Exhibit</a></li>
                                                <li><a href="who-exhibit.php">Who Exhibit</a></li>
                                                <li><a href="exhibition-registration.php">Exhibition
                                                        Registration</a></li>
                                                <li><a href="download-floor-plan.php">Floor plan</a></li>
                                                <li><a href="exhibitors.php">Exhibit List</a></li>
                                                <li><a href="sponsorship-form.php">Partner with us</a></li>
                                                <li><a href="partner.php">Partners & Associations</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Awards</a>
                                            <ul class="sub-menu">
                                                <li><a href="award-overview.php">Award Overview</a></li>
                                                <li><a href="award-categories.php">Award Categories</a></li>
                                                <li><a href="why-nominate.php">Why Nominate</a></li>
                                                <li><a href="who-nominate.php">Who Should Nominate</a></li>
                                                <li><a href="award-registration.php">Nominate Now</a></li>
                                                <!--    <li><a href="previous-winners.php">Previous Winners</a></li> -->
                                                <li><a href="award-winners.php"> Winners 2023</a></li>
                                                <!-- <li><a href="previous-winners.php">Previous Winners</a></li> -->
                                                <!--  <li><a href="https://www.entrepreneurindia.com/2021/award-winners.php" target="_blank">Previous Winners 2021</a></li> -->
                                                <!--    <li><a href="https://www.entrepreneurindia.com/virtual-awards/awards_winner.php" target="_blank">Previous Winners 2020</a></li> -->
                                                <li><a href="terms.php">Terms & Conditions</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="https://www.entrepreneurindia.com/pitch/" target="_blank">Startup
                                                Kickoff</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Previous Shows</a>
                                            <ul class="sub-menu">
                                                <li><a href="https://www.entrepreneurindia.com/2023/"
                                                        target="_blank">2023</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/2022/"
                                                        target="_blank">2022</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/2021/"
                                                        target="_blank">2021</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/virtual-awards"
                                                        target="_blank">2020</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/2019/"
                                                        target="_blank">2019</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/2018/"
                                                        target="_blank">2018</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/2017/"
                                                        target="_blank">2017</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/2016/"
                                                        target="_blank">2016</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/2015/"
                                                        target="_blank">2015</a></li>
                                                <li><a href="https://www.entrepreneurindia.com/2014/"
                                                        target="_blank">2014</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col d-block d-lg-none">
                                <button type="button" class="vs-menu-toggle"><i class="far fa-bars"></i> Menu</button>
                            </div>
                            <div class="col-auto d-md-block d-lg-block xs-hidden eq">
                                <div class="header-button">
                                    <button type="button" class="vs-btn searchBoxToggler">
                                        Explore More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--vs-main-menu-wrapper end-->
</header>
<!--======== / Header ========--><div class="breadcumb-wrapper background-image" style="background-image: url(&quot;assets/img/banner1.jpg&quot;);">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Event Speakers</h1>
                <ul class="breadcumb-menu">
                    <li><a href="./">Home</a></li>
                    <li class="active">Speakers</li>
                </ul>
            </div>
        </div>
    </div>
<section class="mt-5 shape-mockup-wrap speaker-details">
        <div class="shape-bg "></div>
        <div class="container z-index-common">
            <!-- <div class="title-area2 text-center">
                <span class="sub-title2">
                    Event Speakers
                    <img class="title-shape" src="assets/img/shape/title_shape.png" alt="title shape">
                </span>
                <h2 class="sec-title">Meet Our Speakers</h2>
            </div> -->
            <div class="row">
             
             <div class="col-md-3"> 
                <div class="spk-image">
     <img src="assets/img/team/amang.jpg" alt="team image">
 </div>
             </div>

       <div class="col-lg-9 col-xl-9 col-12 col-sm-12 col-md-6 self">
        
          <div class="spk-description">
           <h3>Aman Gupta<span>Co-Founder & CMO, Boat</span></h3>


 <p>Aman is the co-founder and CMO of BoAt. Before forming BoAt, he worked at CitiFinancial, KPMG, and Harman International (JBL). He recently appeared on the television business reality show Shark Tank India as a judge aired on Sony TV. Prior to co-founding BoAt, he co-founded Advanced Telemedia Pvt Ltd and was CEO between 2005 and 2010. Aman has worked as an Executive Consultant with KPMG. He is the founding partner of Imagine Marketing India. He has served as Chair of the D2C Board of the Internet and Mobile Association of India. </p> 
        </div>
      </div>

                </div>
             
     
            </div>
    
        <div class="shape-mockup jump z-index-3 d-none d-xl-block" style="top: 34%; left: 3%;"><img src="assets/img/shape/circle-3.png" alt="shapes"></div>
        <div class="shape-mockup jump-reverse z-index-3 d-none d-xl-block" style="top: 14%; right: 0%;"><img src="assets/img/shape/circle-4.png" alt="shapes"></div>
        <div class="section-after">
            <img src="assets/img/shape/curved-shape-bottom.png" alt="shape">
        </div>
    </section>

<!-- ======== Footer Section ========-->

<footer class="footer-wrapper footer-layout4 mobile-hide" data-bg-src="assets/img/footerbg.jpg">
   <div class="widget-area">
      <div class="container">

         <div class="row justify-content-between">
            <!-- About Widget-->

            <div class="col-xl-auto col-md-6 col-lg-4">
               <div class="widget footer-widget">
                  <div class="vs-widget-about">
                     <div class="mag-right">
                        <a href="https://www.entrepreneurindia.com/emagazine/ " target="_blank"><img
                              src="https://master.franchiseindia.com/magazine-subscribe/images/sme-470x635.gif"></a>
                        <div class="magy">
                           <div class="subs-btn">
                              <a href="https://www.entrepreneurindia.com/emagazine/ " target="_blank">Subscribe Now</a>
                           </div>
                           <div class="mag-txt">
                              <p>To Subscribe, <br>Call: <strong>+91 9311148342</strong></p>
                           </div>
                        </div>
                     </div>
                     <div class="vs-social">
                        <a href="https://www.facebook.com/EntrepreneurInd/" target="_blank"><i
                              class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/EntrepreneurIND/" target="_blank"><img src="assets/img/twitter.png"
                              style="margin-top: -6px;"></a>
                        <a href="https://instagram.com/EntrepreneurIND" target="_blank"><i
                              class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/entrepreneur-media-india/mycompany/"
                           target="_blank"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Widget-->

            <div class="col-xl-auto col-md-6 col-lg-4">
               <h3 class="ft-head">Exhibition </h3>
               <h4 class="ft-name">SHUBHAM </h4>
               <h5 class="ft-number"><a href="tel:+918595350505">+91 8595350505</a></h5>
               <p><a href="/cdn-cgi/l/email-protection#5e2d2d362b3c363f331e3b302a2c3b2e2c3b303b2b2c37303a373f703d3133"><span class="__cf_email__" data-cfemail="295a5a415c4b414844694c475d5b4c595b4c474c5c5b40474d4048074a4644">[email&#160;protected]</span></a>

               <h3 class="ft-head">Sponsorship</h3>
               <h4 class="ft-name">Yohan </h4>
               <h5 class="ft-number"><a href="tel:+919819993133">+91 9819993133</a></h5>
               <p><a href="/cdn-cgi/l/email-protection#09677066616867496f7b68676a61607a6c60676d606827676c7d"><span class="__cf_email__" data-cfemail="1c726573747d725c7a6e7d727f74756f79757278757d32727968">[email&#160;protected]</span></a>
               </p>
               <h3 class="ft-head">Conference</h3>
               <h4 class="ft-name">Bushra </h4>
               <h5 class="ft-number"><a href="tel:+917290037182">+91 7290037182</a> </h5>
               <p><a href="/cdn-cgi/l/email-protection#b9dbcad1d8d1d8d7cad1d8d1f9dcd7cdcbdcc9cbdcd7dccccbd0d7ddd0d897dad6d4"><span class="__cf_email__" data-cfemail="b9dbcad1d8d1d8d7cad1d8d1f9dcd7cdcbdcc9cbdcd7dccccbd0d7ddd0d897dad6d4">[email&#160;protected]</span></a>
               </p>




               <div class="sp"></div>
            </div>
            <!-- Footer Widget-->
            <div class="col-xl-auto col-md-6 col-lg-4">
               <h3 class="ft-head">Expo-West</h3>
               <h4 class="ft-name">ANKUR </h4>
               <h5 class="ft-number"><a href="tel:+919711886970">+91 9711886970</a></h5>
               <p><a href="/cdn-cgi/l/email-protection#7201131c19070032171c0600170200171c1707001b1c161b135c111d1f"><span class="__cf_email__" data-cfemail="5f2c3e31342a2d1f3a312b2d3a2f2d3a313a2a2d36313b363e713c3032">[email&#160;protected]</span></a>
               </p>
               <h3 class="ft-head">Partnership</h3>
               <h4 class="ft-name">SANCHI </h4>
               <h5 class="ft-number"><a href="tel:+918285859305">+91 8285859305</a></h5>
               <p><a href="/cdn-cgi/l/email-protection#7a09091b141912133a1f140e081f0a081f141f0f0813141e131b541915175a"><span class="__cf_email__" data-cfemail="8dfefeece3eee5e4cde8e3f9ffe8fdffe8e3e8f8ffe4e3e9e4eca3eee2e0">[email&#160;protected]</span> </a></p>

               <h3 class="ft-head">Awards</h3>

               <h4 class="ft-name">Fahad </h4>
               <h5 class="ft-number"><a href="tel:+916005486563">+91 6005486563</a></h5>
               <p><a href="/cdn-cgi/l/email-protection#1d7b7c757c795d7873696f786d6f787378686f7c6d77337e7270"><span class="__cf_email__" data-cfemail="ee888f868f8aae8b809a9c8b9e9c8b808b9b9c8f9e84c08d8183">[email&#160;protected]</span></a>
               </p>

               <div class="sp"></div>
            </div>
            <!-- Footer Widget-->
            <div class="col-xl-auto col-md-6 col-lg-4">
               <h3 class="ft-head">Expo-South</h3>
               <h4 class="ft-name">AMIR</h4>
               <h5 class="ft-number"><a href="tel:+919945580629">+91 9945580629</a></h5>
               <p><a href="/cdn-cgi/l/email-protection#0b656a6662794b6e657f796e7b796e656e7e7962656f626a25686466"><span class="__cf_email__" data-cfemail="5b353a3632291b3e352f293e2b293e353e2e2932353f323a75383436">[email&#160;protected]</span></a></p>
               <div class="ft-region" style="
                  font-weight: bold; text-transform: uppercase;
                  "><span style="color:yellow; margin-bottom: 10px">Startup</span> <span
                     style="color: #ff0017;font-size: 17px;">Kickoff</span> </div>
               <h4 class="ft-name">DEEPAK</h4>
               <h5 class="ft-number"><a href="tel:+919310811605">+91 9310811605</a></h5>
               <p><a href="/cdn-cgi/l/email-protection#9efae8fff7edf6f0ffe8defbf0eaecfbeeecfbf0fbebecf7f0faf7ffb0fdf1f3"><span class="__cf_email__" data-cfemail="9cf8eafdf5eff4f2fdeadcf9f2e8eef9eceef9f2f9e9eef5f2f8f5fdb2fff3f1">[email&#160;protected]</span>

                  </a></p>


               <h3 class="ft-head">Speaker Opportunity</h3>
               <h4 class="ft-name">Punita</h4>
               <!-- <h5 class="ft-number">+91 9311789275</h5> -->
               <p><a href="/cdn-cgi/l/email-protection#12627973627d7d6052777c6660776260777c7767607b7c767b733c717d7f"><span class="__cf_email__" data-cfemail="64140f05140b0b1624010a1016011416010a0111160d0a000d054a070b09">[email&#160;protected]</span></a>
               </p>
            </div>
            <div class="col-xl-auto col-md-7 offset-md-3">
               <div class="any-issue">
                  <h3 class="ft-head">For any pending query, please connect to:</h3>
                  <h4 class="ft-name">Preetima </h4>
                  <!-- <h5 class="ft-number">+91 8588898248</h5> -->
                  <p><a href="/cdn-cgi/l/email-protection#c6b6b4a3a3b2afaba786a3a8b2b4a3b6b4a3a8a3b3b4a7b6ace8a5a9ab"><span class="__cf_email__" data-cfemail="a8d8dacdcddcc1c5c9e8cdc6dcdacdd8dacdc6cddddac9d8c286cbc7c5">[email&#160;protected]</span> </a>
                  </p>
               </div>
            </div>



         </div>
      </div>

   </div>
   <div class="footer-copyright">
      <div class="container">
         <p class="copyright">Copyright © 2024 Entrepreneur India Media Pvt. Ltd.</p>
      </div>
   </div>
</footer>
<!--======== / Footer Section ========-->



<!-- Mobile screen -->

<!--======== Team Section ========-->


<footer class="footer-wrapper footer-layout4 lg-hide" data-bg-src="assets/img/footerbg.jpg">
   <div class="widget-area">
      <div class="container">

         <div class="row justify-content-between">
            <!-- About Widget-->

            <div class="col-xl-auto col-md-6 col-lg-4">
               <div class="widget footer-widget">
                  <div class="vs-widget-about">
                     <div class="mag-right">
                        <a href="https://www.entrepreneurindia.com/emagazine/ " target="_blank"><img
                              src="https://master.franchiseindia.com/magazine-subscribe/images/sme-470x635.gif"></a>
                        <div class="magy">
                           <div class="subs-btn">
                              <a href="https://www.entrepreneurindia.com/emagazine/ " target="_blank">Subscribe Now</a>
                           </div>
                           <div class="mag-txt">
                              <p>To Subscribe, <br>Call: <strong>+91 9311148342</strong></p>
                           </div>
                        </div>
                     </div>
                     <div class="vs-social">
                        <a href="https://www.facebook.com/EntrepreneurInd/" target="_blank"><i
                              class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/EntrepreneurIND/" target="_blank"><img src="assets/img/twitter.png"
                              style="margin-top: -6px;"></a>
                        <a href="https://instagram.com/EntrepreneurIND" target="_blank"><i
                              class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/entrepreneur-media-india/mycompany/"
                           target="_blank"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Widget-->
            <div class=" row slider-shadow vs-carousel" id="foot" data-slide-show="4" data-lg-slide-show="3"
               data-sm-slide-show="2" data-arrows="true">

               <div class="col-xl-auto col-md-6 col-lg-4">
                  <h3 class="ft-head">Exhibition </h3>
                  <h4 class="ft-name">SHUBHAM </h4>
                  <h5 class="ft-number"><a href="tel:+918595350505">+91 8595350505</a></h5>
                  <p><a href="/cdn-cgi/l/email-protection#6211110a17000a030f22070c1610071210070c0717100b0c060b034c010d0f"><span class="__cf_email__" data-cfemail="5221213a27303a333f12373c2620372220373c3727203b3c363b337c313d3f">[email&#160;protected]</span></a></p>

                  <h3 class="ft-head">Sponsorship</h3>
                  <h4 class="ft-name">Yohan </h4>
                  <h5 class="ft-number"><a href="tel:+919819993133">+91 9819993133</a></h5>
                  <p><a href="/cdn-cgi/l/email-protection#244a5d4b4c454a644256454a474c4d57414d4a404d450a4a4150"><span class="__cf_email__" data-cfemail="96f8eff9fef7f8d6f0e4f7f8f5feffe5f3fff8f2fff7b8f8f3e2">[email&#160;protected]</span></a>
                  </p>
                  <h3 class="ft-head">Conference</h3>
                  <h4 class="ft-name">Bushra </h4>
                  <h5 class="ft-number"><a href="tel:+917290037182">+91 7290037182</a> </h5>
                  <p><a href="/cdn-cgi/l/email-protection#0466776c656c656a776c656c44616a7076617476616a6171766d6a606d652a676b69"><span class="__cf_email__" data-cfemail="4725342f262f2629342f262f072229333522373522292232352e29232e266924282a">[email&#160;protected]</span></a>
                  </p>


                  <div class="sp"></div>
               </div>
               <!-- Footer Widget-->
               <div class="col-xl-auto col-md-6 col-lg-4">
                  <h3 class="ft-head">Expo-West</h3>
                  <h4 class="ft-name">ANKUR </h4>
                  <h5 class="ft-number"><a href="tel:+919711886970">+91 9711886970</a></h5>
                  <p><a href="/cdn-cgi/l/email-protection#493a2827223c3b092c273d3b2c393b2c272c3c3b20272d2028672a2624"><span class="__cf_email__" data-cfemail="a8dbc9c6c3dddae8cdc6dcdacdd8dacdc6cddddac1c6ccc1c986cbc7c5">[email&#160;protected]</span></a>
                  </p>
                  <h3 class="ft-head">Partnership</h3>
                  <h4 class="ft-name">SANCHI </h4>
                  <h5 class="ft-number"><a href="tel:+918285859305">+91 8285859305</a></h5>
                  <p><a href="/cdn-cgi/l/email-protection#681b1b09060b0001280e1a09060b00011b0d01060c010946060d1c48"><span class="__cf_email__" data-cfemail="611212000f020908210713000f0209081204080f0508004f0f0415">[email&#160;protected]</span> </a></p>

                  <h3 class="ft-head">Awards</h3>

                  <h4 class="ft-name">Fahad </h4>
                  <h5 class="ft-number"><a href="tel:+916005486563">+91 6005486563</a></h5>
                  <p><a href="/cdn-cgi/l/email-protection#c4a2a5aca5a084a1aab0b6a1b4b6a1aaa1b1b6a5b4aeeaa7aba9"><span class="__cf_email__" data-cfemail="3751565f56537752594345524745525952424556475d1954585a">[email&#160;protected]</span></a>
                  </p>

                  <div class="sp"></div>
               </div>
               <!-- Footer Widget-->
               <div class="col-xl-auto col-md-6 col-lg-4">
                  <h3 class="ft-head">Expo-South</h3>
                  <h4 class="ft-name">AMIR</h4>
                  <h5 class="ft-number"><a href="tel:+919945580629">+91 9945580629</a></h5>
                  <p><a href="/cdn-cgi/l/email-protection#cda3aca0a4bf8da8a3b9bfa8bdbfa8a3a8b8bfa4a3a9a4ace3aea2a0"><span class="__cf_email__" data-cfemail="bed0dfd3d7ccfedbd0caccdbceccdbd0dbcbccd7d0dad7df90ddd1d3">[email&#160;protected]</span> </a></p>
                  <div class="ft-region" style="
                  font-weight: bold; text-transform: uppercase;
                  "><span style="color:yellow; margin-bottom: 10px">Startup</span> <span
                        style="color: #ff0017;font-size: 17px;">Kickoff</span> </div>
                  <h4 class="ft-name">DEEPAK</h4>
                  <h5 class="ft-number"><a href="tel:+919310811605">+91 9310811605</a></h5>
                  <p><a href="/cdn-cgi/l/email-protection#026674636b716a6c637442676c7670677270676c6777706b6c666b632c616d6f"><span class="__cf_email__" data-cfemail="610517000812090f001721040f1513041113040f041413080f0508004f020e0c">[email&#160;protected]</span>

                     </a></p>


                  <h3 class="ft-head">Speaker Opportunity</h3>
                  <h4 class="ft-name">Punita</h4>
                  <!-- <h5 class="ft-number">+91 9311789275</h5> -->
                  <p><a href="/cdn-cgi/l/email-protection#cebea5afbea1a1bc8eaba0babcabbebcaba0abbbbca7a0aaa7afe0ada1a3"><span class="__cf_email__" data-cfemail="ec9c878d9c83839eac8982989e899c9e898289999e858288858dc28f8381">[email&#160;protected]</span></a>
                  </p>
               </div>


            </div>

            <div class="col-xl-auto col-md-7 offset-md-3 mo-40">
               <div class="any-issue">
                  <h3 class="ft-head">For any pending query, please connect to:</h3>
                  <h4 class="ft-name">Preetima </h4>
                  <!-- <h5 class="ft-number">+91 8588898248</h5> -->
                  <p><a href="/cdn-cgi/l/email-protection#b6c6c4d3d3c2dfdbd7f6d3d8c2c4d3c6c4d3d8d3c3c4d7c6dc98d5d9db"><span class="__cf_email__" data-cfemail="e09092858594898d81a0858e9492859092858e85959281908ace838f8d">[email&#160;protected]</span> </a>
                  </p>
               </div>
            </div>




            <!-- Footer Widget-->

         </div>
      </div>

   </div>
   <div class="footer-copyright">
      <div class="container">
         <p class="copyright">Copyright © 2024 Entrepreneur India Media Pvt. Ltd.</p>
      </div>
   </div>


</footer>


<!--======== / Team Section ========--><a href="#" class="scrollToTop scroll-btn"><i class="far fa-long-arrow-up"></i></a>
<!-- Scroll To Top -->
<!--==============================
        All Js File
    ============================== -->
<!-- Jquery -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.0.min.js"></script>
<!-- Slick Slider -->
<script src="assets/js/slick.min.js"></script>
<script>
 $("#foot").slick({
   autoplay: true,
   autoplaySpeed: 2000

</script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Magnific Popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope Filter -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- Counter up  -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Custom Carousel -->
<script src="assets/js/vscustom-carousel.min.js"></script>
<!-- Range Slider -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- Tilt js -->
<script src="assets/js/tilt.jquery.min.js"></script>
<!-- Form Js -->

<!-- Main Js File -->
<script src="assets/js/main.js"></script>



<script>
    $(document).ready(function () {
        // Generate captcha on page load
        generateCaptcha();
        // Handle captcha refresh button click
        $("#refresh-captcha").click(function () {
            generateCaptcha();
            $("#captcha-input").val("");
        });
        // Handle form submit
        $("#popupform").submit(function (event) {


            // Validate captcha
            var captchaInput = $("#captcha-input").val();
            var captchaCode = sessionStorage.getItem("captchaCode");
            if (captchaInput != captchaCode) {
                $("#captcha-message").show();
                $("#captcha-message").html("Invalid captcha code. Please try again.");
                event.preventDefault();


                generateCaptcha();
                $("#captcha-input").val("");
                return;
            }
            // Form validation successful, submit form
            // alert("Form submitted successfully.");

            $("#captcha-message").show();
            $("#captcha-message").html("Correct!");
            $("#popupform").trigger("refresh");
            generateCaptcha();
        });

        // Define the function generateCaptcha()
        function generateCaptcha() {
            // Get the canvas element with ID captcha and create an instance of its canvas rendering context
            var a = $("#captcha")[0],
                b = a.getContext("2d");
            // Clear the canvas
            b.clearRect(0, 0, a.width, a.height);
            // Define the string of characters that can be included in the captcha
            var f = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",
                e = "",
                g = -45,
                h = 45,
                i = h - g,
                j = 20,
                k = 30,
                l = k - j;
            // Generate each character of the captcha
            for (var m = 0; m < 6; m++) {
                // Select random letter from the pool to be part of the captcha
                var n = f.charAt(Math.floor(Math.random() * f.length));
                e += n;

                // Set up the text formatting
                b.font = j + Math.random() * l + "px Arial";
                b.textAlign = "center";
                b.textBaseline = "middle";

                // Set the color of the text
                b.fillStyle = "rgb(" + Math.floor(Math.random() * 256) + "," + Math.floor(Math.random() * 256) + "," + Math.floor(Math.random() * 256) + ")";

                // Add the character to the canvas
                var o = g + Math.random() * i;
                b.translate(20 + m * 30, a.height / 2);
                // b.rotate(o * Math.PI / 180);
                b.fillText(n, 0, 0);
                // b.rotate(-1 * o * Math.PI / 180);
                b.translate(-(20 + m * 30), -1 * a.height / 2);
            }
            // Set the captcha code in session storage
            sessionStorage.setItem("captchaCode", e);
        }
    });
</script>


<script>
    $('#spk24').slick({
        arrows: false,
        infinite: true,
        speed: 3000,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
</script>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $('.vs-header').addClass('blk');
            } else {
                $('.vs-header').removeClass('blk');
            }
        });
    });

    $(window).scroll(function () {
        var winScrollTop = $(window).scrollTop();
        var winHeight = $(window).height();
        var floaterHeight = $('#floater').outerHeight(true);
        var fromBottom = 320;
        var top = winScrollTop + winHeight - floaterHeight - fromBottom;
        $('#floater').css({ 'top': top + 'px' });
    });

</script>

<script>
    function getStateEnq(val) {
        $.ajax({
            type: "POST",
            url: "./assets/includes/get_stateEnq.php",
            data: 'country_id=' + val,
            success: function (data) {
                $("#enquiry_city").html(data);
            }
        });
    }
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('input[title!=""]').hint();
        $('textarea[title!=""]').hint();
        var validator = $("#frmAwardReg").validate({
            rules: {
                organization: "required",
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                },
                address: "required",
                promoter: "required",
                //website_url: "required",
                establishment: "required"
            },
            messages: {
                organization: 'Please enter organization',
                email: {
                    required: "Please enter email address",
                    email: "Please enter valid email address"
                },
                mobile: {
                    required: "Please enter mobile no",
                    minlength: jQuery.format("Please enter at least {0} digit"),
                    maxlength: jQuery.format("Please enter maximum of {0} digit")
                },
                address: "Please enter address",
                promoter: 'Please enter promoter',
                //website_url: "Please enter website url",
                establishment: 'Please select year of establishment'
            },
            errorPlacement: function (error, element) {
                error.appendTo(element.parent())
            },
            submitHandler: function () {
                $('#btnRegister').attr('disabled', true);
                form.submit();
            }
        });



    });

    function anyCheck(f, idtype) {
        for (var i = 0; i < document.frmAwardReg.rPayment.length; i++) {
            if (document.regfrm2.rPayment[i].checked) {
                var rad_val = document.regfrm2.rPayment[i].value;
            }
        }
        var t = 0;
        var c = f['subcat_f1[]'];
        for (var i = 0; i < c.length; i++) {
            c[i].checked ? t++ : null;
        }
        var c = f['award_cat1[]'];
        for (var i = 0; i < c.length; i++) {
            c[i].checked ? t++ : null;
        }



        var fval = t * 23600;

        document.getElementById("amount").value = fval;
    }


    $("#f22").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs22").slideDown(1000);
        }
        else {
            $("div #fs22").slideUp(1000);
        }

    });



    $("#f23").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs23").slideDown(1000);
        }
        else {
            $("div #fs23").slideUp(1000);
        }
    });

    $("#f24").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs24").slideDown(1000);
        }
        else {
            $("div #fs24").slideUp(1000);
        }
    });



    $("#f25").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs25").slideDown(1000);
        }
        else {
            $("div #fs25").slideUp(1000);
        }
    });



    $("#f26").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs26").slideDown(1000);
        }
        else {
            $("div #fs26").slideUp(1000);
        }
    });


    $("#f27").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs27").slideDown(1000);
        }
        else {
            $("div #fs27").slideUp(1000);
        }
    });



    $("#f28").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs28").slideDown(1000);
        }
        else {
            $("div #fs28").slideUp(1000);
        }
    });


    $("#f29").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs29").slideDown(1000);
        }
        else {
            $("div #fs29").slideUp(1000);
        }
    });


    $("#f31").change(function () {
        var arr = [1, 2, 3, 4];
        $.each(arr, function (index, value) {
            $("div #fs" + value).hide(800);

        });
        if (this.checked) {
            $("div #fs31").slideDown(1000);
        }
        else {
            $("div #fs31").slideUp(1000);
        }
    });

</script>



<script>
    setTimeout(function () {
        $('#myModals').modal();
    }, 1000);

</script>



<!-- <script type="text/javascript">
document.addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("myModals").style.display = "none";
}
</script> -->

<!--   <script>
$(document).ready(function(){
  $(".close").click(function(){
    $("#myModals").css("display", "none");
  
  });
});
</script> -->
<!-- 
<div class="modal fade in irc" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: block; padding-right: 17px;">
  <div class="modal-dialog">

    <div class="modal-content cl" style="padding: 20px;">
      <div class="modal-body"> 
    <button type="button" class="close" data-dismiss="modal" style="
 
    "><span aria-hidden="true">X</span><span class="sr-only ">Close</span></button>
    
    <div class="vlink" style="background-image: url(assets/img/background.png);
     "> <br>
    
        <a href="https://www.entrepreneurindia.com/tech25web/" target="_blank">  <img src="assets/img/tw.png" class="mainlogo"></a>
         <div class="imgset">
        <div class="edtion">7<sup>th</sup> Edition</div>
        <a href="https://www.entrepreneurindia.com/tech25web/" target="_blank">  <img src="assets/img/tech.svg"></a>
   

<div class="date"><span class="red"><i class=""></i>8-9 MARCH,
                              2024</span>
                              <div class="venu">HOTEL SHERATON, BENGALURU</div>
 </div>
                               </div>
<div class="irec-btn">
    <a href="https://www.entrepreneurindia.com/tech25web/" class="vs-btn" target="_blank">CLICK HERE FOR MORE DETAILS</a>
     
</div>
 </div>

  

  
      </div>
    </div>
  </div>
</div> 
<style type="text/css">
#myModals{
    cursor: pointer;}


.fade:not(.show) {
    opacity: 1!important;
}

     .modal-body .mod{
padding: 23px 25px;
text-align: center;

}

@media  (max-width:767px){
     .modal-body .mod{
padding: 0px 0px!important;
}
}
</style> --></body>
</html>