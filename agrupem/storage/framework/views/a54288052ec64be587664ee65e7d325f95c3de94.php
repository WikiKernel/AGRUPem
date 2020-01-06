
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                    <?php endif; ?>
                    <?php endif; ?>
                    
                </div>
                

            <div class="content">
                <div class="title m-b-md">
                    <a id="home-link" href="/home" style="text-decoration:none;
    color: #636b6f">AGRUPem</a>
                </div>

                <div class="links">
                    <a onclick="window.location='<?php echo e(url("post")); ?>'">Blog</a>
                    <a onclick="window.location='<?php echo e(url("resource")); ?>'">Recursos</a>
                    <a onclick="window.location='<?php echo e(url("event")); ?>'"><?php echo app('translator')->get('welcome.events'); ?></a>
                    <a onclick="window.location='<?php echo e(url("novelty")); ?>'"><?php echo app('translator')->get('welcome.novelties'); ?></a>
                    <a onclick="window.location='<?php echo e(url("contact")); ?>'"}><?php echo app('translator')->get('welcome.contact'); ?></a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\AGRUPem\agrupem\resources\views/welcome.blade.php ENDPATH**/ ?>