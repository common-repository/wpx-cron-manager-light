<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit928646ce7c0d872c81399f234fa6a4f7
{
    public static $files = array (
        '62b15e16680c158ea02516f33e41c943' => __DIR__ . '/..' . '/wpbones/wpbones/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'W' => 
        array (
            'WPXCronManagerLight\\WPBones\\' => 28,
            'WPXCronManagerLight\\PureCSSSwitch\\' => 34,
            'WPXCronManagerLight\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'WPXCronManagerLight\\WPBones\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/wpbones/src',
        ),
        'WPXCronManagerLight\\PureCSSSwitch\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/pure-css-switch/src',
        ),
        'WPXCronManagerLight\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plugin',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit928646ce7c0d872c81399f234fa6a4f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit928646ce7c0d872c81399f234fa6a4f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit928646ce7c0d872c81399f234fa6a4f7::$classMap;

        }, null, ClassLoader::class);
    }
}
