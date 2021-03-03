
<!DOCTYPE html>
<!--/**
    * \file     Accueil
    * \version  1.1
    * \date     Dernière modif 2020
    * \author   Enora LE GUEN
    * \details 	BDD: None
*/ -->

<html lang="fr">
<?php $currentPage = 'Accueil'; ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel='icon' href='./logo.ico' type='image/x-icon' sizes="48x48" />
    <script data-search-pseudo-elements defer src="https://pro.fontawesome.com/releases/v5.10.1/js/all.js"></script>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/mdb.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <?php include('./public/navbar.php'); ?>

<div id="intro" class="view">
  <div id="intro" class="view">
      <div class="mask rgba-black-strong">
          <div class="container-fluid d-flex align-items-center justify-content-center h-100">
              <div class="row d-flex justify-content-center text-center">
                  <div class="col-md-10">
                      <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Mon portefolio</h2>
                      <hr class="hr-light">
                      <h4 class="white-text my-4"> Apprentie chef de projet<span style="color:#009688;"> | </span>Experte en ingénieurie Systèmes et réseaux.         </h4>
                      <button type="button" href=""class="btn btn-outline-white">Réalisation<i class="fa fa-book ml-2"></i></button>
                        <button type="button" class="btn btn-outline-white">Compétences<i class="fa fa-book ml-2" href="./public/competence/competence.php"></i></button>

                  </div>

              </div>

          </div>

      </div>

  </div>

</div>
  </header>
  <main class="mt-5">
      <div class="container">
        <section id="best-features">
          <section id="best-features" class="text-center">
            <h2 class="mb-5">A propos de<span style="color:#009688;"> MOI</span></h2>
              <div class="row">
                <div class="col-md-4 mb-1">
                  <i style="color:#009688;font-size: 3.5rem;" class="fad fa-users"></i>
                  <h4 class="my-4">Management</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>
                </div>
                <div class="col-md-4 mb-1">
                  <i style="color:#009688;font-size: 3.5rem;"class="fas fa-network-wired"></i>
                  <h4 class="my-4">Réseaux</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>
                </div>
                <div class="col-md-4 mb-1">
                  <i style="color:#009688;font-size: 3.5rem;" class="fas fa-theater-masks"></i>
                  <h4 class="my-4">Danse Classique</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>
                </div>
              </div>
            </section>
          </section>
          <hr class="my-5">
          <section id="gallery">
            <div class="row">
              <div class="col-md-6 mb-4">
                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner z-depth-1-half" role="listbox">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/img2.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/img3.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/img5.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="col-md-6">
                  <h4 class="mb-3"><strong>NEWS</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>

                    <p>by <a><strong>Jerbi Firas</strong></a>, 26/08/2016</p>
                </div>
              </div>
            </div>
          </section>
          <hr class="my-5">
            <section id="contact">
              <h2 class="mb-5 font-weight-bold text-center">Mon parcours</h2>
              <div class="row">
                <div class="col-lg-5 col-md-12">

                </div>
              </div>
            </section>
        </div>
  </main>
<?php include('./public/footer.php'); ?>

    <script>
    $('.carousel').carousel({
        interval: 2000,
    })
</script>
<!-- Google Maps settings -->

</body>

</html>
