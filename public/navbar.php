

<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

    <div class="container">
        <img  width="100" class="navbar-brand" src="/EnoraPortefolio/enora.png">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="basicExampleNav">
          <ul class="navbar-nav mr-auto smooth-scroll">
            <?php

            $urls = array(
            'Accueil' => '/EnoraPortefolio/',
            'Réalisation' => '/EnoraPortefolio/public/realisation/realisation.php',
            'Compétences' => '/EnoraPortefolio/public/competence/competence.php',
            'Mon CV' => '/EnoraPortefolio/CV'

            );

            foreach ($urls as $name => $url) {
                print '<li '.(($currentPage === $name) ? ' class="nav-item active" ': '').
                    '><a   class="nav-link" href="'.$url.'">'.$name.'
                    <span class="sr-only">(current)</span>
                    </a></li>';
            }
            ?>



            </ul>
        </div>
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a href="https://m.facebook.com/enora.leguen.5" class="nav-link"><i style="color:#009688;" class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
                <a href="https://fr.linkedin.com/in/enora-le-guen" class="nav-link"><i style="color:#009688;" class="fab fa-linkedin"></i></a>
            </li>
            <li class="nav-item">
                <a href="https://www.instagram.com/eno_lgn/?hl=fr" class="nav-link"><i style="color:#009688;" class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </div>
</nav>
