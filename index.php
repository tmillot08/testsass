<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/settings.css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/rev-slider-arrow.css" media="screen" />
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
      <?php include './include/title.php'; ?>
      <?php include './revslider-agency-website-header110.html'; ?>
      <?php include './include/nav.php'; ?>
      <main class="home">
        <section class="learn box">
          <div class="container">
          <h3  class="icon-user"></h3>
          <p>Vous souhaitez</p>
          <h3>Apprendre ?</h3>
          <a href="#" class="buttonprolearn">Cliquez-ici</a>
          </div>

        </section>
        <section class="project box">
        <div class="container">
          <h3 class="icon-chat"></h3>
          <p>Vous souhaitez</p>
          <h3>Proposer un Projet ?</h3>
          <a href="#" class="buttonprolearn">Cliquez-ici</a>
        </div>

        </section>
        <section class="internship box">
          <div class="container">
          <h3  class="icon-hand"></h3>
          <p>Vous souhaitez</p>
          <h3>Engager Un Stagiare ?</h3>
          <a href="#" class="buttoninternhelp">Cliquez-ici</a>
          </div>

        </section>
        <section class="help box">
          <div class="container">
          <h3  class="icon-question"></h3>
          <p>Vous souhaitez</p>
          <h3>Nous Aider ?</h3>
          <a href="#" class="buttoninternhelp">Cliquez-ici</a>
          </div>

        </section>

        <section class="circular-menu">
          <div class="circle">
            <a href="" class="fab fa-linkedin-in"></a>
            <a href="" class="i"></a>
            <a href="" class="i"></a>
            <a href="" class="i"></a>
            <a href="" class="i"></a>
            <a href="" class="fas fa-comment-dots fa-2x"></a>
            <a href="" class="fab fa-twitter fa-2x"></a>
            <a href="" class="fab fa-google-plus-g fa-2x"></a>
            <a href="" class="fab fa-facebook-square fa-2x"></a>
          </div>

          <a href="" class="menu-button fas fa-info fa-2x"></a>

        </section>

      </main>
      <?php include './include/footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/plugins-jquery.js"></script>
  <script>var plugin_path = 'js/';</script>
  <script src="js/jquery.themepunch.tools.min.js"></script>
  <script src="js/jquery.themepunch.revolution.min.js"></script>
  <script src="js/revolution.extension.actions.min.js"></script>
  <script src="js/revolution.extension.carousel.min.js"></script>
  <script src="js/revolution.extension.kenburn.min.js"></script>
  <script src="js/revolution.extension.layeranimation.min.js"></script>
  <script src="js/revolution.extension.migration.min.js"></script>
  <script src="js/revolution.extension.navigation.min.js"></script>
  <script src="js/revolution.extension.parallax.min.js"></script>
  <script src="js/revolution.extension.slideanims.min.js"></script>
  <script src="js/revolution.extension.video.min.js"></script>
  <script src="js/revolution.addon.filmstrip.min.js"></script>
  <script src="js/revolution-custom.js"></script>
  <script type="text/javascript">
                    var revapi124,
                  tpj=jQuery;
              tpj(document).ready(function() {
          if(tpj("#rev_slider_124_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_124_1");
          }else{
            revapi124 = tpj("#rev_slider_124_1").show().revolution({
              sliderType:"hero",
  jsFileLocation:"//localhost/revslider-standalone/revslider/public/assets/js/",
              sliderLayout:"fullscreen",
              dottedOverlay:"none",
              delay:9000,
              navigation: {
              },
              responsiveLevels:[1240,1024,778,480],
              visibilityLevels:[1240,1024,778,480],
              gridwidth:[1240,1024,778,480],
              gridheight:[900,768,960,720],
              lazyType:"none",
              parallax: {
                type:"scroll",
                origo:"slidercenter",
                speed:1000,
                            speedbg:0,
                            speedls:0,
                levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
              },
              shadow:0,
              spinner:"spinner2",
              autoHeight:"off",
              fullScreenAutoWidth:"off",
              fullScreenAlignForce:"off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "60",
              disableProgressBar:"on",
              hideThumbsOnMobile:"off",
              hideSliderAtLimit:0,
              hideCaptionAtLimit:0,
              hideAllCaptionAtLilmit:0,
              debugMode:false,
              fallbacks: {
                simplifyAll:"off",
                disableFocusListener:false,
              }
            });
          }
        }); /*ready*/
      </script>
  <script type="text/javascript" src="./js/main.js">  </script>
  </body>
</html>
