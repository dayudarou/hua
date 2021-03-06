<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b0099bfcdef18821006eadc81aa8acd
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hello\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hello\\' => 
        array (
            0 => __DIR__ . '/..' . '/dayu',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b0099bfcdef18821006eadc81aa8acd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b0099bfcdef18821006eadc81aa8acd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b0099bfcdef18821006eadc81aa8acd::$classMap;

        }, null, ClassLoader::class);
    }
}
