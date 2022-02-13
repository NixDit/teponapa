@include('templates.head')
@include('templates.header2')
<br>
<section class="container container-lg py-12 my-12" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
                <h2 class="text-color-dark font-weight-normal text-6 pb-2 mb-2"><strong class="font-weight-extra-bold text-uppercase">Contáctanos</strong></h2>
                <p class="text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Escribe cualquier pregunta que nos quieras hacer</p>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">

            <form class="contact-form-recaptcha-v3" action="php/contact-form-recaptcha-v3.php" method="POST" novalidate="novalidate">
                <div class="contact-form-success alert alert-success d-none mt-4">
                    <strong>Success!</strong> Your message has been sent to us.
                </div>

                <div class="contact-form-error alert alert-danger d-none mt-4">
                    <strong>Error!</strong> There was an error sending your message.
                    <span class="mail-error-message text-1 d-block"></span>
                </div>

                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Nombre completo</label>
                        <input type="text" value="" data-msg-required="Porfavor ingresa tu nombre completo." maxlength="100" class="form-control" name="name" required="">
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Correo electrónico</label>
                        <input type="email" value="" data-msg-required="Porfavor ingresa tu correo electrónico." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Compañía</label>
                        <input type="text" value="" data-msg-required="Porfavor ingresa el nombre de su compañía." maxlength="100" class="form-control" name="company" required="">
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark text-2">Teléfono</label>
                        <input type="number" value="" data-msg-required="Porfavor ingresa tu número completo." data-msg-email="Please enter your number phone" maxlength="100" class="form-control" name="phone" required="">
                    </div>
                </div>
                {{-- <div class="form-row">
                    <div class="form-group col">
                        <label class="font-weight-bold text-dark text-2">{{ __('index.subject') }}</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required="">
                    </div>
                </div> --}}
                <div class="form-row">
                    <div class="form-group col">
                        <label class="required font-weight-bold text-dark text-2">Mensaje</label>
                        <textarea maxlength="5000" data-msg-required="Profavor agregue el mensaje." rows="5" class="form-control" name="message" required=""></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Enviar mensaje" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>
@include('templates.footer')
@include('templates.foot')



