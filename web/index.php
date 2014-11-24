<?php

define('PROJECT_ROOT', realpath(__DIR__ . '/../'));
include PROJECT_ROOT . '/services/ContentGrabber.php';

$journalist = new ContentGrabber();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>School of Universal Consciousness (UniCon) ADMIN</title>
    <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
    <script src="/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI_theme=none&amp;mobileUI_navInnerPad=20"></script>
    <script src="/js/jquery.dropotron-1.1.js"></script>
    <script src="/js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="/css/5grid/core.css" />
        <link rel="stylesheet" href="/css/5grid/core-desktop.css" />
        <link rel="stylesheet" href="/css/5grid/core-1200px.css" />
        <link rel="stylesheet" href="/css/5grid/core-noscript.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style-desktop.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="/css/ie8.css" /><![endif]-->
    <!--[if lte IE 7]><link rel="stylesheet" href="/css/ie7.css" /><![endif]-->
    <style type="text/css">
        li { margin-bottom: 13px; }

    </style>
    <?php if (isset($customHeader)) { echo $customHeader; } ?>
</head>
<body class="left-sidebar">
<div id="wrapper">

<!-- Header -->
<div id="header-wrapper">
    <header id="page-header" class="5grid-layout">
        <div class="row">
            <div class="12u">
                <h1 class="site-title"><a href="twocolumn3.html" class="mobileUI-site-name">School of Universal Consciousness</a></h1>
                <nav class="mobileUI-site-nav">
                    <ul>
                        <li class="current_page_item"><a href="/">Home</a></li>
                        <li>
                            <a href="">A Dropdown</a>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li><a href="#">Etiam dolore nisl</a></li>
                                <li>
                                    <span>Phasellus consequat</span>
                                    <ul>
                                        <li><a href="#">Lorem ipsum dolor</a></li>
                                        <li><a href="#">Phasellus consequat</a></li>
                                        <li><a href="#">Magna phasellus</a></li>
                                        <li><a href="#">Etiam dolore nisl</a></li>
                                        <li><a href="#">Veroeros feugiat</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <li><a href="twocolumn1.html">Join Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>

<!-- Main -->
<div id="main-wrapper">
    <div class="5grid-layout">
        <div class="row">
            <div class="8u mobileUI-main-content">

                <!-- Content -->
                <div id="content">
                    <div class="inner">

                        <!-- Post -->
                        <article class="post editable" data-content-id="post-mission_statement">
                            <?php
                            if (($snippet = $journalist->fetchStory('post-mission_statement')) != false) {
                                echo $snippet;
                            } else {
                                ?>
                                <header>
                                    <h2><a href="#">Mission Statement</a></h2>
                                    <div class="byline">Our goals</div>
                                </header>

                                <span class="image align-left"><img src="/images/pic1.jpg" alt="" /></span>
                                <p>To create a community for those who want an areligious organization which purposefully abstains from proselytizing dogmas. A collaborative focused thought forum for the unchurched, comprised of individuals who strive for evolving a better society, and a better Earth, through fostering open minded discussion, and targeted civic action.</p>
                            <?php } ?>
                        </article>
                        <article class="post editable" data-content-id="post-core_principles">
                            <?php
                            if (($snippet = $journalist->fetchStory('post-core_principles')) != false) {
                                echo $snippet;
                            } else {
                                ?>
                                <header>
                                    <h2><a href="#">Core Principles</a></h2>
                                </header>
                                <ol>
                                    <li>
                                        <strong>Many Beliefs, few Answers:</strong> Answers are only the beliefs which One has proven to themselves through testing and direct observation (e.g., the Scientific Method) to a degree which they can personally validate the phenomenon exists, for them.
                                    </li>
                                    <li>
                                        <strong>Very few Accepted Answers:</strong> Accepted Answers are Answers which can be proven by repeated experimentation and largely acceptable in any open-minded, but serious, peer-reviewed journal.
                                    </li>
                                    <li>
                                        <strong>Open-mindedness is Essential:</strong> Acknowledge that Science is still in its infancy and may or may not be the end-all-be-all. Beliefs should not be dismissed out of hand unless experimentation can be devised to prove otherwise in all instances. Even then, a benefit of the doubt that any given phenomenon may be real for any number of Observers should be afforded to them.
                                    </li>
                                    <li>
                                        <strong>Maintain your own Mythology:</strong> While realizing we individually know Vanishingly Little, we must take care to consciously and continually maintain our own personal mythology system. <strong>A healthy mind is one which acknowledges it has knows very little, believes almost everything, and “continually follows the Truth, wherever it is leads” [Thomas Jefferson].</strong>
                                        <p><strong>
                                                Do not believe <em>anything</em> without careful thought, feeling, and wherever possible, at least a little experimentation.
                                            </strong>
                                        </p>
                                    </li>
                                    <li>
                                        <strong>Sustainability is Crucial:</strong> It is abundantly clear that the human footprint on this planet is causing irreparable harm to every ecosystem, potentially fatally. Every effort should be made to reduce our individual and collective footprints, including the disavowing of certain Beliefs that are easily perceived as promoting unsustainability (e.g., “The Earth was given to Man to do as He wilt.”).
                                    </li>
                                    <li>
                                        <strong>Reincarnation is Preferred:</strong> Few beliefs promote long-term Sustainability more: Belief in Reincarnation has been scientifically demonstrated to dramatically increase the timeline horizons of its believers, from the common 5-10 years to over 500 to 1,000 years, as belief would necessitate living with one’s actions for thousands of years into the future. It also neatly ties up several hard-to-answer human dilemmas, such as the unfairness of being born severely handicapped.
                                    </li>
                                    <li>
                                        <strong>Many Paths, that are not Equal:</strong> There are many paths to a productive, fulfilling, sustainable life. UniCon seeks to discover the more efficient ones while advocating against the more destructive paths.
                                    </li>
                                    <li>
                                        <strong>Theistic Belief is Non-Essential:</strong> Personal belief in deity is understood and accepted, but it is not advocated at this time by the School of Universal Consciousness. Theists, atheists and agnostics are all welcome alike.

                                        <p>Who knows Who, if Anyone, is out there? Many of us have not had direct experience with an ostensibly Higher Power, and far fewer have been able to test this Power in a way to prove such stupendous claims such as omnipotence, omniscience, or even benevolence towards Humanity or even knowledge of Individuals. All such Beliefs have proven over eons to be quite difficult to peer review, chiefly due to various supposed deities being unwilling to expose themselves for public scrutiny. Thus, all claims to deity should be met with the utmost skepticism, including a thorough probing into whether a con is being conducted. Special care must be taken to guard one’s mind and body from any Entity seeking special allegiance, and this includes testing thoroughly their claims of beneficence and truthfulness.
                                        </p>
                                    </li>
                                    <li>
                                        <strong>Always remain Vigilant:</strong> In the event a superhuman Intelligence (including future Artificial Intelligence) does communicate with you, you are encouraged to acknowledge that a long con you are completely unable to identify on your own could be played out against you. Thus, you are encouraged to share your stories with others for debunking, particularly before setting on any course of divinely-inspired action.
                                    </li>
                                    <li>
                                        <strong>Constantly Reevaluate:</strong> Strive to not believe anything anyone says without due diligence in validating its truthfulness relative to your own personal mythology. But also strive to constantly reevaluate all of your beliefs, particularly your strongest held ones.
                                    </li>
                                </ol>
                            <?php } ?>
                        </article>
                    </div>
                </div>
            </div>

            <div class="4u">
                <!-- Sidebar -->
                <div id="sidebar">
                    <div class="inner">

                        <!-- About -->
                        <section class="widget widget-about editable" data-content-id="main-about_us">
                            <?php
                            if (($snippet = $journalist->fetchStory('main-about_us')) != false) {
                                echo $snippet;
                            } else {
                                ?>
                                <header>
                                    <h2>About Us</h2>
                                </header>
                                <img src="/images/pic3.jpg" alt="" class="image" />
                                <p>
                                    Phasellus dapibus sed convallis scelerisque. Donec et augue id tortor ultricies
                                    eget pellentesque turpis ut nulla et sem, vel iaculis arcu. Nulla vel lorem nisl,
                                    quis et ultricies tellus nunc imperdiet.
                                </p>
                                <footer>
                                    <a href="#" class="button-style2 icon24 icon24-bio">Full Biography</a>
                                </footer>
                            <?php } ?>
                        </section>

                        <!-- Recent Posts -->
                        <section class="widget widget-recent-posts">
                            <header>
                                <h2>Recent Posts</h2>
                            </header>
                            <ul class="style1">
                                <li>
                                    <a href="#">Magna dolore phasellus lorem ipsum</a>
                                    <div class="date">Posted 6 hours ago</div>
                                </li>
                                <li>
                                    <a href="#">Lacus venenatis sed lorem consequat</a>
                                    <div class="date">Posted 2 days ago</div>
                                </li>
                                <li>
                                    <a href="#">Dolore sagittis purus dolore nullam sed blandit</a>
                                    <div class="date">Posted 4 days ago</div>
                                </li>
                                <li>
                                    <a href="#">Consequat nunc imperdiet lorem vel nullam</a>
                                    <div class="date">Posted 1 week ago</div>
                                </li>
                            </ul>
                            <footer>
                                <a href="#" class="button-style2 icon24 icon24-folder">Archives</a>
                            </footer>
                        </section>

                        <!-- Recent Tweets -->
                        <section class="widget widget-recent-tweets">
                            <header>
                                <h2>Recent Tweets</h2>
                            </header>
                            <ul class="style1">
                                <li>
                                    <p>Ipsum magna lorem dolor veroeros etiam veroeros dolore consequat? <a href="#">t.co/xxxxxxxxxx</a></p>
                                    <div class="date">Posted 6 hours ago</div>
                                </li>
                                <li>
                                    <p><a href="#">@4templates</a> Veroeros lorem etiam nisl lorem dolor blandit lorem non nisl dapibus imperdiet.</p>
                                    <div class="date">Posted 8 hours ago</div>
                                </li>
                                <li>
                                    <p>Etiam eros volutpat <a href="#">@4templates</a> urna sagittis purus laoreet rutrum ultricies purus.</p>
                                    <div class="date">Posted 9 hours ago</div>
                                </li>
                            </ul>
                            <footer>
                                <a href="#" class="button-style2 icon24 icon24-folder">@4templates</a>
                            </footer>
                        </section>

                        <!-- Copyright -->
                        <div id="copyright">
                            Copyright &copy; 2014 PHP Experts, Inc. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php if (isset($customFooter)) { echo $customFooter; } ?>
</body>
</html>