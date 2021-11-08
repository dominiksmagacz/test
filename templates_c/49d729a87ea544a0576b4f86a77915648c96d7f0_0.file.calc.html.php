<?php
/* Smarty version 3.1.40, created on 2021-11-08 12:39:34
  from 'D:\Programy\xamp\htdocs\php_02_ochrona_dostepuSzablonowanie\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61890c765fa070_40753001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d729a87ea544a0576b4f86a77915648c96d7f0' => 
    array (
      0 => 'D:\\Programy\\xamp\\htdocs\\php_02_ochrona_dostepuSzablonowanie\\app\\calc.html',
      1 => 1636371559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61890c765fa070_40753001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171960631861890c765dac76_67396583', 'footer');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26599052761890c765deaf1_50845216', 'content');
?>

 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_171960631861890c765dac76_67396583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_171960631861890c765dac76_67396583',
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
/* {block 'content'} */
class Block_26599052761890c765deaf1_50845216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_26599052761890c765deaf1_50845216',
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
