<?php

/**
 * Created by PhpStorm.
 * User: qianlei
 * Date: 2017/1/22
 * Time: 下午3:05
 */
namespace Iralance\Hasher;

class MD5Hasher
{
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt'])?$options['salt']:'';
        return hash('md5', $value.$salt);
    }

    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt'])?$options['salt']:'';
        return hash('md5', $value.$salt)===$hashValue;
    }

}