<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include_once('templates/head.php'); ?>
</head>
<body>
  <div class="body-inner">
    <?php 
      include_once('templates/topbar.php'); 
      include_once('templates/menu.php');
    ?>



  <a href="404.html" target="_blank">404.html</a><br>
  <a href="about.html" target="_blank">about.html [SOBRE]</a><br>
  <a href="contact.html" target="_blank">contact.html [CONTATO]</a><br>
  <a href="faq.html" target="_blank">faq.html</a><br>
  <a href="news-left-sidebar.html" target="_blank">news-left-sidebar.html</a><br>
  <a href="news-right-sidebar.html" target="_blank">news-right-sidebar.html</a><br>
  <a href="news-single.html" target="_blank">news-single.html</a><br>
  <a href="pricing.html" target="_blank">pricing.html</a><br>
  <a href="projects-single.html" target="_blank">projects-single.html</a><br>
  <a href="projects.html" target="_blank">projects.html</a><br>
  <a href="service-single.html" target="_blank">service-single.html</a><br>
  <a href="services.html" target="_blank">services.html</a><br>
  <a href="team.html" target="_blank">team.html [EQUIPE]</a><br>
  <a href="testimonials.html" target="_blank">testimonials.html</a><br>
  <a href="typography.html" target="_blank">typography.html</a><br>




  <footer id="footer" class="footer">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <!-- <h3 class="widget-title">LabMaker</h3> -->
            <img loading="lazy" width="200px" class="footer-logo" src="images/labmaker-logo-white.png" alt="LabMaker">
            <p>Estamos localizados no IFSertãoPE, Campus Salgueiro. Venha nos visitar e fazer parte da Cultura Maker.</p>
            <div class="footer-social">
              <ul>
                <li><a href="https://www.instagram.com/labmaker.salgueiro/" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCME7pYi-_Du-R8s3RYfA_mw" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Nosso Funcionamento</h3>
            <div class="working-hours">
              Nosso laboratório está disponível para toda a comunidade. Para fazer uso dos equipamentos, basta agendar um horário e solicitar acompanhamento de um responsável pelo laboratório.
              <br><br> Segunda a Sexta: <span class="text-right">08:00 - 18:00 </span>
              <!-- <br> Sábados: <span class="text-right">12:00 - 15:00</span>
              <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span> -->
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Grupos de Pesquisa</h3>
            <ul class="list-arrow">
              <li><a href="#">GPRO</a></li>
              <li><a href="#">GEPET</a></li>
              <li><a href="#">GEASP</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info text-center text-md-left">
              <span>Todos os direitos reservados &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Lab Maker IFSertãoPE, Campus Salgueiro</span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled">
                <li><a href="#">Nossa História</a></li>
                <li><a href="#">Equipe</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contato</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>