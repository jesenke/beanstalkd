<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit323f92103933223daef34f409c44780f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework/Test',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit323f92103933223daef34f409c44780f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit323f92103933223daef34f409c44780f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
