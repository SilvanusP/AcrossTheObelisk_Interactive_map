<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7e758fad8b45ab36090882fbb235cf3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Silvanusp\\AtoMap\\' => 17,
        ),
        'J' => 
        array (
            'JMGQ\\AStar\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Silvanusp\\AtoMap\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'JMGQ\\AStar\\' => 
        array (
            0 => __DIR__ . '/..' . '/jmgq/a-star/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7e758fad8b45ab36090882fbb235cf3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7e758fad8b45ab36090882fbb235cf3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7e758fad8b45ab36090882fbb235cf3::$classMap;

        }, null, ClassLoader::class);
    }
}
