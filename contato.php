<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include_once('templates/head.php'); ?>
</head>
<body>
  <div class="body-inner contato">
    <?php 
      include_once('templates/topbar.php'); 
      include_once('templates/menu.php');
    ?>

<div id="banner-area" class="banner-area" style="background:url(images/banner/banner-equipe.webp) fixed">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">CONTATO<br>
                    <img src="images/ifsertaope.png" alt="IFSertãoPE">
                </h1>                
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 


<section id="main-container" class="main-container">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Que tal</h2>
        <h3 class="section-sub-title">Marcar uma Visita?</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Endereço</h4>
            <p>Instituto Federal do Sertão Pernambucano - Campus Salgueiro • Salgueiro/PE</p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>E-mail</h4>
            <p><strong>LabMaker:</strong><br>cs.labmaker@ifsertao-pe.edu.br</p>
            <p><strong>Coordenador:</strong><br>marcelo.santos@ifsertao-pe.edu.br</p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Telefone</h4>
            <p>(87) 98119-2921</p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->

    <div class="gap-60"></div>

    <div class="google-map">
      <!-- <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Constra"></div> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10589.166631801887!2d-39.10050421294087!3d-8.055466793068872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a093346683827d%3A0x4687a6bea7499b94!2sIFSert%C3%A3oPE%20Campus%20Salgueiro!5e0!3m2!1spt-BR!2sbr!4v1648520601136!5m2!1spt-BR!2sbr" height="450" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="gap-40"></div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">Vamos conversar? Nos envia uma mensagem!</h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
        <form id="contact-form" action="#" method="post" role="form">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome</label>
                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>E-mail</label>
                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                  required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Assunto</label>
                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Mensagem</label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
              required></textarea>
          </div>
          <div class="text-right"><br>
            <button class="btn btn-primary solid blank disabled" type="submit">Enviar mensagem</button>
          </div>
        </form>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->



  <?php 
    include_once('templates/footer.php'); 
    include_once('templates/scripts.php'); 
  ?>

  </div><!-- Body inner end -->
  </body>

  </html>