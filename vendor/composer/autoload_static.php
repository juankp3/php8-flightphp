<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f35a29bf6185cf6ad047d6684394596
{
    public static $files = array (
        '4cdafd4a5191caf078235e7dd119fdaf' => __DIR__ . '/..' . '/flightphp/core/flight/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Juankuga\\Php8\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Juankuga\\Php8\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f35a29bf6185cf6ad047d6684394596::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f35a29bf6185cf6ad047d6684394596::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f35a29bf6185cf6ad047d6684394596::$classMap;

        }, null, ClassLoader::class);
    }
}
