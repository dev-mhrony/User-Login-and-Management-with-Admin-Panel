<!--- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
--><?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37997ec32bea5796850f40f6edc56ab8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit37997ec32bea5796850f40f6edc56ab8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37997ec32bea5796850f40f6edc56ab8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}