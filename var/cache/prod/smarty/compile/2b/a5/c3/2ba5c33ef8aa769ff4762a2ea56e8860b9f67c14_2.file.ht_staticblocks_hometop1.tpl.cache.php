<?php
/* Smarty version 3.1.33, created on 2020-10-22 20:26:03
  from 'C:\wamp64\www\tienda\modules\ht_staticblocks\views\templates\hook\ht_staticblocks_hometop1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f92312ba51e58_19694975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ba5c33ef8aa769ff4762a2ea56e8860b9f67c14' => 
    array (
      0 => 'C:\\wamp64\\www\\tienda\\modules\\ht_staticblocks\\views\\templates\\hook\\ht_staticblocks_hometop1.tpl',
      1 => 1603413172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f92312ba51e58_19694975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15900207675f92312ba126e0_31055655';
?>

<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
	<?php if (isset($_smarty_tpl->tpl_vars['block']->value['content'])) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
