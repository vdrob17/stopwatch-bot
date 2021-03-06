<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit24d4af8a60904341ac3e309e90e10f72
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

        spl_autoload_register(array('ComposerAutoloaderInit24d4af8a60904341ac3e309e90e10f72', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit24d4af8a60904341ac3e309e90e10f72', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit24d4af8a60904341ac3e309e90e10f72::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
