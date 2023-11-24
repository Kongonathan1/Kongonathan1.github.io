<?php require "db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--GOOGLE Fonts-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Goudy+Bookletter+1911&family=Kdam+Thmor+Pro&family=Poppins&display=swap" rel="stylesheet">
    <!--GOOGLE Fonts-->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Portfolio | Lionel Nathan</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
          <div class="toggle-btn">
            <div></div>
            <div></div>
            <div></div>
          </div>
            <a href="#acceuil" class="logo">Portfolio</a>
            <div class="nav-items">
                <a href="#target">Objectifs</a>
                <a href="#skills">Compétences</a>
                <a href="#projects">Projets</a>
                <a href="#about">Autres compétences</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
        <div class="banner" id="acceuil">
            <div class="content reveal">
                <h4>Salut, je m'appelle</h4><br>
                <h1 class="name">KONGO Lionel Nathan</h1><br>
                <h2 class="job"><strong>~</strong> Dévéloppeur backend junior d'application web <strong>~</strong></h2>
                <p class="presentaion">
                    Mes premiers pas dans la programmation ont été guidés par ma soif de comprendre. J'ai commencé par
                    les langages simples. L'excitation de voir des lignes de code se transformer en actions tangibles
                    était inégalée.
                    Avec le temps, mes compétences se sont développées et ma passion pour la programmation n'a fait que
                    grandir. Des projets de plus en plus complexes ont suivi, des sites web et aux applications
                    web dynamiques. Chaque défi a été une occasion d'apprendre, de grandir et d'affiner mes compétences.
                    Pour moi, l'informatique et la programmation ne sont pas seulement des compétences techniques, mais
                    aussi un moyen d'expression. Chaque ligne de code est une œuvre d'art en soi, une manière de
                    traduire des idées en réalité. L'informatique me permet de résoudre des problèmes, de créer des
                    solutions innovantes et de donner vie à des concepts abstraits.
                    Aujourd'hui, ma passion pour l'informatique et la programmation continue de guider ma carrière et
                    mes aspirations. J'aspire à collaborer avec d'autres esprits passionnés, à contribuer à des projets
                    novateurs et à repousser les limites de ce que la technologie peut accomplir.
                    J'aimerai poursuivre mon voyage dans une entreprise en rejoignant une entreprise dans laquelle je pourrai
                    être encadré et de ce fait acquérir de l'expérience et en plus aider cette entreprise à dévélopper
                    son système, ces différentes technologies etc. N'hésitez pas à explorer mes réalisations et à me
                    contacter pour discuter de collaborations.
                    <!--Merci de rejoindre mon voyage à travers le monde de l'informatique et de la programmation.-->
                </p>
            </div>
        </div>
    </header>
    <section class="about_me reveal" id="target">
        <h1 class="about_me_title title">Objectifs de carrière</h1>
        <div class="about_me_container">
            <div class="content">
                <p>
                    En tant que développeur web back-end passionné, mon objectif est de continuer à évoluer et à élargir
                    mes compétences pour devenir un développeur web full-stack expert. Je vise à combiner mes
                    compétences en back-end avec une maîtrise complète des technologies front-end, afin de créer des
                    expériences utilisateur exceptionnelles et de mener des projets de développement web de bout en
                    bout.
                </p>
                <p>
                    Je m'engage à approfondir mes connaissances en JavaScript, ainsi qu'à explorer les bibliothèques et
                    frameworks populaires tels que React, Angular et Vue.js.

                    Je vise également à prendre en charge la gestion complète de projets de développement d'application
                    web, depuis la planification.
                </p>
                <p>J'éssayerai à rester à jour sur l'évoultion des différents langages et technologies dans ce domaine.
                </p>
            </div>
            <img src="img/setup.jpg" alt="">
        </div>
    </section>
    <section class="skill" id="skills">
        <div class="skills">
            <h1 class="title">Mes compétences</h1>
            <div class="skill-flex">
              <?php foreach($skills as $skill): ?>
                <div class="skill-card reveal">
                  <img src="<?= $skill['image'] ?>" alt="">
                  <h3><?= $skill['title'] ?></h3>
                  <p>
                    <?= $skill['description'] !== '' ? $skill['description'] : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.'  ?>
                  </p>
                </div>
              <?php endforeach ?>
            </div>
        </div>
    </section>
    <section class="portfolio" id="projects">
        <h1 class="title">Mon portfolio</h1>
        <div class="portfolio_translate">
            <div class="portfolio-flex">
              <?php foreach ($projects as $project): ?>
                <div class="card reveal">
                  <div class="swiper mySwiper" style="max-width: 100%;">
                    <div class="swiper-wrapper">
                      <?php foreach($project['images'] as $img): ?>
                        <div class="swiper-slide">
                            <img src="<?= $img ?>" />
                        </div>
                      <?php endforeach ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                  </div>
                    <div class="card-body">
                        <h1 class="card-body-title"> <?php $project['title'] ?> </h1>
                        <div class="card-description">
                            <h4>Description du projet:</h4><br>
                            <p> <?= $project['description'] ?> </p>
                            <ul>
                                <h4>Langage & Technologies utilisées:</h4><br>
                                <?php foreach($project['technologies'] as $tech): ?>
                                  <li> <?= $tech ?> </li>
                                <?php endforeach ?>
                            </ul>
                            <a href="<?= $project['link'] ?>" target="_blank" rel="noopener noreferrer">Voir le code source</a>
                        </div>
                    </div>
                </div>
              <?php endforeach ?>
    </section>
    <section class="others" id="about">
        <h1 class="title">Mes compétences non techniques</h1>
        <div class="others_container">
            <div class="left_flex">
                <div class="languages">
                    <h2>Langues parlées</h2>
                    <hr>
                    <li>
                        <h3>Français(75%)</h3>
                        <span class="bar2"><span class="french reveal"></span></span>
                    </li>
                    <li>
                        <h3>Anglais(40%)</h3>
                        <span class="bar2"><span class="english reveal"></span></span>
                    </li>
                    <li>
                        <h3>Allemand(20%)</h3>
                        <span class="bar2"><span class="deutsch reveal"></span></span>
                    </li>
                </div>
                <div class="interest">
                    <h2>Centres d'intérêt</h2>
                    <hr>
                    <li>
                        <h3>Basket-Ball(75%)</h3>
                        <span class="bar4"><span class="basket reveal"></span></span>
                    </li>
                    <li>
                        <h3>Lecture(60%)</h3>
                        <span class="bar4"><span class="read reveal"></span></span>
                    </li>
                    <li>
                        <h3>Cuisine(30%)</h3>
                        <span class="bar4"><span class="cook reveal"></span></span>
                    </li>
                    <li>
                        <h3>Manga(65%)</h3>
                        <span class="bar4"><span class="manga reveal"></span></span>
                    </li>
                </div>
            </div>
            <div class="valeurs">
                <h2>Qualités</h2>
                <hr>
                <li>
                    <h3>Communication(65%)</h3>
                    <span class="bar3"><span class="communication reveal"></span></span>
                </li>
                <li>
                    <h3>Confiance en soi(75%)</h3>
                    <span class="bar3"><span class="confiance reveal"></span></span>
                </li>
                <li>
                    <h3>Gestion du temps(80%)</h3>
                    <span class="bar3"><span class="time reveal"></span></span>
                </li>
                <li>
                    <h3>Empathie(70%)</h3>
                    <span class="bar3"><span class="empathie reveal"></span></span>
                </li>
                <li>
                    <h3>Ouverture d'esprit(80%)</h3>
                    <span class="bar3"><span class="spirit reveal"></span></span>
                </li>
                <li>
                    <h3>Vitesse d'apprentissage(75%)</h3>
                    <span class="bar3"><span class="speed_learning reveal"></span></span>
                </li>
                <li>
                    <h3>Initiative(80%)</h3>
                    <span class="bar3"><span class="initiative reveal"></span></span>
                </li>
            </div>
        </div>
    </section>
    <section class="contact reveal" id="contact">
        <h1 class="title">Contactez-moi</h1>
        <p>N'hésitez pas à me contacter pour discuter de collaborations ou de projets.</p>
        <ul>
            <li><strong>E-mail: </strong><a href="mailto:kongolnathan10@gmail.com">kongolnathan10@gmail.com</a></li>
        </ul>
    </section>
    <footer>
        <p>&copy; 2023 Mon Portfolio</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
