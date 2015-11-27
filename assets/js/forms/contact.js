var ContactForm = function () {

    return {
        //Contact Form
        initContactForm: function () {
	        // Validation
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
	                email:
	                {
	                    required: 'Brindenos su correo electrónico',
	                    email: 'Por favor, escriba un correo electrónico VÁLIDO'
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
	                        $('#sky-form3 button[type="submit"]').prop('disabled', true);
	                    },
	                    success: function()
	                    {
	                        $("#sky-form3").addClass('submited');
	                    }
	                });
	            },

	            // Do not change code below
	            errorPlacement: function(error, element)
	            {
	                error.insertAfter(element.parent());
	            }
	        });
        }
    };
}();