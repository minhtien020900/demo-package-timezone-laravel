<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c1e31f8fd4448baf450473b783c8784
{
    public static $files = array (
        '712963a446e3fc56b3895b4207b82c66' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DemoPackage\\MinhTien\\Timezone\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DemoPackage\\MinhTien\\Timezone\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/minhtien/demo-timezone/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c1e31f8fd4448baf450473b783c8784::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c1e31f8fd4448baf450473b783c8784::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c1e31f8fd4448baf450473b783c8784::$classMap;

        }, null, ClassLoader::class);
    }
}
