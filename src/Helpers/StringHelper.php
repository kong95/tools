<?php


namespace Kong95\Helpers;


class StringHelper
{


    /**
     * 字符串转换大驼峰
     * @demo  'hello word' => 'HelloWord'
     * @param $str
     * @param bool $ucfirst
     * @return mixed|string
     */
    public static function  convertUnderline(  $str  ,  $ucfirst  = true)
    {
        $str  = ucwords( str_replace ( '_' ,  ' ' ,  $str ));
        $str  =  str_replace ( ' ' , '' ,lcfirst( $str ));
        return  $ucfirst  ? ucfirst( $str ) :  $str ;
    }

    /**
     * UUID.
     * @return string
     */
    public static function uuid(): string
    {
        $chars = md5(uniqid(mt_rand(0, mt_getrandmax()), true));
        $uuid = substr($chars, 0, 8) . '-';
        $uuid .= substr($chars, 8, 4) . '-';
        $uuid .= substr($chars, 12, 4) . '-';
        $uuid .= substr($chars, 16, 4) . '-';
        $uuid .= substr($chars, 20, 12);
        return $uuid;
    }

    /**
     * 简单编号.
     * 例如：2653 9689 3739 0570.
     * @return string
     */
    public static function simpleCode(): string
    {
        return join('', array_map(function ($item) {
            return substr($item + 1, -1);
        }, str_split(str_replace('.', '', array_sum(
                explode(' ', microtime())
            )) . mt_rand(10, 99))));
    }
}