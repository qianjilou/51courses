<?php
namespace framework\core;
/*
 * 工厂类，功能是根据用户传递的模型类，返回单例的模型对象
 */
class Factory
{
    //定义公共的静态的方法
    //参数：模型类名
    public static function M($modelName)
    {
        //判断模型中是否含有Model
        if(substr($modelName,-5)!='Model'){
            $modelName .= 'Model';
        }
        //判断是否附带命名空间
        if(!strchr($modelName, '\\')){
            //拼接命名空间
            $modelName = MODULE.'\model\\'.$modelName;
        }
        static $model_list = array();
        
        if(!isset($model_list[$modelName])){           
            $model_list[$modelName] = new $modelName;
        }
        return $model_list[$modelName];
    }
}
