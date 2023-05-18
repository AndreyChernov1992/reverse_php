<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbed9b02248da2cf54c1d5eb0f2185819
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbed9b02248da2cf54c1d5eb0f2185819::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbed9b02248da2cf54c1d5eb0f2185819::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbed9b02248da2cf54c1d5eb0f2185819::$classMap;

        }, null, ClassLoader::class);
    }
}
