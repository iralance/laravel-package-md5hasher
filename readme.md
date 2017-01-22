[![Build Status](https://travis-ci.org/iralance/laravel-package-md5hasher.svg?branch=master)](https://travis-ci.org/iralance/laravel-package-md5hasher)

###用法
```
composer require iralance/hasher
```
或者在你的composer.json的require增加
```
"iralance/hasher":"~1.0"
```
下载完毕后，直接配置config/app.php，在providers里添加
```
\Iralance\Hasher\MD5HashServiceProvider::class,
```
使用方法
```
app('md5hash')->make('your secret');
```