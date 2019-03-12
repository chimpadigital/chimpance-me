@extends('layouts.site')

@section('content')

     <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="mb-4 wow fadeInLeft mt-150" data-wow-delay="0.7s">
                        <h2 class="text-warning mb-3">¡¡Preparate para llevar tu 2019 al siguiente nivel!!</h2>
                        <i class="text-warning fa fa-calendar float-left mr-2"></i> <p class="text-warning">12/12/2018</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home" style="z-index:0;">
        <div class="container h-100">
            <div class="row h-100">
                
                <div class="col-12 col-md-8  mt-5 mt-4 text-center text-lg-left">
                    <div class="mb-5 wow fadeInLeft" data-wow-delay="0.7s">
                        <p>A lo largo de noviembre y diciembre estamos desarrollando los Cursos Impulso 2018 con el objetivo de brindar herramientas, al público en general, para que puedan dar un salto a nivel personal y profesional y puedan arrancar su 2019 poniendo en práctica todo su potencial.</p>
                        <h6 class="mb-4 mt-4">Para eso organizamos 4 capacitaciones, independientes pero complementarias:</h6>
                        <ul class="evento">
                            <li>
                                <p>
                                Impulso I - Conocé tus fortalezas: Aprenderás herramientas que te permitirán alcanzar tu mejor versión.
                                </p>
                            </li>
                            <li>
                                <p>
                                Impulso II - Comunicá efectivamente: Aprenderemos cómo desarrollar nuestras habilidades comunicacionales.
                                </p>
                            </li>
                            <li>
                                <p>
                                Impulso III - Emprendé con éxito: Llevaremos tu emprendimiento al siguiente nivel, materializando y poniendo en acción todas tus ideas.
                                </p>
                            </li>
                            <li>
                                <p>
                                Impulso IV -  Adminsitrá tu tiempo: Te llevarás técnicas ágiles y fáciles de usar para que empieces a optimizar al máximo tu tiempo
                                </p>
                            </li>
                        </ul>
                        <p class="mt-5">¿Querés hacer estos cursos con tu equipo de trabajo? ¿Te interesó alguno pero no pudiste asistir?
                        <a class="btn-link" href="../contacto.php">¡Escribinos!</a> y organizamos los cursos a tu medida.</p>

                        <p>
                            ¿Sos de Costa Rica? Escribinos a <a class="btn-link" href="mailto:holacostarica@meexperiencias.com">holacostarica@meexperiencias.com</a> para conocer las próximas fechas.
                        </p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4 sidebar-blog bg-white">
                    <div class="widget">
                        <h4 class="mb-30">Últimas Noticias</h4>
                        <ul>
                            <li>
                                <div class="thumb-img float-left mr-4">
                                    <img src="../img/blog/blog1.jpg" alt="">
                                </div>
                                <a href="/prepara-tu-2019.php">

                                </a>
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
    <!-- ***** Wellcome Area End ***** -->

@endsection