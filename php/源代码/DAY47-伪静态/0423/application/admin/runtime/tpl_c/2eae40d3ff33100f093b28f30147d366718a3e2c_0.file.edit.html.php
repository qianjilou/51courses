<?php
/* Smarty version 3.1.30, created on 2017-04-14 16:08:52
  from "D:\tnwamp\apache\htdocs\0414\application\admin\view\category\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f083949666e1_41664583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eae40d3ff33100f093b28f30147d366718a3e2c' => 
    array (
      0 => 'D:\\tnwamp\\apache\\htdocs\\0414\\application\\admin\\view\\category\\edit.html',
      1 => 1492157212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/layout.html' => 1,
  ),
),false)) {
function content_58f083949666e1_41664583 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_627758f08394962005_39019040', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:common/layout.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_627758f08394962005_39019040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="aw-content-wrap">
        <form method="post" id="category_form" 
        action="?m=admin&c=category&a=updateAction" enctype="multipart/form-data">
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <span class="pull-left">编辑分类</span>
                </h3>
            </div>
            <div class="tab-content mod-content">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">分类标题:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <input type="text" placeholder="请输入..." value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
" name="cat_name" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">分类描述:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <input type="text" placeholder="请输入..." value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_desc'];?>
" name="cat_desc" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">分类图标:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <?php if (isset($_smarty_tpl->tpl_vars['cat']->value['cat_logo'])) {?>
                                    	<img alt="" src="<?php echo THUMB_PATH;?>
category/<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_logo'];?>
" 
                                    	style="max-width:50px;max-height:50px">
                                    	<font color="red">哥们，你已经上传了图标，再次上传会覆盖</font>
                                    	<input type="file" name="cat_logo" class="form-control">
                                   	<?php } else { ?>
                                    <input type="file" name="cat_logo" class="form-control">
                                    <?php }?>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">父级分类:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <select class="form-control" name="parent_id">
                                        <option value="0">无</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                        	<option 
                                        	<?php if ($_smarty_tpl->tpl_vars['cat']->value['parent_id'] == $_smarty_tpl->tpl_vars['v']->value['cat_id']) {?>selected<?php }?> 
                                        	value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
">                                        	
                                        		<?php echo preg_replace('!^!m',str_repeat('&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['v']->value['level']),$_smarty_tpl->tpl_vars['v']->value['cat_name']);?>

                                        	</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody><tfoot>
                    <tr>
                        <td>
                            <input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
">
                            <input type="hidden" name="old_cat_logo" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_logo'];?>
">
                            <input type="submit" class="btn btn-primary center-block" value="添加">
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </form>
    </div>


<?php
}
}
/* {/block "content"} */
}
