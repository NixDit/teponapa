
@include('templates.head')
@include('templates.header')
    <div role="main" class="main">
        <div class="slider-container rev_slider_wrapper" style="height: 750px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1110, 'gridheight': [750,750,750,1250], 'responsiveLevels': [4096,1200,992,500]}">
                <ul>
                    <li class="xslide-overlay slide-overlay-level-7" data-transition="fade">

                        <img src="{{ asset('img/banners/banner6.jpg') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            data-kenburns="on"
                            data-duration="9000"
                            data-ease="Linear.easeNone"
                            data-scalestart="115"
                            data-scaleend="100"
                            data-rotatestart="0"
                            data-rotateend="0"
                            data-offsetstart="0 -200"
                            data-offsetend="0 200"
                            data-bgparallax="0"
                            class="rev-slidebg">

                        <div class="tp-caption tp-caption-overlay-opacity top-label font-weight-semibold"
                            data-frames='[{"delay":1000,"speed":1000,"sfxcolor":"#212529","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#212529","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                            data-x="left" data-hoffset="['0','30','30','30']"
                            data-y="center" data-voffset="['-65','-65','-69','-73']"
                            data-fontsize="['18','18','18','30']"
                            data-paddingtop="['10','10','10','12']"
                            data-paddingbottom="['10','10','10','12']"
                            data-paddingleft="['18','18','18','18']"
                            data-paddingright="['18','18','18','18']">REGIÓN CUICATÉCA</div>

                        <h1 class="tp-caption tp-caption-overlay-opacity main-label"
                            data-frames='[{"delay":1300,"speed":1000,"sfxcolor":"#212529","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#212529","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                            data-x="left" data-hoffset="['0','30','30','30']"
                            data-y="center"
                            data-fontsize="['50','50','50','60']"
                            data-letterspacing="0"
                            data-paddingtop="['10','10','10','10']"
                            data-paddingbottom="['10','10','10','10']"
                            data-paddingleft="['18','18','18','18']"
                            data-paddingright="['18','18','18','18']">SAN JUAN TEPONAPA</h1>

                        <div class="tp-caption d-none d-md-block"
                            data-frames='[{"delay":3000,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="left" data-hoffset="['330','360','360','135']"
                            data-y="center" data-voffset="['30','30','30','-62']"><img src="{{ asset('img/slides/slide-white-line.png') }}" alt=""></div>


                        <div class="tp-caption font-weight-light text-color-light ws-normal"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="left" data-hoffset="['3','35','35','35']"
                            data-y="center" data-voffset="['65','65','65','95']"
                            data-width="['850','850','850','800']"
                            data-fontsize="['18','18','18','35']"
                            data-lineheight="['29','29','29','40']">Comunidad bilingue con aproximadamente 200 habitantes</div>


                        <a class="tp-caption btn btn-outline btn-primary font-weight-bold"
                            href="#"
                            data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="left" data-hoffset="['0','30','30','30']"
                            data-y="center" data-voffset="['140','140','140','245']"
                            data-paddingtop="['15','15','15','30']"
                            data-paddingbottom="['15','15','15','30']"
                            data-paddingleft="['40','40','40','50']"
                            data-paddingright="['40','40','40','50']"
                            data-fontsize="['13','13','13','25']"
                            data-lineheight="['20','20','20','25']">LEER MÁS</a>

                        <a class="tp-caption btn btn-primary font-weight-bold"
                            href="#"
                            data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="left" data-hoffset="['185','185','220','340']"
                            data-y="center" data-voffset="['140','140','140','245']"
                            data-paddingtop="['16','16','16','31']"
                            data-paddingbottom="['16','16','16','31']"
                            data-paddingleft="['40','40','40','50']"
                            data-paddingright="['40','40','40','50']"
                            data-fontsize="['13','13','13','25']"
                            data-lineheight="['20','20','20','25']">DONAR <i class="fas fa-arrow-right ms-1"></i></a>

                    </li>
                    <li class="xslide-overlay slide-overlay-level-7" data-transition="fade">
                        <img src="{{ asset('img/banners/banner5.jpg') }}"
                            alt=""
                            data-bgposition="center center"
                            data-bgfit="cover"
                            data-bgrepeat="no-repeat"
                            data-kenburns="on"
                            data-duration="9000"
                            data-ease="Linear.easeNone"
                            data-scalestart="115"
                            data-scaleend="100"
                            data-rotatestart="0"
                            data-rotateend="0"
                            data-offsetstart="0 400px"
                            data-offsetend="0 -400px"
                            data-bgparallax="0"
                            class="rev-slidebg">

                        <div class="tp-caption tp-caption-overlay-opacity top-label font-weight-semibold"
                            data-frames='[{"delay":1000,"speed":1000,"sfxcolor":"#212529","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#212529","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                            data-x="left" data-hoffset="['550','550','550','450']"
                            data-y="center" data-voffset="['-65','-65','-69','-73']"
                            data-fontsize="['18','18','18','30']"
                            data-paddingtop="['10','10','10','12']"
                            data-paddingbottom="['10','10','10','12']"
                            data-paddingleft="['18','18','18','18']"
                            data-paddingright="['18','18','18','18']">Municipio</div>

                        <div class="tp-caption tp-caption-overlay-opacity main-label"
                            data-frames='[{"delay":1300,"speed":1000,"sfxcolor":"#212529","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#212529","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                            data-x="left" data-hoffset="['550','550','550','450']"
                            data-y="center"
                            data-fontsize="['50','50','50','60']"
                            data-paddingtop="['10','10','10','12']"
                            data-paddingbottom="['10','10','10','12']"
                            data-paddingleft="['18','18','18','18']"
                            data-paddingright="['18','18','18','18']">SANTA MARÍA PÁPALO</div>

                        <div class="tp-caption font-weight-light text-color-light ws-normal"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="left" data-hoffset="['550','550','550','450']"
                            data-y="center" data-voffset="['65','65','65','105']"
                            data-width="['750','750','750','750']"
                            data-fontsize="['18','18','18','30']"
                            data-lineheight="['29','29','29','40']">Se encuentra a una mediana altura de 1460 metros sobre el nivel del mar</div>

                        <a class="tp-caption btn btn-primary font-weight-bold"
                            href="#"
                            data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="left" data-hoffset="['550','550','550','450']"
                            data-y="center" data-voffset="['140','140','140','235']"
                            data-paddingtop="['16','16','16','31']"
                            data-paddingbottom="['16','16','16','31']"
                            data-paddingleft="['40','40','40','50']"
                            data-paddingright="['40','40','40','50']"
                            data-fontsize="['13','13','13','25']"
                            data-lineheight="['20','20','20','25']">LEER MÁS <i class="fas fa-arrow-right ms-1"></i></a>

                    </li>
                </ul>
            </div>
        </div>

        <div class="container py-4 my-5">
            <div class="row justify-content-center mb-4">
                <div class="col-md-12 col-lg-10">

                    <div class="tabs tabs-bottom tabs-center tabs-simple custom-tabs-style-1 mt-2 mb-3">
                        <ul class="nav nav-tabs mb-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#tabsNavigationSimpleIcons1" data-bs-toggle="tab">
                                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                            <span class="box-content p-0 m-0">
                                                <i class="icon-featured icon-bulb icons"></i>
                                            </span>
                                        </span>
                                    </span>
                                    <p class="text-color-dark font-weight-bold mb-0 pt-2 text-2 pb-0">Ecosistema</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabsNavigationSimpleIcons2" data-bs-toggle="tab">
                                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                            <span class="box-content p-0 m-0">
                                                <i class="icon-featured icon-mustache icons"></i>
                                            </span>
                                        </span>
                                    </span>
                                    <p class="text-color-dark font-weight-bold mb-0 pt-2 text-2 pb-0">Fiestas y tradiciones</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabsNavigationSimpleIcons3" data-bs-toggle="tab">
                                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                            <span class="box-content p-0 m-0">
                                                <i class="icon-featured icon-puzzle icons"></i>
                                            </span>
                                        </span>
                                    </span>
                                    <p class="text-color-dark font-weight-bold mb-0 pt-2 text-2 pb-0">Gastronomía</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabsNavigationSimpleIcons4" data-bs-toggle="tab">
                                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                            <span class="box-content p-0 m-0">
                                                <i class="icon-featured icon-rocket icons"></i>
                                            </span>
                                        </span>
                                    </span>
                                    <p class="text-color-dark font-weight-bold mb-0 pt-2 text-2 pb-0">Campo</p>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                                <div class="text-center">
                                    <p>
                                        <b>Flora</b><br>
                                        La población es boscosa, se pueden encontrar encinos, pinos, pinabetes, entre muchos más <br>
                                        <b>Fauna</b><br>
                                        En los campos y en el bosque como fauna podemos encontrar venados, ardillas, temazates, tejones, ardillas, coyotes, tigrillos, jabalís, tlacuaches, zorrillos, serpientes y diferentes tipos de aves silvestres. <br>
                                        <b>Frutas y verduras</b><br>
                                        Dentro del pueblo y en los campos se puede encontrar variedad de frutas, como: naranja, lima, zapote negro, mamey, guayaba, plátano, nispero, mango, aguacate, fresa, granada, entre muchos más.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                <div class="text-center">
                                    <p>Se celebra el día 8 de marzo en honor a San Juan de Dios. Se realizan procesiones junto con la banda de música.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabsNavigationSimpleIcons3">
                                <div class="text-center">
                                    <p>Nuestra comida típica son los tamales de frijol envuelto en hojos de milpa, mole de olla, mole de hongos, empanadas de flor de calabaza sin que falten las bebidas entre las que destaca el pulque, aguardiente, el chingre y el tepache de caña de azucar</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabsNavigationSimpleIcons4">
                                <div class="text-center">
                                    <p>Se dedican al cultivo y cosecha de maíz, frijol, calabaza, café, plátano.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a class="btn btn-outline btn-primary text-1 font-weight-semibold text-uppercase px-5 btn-py-2 mb-3" href="">Leer más</a>
                </div>
            </div>
        </div>

        <section class="section section-height-3 bg-color-grey-scale-1 border-top-0 m-0">
            <div class="container">
                <div class="row py-3 mb-2">
                    <div class="col-lg-6 pe-5 appear-animation" data-appear-animation="fadeInRightShorter">
                        <h2 class="font-weight-extra-bold text-color-dark text-6 mb-0">Teponapa</h2>
                        <p class="font-weight-normal opacity-8 text-4 mb-3">Teponapa se localiza en el Municipio de Santa María Pápalo del estado de Oaxaca, México</p>
                        <div class="divider divider-primary divider-small divider-small-left">
                            <hr class="w-25">
                        </div>
                        <p class="opacity-8 mb-4">La población total de Teponapa es de 187 personas, 92 son masculinos y 95 femeninas.</p>
                        <p class="opacity-8 mb-3">En Teponapa hay un total de 46 hogares. De estos 46 viviendas, 42 tienen piso de tierra y unos 8 consisten de una sola habitación. 46 de todas las viviendas tienen instalaciones sanitarias, 4 son conectadas al servicio público, 45 tienen acceso a la luz eléctrica. La estructura económica permite a 0 viviendas tener una computadora, a 0 tener una lavadora y 1 tienen una televisisón.</p>

                        <a class="text-dark font-weight-bold text-2" href="demo-digital-agency-about.html">VIEW MORE<i class="fas fa-chevron-right text-2 ps-2"></i></a>
                    </div>
                    <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <div class="row">
                            <div class="col">
                                <p class="font-weight-bold text-color-dark text-4 mt-4 pt-3">Main Reasons to Hire Us</p>
                                <div class="divider divider-primary divider-small divider-small-left">
                                    <hr class="w-25">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-box align-items-center mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100">
                                    <div class="feature-box-icon">
                                        <i class="icon-people icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <p class="opacity-9 mb-0">187 personas</p>
                                    </div>
                                </div>
                                <div class="feature-box align-items-center mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                    <div class="feature-box-icon">
                                        <i class="icon-layers icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <p class="opacity-9 mb-0">Creative Websites</p>
                                    </div>
                                </div>
                                <div class="feature-box align-items-center mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
                                    <div class="feature-box-icon">
                                        <i class="icon-magnifier icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <p class="opacity-9 mb-0">SEO Optimization</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-box align-items-center mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                    <div class="feature-box-icon">
                                        <i class="icon-screen-desktop icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <p class="opacity-9 mb-0">Brand Solutions</p>
                                    </div>
                                </div>
                                <div class="feature-box align-items-center mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    <div class="feature-box-icon">
                                        <i class="icon-doc icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <p class="opacity-9 mb-0">HTML5 / CSS3 / JS</p>
                                    </div>
                                </div>
                                <div class="feature-box align-items-center mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                                    <div class="feature-box-icon">
                                        <i class="icon-user icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <p class="opacity-9 mb-0">Icons</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container" style="min-height: 500px;">
            <div class="row justify-content-center pt-4 pb-2 mt-5 mb-4">
                <div class="col-md-8 col-lg-6 text-center appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-extra-bold text-color-dark text-6 mb-0">Algunos recuerdos</h2>
                    <p class="text-4 mb-3">Fotos de recuerdos, eventos y/o actividades</p>
                    <div class="divider divider-primary divider-small divider-small-center">
                        <hr class="w-25">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="carousel-areas mb-0" style="margin-top: -10px;">
                        <div class="owl-carousel owl-theme nav-style-1 m-0" data-plugin-options="{'autoHeight': true, 'items': 1, 'margin': 10, 'nav': true, 'dots': false, 'stagePadding': 0}">
                            <div>
                                <div class="col px-2 text-2">
                                    <div class="row justify-content-between bg-color-grey-scale-1 py-3 px-2 mx-0">
                                        <div class="col-auto col-md-6">
                                            <p class="text-dark font-weight-extra-bold mb-0">TEPONAPA</p>
                                        </div>
                                        <div class="col-auto col-md-6 text-end">
                                            <span>Construcción de calle</span>
                                            <span class="divider-custom mx-1"></span>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <img alt="" class="img-fluid rounded-0" src="{{ asset('img/previews/areas/recuerdo1.jpg') }}">
                                </a>
                            </div>
                            <div>
                                <div class="col px-2 text-2">
                                    <div class="row justify-content-between bg-color-grey-scale-1 py-3 px-2 mx-0">
                                        <div class="col-auto col-md-6">
                                            <p class="text-dark font-weight-extra-bold mb-0">TEPONAPA</p>
                                        </div>
                                        <div class="col-auto col-md-6 text-end">
                                            <span>Convivio día del niño</span>
                                            <span class="divider-custom mx-1"></span>
                                            <span>2010</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <img alt="" class="img-fluid rounded-0" src="{{ asset('img/previews/areas/recuerdo2.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <section class="section section-height-3 section-dark section-text-light section-no-border m-0 appear-animation" data-appear-animation="fadeIn">
            <div class="container my-4">
                <div class="row justify-content-center pb-3 mb-4">
                    <div class="col-lg-6 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="font-weight-bold text-6 mb-0">Testimonials</h2>
                        <p class="font-weight-normal opacity-4 text-4 mb-3">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                        <div class="divider divider-primary divider-small divider-small-center">
                            <hr class="w-25">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote mb-0">
                            <div class="testimonial-author">
                                <img src="{{ asset('img/clients/client-1.jpg') }}" class="img-fluid rounded-circle mb-0" alt="">
                            </div>
                            <blockquote>
                                <p class="px-xl-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie.</p>
                            </blockquote>
                            <div class="testimonial-author">
                                <p><strong class="text-color-light opacity-10 text-4">John Doe</strong></p>
                                <p class="text-2 opacity-8">Okler</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote mb-0">
                            <div class="testimonial-author">
                                <img src="{{ asset('img/clients/client-2.jpg') }}" class="img-fluid rounded-circle mb-0" alt="">
                            </div>
                            <blockquote>
                                <p class="px-xl-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie.</p>
                            </blockquote>
                            <div class="testimonial-author">
                                <p><strong class="text-color-light opacity-10 text-4">Jessica Doe</strong></p>
                                <p class="text-2 opacity-8">Okler</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote mb-0">
                            <div class="testimonial-author">
                                <img src="{{ asset('img/clients/client-3.jpg') }}" class="img-fluid rounded-circle mb-0" alt="">
                            </div>
                            <blockquote>
                                <p class="px-xl-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie.</p>
                            </blockquote>
                            <div class="testimonial-author">
                                <p><strong class="text-color-light opacity-10 text-4">Richard Doe</strong></p>
                                <p class="text-2 opacity-8">Okler</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <div class="container">
            <div class="row counters counters-sm counters-text-dark py-4 my-5">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                        <i class="icons icon-user text-8 mb-3"></i>
                        <strong class="font-weight-extra-bold mb-1" data-to="200" data-append="+">0</strong>
                        <label class="line-height-5">Habitantes</label>
                        <p class="text-color-primary text-2 line-height-9 mb-0">100% habla cuicatéco</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter appear-animation" data-appear-animation="fadeInLeftShorter">
                        <i class="icons icon-home text-8 mb-3"></i>
                        <strong class="font-weight-extra-bold mb-1" data-to="3">0</strong>
                        <label class="line-height-5">Niveles de Educación</label>
                        <p class="text-color-primary text-2 line-height-9 mb-0">Sólo hay preescolar, primaria y secundaria</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter appear-animation" data-appear-animation="fadeInRightShorter">
                        <i class="icons icon-support text-8 mb-3"></i>
                        <strong class="font-weight-extra-bold mb-1" data-to="15" data-append="+">0</strong>
                        <label class="line-height-5">Familias</label>
                        <p class="text-color-primary text-2 line-height-9 mb-0">Con escasos recursos económicos</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <i class="icons icon-graduation text-8 mb-3"></i>
                        <strong class="font-weight-extra-bold mb-1" data-to="2" data-append="">0</strong>
                        <label class="line-height-5">Ciudadanos concluyeron su</label>
                        <p class="text-color-primary text-2 line-height-9 mb-0">Educación Superior</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="opacity-6">

        <div class="container py-4">

            <div class="row justify-content-center pt-4 pb-2 mt-5 mb-4">
                <div class="col-md-8 col-lg-6 text-center appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-extra-bold text-color-dark text-6 mb-0">Galería</h2>
                    <p class="text-4 mb-3">Galería de algunas fotos tomadas en Teponapa</p>
                    <div class="divider divider-primary divider-small divider-small-center">
                        <hr class="w-25">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="blog-posts">
                        <article class="post post-large">
                            <div class="post-image">
                                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                                    <div class="row mx-0">
                                        <div class="col-6 col-md-4 p-0">
                                            <a href="img/previews/areas/recuerdo1.jpg">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                    <span class="thumb-info-wrapper">
                                                        {{-- Aqui debe medir 700x700 --}}
                                                        <img src="img/galeria/galeria1.jpg" class="img-fluid" alt="">
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-6 col-md-4 p-0">
                                            <a href="img/blog/square/blog-16.jpg">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/galeria/galeria2.jpg" class="img-fluid" alt="">
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-6 col-md-4 p-0">
                                            <a href="img/blog/square/blog-20.jpg">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/galeria/galeria3.jpg" class="img-fluid" alt="">
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-6 col-md-4 p-0">
                                            <a href="img/blog/square/blog-23.jpg">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/galeria/galeria4.jpg" class="img-fluid" alt="">
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-6 col-md-4 p-0">
                                            <a href="img/galeria/5.jpg">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/galeria/galeria5.jpg" class="img-fluid" alt="">
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-6 col-md-4 p-0">
                                            <a href="img/galeria/6.jpg">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/galeria/galeria6.jpg" class="img-fluid" alt="">
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="post-date">
                                <span class="day">8</span>
                                <span class="month">Jan</span>
                            </div> --}}

                            {{-- <div class="post-content">

                                <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="blog-post.html">This is a standard image gallery thumbs post</a></h2>
                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                    <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                </div>

                            </div> --}}
                        </article>

                        {{-- <article class="post post-large">
                            <div class="post-image">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://player.vimeo.com/video/45830194?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="640" height="360" allowfullscreen=""></iframe>
                                </div>
                            </div>

                            <div class="post-date">
                                <span class="day">7</span>
                                <span class="month">Jan</span>
                            </div>

                            <div class="post-content">

                                <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="blog-post.html">This is a standard embedded video post</a></h2>
                                <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                    <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                </div>

                            </div>
                        </article> --}}

                    </div>
                </div>

            </div>

        </div>

        <section class="section section-height-3 bg-light border-0 m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                            <div>
                                <img class="img-fluid opacity-2" src="{{ asset('img/logos/logo-1.png') }}" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="{{ asset('img/logos/logo-2.png') }}" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="{{ asset('img/logos/logo-3.png') }}" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="{{ asset('img/logos/logo-4.png') }}" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="{{ asset('img/logos/logo-5.png') }}" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="{{ asset('img/logos/logo-6.png') }}" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="{{ asset('img/logos/logo-4.png') }}" alt="">
                            </div>
                            <div>
                                <img class="img-fluid opacity-2" src="{{ asset('img/logos/logo-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-color-grey-scale-1 call-to-action call-to-action-default no-top-arrow content-align-center call-to-action-in-footer mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-normal text-6 mb-0">Teponapa <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> website!</h2>
                            <p class="mb-0">The best HTML template for your new website.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-outline btn-dark text-1 font-weight-semibold text-uppercase px-5 btn-py-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@include('templates.footer')
@include('templates.foot')
