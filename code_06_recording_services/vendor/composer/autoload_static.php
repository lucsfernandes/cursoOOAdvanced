<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94530ebf8c981ef261692b3c87a7e2b1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Source',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94530ebf8c981ef261692b3c87a7e2b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94530ebf8c981ef261692b3c87a7e2b1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit94530ebf8c981ef261692b3c87a7e2b1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
