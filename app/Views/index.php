<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dave | Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.0.379/pdf_viewer.min.css" integrity="sha512-v7RQDI7qsfFNaXRzzylpsVV7ncQBdyozLze5YNgox/0z4Mc3Ellt2dBd0CbmufeD7IIh5TCJQ8ORAF/KvzVITg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">

</head>

<body>
    <section id="home" class="home">
        <div id="vanta">
            <header>
                <div id="logo" class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s">DXYB.</div>
                <nav id="menu" class="menu wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s">
                    <ul>
                        <li><a class="menus active" href="#home">Home</a></li>
                        <li><a class="menus" onclick="scrollToAbout()">About</a></li>
                        <li><a class="menus" onclick="scrollToProject()">Projects</a></li>
                    </ul>
                </nav>
            </header>
            <div class="home-container wow fadeIn " data-wow-duration="2s" data-wow-delay=".8s">
                <div class="home-text">
                    <picture>
                        <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1f44b/512.webp" type="image/webp">
                        <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1f44b/512.gif" alt="👋" width="24" height="24">
                    </picture>&nbsp; Hello there! I am
                </div>
                <div class="patterns">
                    <svg>
                        <text x="50%" y="70%" text-anchor="middle">Dave Fagarita</text>
                    </svg>
                </div>
                <span class="home-text-desc">22 years old <b>Computer Science Student</b> with a specialization in
                    Artificial Intelligence. 🧠</span>
                <div class="home-buttons">
                    <button class="button-one" onclick="scrollToAbout()">About Me</button>
                    <button class="button-two" onclick="openModal()">Resume</button>
                </div>
                <div id="pdfModal" class="modal">
                    <span onclick="closeModal()" style="cursor: pointer;"></span>
                    <iframe id="pdfViewer" width="160%" height="600px" src="assets/cv.pdf"></iframe>
                </div>
                <div id="backdrop" class="backdrop"></div>
                <div class="mouse_scroll wow slideInUp " data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                    <div>
                        <span class="m_scroll_arrows unu"></span>
                        <span class="m_scroll_arrows doi"></span>
                        <span class="m_scroll_arrows trei"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="section-title wow fadeIn" data-wow-duration="3s" data-wow-delay=".3s">
            <p>About Me</p>
        </div>
        <div class="about-content-wrapper">
            <div class="about-col-1 wow slideInLeft" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="about-profile-container">
                    <img src="<?= base_url('assets/images/profile1.jpg') ?>" class="about-profile">
                </div>
            </div>
            <div class="about-col-2 wow slideInRight" data-wow-duration="2s" data-wow-delay=".4s">
                <div class="about-name">Dave F.Fagarita</div>
                <div class="about-desc">
                    <span>🏫 I am a student of West Visayas State University, pursuing a degree in <b>Computer
                            Science</b>
                        major
                        in Artificial Intelligence.</span>
                    <span>📌 I mostly developed an NLP & computer-vision based web applications and other areas in data
                        science and analytics.</span>
                    <span>🧩 I'm interested in areas such as Generative AI, Machine Learning, Data Science, Finance, and
                        Web Development.</span>
                    <span>✨ I make myself updated with the latest technologies and inventions in this digital
                        landscape.</span>
                </div>
                <button class="button-one" style="margin-top: 2em;" onclick="scrollToContact()">Get in touch</button>
            </div>
        </div>
    </section>
    <section class="skilltech-section">
        <div class="section-title wow fadeIn" data-wow-duration="3s" data-wow-delay=".3s">
            <p>Skills & Technologies</p>
        </div>
        <div class="section-description wow fadeIn" data-wow-duration="3s" data-wow-delay=".3s">
            These are the skills and technologies I utilized when I am developing/building my projects.</div>
        <div class="skilltech-wrapper">
            <div class="skilltech">
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".5s" onclick="return false;">
                    <img src="<?= base_url('assets/images/html.png') ?>" alt="html">
                    <span>HTML</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".6s" onclick="return false;">
                    <img src="<?= base_url('assets/images/css.png') ?>" alt="css">
                    <span>CSS</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".7s" onclick="return false;">
                    <img src="<?= base_url('assets/images/js.png') ?>" alt="js">
                    <span>JavaScript</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".8s" onclick="return false;">
                    <img src="<?= base_url('assets/images/git.png') ?>" alt="GitHub">
                    <span>GitHub</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay=".9s" onclick="return false;">
                    <img src="<?= base_url('assets/images/kaggle.png') ?>" alt="kaggle">
                    <span>Kaggle</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay="1s" onclick="return false;">
                    <img src="<?= base_url('assets/images/python.png') ?>" alt="python">
                    <span>Python</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay="1.1s" onclick="return false;">
                    <img src="<?= base_url('assets/images/tensor.png') ?>" alt="tensorflow">
                    <span>TensorFlow</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay="1.2s" onclick="return false;">
                    <img src="<?= base_url('assets/images/figma.png') ?>" alt="figma">
                    <span>Figma</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay="1.3s" onclick="return false;">
                    <img src="<?= base_url('assets/images/ai.png') ?>" alt="flask">
                    <span>OpenAi</span>
                </a>
                <a href="#" class="wow bounceIn" data-wow-duration="2s" data-wow-delay="1.3s" onclick="return false;">
                    <img src="<?= base_url('assets/images/flask.png') ?>" alt="flask">
                    <span>Flask</span>
                </a>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <div class="section-title wow fadeIn" data-wow-duration="3s" data-wow-delay=".3s">
            <p>Projects</p>
        </div>
        <div class="wow fadeIn" data-wow-duration="3s" data-wow-delay=".4s">
            <div class="section-description">
                These are the latest and most recent projects I have developed and handled, from trainining model to web
                development implementation.</div>
        </div>
        <div class="blog-slider wow slideInLeft" data-wow-duration="1.8s" data-wow-delay=".2s">
            <div class="blog-slider__wrp swiper-wrapper">
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">

                        <img src="<?= base_url('assets/images/exceipt.png') ?>" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">January 2024</span>
                        <div class="blog-slider__title">ExCeipt</div>
                        <div class="blog-slider__text">A web application that automatically extracts the
                            unstructured data to structured/labeled information
                            from receipts.
                        </div>

                    </div>
                </div>
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="<?= base_url('assets/images/fifa.png') ?>" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">December 2023</span>
                        <div class="blog-slider__title">FiFa Avatar GenAI</div>
                        <div class="blog-slider__text">Trained a Generative Adversarial Networks Model from
                            scratch and implement on a flask framework. It
                            generates a FiFa Player Image samples.</div>

                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="<?= base_url('assets/images/gen.png') ?>" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">May 2023</span>
                        <div class="blog-slider__title">Text Generator (Reviews)</div>
                        <div class="blog-slider__text">Developed a scraping program and used as a training
                            data for text generation. It is implemented on a flask framework. It generates a
                            service reviews.</div>

                    </div>
                </div>
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="<?= base_url('assets/images/sentiments.png') ?>" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">May 2023</span>
                        <div class="blog-slider__title">Sentiment Analysis (Reviews)</div>
                        <div class="blog-slider__text">Developed a scraping program and used as a training
                            data for text sentiment analysis program.
                            It is implemented on a flask framework. It classifies phrases or sentences as positive or
                            negative reviews.</div>

                    </div>
                </div>
            </div>
            <div class="blog-slider__pagination"></div>
        </div>
    </section>
    <section class="contacts" id="contacts">
        <div class="contact-content">
            <picture class="wow slideInUp" data-wow-duration="3s" data-wow-delay=".1s" offset="3">
                <source srcset="https://fonts.gstatic.com/s/e/notoemoji/latest/1f64c/512.webp" type="image/webp">
                <img src="https://fonts.gstatic.com/s/e/notoemoji/latest/1f64c/512.gif" alt="🙌" width="32" height="32">
            </picture>
            <div class="wow slideInUp" data-wow-duration="3s" data-wow-delay=".1s" offset="3">Hit me up.</div>
        </div>
        <div class="contact-content-sp wow slideInUp" data-wow-duration="3.5s" data-wow-delay=".2s" offset="3">Let's
            innovate
            together! </div>
        <div class="contact-content-sp wow slideInUp" data-wow-duration="4s" data-wow-delay=".3s" offset="3">
            < />
        </div>
        <div class="tooltip-container wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s" onclick="copyText()">
            <span class="tooltip" id="tooltip">Click to copy</span>
            <span class="text" id="text">dave.fagarita@wvsu.edu.ph</span>
            <span>dave.fagarita@wvsu.edu.ph</span>
        </div>
        <div class="social-text wow fadeIn" data-wow-duration="3s" data-wow-delay=".3s"><span>or contact me through my
                social accounts</span></div>
        <div class="social-links">
            <a href="https://www.facebook.com/davefagarita.12" class="wow bounceIn" data-wow-duration="3s" data-wow-delay=".3s"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/dxyb.rar/" class="wow bounceIn" data-wow-duration="3s" data-wow-delay=".4s"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/dave-fagarita-694863258/" class="wow bounceIn" data-wow-duration="3s" data-wow-delay=".5s"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/Deyb12/" class="wow bounceIn" data-wow-duration="3s" data-wow-delay=".6s"><i class="bi bi-github"></i></a>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footer-container">
                <div class="footer-logo">DXYB.</div>
                <p class="footer-text">2024 © Dave Fagarita • All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script>
        VANTA.NET({
            el: "#vanta",
            mouseControls: false,
            touchControls: false,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x7c7c7c,
            backgroundColor: 0x141313,
            maxDistance: 12.00,
            spacing: 20.00,
            showDots: false
        })
    </script>
</body>

</html>