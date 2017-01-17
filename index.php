<?php 
   require 'php/Pictures.php';

   $pictures = new Pictures();
   $picture = $pictures->getFile('pictures');
 ?>

<!DOCTYPE html>
<html>
   <head>
      <title>Salão Boys</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta charset="utf-8">
      <meta name="author" content="Roman Kirichik">
      <!--[if IE]>
      <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
      <!-- Favicons -->
      <link rel="shortcut icon" href="images/favicon.png">
      <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
      <!-- CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style-responsive.css">
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/vertical-rhythm.min.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="fancy/source/jquery.fancybox.css" 
         type="text/css" media="screen" />
      <link rel="stylesheet" href="css/custom.css">
   </head>
   <body class="appear-animate">
      <!-- Page Loader -->        
      <div class="page-loader">
         <div class="loader">Loading...</div>
      </div>
      <!-- End Page Loader -->
      <!-- Page Wrap -->
      <div class="page" id="top">
         <!-- Fullwidth Slider -->
         <div class="bg-dark relative" id="home">
            <div class="fullwidth-gallery">
               <!-- Slide Item -->
               <section class="home-section bg-scroll bg-dark-alfa-70" data-background="images/salaoboys/bg.jpg">
                  <div class="js-height-full">
                  </div>
               </section>
               <!-- End Slide Item -->
            </div>
            <!-- End Fullwidth Slider -->
            <div class="js-height-full fullwidth-galley-content">
               <!-- Hero Content -->
               <div class="home-content container">
                  <div class="home-text">
                     <div class="container">
                        <div class="row mb-30 mb-sm-20">
                           <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                              <img src="images/salaoboys/logo2.png" alt="" />
                           </div>
                        </div>
                        <h2 class="hs-line-3 mb-0">Rua Baronesa de Itu, 161 - Santa Cecilia, São Paulo - SP, </h2>
                     </div>
                  </div>
               </div>
               <!-- End Hero Content -->
               <!-- Scroll Down -->
               <div class="local-scroll">
                  <a href="#sobre" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
               </div>
               <!-- End Scroll Down -->
            </div>
         </div>
         <!-- End Fullwidth Slider -->
         <!-- Navigation panel -->
         <nav class="main-nav dark transparent stick-fixed">
            <div class="full-wrapper relative clearfix">
               <!-- Logo ( * your text or image into link tag *) -->
               <div class="nav-logo-wrap local-scroll">
                  <a href="special-barbershop.html" class="logo">
                  <img src="images/salaoboys/logo-topo.png" alt="" />
                  </a>
               </div>
               <div class="mobile-nav">
                  <i class="fa fa-bars"></i>
               </div>
               <!-- Main Menu -->
               <!--    <div class="inner-nav desktop-nav">
                  <ul class="clearlist local-scroll">
                     <li><a class="active" href="special-barbershop.html">Home</a></li>
                     <li><a href="special-barbershop-about.html">About</a></li>
                     <li><a href="special-barbershop-pricing.html">Price List</a></li>
                     <li><a href="special-barbershop-gallery.html">Gallery</a></li>
                     <li><a href="special-barbershop-contact.html">Contact</a></li>
                     <li><a href="tel:0307-567-890"><i class="fa fa-phone"></i> 0307-567-890</a></li>
                  
                     <li>
                        <a href="#"><span class="mn-soc-link tooltip-bot" title="Facebook"><i class="fa fa-facebook"></i></span></a>
                        <a href="#"><span class="mn-soc-link tooltip-bot" title="Twitter"><i class="fa fa-twitter"></i></span></a>
                        <a href="#"><span class="mn-soc-link tooltip-bot" title="Pinterest"><i class="fa fa-pinterest"></i></span></a>
                     </li>
                  
                  </ul>
                  </div>  -->
               <nav class="main-nav dark transparent stick-fixed">
                  <div class="full-wrapper relative clearfix">
                     <!-- Logo ( * your text or image into link tag *) -->
                     <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo">
                        <img src="images/salaoboys/logo-topo.png" alt="" />
                        </a>
                     </div>
                     <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                     </div>
                     <!-- Main Menu -->
                     <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                           <li class="active"><a href="#home">Home</a></li>
                           <li><a href="#sobre">Sobre</a></li>
                           <li><a href="#servicos">Serviços</a></li>
                           <li><a href="#recomendacao">Recomendações</a></li>
                           <li><a href="#profissionais">Profissionais</a></li>
                           <li><a href="#galeria">Galeria</a></li>
                           <li><a href="#contato">Contato</a></li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </nav>
         <!-- End Navigation panel -->
         <!-- Split Section -->
         <section class="split-section bg-gray-lighter" id="sobre">
            <div class="clearfix relative">
               <!-- Section Headings -->
               <div class="split-section-headings left">
                  <div class="ssh-table">
                     <div class="ssh-cell page-section bg-scroll" data-background="images/salaoboys/higienopolis.jpg"></div>
                  </div>
               </div>
               <!-- End Section Headings -->
               <!-- Section Content -->
               <div class="split-section-content page-section">
                  <div class="split-section-wrapper right">
                     <div class="text align-center">
                        <h2 class="font-alt mt-0 mb-50 mb-xxs-20">O Salão</h2>
                        <p class="mb-50 mb-xxs-20">
                          Nossa Barbearia foi fundada em 1979 pelo italiano Roberto Bruno, entre os bairros de Santa Cecília e Higienópolis, na zona oeste de São Paulo. Desde o início, tínhamos como objetivos principais respeitar e dignificar a beleza masculina. Nosso primeiro braço direito foi o cabeleireiro Wander Panhoça, com quem José Carlos Santana (Cacá), hoje proprietário, assim como toda a equipe, aprendeu muito. Cacá trabalha há 27 anos como cabeleireiro e barbeiro. Em 2002, quando assumiu o Salão Boys, montou um time de profissionais competente e especializado em cortes masculinos e barba, mantendo a já ótima reputação na região. Aliada à tradição, respeito ao cliente e qualidade no atendimento, a atualização constate da equipe Salão Boys traz aos clientes técnicas de barba e cortes modernas e condizentes com o que acontece de melhor no segmento. O Salão Boys está em sua quarta geração de clientes e em sua terceira geração de profissionais, sempre respeitando os estilos e tendências masculinas de cada época.
                        </p>
                        <div>
                           <!-- <img src="images/photographer/signature.png" width="170" height="55" alt="" /> -->
                           <p class="font-alt mt-0 mb-50 mb-xxs-20">Desde 1979</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Section Content -->
            </div>
         </section>
         <!-- End Split Section -->
         <!-- Split Section -->
         <section class="split-section bg-gray-lighter" id="servicos">
            <div class="clearfix relative">
               <!-- Section Headings -->
               <!-- End Section Headings -->
               <!-- Section Content -->
               <div class="row">
                  <div class="split-section-content page-section col-md-6">
                     <div class="split-section-wrapper left">
                        <div class="text align-center">
                           <h2 class="font-alt mt-0 mb-50 mb-xxs-20">Nós oferecemos todos os serviços de barbearia</h2>
                           <div class="row alt-features-grid mb-30 mb-xxs-20">
                              <!-- Features Item -->
                              <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                 <div class="alt-features-item align-center">
                                    <div class="alt-features-icon">
                                       <img src="images/barbershop/icon-1.png" style="width: 64px;" alt="" />
                                    </div>
                                    <h3 class="alt-features-title font-alt">Cabelo</h3>
                                 </div>
                              </div>
                              <!-- End Features Item -->
                              <!-- Features Item -->
                              <div class="col-sm-4 wow fadeIn" data-wow-delay="0.2s">
                                 <div class="alt-features-item align-center">
                                    <div class="alt-features-icon">
                                       <img src="images/barbershop/icon-2.png" style="width: 64px;" alt="" />
                                    </div>
                                    <h3 class="alt-features-title font-alt">Barba</h3>
                                 </div>
                              </div>
                              <!-- End Features Item -->
                              <!-- Features Item -->
                              <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                 <div class="alt-features-item align-center">
                                    <div class="alt-features-icon">
                                       <img src="images/barbershop/icon-3.png" style="width: 64px;" alt="" />
                                    </div>
                                    <h3 class="alt-features-title font-alt">Corte Infantil</h3>
                                 </div>
                              </div>
                              <!-- End Features Item -->
                           </div>
                           <p class="mb-50 mb-xxs-20">
                             Trabalhamos com a melhor dedicação para proporcionar a satisfação de todos os nossos clientes. Se você é exigente, temos a certeza de que você merece o melhor, venha conosco e experimente a sensação de estar em uma das melhores barbearias, entre o bairro de Santa Cecília e Higienópolis. Faça-nos uma visita ou agende online e saiba mais sobre nossos produtos e serviços!
                           </p>
                           <div>
                              <a href="http://www.salaovip.com.br/agenda/salao-boys1979"  data-fancybox-type="iframe" data-fancybox-width="600" class="btn btn-mod btn-large btn-round various fancybox.iframe">Agende Agora</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Section Content -->
                  <div class="col-md-6 mb-sm-40 salon-img-resposive">
                     <!-- Gallery -->
                     <div class="work-full-media mt-0 white-shadow">
                        <ul class="clearlist work-full-slider owl-carousel owl-theme owl-fixed" style="opacity: 1; display: block;">
                           <li>
                              <img src="images/salaoboys/img_salao1.jpg" class="salon-img" style="width: 100%;height:718px;" alt="">
                           </li>
                           <li>
                              <img src="images/salaoboys/img_salao2.jpg" class="salon-img" style="width: 100%;height:718px;"   alt="">
                           </li>
                           <li>
                              <img src="images/salaoboys/img_salao3.jpg" class="salon-img" style="width: 100%;height:718px;"   alt="">
                           </li>
                           <li>
                              <img src="images/salaoboys/img_salao4.jpg" class="salon-img" style="width: 100%;height:718px;"   alt="">
                           </li>
                           <li>
                              <img src="images/salaoboys/img_salao5.jpg" class="salon-img" style="width: 100%;height:718px;"   alt="">
                           </li>
                        </ul>
                     </div>
                     <!-- End Gallery -->
                  </div>
               </div>
            </div>
         </section>
         <!-- End Split Section -->
         <!-- Testimonials Section -->
         <section class="page-section pt-50 pb-50 " data-background="images/salaoboys/oldman.jpg" id="recomendacao">
            <div class="container relative" style="color:#fff;">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 align-center">
                     <!-- Section Icon -->
                     <div class="section-icon">
                        <span class="icon-quote"></span>
                     </div>
                     <h3 class="small-title font-alt">
                        O que os Clientes dizem?
                     </h3>
                  </div>
               </div>
            </div>
            <div class="fullwidth-slider" style="height: 200px">
               <div>
                  <div class="row">
                     <div class="col-md-8 col-md-offset-2 align-center">
                        <blockquote class="testimonial white">
                           <p>
                              Lugar agradável, com profissionais excelentes!!! Cliente desde 1988, hoje atravesso a cidade para levar meu filho e encontrar meus amigos!!!
                           </p>
                           <footer class="testimonial-author" style="color:#fff;">
                              Marcelo Nunes Dos Santos
                           </footer>
                        </blockquote>
                     </div>
                  </div>

               </div>
               <div>
                  <div class="row">
                     <div class="col-md-8 col-md-offset-2 align-center">
                        <blockquote class="testimonial white">
                           <p>
                              Ambiente agradável demais, recomendo a todos, muito detalhistas, alem de talentosos!
                           </p>
                           <footer class="testimonial-author" style="color:#fff;">
                              Paulo Silva
                           </footer>
                        </blockquote>
                     </div>
                  </div>
                  
               </div>
               <div>
                  <div class="row">
                     <div class="col-md-8 col-md-offset-2 align-center">
                        <blockquote class="testimonial white">
                           <p>
                             Um salão excepcional, ótimos profissionais, bem localizado e com 37 anos de existência. Super indico!!!
                           </p>
                           <footer class="testimonial-author" style="color:#fff;">
                              Eduardo Alencar
                           </footer>
                        </blockquote>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="row">
                     <div class="col-md-8 col-md-offset-2 align-center">
                        <blockquote class="testimonial white">
                           <p>
                              Excelente localização. Ótimos profissionais e, recomendo sem quaisquer restrições.
                           </p>
                           <footer class="testimonial-author" style="color:#fff;">
                              Antonio G. Ansaldi 
                           </footer>
                        </blockquote>
                     </div>
                  </div>
               </div>
                <div>
                  <div class="row">
                     <div class="col-md-8 col-md-offset-2 align-center">
                        <blockquote class="testimonial white">
                           <p>
                              Ambiente agradável e profissionais super capacitados. Recomendo!!!
                           </p>
                           <footer class="testimonial-author" style="color:#fff;">
                              Lucas Alencar
                           </footer>
                        </blockquote>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      </div>
      <!-- End Slide Item -->
      </section>
      <!-- End Testimonials Section -->
      <!-- End Testimonials Section -->
      <!-- Section -->
      <section class="page-section" id="profissionais" style="padding-bottom:5px;">
         <div class="container relative">
            <h2 class="section-title font-alt mb-70 mb-sm-40">
               Profissionais
            </h2>
            <div class="row multi-columns-row">
               <!-- Shop Item -->
               <div class="col-md-3 col-lg-3 mb-40">
                  <div class="post-prev-img">
                     <a style="cursor:pointer;"><img src="images/salaoboys/profissionais/029.jpg" style="height: 300px" alt="" /></a>
                     <!--        <div class="intro-label">
                        <span class="label label-danger bg-red">Sale</span>
                        </div> -->
                  </div>
                  <div class="post-prev-title font-alt align-center">
                     <a style="cursor:pointer;">Caca</a>
                  </div>
                 <!--  <div class="post-prev-text align-center mb-0" >
                     <p style="text-align: justify !important;"> 
                        Líder da Barbearia, atuando há 27 anos como cabeleireiro e barbeiro em casa.
                     </p>
                  </div> -->
               </div>
               <!-- End Shop Item -->
               <!-- Shop Item -->
               <div class="col-md-3 col-lg-3 mb-40">
                  <div class="post-prev-img">
                     <a style="cursor:pointer;"><img src="images/salaoboys/profissionais/030.jpg" style="height: 300px" alt="" /></a>
                  </div>
                  <div class="post-prev-title font-alt align-center">
                     <a style="cursor:pointer;">Diego</a>
                  </div>
                  <!-- <div class="post-prev-text align-center mb-0">
                     <p style="text-align: justify !important;">
                        Barbeiro e cabeleireiro com especialidade em tendências jovens.
                     </p>
                  </div> -->
               </div>
               <!-- End Shop Item -->
               <!-- Shop Item -->
               <div class="col-md-3 col-lg-3 mb-40">
                  <div class="post-prev-img">
                     <a style="cursor:pointer;"><img src="images/salaoboys/profissionais/034.jpg" style="height: 300px" alt="" /></a>
                  </div>
                  <div class="post-prev-title font-alt align-center">
                     <a style="cursor:pointer;">Carlos</a>
                  </div>
                  <!-- <div class="post-prev-text align-center mb-0">
                     <p style="text-align: justify !important;">
                        Atua como cabeleireiro e barbeiro com especialidade em química masculina.
                     </p>
                  </div> -->
               </div>
               <!-- End Shop Item -->
               <!-- Shop Item -->
               <div class="col-md-3 col-lg-3 mb-40">
                  <div class="post-prev-img">
                     <a style="cursor:pointer;"><img src="images/salaoboys/profissionais/028.jpg" style="height: 300px" alt="" /></a>
                  </div>
                  <div class="post-prev-title font-alt align-center">
                     <a style="cursor:pointer;">Higor</a>
                  </div>
                 <!--  <div class="post-prev-text align-center mb-0">
                     <p style="text-align: justify !important;">
                       Especializado em cortes undercut e suas variações.
                     </p>
                  </div> -->
               </div>
               <!-- End Shop Item -->
            </div>
         </div>
      </section>

       <section class="page-section pb-0 " id="galeria" style="padding-top: 15px;">
                <div class="relative">
                    
                    <!-- Works Filter -->                    
                    <div class="font-alt align-center" style="margin-bottom: 30px;">
                        <a href="#" class="active section-title font-alt" data-filter="*" style="padding-bottom: 20px;text-decoration: none;">Galeria</a>
                    </div>                    
                    <!-- End Works Filter -->
                    
                    <!-- Works Grid -->
                    <ul class="works-grid clearfix font-alt hover-white hide-titles masonry" id="work-grid">
                        
                        <!-- Work Item (Lightbox) -->
                        <?php  foreach ($picture as $p) {?>
                        <li class="work-item mix *">
                            <a href="<?php echo $p; ?>" class="work-lightbox-link mfp-image">
                                <div class="work-img">
                                    <img src="<?php echo $p;?>" alt="Work" />
                                </div>
                                <div class="work-intro">
                                    <h3 class="work-title">Salão Boys</h3>
                                    <div class="work-descr">
                                        
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- End Work Item -->
                        <?php } ?>
                    </ul>
                    <!-- End Works Grid -->
                    
                </div>
            </section>
            <!-- End Portfolio Section -->





      <!-- End Section -->     
      <div class="" style="padding-bottom: 120px;padding-top: 100px;" id="contato">
         <div class="container">
            <div class="col-md-6">
               <!-- Phone -->
               <div class="contact-item mb-30">
                  <div class="ci-icon">
                     <i class="fa fa-phone"></i>
                  </div>
                  <div class="ci-title font-alt">
                     Telefone
                  </div>
                  <div class="ci-text">
                     (11) 3825-1517
                  </div>
               </div>
               <!-- End Phone -->
               <hr class="mb-30">
               <!-- Address -->
               <div class="contact-item mb-30">
                  <div class="ci-icon">
                     <i class="fa fa-map-marker"></i>
                  </div>
                  <div class="ci-title font-alt">
                     Endereço
                  </div>
                  <div class="ci-text">
                     R. Baronesa de Itu, 161 - Santa Cecilia, São Paulo - SP, 01231-001
                  </div>
               </div>
               <!-- End Address -->
               <hr class="mb-30">
               <!-- Email -->
               <div class="contact-item">
                  <div class="ci-icon">
                     <i class="fa fa-envelope"></i>
                  </div>
                  <div class="ci-title font-alt">
                     Email
                  </div>
                  <div class="ci-text">
                     <a href="mailto:contato@jazzhair.com.br">
                     caca@salaoboys.com.br
                     </a>
                  </div>

               </div>
                <hr class="mb-30">

                <div class="contact-item">
                  <div class="ci-icon">
                     <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div>
                  <div class="ci-title font-alt">
                     Agende Agora
                  </div>
                  <div class="ci-text">
                      <a href="http://www.salaovip.com.br/agenda/salao-boys1979"  data-fancybox-type="iframe" data-fancybox-width="600" class=" various fancybox.iframe">
                     Agendar
                     </a>
                  </div>
                  
               </div>
               <!-- End Email -->
            </div>
            <div class="col-md-6 contact">
               <h2 class="section-title font-alt mb-70 mb-sm-40" style="margin-bottom: 49px;">
                  Contate-nos
               </h2>
               <form class="form contact-form" id="contact_form">
                  <div class="clearfix">
                     <div class="cf-left-col" style="width: 100%;">
                        <!-- Name -->
                        <div class="form-group">
                           <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Nome Completo" pattern=".{3,100}" required>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                           <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Email" pattern=".{5,100}" required>
                        </div>
                     </div>
                     <div class="cf-right-col" style="width: 100%;">
                        <!-- Message -->
                        <div class="form-group">                                            
                           <textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Mensagem"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <div class="cf-left-col">
                        <!-- Inform Tip -->                                        
                        <div class="form-tip pt-20 enviar-form">
                           <i class="fa fa-info-circle"></i> Todos os campos são obrigatórios
                        </div>
                     </div>
                     <div class="cf-right-col">
                        <!-- Send Button -->
                        <div class="align-right pt-10 enviar-form">
                           <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Enviar Mensagem</button>
                        </div>
                     </div>
                  </div>
                  <div id="result"></div>
               </form>
            </div>
         </div>
      </div>
      <!-- End Contact Form -->
      </div>
      </section>
      <!-- End Contact Section -->
      <div class="google-map">
         <div data-address="Rua Baronesa de Itu, 161 - Santa Cecilia, São Paulo" id="map-canvas"></div>
      </div>
      <!-- Foter -->
      <footer class="small-section bg-gray-lighter footer pb-60">
         <div class="container">
            <!-- Social Links -->
            <!--  <div class="footer-social-links mb-30">
               <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
               <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
               <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
               <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
               <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
               </div> -->
            <!-- End Social Links -->  
            <!-- Footer Text -->
            <hr class="mt-0 mb-60">
            <div class="footer-text">
               <!-- Copyright -->
               <div class="footer-copy font-alt">
                  <a href="http://www.salaovip.com.br/programa-para-salao" target="_blank">
                  <img src="images/tec_svip.png" alt="">
                  </a>.
               </div>
               <!-- End Copyright -->
               <div class="footer-made">
                  <!-- Made with love for great people. -->
               </div>
            </div>
            <!-- End Footer Text --> 
         </div>
         <!-- Top Link -->
         <div class="local-scroll">
            <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
         </div>
         <!-- End Top Link -->
      </footer>
      <!-- End Foter -->
      </div>
      <!-- End Page Wrap -->
      <!-- JS -->
      <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
      <script type="text/javascript" src="fancy/source/jquery.fancybox.js"></script>
      <script type="text/javascript" src="js/svip.js"></script>
      <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>        
      <script type="text/javascript" src="js/SmoothScroll.js"></script>
      <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
      <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
      <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
      <script type="text/javascript" src="js/jquery.countTo.js"></script>
      <script type="text/javascript" src="js/jquery.appear.js"></script>
      <script type="text/javascript" src="js/jquery.sticky.js"></script>
      <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
      <script type="text/javascript" src="js/jquery.fitvids.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
      <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
      <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
         **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
      <script type="text/javascript" src="js/gmap3.min.js"></script>
      <script type="text/javascript" src="js/wow.min.js"></script>
      <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
      <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
      <script type="text/javascript" src="js/all.js"></script>
      <script type="text/javascript" src="js/contact-reservations-form.js"></script>
      <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>       
      <script type="text/javascript" src="js/jquery.backgroundvideo.min.js"></script>
      <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
   </body>
</html>