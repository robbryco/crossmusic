<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fe9ff5f6ebb074d9c0b4472cbff5d9b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fe9ff5f6ebb074d9c0b4472cbff5d9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fe9ff5f6ebb074d9c0b4472cbff5d9b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
