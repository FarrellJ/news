<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6b3bb43e74f13034081041e60da844d5
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit6b3bb43e74f13034081041e60da844d5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit6b3bb43e74f13034081041e60da844d5', 'loadClassLoader'));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        spl_autoload_register(array('ComposerAutoloaderInit6b3bb43e74f13034081041e60da844d5', 'autoload'), true, true);

        $loader->register(true);

        return $loader;
    }

    public static function autoload($class)
    {
        $dir = dirname(dirname(__DIR__)) . '/';
        $prefixes = array('Zend\\Feed\\');
        foreach ($prefixes as $prefix) {
            if (0 !== strpos($class, $prefix)) {
                continue;
            }
            $path = $dir . implode('/', array_slice(explode('\\', $class), 2)).'.php';
            if (!$path = stream_resolve_include_path($path)) {
                return false;
            }
            require $path;

            return true;
        }
    }
}

function composerRequire6b3bb43e74f13034081041e60da844d5($file)
{
    require $file;
}
