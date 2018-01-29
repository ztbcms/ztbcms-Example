<?php

/**
 * author: Jayin <tonjayin@gmail.com>
 */

namespace Example\Controller;

use Common\Controller\AdminBase;

/**
 * 随机生成样例
 */
class RandomController extends AdminBase {

    function test(){

        //系统内置的
        $result = genRandomString(16);

        echo '随机生成16位字符串(大小写+数字)：<br>';
        dump($result);

        echo '<br>';
        echo '自定义16位（随机数字）：<br>';
        $result = $this->genRandomString(16);
        dump($result);

    }



    /**
     * 产生一个指定长度的随机字符串,并返回给用户
     * @param int $len 产生字符串的长度
     * @return string 随机字符串
     */
    function genRandomString($len = 6) {
        $chars = array(
            "1", "2", "3", "4", "5", "6", "7", "8", "9",
        );
        $charsLen = count($chars) - 1;
        // 将数组打乱
        shuffle($chars);
        $output = "";
        for ($i = 0; $i < $len; $i++) {
            $output .= $chars[mt_rand(0, $charsLen)];
        }
        return $output;
    }

}