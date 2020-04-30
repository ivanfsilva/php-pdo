<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10e716f2fb814291c8fb2028f05ff1ff
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10e716f2fb814291c8fb2028f05ff1ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10e716f2fb814291c8fb2028f05ff1ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
