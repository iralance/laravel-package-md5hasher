<?php

/**
 * Created by PhpStorm.
 * User: qianlei
 * Date: 2017/1/22
 * Time: 下午4:13
 */
use PHPUnit\Framework\TestCase;

class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \Iralance\Hasher\MD5Hasher();
    }

    /**
     * @return mixed
     */
    public function testMD5HasherMake()
    {
        $password = md5('123456');
        
        $password1 = $this->hasher->make('123456');
        $this->assertEquals($password,$password1);
    }
}