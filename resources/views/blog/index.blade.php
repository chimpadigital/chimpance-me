@extends('layouts.site')

@section('content')

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home" style="z-index:0;">
        <div class="container h-100 mt-5">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-4 mt-100 mt-lg-0 text-center text-lg-left">
                    <div class="wellcome-heading wow fadeInLeft" data-wow-delay="0.7s">
                        <h2>Novedades, charlas y más</h2>
                    </div>
                    <a href="#posts" class="btn-primary wow fadeInLeft" data-wow-delay="0.9s">ENTERARME</a>
                </div>
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-6 wow fadeInDown mt-100" data-wow-delay="1s" style="z-index:1000;">
                    <img src="img/ilustraciones/blog.svg" alt="">
                </div>
            </div>
        </div>
        <div class="special-area wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3"></div>
                    <div class="col-12 col-md-6 text-center">
                        <div class="divider"></div>
                    </div>
                    <div class="col-12 col-md-3"></div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.4s">
            <img src="img/ilustraciones/fondo-circulo.svg" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="section_padding_100 bg-white" id="posts">
        <div class="container">
            
            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="blog-post wow fadeInUp" data-wow-delay="0.2s">
                                <div class="blog-image">
                                    <img src="img/blog/blog1.jpg" alt="">
                                </div>
                                <div class="blog-content">
                                    <h5 class="mb-4">¡¡Preparate para llevar tu 2019 al siguiente nivel!!</h5>
                                    <p class="mb-5">A lo largo de noviembre y diciembre estamos desarrollando los Cursos Impulso 2018 con el objetivo de brindar herramientas, al público en general, para que puedan dar un ..</p>
                                    <a href="blog/notes" class="btn-primary btn-sm">VER NOTA</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4 sidebar-blog bg-white">
                    <div class="widget">
                        <h4 class="mb-30">Últimas Noticias</h4>
                        <ul>
                            <li>
                                <div class="thumb-img float-left mr-4">
                                    <img src="img/blog/blog1.jpg" alt="">
                                </div>
                                <h6>¡¡Preparate para llevar tu 2019 al siguiente nivel!!</h6>
                                <p>fecha</p>
                            </li>
                        </ul>
                    </div>
<!-- 
                    <div class="widget">
                        <h4 class="mb-30">Archivo</h4>
                        <ul>
                            <li>
                                <a href="">
                                    <p>12/2018</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p>11/2018</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p>10/2018</p>
                                </a>
                            </li>
                        </ul>
                    </div> -->

                    <div class="widget">
                        <h4 class="mb-30">Categorías</h4>
                        <ul>
                            <li>
                                <a href="">
                                    <p>Charlas</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p>Innovación</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <p>Capacitaciones</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                
            </div>
        </div>
    </section>

@endsection