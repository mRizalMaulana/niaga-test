<?php

require 'vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('views');
$twig = new Twig\Environment($loader);

echo $twig->render('index.html', [
    'ver'   => strtotime(date("Y-m-d H:i:s")),
    'phpModules' => [
        'IcePHP',
        'apc',
        'apcu',
        'apm',
        'ares',
        'bcmath',
        'bcompiler',
        'big_int',
        'bitset',
        'bloomy',
        'bz2_filter',
        'clamav',
        'coin_acceptor',
        'crack',
        'dba',
        'http',
        'huffman',
        'idn',
        'igbinary',
        'imagick',
        'imap',
        'inclued',
        'inotify',
        'interbase',
        'intl',
        'ioncube_loader',
        'ioncube_loader_4',
        'jsmin',
        'json',
        'Idap',
        'nd_pdo_mysql',
        'oauth',
        'oci8',
        'odbc',
        'opcache',
        'pdf',
        'pdo',
        'pdo_dblib',
        'pdo_firebird',
        'pdo_mysql',
        'pdo_odbc',
        'pdo_pgsql',
        'pdo_sqlite',
        'pgsql',
        'phalcon',
        'stats',
        'stem',
        'stomp',
        'sohusin',
        'sybase_ct',
        'sysvmsg',
        'sysvsem',
        'sysvshm',
        'tidy',
        'timezonedb',
        'trader',
        'translit',
        'uploadprogress',
        'uri_template',
        'uuid',
    ]
]);