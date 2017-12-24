<?php
namespace home\model;
use framework\core\Model;

/*
 * 问题模型类，负责问题数据表的增删改查
 */
class TopicModel extends Model
{
   protected $logic_table = 'topic';
   //查询热门话题
   public function getHotTopics()
   {
       $sql = "DROP VIEW IF EXISTS `ask_hot_topics`;CREATE VIEW ask_hot_topics AS SELECT t.topic_id,t.topic_title,t.topic_pic,count(qt.question_id) AS q_nums FROM ask_topic AS t LEFT JOIN ask_question_topic AS qt ON t.topic_id = qt.topic_id GROUP BY qt.topic_id";
       //执行创建视图
       $this->dao->exec($sql);
       
       //一个sql语句里面不能两个分组，所以我们需要分开写sql语句
       $sql = "SELECT h.*,count(ut.user_id) as user_nums FROM ask_hot_topics AS h LEFT JOIN ask_user_topic AS ut ON h.topic_id=ut.topic_id GROUP BY ut.topic_id ORDER BY h.q_nums DESC LIMIT 3";       
        return $this->dao->fetchAll($sql);
   }
   
}