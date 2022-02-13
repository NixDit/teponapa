        </div>
        <!-- Vendor -->
        <script src="{{ asset('vendor/jquery/jquery.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/jquery.appear/jquery.appear.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/jquery.validation/jquery.validate.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/jquery.gmap/jquery.gmap.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/lazysizes/lazysizes.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/isotope/jquery.isotope.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/vide/jquery.vide.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/vivus/vivus.min.js?v='.rand()) }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('js/theme.js?v='.rand()) }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('js/views/view.contact.js') }}"></script>

        <!-- Revolution Slider Scripts -->
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js?v='.rand()) }}"></script>

        <!-- Theme Custom -->
        <script src="{{ asset('js/custom.js?v='.rand()) }}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{ asset('js/theme.init.js?v='.rand()) }}"></script>

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
    

    </body>
</html>
