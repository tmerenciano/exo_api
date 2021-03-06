<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f339d5c6aed33e2a77b76594aea3aa8
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tutoAPI\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tutoAPI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f339d5c6aed33e2a77b76594aea3aa8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f339d5c6aed33e2a77b76594aea3aa8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f339d5c6aed33e2a77b76594aea3aa8::$classMap;

        }, null, ClassLoader::class);
    }
}
