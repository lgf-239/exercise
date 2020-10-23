<?php
/* Smarty version 3.1.33, created on 2020-10-22 20:48:41
  from 'C:\wamp64\www\tienda\admin300kta6in\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f923679e1b840_90665364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ba24b25765b6ef20bcd712b52c24a9a902550c5' => 
    array (
      0 => 'C:\\wamp64\\www\\tienda\\admin300kta6in\\themes\\default\\template\\content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f923679e1b840_90665364 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
