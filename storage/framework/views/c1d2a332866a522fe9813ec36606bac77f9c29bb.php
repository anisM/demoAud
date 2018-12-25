<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php echo $__env->yieldContent('aimeos_header'); ?>

	<title>Aimeos on Laravel</title>

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
	<link type="text/css" rel="stylesheet" href="/css/app.css">

	<?php echo $__env->yieldContent('aimeos_styles'); ?>

</head>
<body>
	<nav class="navbar navbar-default">

	<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/list">Aimeos</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

					<?php if(Auth::guest()): ?>
						<li><a href="/login">Login</a></li>
						<li><a href="/register">Register</a></li>
					<?php else: ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo e(route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')])); ?>" title="My account">My account</a></li>
								<li><form id="logout" action="/logout" method="POST"><?php echo e(csrf_field()); ?></form><a href="javascript: document.getElementById('logout').submit();">Logout</a></li>
							</ul>
						</li>
					<?php endif; ?>

					<li><?php echo $__env->yieldContent('aimeos_head'); ?></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="col-xs-12">

		<?php echo $__env->yieldContent('aimeos_nav'); ?>
		<?php echo $__env->yieldContent('aimeos_stage'); ?>
		<?php echo $__env->yieldContent('aimeos_body'); ?>
		<?php echo $__env->yieldContent('aimeos_aside'); ?>
		<?php echo $__env->yieldContent('content'); ?>

	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="/js/app.js"></script>

	<?php echo $__env->yieldContent('aimeos_scripts'); ?>

	</body>
</html>
