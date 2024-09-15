<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3d28c0e2005c292e738eba1ce2e42a57
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit3d28c0e2005c292e738eba1ce2e42a57', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3d28c0e2005c292e738eba1ce2e42a57', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3d28c0e2005c292e738eba1ce2e42a57::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
