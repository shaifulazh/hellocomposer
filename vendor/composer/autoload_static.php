<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2533b1844940506b1cf6a578005276fc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shaifulazh\\HelloComposer\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shaifulazh\\HelloComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2533b1844940506b1cf6a578005276fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2533b1844940506b1cf6a578005276fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2533b1844940506b1cf6a578005276fc::$classMap;

        }, null, ClassLoader::class);
    }
}
