<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d28c0e2005c292e738eba1ce2e42a57
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Teefa\\Prepare\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Teefa\\Prepare\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d28c0e2005c292e738eba1ce2e42a57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d28c0e2005c292e738eba1ce2e42a57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d28c0e2005c292e738eba1ce2e42a57::$classMap;

        }, null, ClassLoader::class);
    }
}
