<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2aec99a2e905f3c9facc5d7adb8f9cef
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpDocumentor\\Reflection\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpDocumentor\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpdocumentor/reflection-common/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2aec99a2e905f3c9facc5d7adb8f9cef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2aec99a2e905f3c9facc5d7adb8f9cef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
