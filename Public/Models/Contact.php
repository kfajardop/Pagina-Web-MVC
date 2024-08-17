<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contáctame</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Ingrese su nombre.."
                            data-sb-validations="required" />
                        <label for="name">Nombre Completo</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@gmail.com"
                            data-sb-validations="required,email" />
                        <label for="email">Correo Electrónico</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese su correo electrónico.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">La dirección de correo es incorrecta.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(502) 1234-5678"
                            data-sb-validations="required" />
                        <label for="phone">Número de Teléfono</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un número de teléfono.
                        </div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Ingrese su mensaje..."
                            style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Mensaje</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Formulario enviado correctamente</div>
                            Para activarlo, inicie sesión en
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error al enviar el mensaje!</div>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>