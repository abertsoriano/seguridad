<?php include 'tpl/header.tpl.php' ?>
    <div class="breadcrumbs breadcrumbs-dark">
        <div class="container">
            <div class="hidden-sm hidden-md hidden-lg">
                <h4 class="text-center" style="color: #fff;">Nosotros protegemos sus inversiones y damos seguridad a Ud. y Familia</h4>
            </div>
            <h1 class="pull-left">Contáctenos</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li class="active">Contacto</li>
            </ul>
        </div>
    </div>
    <div class="container content-sm">
        <div id="map" class="map"></div>

        <div class="container content">
        	<div class="row margin-bottom-30">
        		<div class="col-md-9 mb-margin-bottom-30">
                    <div class="headline"><h2>Formulario de contacto</h2></div>
                    <p>Su opinión es muy importante para nosotros.<br>Envíenos sus consultas, sugerencias y/o reclamos que los atenderemos a la brevedad posible.</p><br />

        			<form action="send.php" method="post" id="sky-form3" class="sky-form contact-style">
                        <fieldset class="no-padding">
                            <label>Nombre <span class="color-red">*</span></label>
                            <div class="row sky-space-20">
                                <div class="col-md-7 col-md-offset-0">
                                    <div>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <label>Empresa <span class="color-red">*</span></label>
                            <div class="row sky-space-20">
                                <div class="col-md-7 col-md-offset-0">
                                    <div>
                                        <input type="text" name="empresa" id="empresa" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <label>Correo electrónico <span class="color-red">*</span></label>
                            <div class="row sky-space-20">
                                <div class="col-md-7 col-md-offset-0">
                                    <div>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <label>Teléfono</label>
                            <div class="row sky-space-20">
                                <div class="col-md-4 col-md-offset-0">
                                    <div>
                                        <input type="text" name="telefono" id="telefono" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <label>Mensaje <span class="color-red">*</span></label>
                            <div class="row sky-space-20">
                                <div class="col-md-11 col-md-offset-0">
                                    <div>
                                        <textarea rows="8" name="message" id="message" class="form-control" placeholder="Escriba aquí su mensaje..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <p><button type="submit" class="btn-u"><i class="fa fa-send fa-fw"></i><span>Enviar</span></button></p>
                            <div id="errors-msg" class="hidden">
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <ul></ul>
                                </div>
                            </div>
                        </fieldset>
                        <div class="message">
                            <i class="rounded-x fa fa-check"></i>
                            <p>Tu mensaje ha sido enviado!</p>
                        </div>
                    </form>
                </div>

        		<div class="col-md-3">
                    <div class="headline"><h2>Datos</h2></div>
                    <ul class="list-unstyled who margin-bottom-30">
                        <li><i class="fa fa-home"></i>Av. Sergio Bernales 524 Int. 1204 Surquillo - Lima</li>
                        <li><i class="fa fa-envelope"></i>contacto@controlempresarialgroup.com</li>
                        <li><i class="fa fa-phone"></i>Fijo: 01-6334406</li>
                        <li><i class="fa fa-mobile fa-lg"></i>Claro (RPC): 980133569 / 956374421</li>
                        <li><i class="fa fa-mobile fa-lg"></i>Nextel: 51*110*1081 / 983525865</li>
                    </ul>
                    <div class="headline"><h2>Horario</h2></div>
                    <ul class="list-unstyled margin-bottom-30">
                    	<li><strong>Lunes - Sábados:</strong> 9am a 6pm</li>
                    	<li><strong>Domingos:</strong> 10am a 3pm</li>
                    </ul>
                </div>
            </div>
        </div>
        <?php include 'tpl/clients.tpl.html' ?>
    </div>
<?php include 'tpl/footer.tpl.php' ?>
<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
    var map = new GMaps({
        div: '#map',
        scrollwheel: false,
        lat: -12.1170128,
        lng: -77.0145437,
        zoom: 16
    });

    map.addMarker({
        lat: -12.1170528,
        lng: -77.0136907,
        title: 'Control Empresarial Group, S.A.C.'
    });

    $("#sky-form3").validate({
        // Rules for form validation
        rules:
        {
            name:
            {
                required: true
            },
            empresa:
            {
                required: true
            },
            email:
            {
                required: true,
                email: true
            },
            telefono:
            {
                required: true
            },
            message:
            {
                required: true,
                minlength: 10
            }
        },

        // Messages for form validation
        messages:
        {
            name:
            {
                required: 'Su nombre es requerido',
            },
            empresa:
            {
                required: 'El nombre de su empresa es requerido',
            },
            email:
            {
                required: 'Brindenos su correo electrónico',
                email: 'Por favor, escriba un correo electrónico VÁLIDO'
            },
            telefono:
            {
                required: 'Favor de escribir su teléfono o celular'
            },
            message:
            {
                required: 'Favor de escribir su mensaje'
            }
        },

        // Ajax form submition
        submitHandler: function(form)
        {
            $(form).ajaxSubmit(
            {
                beforeSend: function()
                {
                    $(form).find('button[type="submit"]').prop('disabled', true).children('span').text('Enviando...');
                    $('#errors-msg').empty();
                },
                success: function(rec)
                {
                    var resp = $.parseJSON(rec);
                    if (resp.is_errors) {
                        var html = '', i = 0;
                        for (i; i < resp.info.length; i++) {
                            html += resp.info[i]
                        }
                        $('#errors-msg').removeClass('hidden').html('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><ul>' + html + '</ul></div>');
                        $(form).find('button[type="submit"]').prop('disabled', false).children('span').text('Enviar');
                    } else {
                        $("#sky-form3").addClass('submited');
                    }
                }
            });
        },

        // Do not change code below
        errorPlacement: function(error, element)
        {
            error.insertAfter(element.parent());
        }
    });

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
    <script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->
<!--[if lt IE 10]>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->
</body>
</html>