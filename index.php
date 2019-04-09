<?php
define("BASEDIR", __DIR__);

include BASEDIR.'/Backend/Loader.php';

spl_autoload_register("\\Backend\\Loader::autoload");

// \Backend\Test::test();

App\Controller\Home\Index::test();
