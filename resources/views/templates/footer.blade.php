<!-- Messenger Plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "852784961582654");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<footer id="footer">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4 mb-lg-0">
                <a href="/" class="logo pe-0 pe-lg-3 ps-3 ps-md-0">
                    <img alt="Logo Teponapa" src="img/logo/logo-blanco-teponapa.png" height="32">
                </a>
            </div>
            <div class="col-md-8 d-flex justify-content-center justify-content-md-end mb-4 mb-lg-0">
                <div class="row">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <div class="ms-4 text-center text-md-end">
                            <h5 class="text-3 mb-0 text-color-light">TEPONAPA</h5>
                            <p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="ps-1">(951) 465-7890</span></p>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="ms-3 text-center text-md-end">
                            <h5 class="text-3 mb-0 text-color-light">LOS ANGELES</h5>
                            <p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="ps-1">(123) 465-7890</span></p>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mb-2 mb-lg-0">
                    <p>© Teponapa Copyright 2023. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-center justify-content-md-end mb-4 mb-lg-0">
                    <p><i class="far fa-envelope text-color-primary top-1 p-relative"></i><a href="mailto:contacto@teponapa.com" class="opacity-7 ps-1">contacto@teponapa.com</a></p>
                    <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light ms-3">
                        <li class="social-icons-facebook"><a href="https://www.facebook.com/TeponapaOficial/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                        <li class="social-icons-twitter"><a href="https://twitter.com/TeponapaOficial" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
                        <li class="social-icons-instagram"><a href="https://www.instagram.com/teponapaoficial/" target="_blank" title="Instagram"><i class="fab fa-instagram text-2"></i></a></li>
                        <li class="social-icons-youtube"><a href="https://www.youtube.com/c/TeponapaOficial" target="_blank" title="YouTube"><i class="fab fa-youtube text-2"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col text-center">
                        <a href="https://www.nixdit.com/" target="_blank" class="logo pr-0 pr-lg-3">
                            <img alt="Logo Teponapa" src="{{ asset('img/logos/logo-footer.png') }}" class="opacity-5" height="33">
                        </a>
                        <div class="col text-center">
                        <p>Sitio desarrollado por NIX Diseño, Innovación y Tecnología.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
