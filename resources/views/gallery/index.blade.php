@extends('templates.layout2')
@section('title','Galería | Teponapa Santa María Pápalo')
@section('content')

    <div class="container py-4">

        <div class="row justify-content-center pt-4 pb-2 mt-5 mb-4">
            <div class="col-md-8 col-lg-6 text-center appear-animation" data-appear-animation="fadeInUpShorter">
                <h2 class="font-weight-extra-bold text-color-dark text-6 mb-0">Galería de fotos y videos</h2>
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
                                                    <img src="img/galeria/galeria1.jpg" class="img-fluid" alt="Teponapa" title="Teponapa" >
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
                                                    <img src="img/galeria/galeria2.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria3.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria4.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria5.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria6.jpg" class="img-fluid" alt="Teponapa">
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
    <div class="container py-4">
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
                                                    <img src="img/galeria/galeria1.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria2.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria3.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria4.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria5.jpg" class="img-fluid" alt="Teponapa">
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
                                                    <img src="img/galeria/galeria6.jpg" class="img-fluid" alt="Teponapa">
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

    <div  class="container py-4">
        <div class="col-md-8 col-lg-6 text-center appear-animation" data-appear-animation="fadeInUpShorter">
            <h2 class="font-weight-extra-bold text-color-dark text-6 mb-0">Videos de YouTube</h2>
            <p class="text-4 mb-3">Algunas colecciones de YouTube</p>
            <div class="divider divider-primary divider-small divider-small-center">
                <hr class="w-25">
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="row">
                    <div class="col pb-4">

                        {{-- <h4>Hermoso paisaje</h4>
                        <div class="ratio ratio-16x9">
                            <iframe frameborder="0" allowfullscreen="" src="https://youtube.com/embed/PLX1FlEd1fQ"></iframe>
                        </div> --}}

                        <hr class="solid my-5">

                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h4>Paisaje de Teponapa</h4>
                                <div class="ratio ratio-16x9">
                                    <iframe frameborder="0" allowfullscreen="" src="https://youtube.com/embed/PLX1FlEd1fQ"></iframe>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Evento en Teponapa</h4>
                                <div class="ratio ratio-16x9">
                                    <iframe frameborder="0" allowfullscreen="" src="https://youtube.com/embed/JuWrBf3MXtA"></iframe>
                                </div>
                            </div>
                        </div>

                        <hr class="solid my-5">

                        {{-- <h4>Soundcloud</h4>
                        <div class="ratio ratio-soundcloud">
                            <iframe scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/341546259&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                        </div> --}}

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection






