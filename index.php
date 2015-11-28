<?php include 'tpl/header.tpl.php' ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=1426353227648638";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="slider-inner">
        <div id="da-slider" class="da-slider">
            <div class="da-slide">
                <h2><i>SEGURIDAD</i> <i>E</i><br><i>INTELIGENCIA</i> <i>INTEGRAL</i></h2>
                <div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/1.jpg" alt=""></div>
            </div>
            <div class="da-slide">
                <h2><i>LOSS CONTROL</i></h2>
                <div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/2.jpg" alt=""></div>
            </div>
            <div class="da-slide">
                <h2><i>INVESTIGACIONES</i></h2>
                <div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/3.jpg" alt=""></div>
            </div>
            <div class="da-slide">
                <h2><i>INSTALACION DE ALARMAS,</i><br><i>CCTV</i><br><i>SISTEMAS ELECTRONICOS</i></h2>
                <div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/4.jpg" alt=""></div>
            </div>
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </div>
        </div>
    </div>

    <div class="container content-sm">
        <div class="headline"><h2>Bienvenido a Control Empresarial Group S.A.C.</h2></div>
        <div class="row margin-bottom-20">
            <div class="col-md-4 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                	<div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive center-block" src="assets/img/main/bloque1.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="page_about.php">Ver más +</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive center-block" src="assets/img/main/bloque2.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="servicios.php">Ir a Servicios</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                        <div class="overflow-hidden">
                            <img class="img-responsive center-block" src="assets/img/main/bloque3.jpg" alt="">
                        </div>
                        <a class="btn-more hover-effect" href="galeria.php">Ir a galeria</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    	<div class="row margin-bottom-30">
    		<div class="col-md-8 md-margin-bottom-40">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="img-responsive margin-bottom-20 img-bordered" src="assets/img/inicio.jpg" alt="">
                    </div>
                    <div class="col-sm-7">
                        <div class="headline">
                            <h4>Nuestro Enfoque</h4>
                        </div>
                        <p>Es asegurar proactivamente que los problemas y los peligros potenciales, debilidades y riesgos se identifiquen antes de convertirse en situaciones de gravedad.</p>
                        <p>Nos comunicamos muy de cerca con nuestros clientes para asegurar un entendimiento común de las necesidades de servicios que ofrecemos.</p>
                    </div>
                    <div class="col-sm-12">
                        <p>Trabajamos con distintos sectores de la industria, comercio y servicios.</p>
                        <ul class="list-unstyled margin-bottom-20">
                            <li><i class="fa fa-check color-green"></i> Empresas</li>
                            <li><i class="fa fa-check color-green"></i> Fábricas</li>
                            <li><i class="fa fa-check color-green"></i> Organizaciones</li>
                            <li><i class="fa fa-check color-green"></i> Centros Comerciales</li>
                            <li><i class="fa fa-check color-green"></i> Retail</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
    			<div class="fb-page" data-href="https://www.facebook.com/ControlEmpresarialGroupSAC" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true" data-height="400"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ControlEmpresarialGroupSAC"><a href="https://www.facebook.com/ControlEmpresarialGroupSAC">Control Empresarial Group - COEM</a></blockquote></div></div>
            </div>
    	</div>

        <?php include 'tpl/clients.tpl.html' ?>
    </div>
<?php include 'tpl/footer.tpl.php' ?>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
<script type="text/javascript">
    $(".owl-clients-v1").owlCarousel({
        items : 7,
        autoPlay : 5000,
        itemsDesktop : [1000,5],
        itemsDesktopSmall : [900,4],
        itemsTablet: [600,3],
        itemsMobile : [300,2]
    });
    ParallaxSlider.initParallaxSlider();
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>
</html>