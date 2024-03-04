<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita030873c34b5a076cfa0119ca8ab5fc9
{
    public static $files = array (
        '82ffb4d71edfb5c66d1e2ffd9d40efc5' => __DIR__ . '/../..' . '/app/Core/config.php',
        '3d01d43237d510fd8ad532f47e2c0521' => __DIR__ . '/../..' . '/app/Core/functions.php',
    );

    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/app/Core/App.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controller' => __DIR__ . '/../..' . '/app/Core/Controller.php',
        'Database' => __DIR__ . '/../..' . '/app/Core/Database.php',
        'Model' => __DIR__ . '/../..' . '/app/Core/Model.php',
        'Request' => __DIR__ . '/../..' . '/app/Core/Request.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita030873c34b5a076cfa0119ca8ab5fc9::$classMap;

        }, null, ClassLoader::class);
    }
}