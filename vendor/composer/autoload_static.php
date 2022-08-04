<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48ab46d1737564a54256c413ec28b842
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Range\\Test\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Range\\Test\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit48ab46d1737564a54256c413ec28b842::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48ab46d1737564a54256c413ec28b842::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48ab46d1737564a54256c413ec28b842::$classMap;

        }, null, ClassLoader::class);
    }
}