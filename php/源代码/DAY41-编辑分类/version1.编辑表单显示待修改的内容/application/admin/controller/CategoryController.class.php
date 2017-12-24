<?php
/*
 * 该模块负责分类内容的管理
 */
namespace admin\controller;
use framework\core\Controller;
use framework\tools\Upload;
use framework\tools\Thumb;
use framework\core\Factory;

class CategoryController extends Controller
{
    //1.显示分类列表
    public function indexAction()
    {
        //先查询分类的信息
        $model = Factory::M('Category');
        $cat_list = $model -> find();
        $cat_list = $model -> getTreeCategory($cat_list);
        
        //分配到表单中
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('category/index.html');
    }
    //2.显示添加内容的表单
    public function addAction()
    {
        //先查询分类的信息
        $model = Factory::M('Category');
        $cat_list = $model -> find();
        $cat_list = $model -> getTreeCategory($cat_list);
        
        //分配到表单中
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('category/add.html');
    }
    //3. 接收表单的内容并入库
    public function addHandleAction()
    {
        //先上传图标，返回图标地址，将地址入库
        $upload = new Upload();
        $upload -> upload_path = UPLOADS_PATH.'category/';
        $upload_file = $upload -> doUpload($_FILES['cat_logo']);
        
        $thumb = new Thumb(UPLOADS_PATH.'category/'.$upload_file);
        $thumb -> thumb_path = THUMB_PATH.'category/';
        $thumb_file = $thumb -> makeThumb(50, 50);
        
        $_POST['cat_logo'] = $thumb_file;
        $model = Factory::M('Category');
        $result = $model -> insert($_POST);
        if($result){
           $this->jump('?m=admin&c=category&a=indexAction', '添加成功'); 
        }else{
            $this->jump('?m=admin&c=category&a=addAction', '添加失败');
        }
    }
    //4. 显示编辑的表单页面
    public function editAction()
    {
        //先接收修改的分类的序号
        $cat_id = $_GET['id'];
        //根据id查询分类的信息
        $where = array('cat_id'=>$cat_id);
        $model = Factory::M('Category');
        $result = $model -> find($where);
        //根据cat_id查询，虽然返回的是二维数组(fetchAll)，但是二维数组只有一个元素
        
        //再查询所有的分类信息
        $model = Factory::M('Category');
        $cat_list = $model -> find();
        $cat_list = $model -> getTreeCategory($cat_list);
        
        $this->smarty->assign('cat',$result[0]);
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('category/edit.html');
    }
    //5. 接收编辑表单的数据并更新
    public function updateAction()
    {
        echo '<pre>';
        var_dump($_POST);
    }
}