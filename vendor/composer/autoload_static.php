<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9120487d8db72374a2676f0439b4eb29
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wedevs\\Academy\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wedevs\\Academy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9120487d8db72374a2676f0439b4eb29::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9120487d8db72374a2676f0439b4eb29::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9120487d8db72374a2676f0439b4eb29::$classMap;

        }, null, ClassLoader::class);
    }
}
