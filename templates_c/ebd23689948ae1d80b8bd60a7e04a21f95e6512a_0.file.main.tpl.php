<?php
/* Smarty version 3.1.39, created on 2021-03-26 17:59:40
  from 'Z:\Xampp\htdocs\kalkulator\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605e12fc7aca61_84255427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd23689948ae1d80b8bd60a7e04a21f95e6512a' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\kalkulator\\app\\views\\templates\\main.tpl',
      1 => 1615830989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605e12fc7aca61_84255427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kalkulator kredytowy</h1>
								<p>Przy użyciu tego kalkulatora będziesz mógł obliczyć orientacyjną ratę miesięczną</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#kredyt">Oblicz swoją ratę!</a></li>	
                                                               
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

	
							<article id="kredyt">
								<h2 class="major">Oblicz swoja rate!</h2>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1369767211605e12fc7a9719_17643580', 'content');
?>


							</article>



					</div>


                        <!-- Footer -->
                            
					<footer id="footer">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1646256960605e12fc7a9fa3_98650781', 'stopka');
?>

						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>
			</div>
				
<!-- BG -->
			<div id="bg"></div>
		

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block 'content'} */
class Block_1369767211605e12fc7a9719_17643580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1369767211605e12fc7a9719_17643580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Tu powinien być kalkulator ... <?php
}
}
/* {/block 'content'} */
/* {block 'stopka'} */
class Block_1646256960605e12fc7a9fa3_98650781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stopka' => 
  array (
    0 => 'Block_1646256960605e12fc7a9fa3_98650781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Tu powinna być stopka <?php
}
}
/* {/block 'stopka'} */
}
