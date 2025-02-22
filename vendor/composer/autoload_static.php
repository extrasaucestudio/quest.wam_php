<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d3279b3652866576da19074f33d0d06
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d3279b3652866576da19074f33d0d06::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d3279b3652866576da19074f33d0d06::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d3279b3652866576da19074f33d0d06::$classMap;

        }, null, ClassLoader::class);
    }
}
