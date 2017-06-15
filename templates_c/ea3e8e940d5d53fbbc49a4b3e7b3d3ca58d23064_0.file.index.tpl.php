<?php
/* Smarty version 3.1.30, created on 2017-06-15 10:47:32
  from "C:\xampp\htdocs\crudy\template\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594249a4dd2079_02506275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea3e8e940d5d53fbbc49a4b3e7b3d3ca58d23064' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crudy\\template\\index.tpl',
      1 => 1497516405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594249a4dd2079_02506275 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>





  <table>
    <tr>
      <th>id</th>
      <th>titel</th>
      <th>tekst</th>
      <th>datum</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['idblog'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['titel'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['tekst'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['blog']->value['datum'];?>
</td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>

</body>
</html>
<?php }
}
