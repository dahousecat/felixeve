<?php require_once 'includes/portfolio.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Felix Eve - Homepage</title>
    <meta name="title" content="Felix Eve Ltd">
    <meta name="author" content="Felix Eve">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=5">
    <meta name="referrer" content="no-referrer">
    <meta name="Description" content="Felix Eve Ltd Drupal & PHP contractor portfolio">

    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon_x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
    <link rel="mask-icon" href="img/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="img/icons/icon_x144.png">
    <meta name="theme-color" content="#192069">

    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#0650a8">

    <link href="css/main.css" rel="stylesheet" inline>

    <link rel="preload" href="fonts/silka-regular-webfont.ttf" as="font" type="font/ttf" crossorigin="anonymous" />
    <link rel="preload" href="fonts/silka-regular-webfont.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="fonts/silka-regular-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous" />

</head>
<body>

<div class="facade"></div>

<header class="header" id="top">
    <div class="container container--wide header__inner">
        <div class="header__title_block">
            <h1 class="header__title">Felix Eve Ltd</h1>
            <h2 class="header__subtitle">Full Stack Software Engineer</h2>
        </div>

        <nav class="nav">

            <button id="menu-button" data-state="initial" class="nav__button" aria-controls="menu" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <title>Menu</title>
                    <path d="M 0 0 25 0 50 0 50 10 32 10 25 10 17.9 10 0 10">
                        <animate id="top-bar-anim" fill="freeze" attributeName="d" begin="indefinite" dur="300ms" to="M 0 0 25 0 50 0 50 10 32 10 25 10 17.9 10 0 10" from="M 7 0 25 17.9 42.9 0 50 7 32 25 25 17.9 17.9 25 0 7"/>
                    </path>
                    <path d="M 0 20 0 30 50 30 50 20">
                        <animate id="middle-bar-anim" fill="freeze" attributeName="d" begin="indefinite" dur="300ms" to="M 0 20 0 30 50 30 50 20" from="M 25 17.8 17.9 25 25 32 32 25"/>
                    </path>
                    <path d="M 0 40 17.9 40 25 40 32 40 50 40 50 50 25 50 0 50">
                        <animate id="bottom-bar-anim" fill="freeze" attributeName="d" begin="indefinite" dur="300ms" to="M 0 40 17.9 40 25 40 32 40 50 40 50 50 25 50 0 50" from="M 0 42.9 17.9 25 25 32 32 25 50 42.9 42.9 50 25 32 7 50"/>
                    </path>
                </svg>
            </button>

            <ul id="menu" class="menu">
                <li>
                    <a class="menu__link" href="mailto:felix@felixeve.co.uk">Contact</a>
                </li>
                <li>
                    <a class="menu__link" href="cv">CV</a>
                </li>
                <li>
                    <a class="menu__link" href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a class="menu__link" href="#testimonials">Testimonials</a>
                </li>
            </ul>

        </nav>

    </div>
</header>

<section class="hello">
    <div class="hello__inner container">
        <div class="hello__col1">
            <h3 class="hello_t1">G'day!</h3>
            <p class="hello_t2">My name is Felix and I'm based in Bristol.</p>
            <p>
                I love crafting code, adhering to SOLID methodologies and am a
                stickler for coding standards.
            </p>
            <p>
                I have over 10 years experience as a full stack developer
                working in LAMP stacks with Drupal &amp; PHP.
            </p>

            <ul class="social">
                <li class="social__item social__item--linkedin">
                    <a class="social__link" href="https://www.linkedin.com/in/felix-eve" target="_blank" rel="noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 26 26">
                            <title>LinkedIn</title>
                            <path class="social__path social__path--linkedin" d="M6.2 4c0 1.2-1 2.2-2.2 2.2-1.2 0-2.2-1-2.2-2.2C1.8 2.8 2.8 2 4 2c1.2 0 2.2 1 2.2 2.1zm0 4H1.8v13.8h4.4zm7 0H8.7v13.8H13v-7.3c0-4 5.2-4.3 5.2 0v7.3h4.3V13c0-6.9-7.8-6.5-9.5-3.2z"/>
                        </svg>
                    </a>
                </li>
                <li class="social__item social__item--drupal">
                    <a class="social__link" href="https://www.drupal.org/u/dahousecat" target="_blank" rel="noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 26 26">
                            <title>Drupal</title>
                            <path class="social__path social__path--drupal" d="M16 4.9C14.4 3 12.8 1.5 12.3-.4c-.5 1.9-2.2 3.5-4 5.3-2.5 2.6-5.5 5.5-5.5 10a9.5 9.5 0 1019 0c0-4.5-3-7.4-5.6-10M6.7 17C6.2 17 4 13.4 8 9.4l2.6 3a.2.2 0 010 .3c-.6.6-3.3 3.3-3.6 4.2 0 .2-.2.2-.3.2m5.5 4.9a3.3 3.3 0 01-3.3-3.3c0-.8.4-1.6.8-2.2l2.5-2.7 2.4 2.7a3.2 3.2 0 01.8 2.2 3.3 3.3 0 01-3.2 3.3m6.2-5.3c0 .1-.2.4-.4.4-.4 0-.5-.2-.7-.6-.7-1-6-6.6-7-7.7-1-1-.2-1.6.1-2l1.8-1.7s3.9 3.6 5.5 6.2c1.6 2.5 1 4.7.7 5.4"/>
                        </svg>
                    </a>
                </li>
                <li class="social__item social__item--stackoverflow">
                    <a class="social__link" href="https://drupal.stackexchange.com/users/11306/felix-eve" target="_blank" rel="noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 26 26">
                            <title>Stack Overflow</title>
                            <path d="M18.5 21.4v-6h2v8H2.3v-8h2v6z" class="social__path social__path--stackoverflow-outer"/>
                            <path d="M6.5 14.8l10 2 .4-2-10-2zM7.8 10l9.2 4.3.9-1.9-9.2-4.2zm2.6-4.5l7.8 6.5 1.3-1.6L11.7 4zm5-4.8l-1.6 1.2 6 8.1 1.7-1.2zm-9 18.7h10v-2h-10z" class="social__path social__path--stackoverflow-inner"/>
                        </svg>
                    </a>
                </li>
                <li class="social__item social__item--github">
                    <a class="social__link" href="https://github.com/dahousecat" target="_blank" rel="noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="-1 -1 26 26">
                            <title>Github</title>
                            <g transform="translate(0 0)">
                                <path class="social__path social__path--github-outer" d="M12 0a12 12 0 00-3.8 23.4c.6.1.8-.3.8-.6v-2.2c-3.3.7-4-1.4-4-1.4-.6-1.4-1.4-1.8-1.4-1.8-1-.7.1-.7.1-.7 1.2 0 1.9 1.2 1.9 1.2 1 1.8 2.8 1.3 3.4 1 .2-.8.5-1.3.8-1.6-2.7-.3-5.5-1.3-5.5-6 0-1.2.5-2.3 1.3-3.1-.1-.4-.6-1.6.1-3.2 0 0 1-.3 3.3 1.2a11.5 11.5 0 016 0C17.3 4.7 18.3 5 18.3 5c.7 1.6.2 2.9.1 3.2.8.8 1.3 1.9 1.3 3.2 0 4.6-2.9 5.6-5.5 5.9.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6A12 12 0 0012 0z"/>
                                <path class="social__path social__path--github-inner" d="M5.9 5h-.2c-.7 1.6-.2 2.8-.1 3.2-.8.8-1.3 1.9-1.3 3.1 0 4.7 2.8 5.7 5.5 6-.3.3-.6.8-.8 1.6-.6.3-2.4.8-3.4-1 0 0-.7-1.2-1.9-1.2 0 0-1.1 0-.1.7 0 0 .8.4 1.4 1.8 0 0 .7 2.1 4 1.4v2.6c0 .2.2.5.4.5.7.2 1 .3 2.8.3 1.4 0 1.6 0 2.4-.3.2 0 .4-.3.4-.5V19.5a3 3 0 00-.8-2.2c2.6-.3 5.5-1.3 5.5-5.9 0-1.3-.5-2.4-1.3-3.2.1-.3.6-1.6-.1-3.2 0 0-1-.3-3.3 1.2-2-.5-4-.5-6 0C7.3 5.1 6.3 5 5.9 5z"/>
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>

        </div>
        <div class="hello__col2">
            <div class="hello__image_wrap">
                <picture>
                    <source media="(max-width: 499px)" type="image/webp" srcset="img/felix/felix-130.webp 1x, img/felix/felix-260.webp 2x">
                    <source media="(max-width: 499px)" type="image/jpeg" srcset="img/felix/felix-130.jpg 1x, img/felix/felix-260.jpg 2x">
                    <source media="(max-width: 499px)" type="image/png" srcset="img/felix/felix-130.jpg 1x, img/felix/felix-260.jpg 2x">

                    <source media="(min-width: 500px)" type="image/webp" srcset="img/felix/felix-210.webp 1x, img/felix/felix-420.webp 2x">
                    <source media="(min-width: 500px)" type="image/jpeg" srcset="img/felix/felix-210.jpg 1x, img/felix/felix-420.jpg 2x">
                    <source media="(min-width: 500px)" type="image/png" srcset="img/felix/felix-210.jpg 1x, img/felix/felix-420.jpg 2x">

                    <img width="420" height="577" class="hello__image" src="img/felix/felix-420.jpg" alt="Felix Eve">
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="container skills">
    <h3 class="skills__title sr-only">Key Skills</h3>
    <div class="skills__inner">
        <ul class="skills__list">
            <li class="skills__item">
                <h4>
                    <svg class="skills_icon" xmlns="http://www.w3.org/2000/svg" width="270.7" height="270.7" viewBox="0 0 71.6 71.6"><defs/>
                        <g transform="translate(-41.4 -57.5)">
                            <title>E-commerce icon</title>
                            <circle cx="77.2" cy="93.3" r="35.8"/>
                            <path fill="#fff" d="M88 116c-1.8-.3-3.3-1.9-3.6-3.8a4.4 4.4 0 013.3-4.7c.5-.2 1.8-.2 2.3 0 .6.1 1.3.5 1.7.8.7.5 1.3 1.5 1.5 2.3a5 5 0 010 2.3A4.5 4.5 0 0188 116zm-20 0c-1-.3-2-.9-2.5-1.7-.4-.4-.7-1.2-.9-1.7v-2a4.5 4.5 0 016.5-2.9c.6.3 1.4 1 1.7 1.6.7 1.2.8 2.4.4 3.6a4.7 4.7 0 01-3 3c-.5.1-1.6.2-2.1 0zm-1.5-10.2c-.5-.1-.8-.3-1.3-.8-.4-.4-.5-.6-.8-1.2l-.5-1.3-2-9.7-2.6-13.9v-.1h-4l-.4-.2a3 3 0 01-1.5-1.7 5 5 0 01-.2-1.7c0-.7.5-1.4 1.2-1.7l.3-.2h6.6c.5.2 1 .4 1.3.8.6.6 1 1.4 1.2 3.7l.3 2 .1.4h17c16 0 16.8 0 17.2.2 1.3.4 2 1.2 1.9 2.4 0 .5-.2.8-1 3a324.8 324.8 0 00-3.3 9.4c-.5 1-1 1.4-1.7 1.8-.7.3.1.3-13.9.3H67.6a34.1 34.1 0 00.6 4.2l12 .1h12.5c1 .2 1.6.5 1.8 1.2v1.3c0 .9-.4 1.4-1 1.6l-.2.2H66.5zM92 93l2.4-6.4.8-2-2.3-.1a1070.4 1070.4 0 00-22.4-.1h-5.1a72 72 0 001.2 6.6l.4 2h9.6a5645.6 5645.6 0 0115.4 0z"/>
                        </g>
                    </svg>
                    E-commerce
                </h4>
                <p>
                    I've worked on several Drupal e-commerce sites including
                    <a href="https://shop.zoo.org.au" target="_blank" rel="noreferrer">Zoos Victoria</a>,
                    <a href="https://zooshop.taronga.org.au" target="_blank" rel="noreferrer">Taronga Zoo</a> &amp;
                    <a href="https://www.australianprintworkshop.com/" target="_blank" rel="noreferrer">Australian Print Workshop.</a>
                </p>
            </li>
            <li class="skills__item">
                <h4>
                    <svg class="skills_icon" xmlns="http://www.w3.org/2000/svg" width="270.7" height="270.7" viewBox="0 0 71.6 71.6"><defs/>
                        <g transform="translate(-13.4 -16.9)">
                            <title>Migrations icon</title>
                            <circle cx="49.2" cy="52.7" r="35.8"/>
                            <path fill="#fff" d="M63.7 74.2l-.3-1.6c-.1-.8-.2-1.1-.4-1.1l-1.1-.4-.9-.4-1.3 1-1.3.8-.9-.9-1-.9 1-1.3 1-1.3-.5-.8-.4-1.1c0-.2-.5-.4-1.7-.6l-1.6-.3v-2.6l1.6-.3c1.2-.2 1.6-.3 1.7-.5l.4-1.1.4-.8-.9-1.4-1-1.3 1-.9 1-.9 1.1.9 1.4.8 1.2-.4c1.1-.4 1.1-.5 1.4-2.4l.2-1.2h2.6l.2 1.1c.3 2.1.3 2 1 2.3l1 .5c.6.3.5.4 2-.8l1.2-.8.9.9.9.9-1 1.4c-.9 1.3-.9 1.3-.6 1.7l.4 1c.2.8.2.8 1.3 1 2.3.3 2 .1 2 1.6s.3 1.3-2 1.7c-1 .2-1 .2-1.3.9a5 5 0 01-.4 1c-.3.4-.3.4.8 2l.8 1.1-.9 1-1 .8-1-.8c-1.6-1.1-1.6-1-2-.8a5 5 0 01-1 .4c-.7.2-.7.3-1 1.3-.3 2.3-.1 2-1.6 2-1.3 0-1.3 0-1.4-.4zm2.6-6.6c1.4-.4 2.6-2 2.6-3.6a4 4 0 00-3.8-3.8c-1 0-1.9.4-2.7 1.2a3.6 3.6 0 000 5.3c1.1 1 2.4 1.4 4 1zm-20.7 4.9c-7.7-.6-13.8-3.2-15.5-6.5l-.6-1v-3c0-3.1 0-3.2.3-2.6a11 11 0 003.5 3.3c3.5 2 8.4 3.1 14.9 3.4l2.6.1.1.5c.2.6.8 1.4 1.5 1.8l.7.4-.2 1a3 3 0 000 1.6l.2 1h-7.5zm-2-9.2c-6-.9-11.1-3-13-5.3-1-1.3-1-1.8-1-5.1 0-3 0-3 .2-2.6 1.6 3 6.4 5.3 12.8 6.4 1.4.2 2.9.2 6 .3h4.2v.5l.2 1c.3.7.2.7-.3.9-1.1.4-2 2-2 3.4v.7h-2.8l-4.3-.2zm1.6-8.9l-2.4-.3c-6.3-.8-11.4-3.3-12.8-6.3-.4-.8-.5-1-.5-3.9v-3l.5.7c1.9 2.9 6.5 5.1 12.8 6 2.7.5 9.5.5 12.2 0 2.8-.4 5.6-1.1 7.8-2a12 12 0 005.1-4.2l.4-.7v3c0 3 0 3.2-.4 4L67 49l-.4.6h-1.7c-1 0-2 0-2.4.2-.7.2-2 1.4-2.1 2-.1.4-.2.4-.7.2-1.5-.6-3-.1-4.4 1.3-1 1-1 1-2.2 1.1a80 80 0 01-7.9 0zm.3-9c-6.4-.6-11.4-2.2-14-4.7-2.8-2.5-2.6-5.5.4-7.8 2.7-2.2 7.2-3.7 12.6-4.3 2.4-.2 8.7-.1 10.8.3 5.5 1 9.4 2.6 11.5 4.9 3.5 3.7.6 8-7 10.3a38.8 38.8 0 01-14.3 1.4z"/>
                        </g>
                    </svg>
                    Migrations
                </h4>
                <p>
                    I've been responsible for migrating sites from D6 to D7,
                    D7 to D8 and even custom C# sites to Wordpress as well as
                    writing custom solutions to import or export large amounts
                    of data.
                </p>
            </li>
            <li class="skills__item">
                <h4>
                    <svg class="skills_icon" xmlns="http://www.w3.org/2000/svg" width="270.7" height="270.7" viewBox="0 0 71.6 71.6"><defs/>
                        <g transform="translate(-80.4 -60.2)">
                            <title>Testing icon</title>
                            <circle cx="116.3" cy="96" r="35.8"/>
                            <path fill="#fff" d="M134.7 118.1c-1-.1-1.4-.4-3-2.1-2-2-3.5-3.6-7.8-8.5l-3.4-4-1 .2c-4.2.8-7.2 0-9.6-2.3-2-2-3.4-5.4-2.9-7.5l.3-.4c.1 0 .8.5 1.6 1.3a12 12 0 003.3 2.4c.5.2.7.2 2 .2 1.4 0 1.4 0 2-.2.4-.2.9-.6 1.6-1.3l1.4-1.8c.7-1.5.5-3.2-.7-5-.4-.7-1-1.3-2.4-2.9A14 14 0 01115 85c0-.3 3.9.2 5.3.7 1.7.5 4 2.8 4.9 4.6a11 11 0 01.6 6.5c-.4 1.4-.4 1.4.5 2.2l7.9 7c2.5 2.3 5 4.7 5.4 5.4.7 1.2.9 2.8.3 4-.4.8-1.4 1.8-2 2.2-1 .5-2.1.7-3.2.5zm2-1.9a3 3 0 001.3-1.2c.2-.5.3-.7.3-1.3 0-.8-.2-1.2-.7-1.8-.5-.5-1-.8-1.7-.8-2.3 0-3.6 2.3-2.3 4.2.7 1 2.1 1.4 3 .9zm-1.5-1.7c-.5-.2-.6-1-.2-1.3.2-.2.4-.2.8-.2.5 0 .5 0 .6.2.1.3 0 .9-.2 1.1-.3.3-.7.4-1 .2zm-22.5 0c-.6 0-1.1-.5-1.4-1-.3-.5-.6-1.6-.7-2.6v-.6l-.4-.1-1.5-.4c-1.8-.5-3.6-1.1-5.4-2l-1.6-.7-.7.6c-1.3 1.1-2.3 1.4-3.4 1-.6-.1-1.4-.8-1.7-1.5-.5-1-.2-1.7.9-3.3l.6-.8-.8-1.3c-1-1.7-1.8-3.4-2.3-4.9-.6-2-.7-2.1-1-2.3 0-.1-.5-.3-1-.3-1.2-.2-1.9-.6-2.4-1.1-.5-.6-.7-1-.7-1.7 0-1.5 1.1-2.5 3-2.9 1-.2 1.2-.3 1.6-1.9a39.6 39.6 0 013-7l-.7-1c-.8-1-1.1-1.5-1.1-2.2 0-2.4 3-3.6 4.9-1.9.4.4.7.6 1 .6.3 0 1-.3 3.1-1.3 2.2-1 2.3-1 3.8-1.4 1.7-.5 1.7-.5 1.8-2 .1-1.3.6-2.2 1.4-2.8a2.5 2.5 0 013.4.4c.7.8 1 1.6 1 2.8 0 1 .2 1.2 2 1.6 1.2.3 1.6.4 4.3 1.7l2.3 1.2.8-.8c1-1 1.8-1.4 2.6-1.5 1.2 0 2 .4 2.5 1.4.2.4.3.6.3 1.2 0 1-.4 1.6-1.5 2.8l-.8 1 .3.5c1.2 2 1.9 3.3 2.7 5.9l.7 1.8h1.6c1.9.2 2.2.3 2.8.9 1 1.2 1 2.6 0 3.7-.6.7-.9.8-3.5 1l-.8.1-.5 1.8c-.5 1.7-1 3.3-1.4 4.1l-.1.4-.8-.7c-1-1-1-1.1-1.2-4v-2.8a11.7 11.7 0 00-9-8.8c-2.3-.4-6.2.2-6.3 1 0 .4.6 1.2 2.4 3 2.3 2.5 3 3.5 3 4.7.1.9-.3 1.6-1.2 2.5-1.4 1.3-2.5 1.6-3.8 1a16 16 0 01-3.6-3c-1.6-1.5-2.4-2.1-2.8-2.1-.7 0-1.2 2-1 4.6a10.4 10.4 0 006.4 9.7c2 1 2.5 1 6.3.8h1.7l1 1 1 1.3-2 .8c-2.7 1-3 1.2-3.1 1.6l-.3 1.2c-.3 1.7-.7 2.4-1.6 2.8-.5.3-1.5.4-2 .3z"/>
                        </g>
                    </svg>
                    Testing
                </h4>
                <p>
                    I've used Behat extensively including writing custom
                    extensions, and am also confident writing Unit tests.
                </p>
            </li>
        </ul>
    </div>
</section>

<?php /*
<section class="container tech">
    <h3 class="tech__title">Technologies</h3>
    <div class="tech__inner">
        <ul class="tech__list">
            <li class="tech__item" style="width: 80%">PHP</li>
            <li class="tech__item" style="width: 60%">OOP</li>
            <li class="tech__item" style="width: 60%">MySql</li>
            <li class="tech__item" style="width: 90%">Drupal</li>
            <li class="tech__item" style="width: 60%">Laravel</li>
            <li class="tech__item" style="width: 90%">HTML</li>
            <li class="tech__item" style="width: 70%">JavaScript</li>
            <li class="tech__item" style="width: 60%">Vue</li>
            <li class="tech__item" style="width: 90%">SCSS / BEM</li>
            <li class="tech__item" style="width: 60%">DevOps</li>
        </ul>
    </div>
</section>
*/ ?>
<section class="portfolio">
    <div class="container">
        <h3 class="portfolio__title" id="portfolio">Portfolio</h3>
        <ul class="portfolio__list">
            <?php foreach(portfolio_items() as $i => $item) { ?>
            <li class="portfolio__item portfolio__item--<?= $item['key'] ?><?= $i % 2 === 0 ? '' : ' portfolio__item--alt' ?>">
                <div class="portfolio__details">
                    <h4><?= $item['title'] ?></h4>
                    <?= $item['description'] ?>

                    <a class="portfolio__link" href="<?= $item['link'] ?>" target="_blank" rel="noreferrer">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-link">
                            <title>Link icon</title>
                            <path d="M11.706 13.707l6.293-6.293V11h2V4h-7v2h3.585l-6.293 6.293 1.415 1.414z" fill="currentColor"></path>
                            <path d="M19.002 18v-4h-2v4h-11V7h4V5h-4a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2z" fill="currentColor"></path>
                        </svg>
                        View Website
                    </a>
                    <ul class="tags">
                      <?php foreach($item['tags'] as $tag) { ?>
                          <?php if(is_array($tag)) { ?>
                              <li class="tag" title="<?= $tag[1] ?>"><?= $tag[0] ?></li>
                          <?php } else { ?>
                              <li class="tag"><?= $tag ?></li>
                          <?php } ?>
                      <?php } ?>
                    </ul>
                </div>
                <div class="portfolio__images">
                    <div class="portfolio__image_wrap portfolio__image_wrap--front">
                        <picture>
                            <source media="(max-width: 414px)" type="image/webp" srcset="img/portfolio/<?= $item['image'] ?>-350.webp 350w">
                            <source media="(max-width: 414px)" type="image/jpeg" srcset="img/portfolio/<?= $item['image'] ?>-350.jpg 350w">
                            <source media="(max-width: 414px)" type="image/png" srcset="img/portfolio/<?= $item['image'] ?>-350.png 350w">

                            <source media="(min-width: 415px)" type="image/webp" srcset="img/portfolio/<?= $item['image'] ?>-610.webp 610w">
                            <source media="(min-width: 415px)" type="image/jpeg" srcset="img/portfolio/<?= $item['image'] ?>-610.jpg 610w">
                            <source media="(min-width: 415px)" type="image/png" srcset="img/portfolio/<?= $item['image'] ?>-610.png 610w">

                            <img
                                    data-src="img/portfolio/<?= $item['image'] ?>-610.webp"
                                    width="610"
                                    height="<?= image_height('www/img/portfolio/' . $item['image'] . '-610.jpg') ?>"
                                    class="portfolio__image lazyload"
                                    alt="<?= $item['title'] ?>"
                            >
                        </picture>
                    </div>
                    <div class="portfolio__image_wrap portfolio__image_wrap--back">
                        <picture>
                            <source media="(max-width: 414px)" type="image/webp" srcset="img/portfolio/<?= $item['image2'] ?>-350.webp 350w">
                            <source media="(max-width: 414px)" type="image/jpeg" srcset="img/portfolio/<?= $item['image2'] ?>-350.jpg 350w">
                            <source media="(max-width: 414px)" type="image/png" srcset="img/portfolio/<?= $item['image2'] ?>-350.png 350w">

                            <source media="(min-width: 415px)" type="image/webp" srcset="img/portfolio/<?= $item['image2'] ?>-610.webp 610w">
                            <source media="(min-width: 415px)" type="image/jpeg" srcset="img/portfolio/<?= $item['image2'] ?>-610.jpg 610w">
                            <source media="(min-width: 415px)" type="image/png" srcset="img/portfolio/<?= $item['image2'] ?>-610.png 610w">

                            <img
                                    data-src="img/portfolio/<?= $item['image2'] ?>-610.webp"
                                    width="610"
                                    height="<?= image_height('www/img/portfolio/' . $item['image2'] . '-610.jpg') ?>"
                                    class="portfolio__image lazyload"
                                    alt="<?= $item['title'] ?>"
                            >
                        </picture>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <h3 class="testimonials__title" id="testimonials">Testimonials</h3>
        <ul class="testimonials__list">
            <li class="testimonials__item">
                <figure>
                    <blockquote cite="https://www.linkedin.com/in/felix-eve/#ember81">
                        <p>During my time at Versantus I had the pleasure of working with Felix. I cannot recommend Felix enough!</p>
                        <p>He is a consummate professional and always went the extra mile.</p>
                        <p>Felix is gifted in understanding complex requirements and applying solutions for them.</p>
                        <p>He always strived to find the next best way of working, but also bent to the pressures of business demands where necessary.</p>
                        <p>If I have the opportunity to work with Felix again, I would welcome the opportunity with open arms.</p>
                    </blockquote>
                    <figcaption>
                        <a class="testimonials__link" target="_blank" href="https://www.linkedin.com/in/christianfitzgibbon" rel="noreferrer">Christian Fitz-Gibbon</a> - Senior Software Engineer at Versantus, September 2021
                    </figcaption>
                </figure>
            </li>
            <li class="testimonials__item">
                <figure>
                    <blockquote cite="https://www.linkedin.com/in/felix-eve/#ember81">
                        <p>Felix is one of those great developers who's also just a genuine pleasure to work with. He's got a real sense of craftsmanship and pride in his work, and it shows in the quality of what he delivers.</p>
                        <p>On a technical level he's capable of delivering an entire development project on his own, and was tasked with some of the most difficult projects that came through the studio where we worked together. Felix is always happy to take on a challenge and his curiosity drives him to go deep when he needs to learn something new.</p>
                        <p>He's really good at communicating where the risks and challenges in a project lie, and always keeps an open line of communication when unexpected challenges might cause delays in a project. He understands that behind every technical challenge there's a real person or a business with a problem that needs solving, and doesn't get distracted from delivering that outcome.</p>
                        <p>On a personal level, Felix was just an amazing person to work with. His positivity and humour got us through some difficult projects together, and I'd jump at the chance to work with Felix again in the future!</p>
                    </blockquote>
                    <figcaption>
                        <a class="testimonials__link" target="_blank" href="https://www.linkedin.com/in/lindsay-gaines" rel="noreferrer">Lindsay Gaines</a> - Technical Director at Monkii, February 2010
                    </figcaption>
                </figure>
            </li>
        </ul>
    </div>
</section>

<footer class="footer">
    <div class="footer__left"></div>
    <div class="footer_centre">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 429.9 337.3" xml:space="preserve">
            <title>Drupal Association Individual Member</title>
            <g fill="#fff">
                <path fill="#798e29" d="M343 314.7h86.9l-30-42.3 30-42.2H343v42.2z"/>
                <path fill="#677b28" d="m343 314.7 46.9-30v-74.5H343v42.2z"/>
                <path fill="#798e29" d="M86.8 314.7H0l30-42.3-30-42.2h86.8v42.2z"/>
                <path fill="#677b28" d="m86.8 314.7-46.8-30v-74.5h46.8z"/>
                <path fill="#9dba2c" d="M383.6 168.6a168.6 168.6 0 1 1-337.2 0 168.6 168.6 0 0 1 337.2 0z"/>
                <path d="M107.7 76.5c5 3.9 5.5 9.9 1.3 15.1l-4.6 5.7-16.4-13 4.6-5.7c4.1-5.3 10.1-6.1 15.1-2.1zm-1.6 13c2.7-3.5 2.3-7-1.1-9.7s-7-2.4-9.7 1.1l-1.8 2.3 10.8 8.6 1.8-2.3zM120.7 78.4l-3 2.9-11.6-11.8 3-2.9 1.8 1.8c-.5-1.9 0-4 1.6-5.6l3.1 3.1-.8.8c-1.8 1.7-2.2 3.5.1 5.8l5.8 5.9zM138.3 63.5l-3.3 2.6-1.3-1.7c0 1.8-.8 3.6-2.5 4.9-3 2.4-6.8 2.1-9.6-1.5l-6-7.7 3.3-2.6 5.7 7.2c1.6 2.1 3.7 2.3 5.4 1 1.8-1.4 2-3.4.4-5.5l-5.7-7.2 3.3-2.6 10.3 13.1zM141.1 42.1c3.7-2.1 8.2-.9 10.8 3.6s1.4 9.1-2.3 11.3a7 7 0 0 1-6.1.5l5.1 8.9-3.6 2.1-12.2-21.3 3.6-2.1 1.2 2.1a6.8 6.8 0 0 1 3.5-5.1zm.8 3.8c-2 1.1-2.9 3.7-1.4 6.4s4.3 3.2 6.2 2.1c2-1.1 2.9-3.8 1.4-6.5s-4.2-3.1-6.2-2zM158 34c2.5-1 4.6-.5 6.1.4l-.9-2.2 3.9-1.6 6.1 15.5-3.9 1.6-.9-2.3a6.5 6.5 0 0 1-4.1 4.5c-3.9 1.5-8.3-.4-10.2-5.3-1.9-4.7 0-9.1 3.9-10.6zm2.4 3c-2.1.8-3.5 3.2-2.3 6.1 1.2 2.9 3.8 3.8 5.9 3 2.1-.8 3.5-3.2 2.3-6.2-1.2-2.9-3.8-3.7-5.9-2.9zM170.8 23.9l4-1.1 6 21.4-4 1.1-6-21.4zM203.2 36.3l-8.3.9-.9 4.1-4.4.5 5.1-21.6 4.8-.5 9.8 19.9-4.4.5-1.7-3.8zm-5.5-11.6-2 9 6-.7-4-8.3zM217.9 40.1c-4.2-.1-7-2.6-7.1-5.7l4.2.1c.1 1.3 1.3 2.2 3 2.3 1.6 0 2.6-.7 2.6-1.7.1-3-9.4-1.3-9.2-7.4.1-2.8 2.6-4.9 6.7-4.8 4 .1 6.4 2.3 6.6 5.6l-4-.1c-.1-1.3-1.1-2.2-2.7-2.2s-2.4.6-2.4 1.5c-.1 3 9.2 1.3 9.2 7.4-.3 2.9-2.9 5.1-6.9 5zM233.5 41.3c-4.1-.6-6.7-3.4-6.4-6.5l4.2.6c0 1.3 1 2.4 2.7 2.6 1.6.2 2.6-.4 2.8-1.3.4-2.9-9.2-2.3-8.3-8.4.4-2.7 3.1-4.6 7.2-4 4 .5 6.1 3 5.9 6.3l-4-.5c.1-1.3-.8-2.3-2.5-2.5-1.5-.2-2.4.3-2.6 1.3-.4 3 9 2.4 8.3 8.4-.5 2.8-3.3 4.6-7.3 4zM249.8 44.6a8.1 8.1 0 0 1-5.9-10.5 8.3 8.3 0 0 1 10.5-6.1c4.6 1.3 7.4 5.4 6 10.5a8.2 8.2 0 0 1-10.6 6.1zm1-3.5c2.1.6 4.6-.4 5.5-3.6.9-3.2-.7-5.3-2.9-5.9-2.1-.6-4.5.4-5.4 3.6-.8 3.2.6 5.3 2.8 5.9zM273.6 34.8c3.8 1.6 5.5 4.7 4.9 8.5l-4.2-1.8c.1-1.5-.6-2.7-2.2-3.4-2.2-.9-4.3.1-5.5 3.1s-.5 5.2 1.6 6.1c1.6.7 2.9.4 4-.8l4.2 1.8a7.6 7.6 0 0 1-9.5 2.4c-4.4-1.9-6.3-6.3-4.2-11.1 2.1-5 6.5-6.7 10.9-4.8zM284.3 40l3.7 2-7.9 14.6-3.7-2 7.9-14.6zm1.7-4.1c.7-1.2 2.1-1.7 3.4-.9 1.3.7 1.8 2.2 1.1 3.4-.7 1.2-2.1 1.6-3.4.9a2.5 2.5 0 0 1-1.1-3.4zM298.3 47.9c2.2 1.5 3 3.6 3.1 5.3l1.3-2 3.5 2.4-9.3 13.8-3.5-2.4 1.4-2c-1.6.6-3.9.6-6.1-.9-3.5-2.4-4.3-7.1-1.4-11.4 2.8-4.3 7.5-5.2 11-2.8zm-1.2 3.7c-1.9-1.3-4.6-1.1-6.3 1.5s-1 5.3.8 6.6c1.9 1.3 4.6 1 6.4-1.6s1-5.2-.9-6.5zM308.5 60.1l-1.5-1.3 2.2-2.6 1.5 1.3 2.7-3.1 3.2 2.8-2.7 3.1 2.8 2.4-2.2 2.6-2.8-2.4-5.2 6.1c-.7.8-.7 1.5.3 2.4l1.5 1.3-2.3 2.7-2-1.7c-2.4-2.1-3.2-4.5-.7-7.4l5.2-6.2zM319.6 65.3l3 3-11.7 11.8-3-3 11.7-11.8zm2.8-3.4c1-1 2.5-1 3.6.1 1 1 1.1 2.6.1 3.6s-2.5 1-3.6-.1-1.1-2.7-.1-3.6zM318 88.4c-3.1-3.7-2.8-8.6 1.2-12s9-2.6 12.1 1.1 2.9 8.7-1.1 12.1c-4.1 3.4-9.1 2.5-12.2-1.2zm2.8-2.3c1.4 1.7 4 2.3 6.6.2 2.6-2.1 2.5-4.7 1-6.4s-3.9-2.2-6.5-.1c-2.5 2-2.5 4.6-1.1 6.3zM339.1 101.9c2.3-1.4 2.7-3.4 1.5-5.3s-3.2-2.4-5.5-1l-7.8 4.9-2.2-3.6 14.1-8.8 2.2 3.6-1.8 1.1c1.8.2 3.5 1.2 4.6 3 2.1 3.3 1.4 7-2.5 9.4l-8.3 5.2-2.2-3.6 7.9-4.9zM214.9 283.5a107.8 107.8 0 1 1 107.9-107.8 108 108 0 0 1-107.9 107.8z"/>
                <path d="M214.9 80.4a95.2 95.2 0 1 1-95.2 95.2 95.4 95.4 0 0 1 95.2-95.2m0-25.2a120.5 120.5 0 1 0 0 241 120.5 120.5 0 0 0 0-241z"/>
                <path fill="#169bd8" d="M223.2 143.9c-3.2-3.2-6.6-6.6-9.6-10.1-2.8 3.2-5.8 6.1-8.8 9.1-.7.7-1.3 1.5-1.7 2.5-.7 1.4-.9 3-.6 4.6v.5a9 9 0 0 0 1.2 2.4l.2.4c2 2.4 6.6 6.9 9.2 9.4l15.4 16 4.6 4.9c3.8 3.9 7.2 8.2 10.2 12.8a3 3 0 0 0 1.6 1.3h.3c.8-.1 1.4-.6 1.6-1.4 1-3.2 1.5-6.6 1.5-9.9a38.3 38.3 0 0 0-7.1-21.7 141.3 141.3 0 0 0-18.1-20.6l.1-.2zm4.2 51.6c-3.8-4.6-7.5-8.9-13.3-15.1-4.9 5.6-9.4 9.9-13.1 14.3a17.5 17.5 0 0 0 25.7 23.7 17.4 17.4 0 0 0 .7-22.9zm-22.5-22.7c.4-.5.4-1.2 0-1.7l-11.3-11.6-2.4-2.3c-2 2.3-3.8 4.7-5.5 7.1-2.7 4-4.8 8.4-6 13a29.7 29.7 0 0 0 .4 16.2l.2.5 1 1.6s1.3 2.1 2.5 2.2h.4c.4-.1.7-.4.9-.7 1.1-2.2 2.4-4.3 4-6.3l4.1-5 11.7-13z" class="st5"/>
                <path fill="#169bd8" d="M214 80.2a95.7 95.7 0 1 0 95.7 95.8A95.7 95.7 0 0 0 214 80.2zm-.5 156.5a50.6 50.6 0 0 1-50.5-50.5c0-23.7 15.8-39.4 29.7-53.3 9.3-9.3 18.1-18.1 20.8-28.1 2.6 10 11.5 18.8 20.8 28.1 14 13.9 29.8 29.7 29.8 53.3a50.7 50.7 0 0 1-50.6 50.5z" class="st5"/>
                <path fill="#7f9929" d="M39.3 200.2s72.9 33.6 175.6 33.6 175.6-33.6 175.6-33.6v85.5s-71.5 33.6-175.6 33.6-175.6-33.7-175.6-33.7v-85.4z"/>
                <path d="m83.2 244.4 3.9 1.1-5.7 19.5-3.9-1.1 5.7-19.5zM98.7 260.4c.6-2.5-.4-4.2-2.5-4.7-2.1-.6-3.9.4-4.5 2.9l-2.2 8.6-3.9-1 4-15.6 3.9 1-.5 1.9a6 6 0 0 1 5.3-1c3.6.9 5.6 4 4.5 8.3l-2.4 9.1-3.9-1 2.2-8.5zM114.3 256.4c2.1.4 3.9 1.8 4.6 3.5l1.6-7.5 4 .9-4.5 21-4-.9.5-2.3a6.3 6.3 0 0 1-5.7 1.5c-4-.9-6.5-4.8-5.4-9.7s4.8-7.4 8.9-6.5zm.2 3.7c-2.1-.5-4.5.7-5.1 3.7s1 5.1 3.1 5.6c2.2.5 4.5-.8 5.2-3.7.6-3.1-1-5.1-3.2-5.6zM127.2 259.4l4 .7-2.9 15.7-4-.7 2.9-15.7zm.3-4.3c.2-1.3 1.5-2.1 2.9-1.9 1.4.3 2.3 1.5 2 2.8-.2 1.3-1.5 2.1-2.9 1.9a2.4 2.4 0 0 1-2-2.8zM137.6 261.2l2.1 12.8 5.9-11.5 4.3.7-8.4 14.9-4.9-.8-3.3-16.8 4.3.7zM152.1 263.4l4 .5-2.1 15.9-4-.5 2.1-15.9zm.1-4.3c.2-1.3 1.3-2.2 2.8-2 1.4.2 2.3 1.4 2.2 2.7a2.4 2.4 0 0 1-2.8 2 2.5 2.5 0 0 1-2.2-2.7zM166.3 264.9c2.1.2 4 1.4 5 3l.8-7.6 4.1.4-2.2 21.4-4.1-.4.2-2.4c-1.1 1.4-3 2.3-5.5 2.1-4.1-.4-7-4.1-6.5-9.1s4.1-7.8 8.2-7.4zm.7 3.6c-2.2-.2-4.4 1.2-4.7 4.2s1.6 5 3.7 5.2c2.2.2 4.4-1.2 4.7-4.3.3-3-1.5-4.9-3.7-5.1zM193.6 283.3l-4.1-.2.1-2a5.7 5.7 0 0 1-4.9 1.9c-3.7-.2-6.3-2.8-6-7.2l.6-9.4 4.1.2-.5 8.8c-.2 2.6 1.2 4.1 3.3 4.2 2.2.1 3.7-1.2 3.8-3.7l.5-8.8 4.1.2-1 16zM204.7 267.3c2.6 0 4.3 1.3 5.3 2.7v-2.3l4.1.1-.3 16.1-4.1-.1v-2.3a6.1 6.1 0 0 1-5.4 2.5c-4.1-.1-7.2-3.5-7.1-8.5.1-5.1 3.4-8.3 7.5-8.2zm1 3.6c-2.2 0-4.3 1.5-4.3 4.6-.1 3 2 4.8 4.1 4.9 2.2 0 4.3-1.6 4.4-4.6 0-3.1-2-4.8-4.2-4.9zM217.8 262.3h4.1l.2 21.5H218l-.2-21.5zM232.4 263.3l4.6-.3 7.3 14.7 5.5-15.4 4.6-.3 1.2 20.2-4.1.2-.8-13.2-4.6 13.5-3.1.2-6.2-12.8.8 13.2-4.1.2-1.1-20.2zM267.2 281.1c-4.6.5-8.3-2.3-8.9-7.3s2.4-8.6 7.1-9.1a7.5 7.5 0 0 1 8.7 7l.1 1.6-11.6 1.3c.5 2.3 2.2 3.5 4.2 3.3a3.4 3.4 0 0 0 3-2.3l4.3-.5c-.6 3-3 5.6-6.9 6zm-5-9.2 7.5-.8c-.3-2.1-2.1-3.2-4.2-3-1.8.2-3.2 1.6-3.3 3.8zM299.5 267.4c-.4-2.5-2-3.6-4.1-3.3-2.1.3-3.3 1.9-2.9 4.4l1.4 8.8-4 .6-1.4-8.8c-.4-2.5-2-3.6-4.1-3.3-2.2.3-3.4 1.9-3 4.4l1.4 8.8-4 .6-2.5-15.9 4-.6.3 1.9a5.7 5.7 0 0 1 4.3-2.9c2.5-.4 4.7.3 6.1 2.1.7-2 2.6-3.5 5-3.9 3.8-.6 6.9 1.4 7.6 5.7l1.5 9.3-4 .6-1.6-8.5zM315 256.5c4-.9 7.9 1.6 8.9 6.5 1.1 4.9-1.4 8.9-5.4 9.7-2.5.5-4.5-.2-5.7-1.4l.5 2.2-4 .9-4.5-21 4-.9 1.6 7.6c.6-1.5 2.2-3 4.6-3.6zm-.3 3.8c-2.1.5-3.8 2.5-3.2 5.5.6 3 3 4.2 5.1 3.7 2.2-.5 3.8-2.6 3.2-5.6s-2.9-4.1-5.1-3.6zM335.9 268.7c-4.5 1.2-8.6-1.1-9.9-6s1.1-8.9 5.7-10.1a7.6 7.6 0 0 1 9.7 5.7l.3 1.5-11.4 2.9c.8 2.3 2.7 3.1 4.7 2.6a3.2 3.2 0 0 0 2.6-2.7l4.2-1.1a7.6 7.6 0 0 1-5.9 7.2zm-6.3-8.6 7.4-1.9c-.6-2-2.6-2.9-4.6-2.4-1.9.5-3 2.1-2.8 4.3zM350.6 264.3l-3.9 1.1-4.5-15.4 3.9-1.1.7 2.4a5.4 5.4 0 0 1 4-4l1.2 4.1-1 .3c-2.3.7-3.4 2-2.6 5l2.2 7.6z"/>
            </g>
        </svg>
        <p>
            &copy;<?= date('Y') ?> felixeve.co.uk
        </p>
    </div>

    <div class="footer__right">
        <a href="#top" class="footer__top">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" data-code="61559" data-tags="chevron-up">
                <title>Back to top</title>
                <path d="M26.3 20.8l-2.6 2.6a1 1 0 01-1.4 0L14 15l-8.3 8.3a1 1 0 01-1.4 0l-2.6-2.6a1 1 0 010-1.4L13.3 7.8a1 1 0 011.4 0l11.6 11.6c.4.4.4 1 0 1.4z" transform="translate(0 -3)"></path>
            </svg>
        </a>
    </div>

</footer>

<script src="js/script.js" defer></script>

</body>