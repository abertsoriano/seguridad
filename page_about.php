<?php include 'tpl/header.tpl.php' ?>
    <div class="breadcrumbs breadcrumbs-dark">
        <div class="container">
            <h1 class="pull-left">Acerca de Nosotros</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li class="active">Nosotros</li>
            </ul>
        </div>
    </div>

    <div class="container content -sm">
        <div class="row about-me">
            <div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
                <div class="box-shadow shadow-effect-2">
                    <img class="img-responsive img-bordered full-width" src="assets/img/team/imgnosotros.jpg" alt="">
                </div>
            </div>

            <div class="col-sm-8 text-justify">
                <div class="overflow-h">
                    <ul class="social-icons pull-right">
                        <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="http://www.facebook.com/ControlEmpresarialGroupSAC"></a></li>
                        <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="
https://pe.linkedin.com/in/control-empresarial-group-s-a-c-0b4ba99b"></a></li>
                    </ul>
                </div>
                <p><strong>CONTROL EMPRESARIAL GROUP SAC</strong> es una organización enmarcada en lineamientos estratégicos y operativos internacionales de seguridad, los cuales están siendo aplicados en nuestro medio por nuestros directores y colaboradores, amplios conocedores en materias de seguridad, controles para empresas, medidas de protección para ejecutivos, prevención y control de pérdidas.</p>
                <p>Nuestra empresa está conformada por personal calificado con una amplia experiencia en los temas de protección y control de pérdidas en las empresas. contamos con las mejores alternativas para su empresa en el tema de protección y prevención; básicamente, por un conjunto de medidas analizadas y puestas en práctica en instituciones que ya cuentan con estos servicios con resultados positivos.</p>
                <p>Contamos con nuestra área de capacitación e implementamos equipos especiales de protección de ejecutivos y alta gerencia, los cuales son adiestrados en las tareas de:</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check color-green"></i> Inteligencia</li>
                    <li><i class="fa fa-check color-green"></i> Planificación operativa</li>
                    <li><i class="fa fa-check color-green"></i> Contra espionaje industrial (fuga de información)</li>
                    <li><i class="fa fa-check color-green"></i> Técnicas de rescate</li>
                    <li><i class="fa fa-check color-green"></i> Comunicaciones y uso de equipos electrónicos</li>
                </ul>
                <br/>
                <blockquote class="hero-unify">
                    <p class="text-justify">Nuestro potencial profesional humano se encuentra respaldado por la utilización de los avances tecnológicos más modernos en control interno, auditoria, selección e investigación de personal, protección física, canina, seguridad electrónica, investigaciones y proyectos.</p>
                </blockquote>
            </div>
        </div>
        <?php include 'tpl/clients.tpl.html' ?>
    </div>
<?php include 'tpl/footer.tpl.php' ?>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
    $(".owl-clients-v1").owlCarousel({
        items : 7,
        autoPlay : 5000,
        itemsDesktop : [1000,5],
        itemsDesktopSmall : [900,4],
        itemsTablet: [600,3],
        itemsMobile : [300,2]
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>
</html>