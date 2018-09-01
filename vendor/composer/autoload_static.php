<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef57fda04a0a263e313054486ed1bee7
{
    public static $files = array (
        'a5f882d89ab791a139cd2d37e50cdd80' => __DIR__ . '/..' . '/tgmpa/tgm-plugin-activation/class-tgm-plugin-activation.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SeoThemes\\GenesisStarterTheme\\' => 30,
            'SeoThemes\\Core\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SeoThemes\\GenesisStarterTheme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'SeoThemes\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/seothemes/core/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef57fda04a0a263e313054486ed1bee7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef57fda04a0a263e313054486ed1bee7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
