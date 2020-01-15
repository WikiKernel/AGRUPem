<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('AGRUPem', 'AGRUPem')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Summernote -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

    <!-- Open Street Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/ba7e41d0d3.js" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        <nav id="firstNavbar" class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto align-content-centre">
                            <?php $locale = session()->get('locale'); ?>
                                    <div id="social_networks_buttons" class="d-flex align-content-center flex-wrap">
                                        <a href="https://es-la.facebook.com/AGRUPem"><i class="fab fa-facebook-square"></i></a>
                                        <a href="https://www.instagram.com/agrupem2011/"><i class="fab fa-instagram"></i></a>
                                        <a href="https://twitter.com/agrupem1"><i class="fab fa-twitter-square"></i></a>
                                    </div>

                                        <form action="/lang/cat" method="GET">
                                        <?php echo app('translator')->get('layout.lenguage-catalan'); ?></form>
                                        <form action="/lang/es" method="GET">
                                        <?php echo app('translator')->get('layout.lenguage-spanish'); ?></form>
                                       
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                           <?php endif; ?>
                            <?php if(auth()->guard()->check()): ?>
                      
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrar')); ?></a>
                                    </li>
                                <?php endif; ?>
                                </div>
                            </li>
                        
                    </ul> 
                </div>
            </div>
        </nav>
        <a href="<?php echo e(url('/')); ?>">
        <img id="logotipo" src="<?php echo e(asset('/images/logo.png')); ?>" alt="logotipo de agrupem">
        </a>
        <nav id="secondNavbar" class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="navbar-nav ml-auto">
                <a href="/queFem" class="button btn"><?php echo app('translator')->get('layout.what-we-do'); ?></a>
                <a href="/quiSom" class="button btn"><?php echo app('translator')->get('layout.who-we-are'); ?></a>
                <a href="/resource" class="button btn">RECURSOS</a>
                <a href="/post" class="button btn">BLOG</a>
                <a href="/contact" class="button btn"><?php echo app('translator')->get('layout.contact'); ?></a>
            </div>
        </nav>

        <main class="py-4 pb-0">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <footer class="d-flex flex-column">
        <div>
        <p>Copyright © 2012-2020 AGRUPem</br></p>
         </div> 
    </footer>
    <script>
    
	var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
		osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
		osm = L.tileLayer(osmUrl, {maxZoom: 18, attribution: osmAttrib});
	var map = L.map('map').setView([41.73482, 1.8252], 17).addLayer(osm);
	L.marker([41.73482, 1.8252])
		.addTo(map)
		.bindPopup('AGRUPem.')
		.openPopup();
</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/layouts/app.blade.php ENDPATH**/ ?>