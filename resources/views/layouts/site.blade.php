<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ME Experiencia - Consultora en felicidad organizacional</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.png') }}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    @yield('section-head')

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- Facebook widget -->
    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=1352445738104069&autoLogAppEvents=1"></script>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-xl navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand d-block d-xl-none" href="bienvenido.php">
                                <img src="{{ asset('img/core-img/logo-menu.svg') }}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav mr-auto" id="nav" style="align-items: center;">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}"><span class="active-nuevo">Bienvenido</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">¿Quiénes Somos?</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">¿Qué hacemos?</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                                    
                                </ul>
                                <a class="navbar-brand d-none d-xl-block" href="{{ route('welcome') }}">
                                    <img src="{{ asset('img/core-img/logo-menu.svg') }}" alt="">
                                </a>
                                <ul class="navbar-nav ml-auto" id="nav" style="align-items: center;">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('events') }}">Próximos cursos</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contacto</a></li>
                                    <div class="menu-social-icon">
                                        <a href="https://www.facebook.com/MEExperiencias" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/company/meexperiencias/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <a href="https://www.instagram.com/meexperiencias/ " target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                    <li class="nav-item dropdown">
                                        @if(app('config')->get('app.country') == 'ar')
                                            <a class="nav-link dropdown-toggle" href="/locale?country=ar" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('img/core-img/arg.png') }}" class="pais" alt=""></a>

                                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                                <a class="dropdown-item" href="/locale?country=cr"><img src="{{ asset('img/core-img/cr.png') }}" class="pais" alt=""></a>
                                            </div>
                                        @else

                                            <a class="nav-link dropdown-toggle" href="/locale?country=cr" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('img/core-img/cr.png') }}" class="pais" alt=""></a>

                                                <div class="dropdown-menu" aria-labelledby="dropdown09">
                                                    <a class="dropdown-item" href="/locale?country=ar"><img src="{{ asset('img/core-img/arg.png') }}" class="pais" alt=""></a>
                                                </div>
                                        @endif
                                    </li>
                                    
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon section_padding_70 clearfix bg-dark text-white">
            <!-- footer logo -->
            <div class="container">
                <div class="row">
                    <div class="col-1-5 col-md-2 mb-4 mb-md-0">
                        <img src="{{ asset('img/core-img/logo-footer.svg') }}" class="mb-3" alt="">
                        <p class="text-white">Somos especialistas en Felicidad Organizacional y nos apasiona trabajar con otros para crecer, aprender y actualizarnos</p>
                        <div class="footer-social-icon">
                            <a href="https://www.facebook.com/MEExperiencias" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/meexperiencias" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/meexperiencias/ " target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/company/meexperiencias/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
					@if(session('country') == 'ar')
						<div class="col-1-5 col-md-3 mb-4 mb-md-0">
							<div class="footer-heading">
								<h3>Contacto</h3>
							</div>
							<div class="footer-text2">
								<img src="{{ asset('img/core-img/mail.svg') }}" class="float-left mr-2 mb-1" alt="">
								<h4>EscribiME</h4>
								<p>contamemas@meexperiencias.com</p>
							</div>
							<div class="footer-text2">
								<img src="{{ asset('img/core-img/tel.svg') }}" class="float-left mr-2 mb-1" alt="">
								<h4>LlamaME</h4>
								<p>+54-9-351-2017150</p>
							</div>
						</div>
					@endif
					@if(session('country') == 'cr')
						<div class="col-1-5 col-md-3 mb-4 mb-md-0">
							<div class="footer-heading">
								<h3>Contacto</h3>
							</div>
							<div class="footer-text2">
								<img src="{{ asset('img/core-img/mail.svg') }}" class="float-left mr-2 mb-1" alt="">
								<h4>EscribiME</h4>
								<p>holacostarica@meexperiencias.com</p>
							</div>
							<div class="footer-text2">
								<img src="{{ asset('img/core-img/tel.svg') }}" class="float-left mr-2 mb-1" alt="">
								<h4>LlamaME</h4>
								<p>+(507) 226-9030 | +(507) 6030-9389
							</div>
						</div>
					@endif
                    <div class="col-1-5 col-md-2 mb-4 mb-md-0">
                        <div class="footer-heading">
                            <h3>Enlaces</h3>
                        </div>
                        <ul>
                            <li class="mb-3"><a href="{{ route('welcome') }}">Bienvenido</a></li>
                            <li class="mb-3"><a href="{{ route('about') }}">¿Quienes somos?</a></li>
                            <li class="mb-3"><a href="{{ route('service') }}">¿Qué hacemos?</a></li>
                            <li class="mb-3"><a href="{{ route('blog') }}">Blog</a></li>
                            <li class="mb-3"><a href="{{ asset('cursos') }}">Próximos cursos</a></li>
                            <li class="mb-3"><a href="{{ asset('contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-1-5 col-md-2 mb-4 mb-md-0">
                        <div class="footer-heading">
                            <h3>Servicios</h3>
                        </div>
                        <ul>
                            <li class="mb-3"><a href="{{ route('service') }}#asesoria">Asesoría</a></li>
                            <li class="mb-3"><a href="{{ route('service') }}#cursos">Cursos de formación</a></li>
                            <li class="mb-3"><a href="{{ route('service') }}#team-building">Team building</a></li>
                            <li class="mb-3"><a href="{{ route('service') }}#charlas">Charlas y conferencias</a></li>
                        </ul>
                    </div>
                    <div class="col-1-5 col-md-3 mb-4 mb-md-0">
                        <div class="fb-page" data-href="https://www.facebook.com/MEExperiencias/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-height="300" data-width=""data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/MEExperiencias/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MEExperiencias/">ME Consultora en Felicidad Organizacional</a></blockquote></div>
                    </div>
                </div>
            </div>
            <!-- Foooter Text-->
            <div class="copyright-text">
                <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
                <p>Copyright ©2019 Me experiencia. Diseñado, ilustrado y desarrollado por <a href="https://chimpancedigital.com.ar" target="_blank">Chimpancé</a></p>
            </div>
        </footer>
        <!-- ***** Footer Area Start ***** -->

        <!-- Jquery-2.2.4 JS -->
        <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <!-- Bootstrap-4 Beta JS -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- All Plugins JS -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- Slick Slider Js-->
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <!-- Footer Reveal JS -->
        <script src="{{ asset('js/footer-reveal.min.js') }}"></script>
        <!-- Active JS -->
        <script src="{{ asset('js/active.js') }}"></script>
        
        <script src="{{ asset('js/otro.js') }}"></script>


        <script type="text/javascript">
        $(function() {
            // this will get the full URL at the address bar
            var url = window.location.href;

            // passes on every "a" tag
            $("#nav a").each(function() {
                // checks if its the same on the address bar
                if (url == (this.href)) {
                    $(this).closest("a").addClass("active");
                    //for making parent of submenu active
                   $(this).closest("a").parent().parent().parent().addClass("active");
                }
            });
        });  



        
        </script>

        @yield('section-scripts')
    
    </body>

</html>