<?php


namespace Kong95\Helpers;


class ArrayHelper
{


    /**
     * 二维数组递归树形
     * @param array $data 原数组
     * @param int $parent_id 本级父id
     * @param string $parent_key 父id字段名
     * @param string $son_key 赋值子级命名
     * @return array
     */
    public static function tree(
        $data=[],
        $parent_id=0,
        $parent_key='parent_id',
        $son_key='children'
    ): array{
        $tree=[];
        foreach ($data as $value){
            if ($value[$parent_key]==$parent_id){
                if($tmp = self::tree($data,$value['id'],$parent_key,$son_key)){
                    $value[$son_key]=$tmp;
                }
                $tree[]=$value;
            }
        }
        return $tree;
    }


    /**
     * 获取数组中重复值.
     * @param array $array 数组.
     * @return array
     */
    public static function multiple(array $array): array
    {
        $array = array_map('serialize', $array);
        $result = array_diff_assoc($array, array_unique($array));
        return array_map('unserialize', $result);
    }
}