<?php
/*
 * 商品模型类，主要操作商品表的操作
 */
class GoodsModel
{    
    
    //增加一个用户
    public function user_add(){        
        $sql = "INSERT INTO user VALUES(null,'admin','admin123')";
        $resulkt = $this->dao -> exec($sql);
        return $resulkt;
    }
    //删除一个用户
    public function user_delete(){        
        $option = array(
            'host' =>   '127.0.0.1',
            'user' =>   'root',
            'pass' =>   'root',
            'dbname' =>   'php_7',
            'port' =>   3306,
            'charset' =>   'utf8',
        );
        $dao = DAOPDO::getSingleton($option);
    }
    //修改一个用户
    public function user_update(){}
    //查询一个用户
    public function user_select(){}
}