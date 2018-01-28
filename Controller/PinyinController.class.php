<?php

/**
 * author: Jayin <tonjayin@gmail.com>
 */

namespace Example\Controller;

use Common\Controller\Base;

/**
 * 拼音样例
 */
class PinyinController extends Base {

    function test(){
        $chinese = '你好';

        load('Content/iconvfunc');
        //栏目拼音
        $catname = iconv('utf-8', 'gbk', $chinese);
        $letters = gbk_to_pinyin($catname);

        dump($letters);

        echo join('',$letters);
    }


}