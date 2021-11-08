<?php
/* Smarty version 3.1.40, created on 2021-11-08 12:38:21
  from 'D:\Programy\xamp\htdocs\php_02_ochrona_dostepuSzablonowanie\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61890c2d7ce1f3_05497280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76e18ca6204a473c3ee3cfeb4a76b0f06c50d57a' => 
    array (
      0 => 'D:\\Programy\\xamp\\htdocs\\php_02_ochrona_dostepuSzablonowanie\\app\\calc.html',
      1 => 1636371437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61890c2d7ce1f3_05497280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191030848161890c2d7a70e4_35311644', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191301912061890c2d7aaf64_93351058', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110796398861890c2d7aede2_97934198', 'content');
?>

 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_191030848161890c2d7a70e4_35311644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_191030848161890c2d7a70e4_35311644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <div class="footer">
        
        &copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a> | Demo Images: <a href="http://unsplash.com">Unsplash</a>
    </div>

<?php
}
}
/* {/block 'footer'} */
/* {block 'header'} */
class Block_191301912061890c2d7aaf64_93351058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_191301912061890c2d7aaf64_93351058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
<a href="<?php echo '<?php ';?>
print(_APP_ROOT); <?php echo '?>';?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
        
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_110796398861890c2d7aede2_97934198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_110796398861890c2d7aede2_97934198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
<legend>Kalkulator kredytowy dla amatorów</legend>
	<fieldset>
		<label for="id_x">Kwota: </label>
		<input id="id_x" type="text" placeholder="kwota" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
" />
		<label for="id_y">Ile lat kredytowania: </label>
		<input id="id_y" type="text" placeholder="okres kredytowania" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
" />
		<label for="id_z">Oprocentowanie: </label>
		<input id="id_z" type="text" placeholder="oprocentowanie" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
" />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>

<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
