<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b45a52fe9a071318ba192b2f2e4750f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b45a52fe9a071318ba192b2f2e4750f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b45a52fe9a071318ba192b2f2e4750f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b45a52fe9a071318ba192b2f2e4750f::$classMap;

        }, null, ClassLoader::class);
    }
}
