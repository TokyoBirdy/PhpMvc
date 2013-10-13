<?php

//
// PHASE: BOOTSTRAP
//
define('VARG_INSTALL_PATH',dirname(__FILE__));
define('VARG_SITE_PATH',VARG_INSTALL_PATH.'/site');

require(VARG_INSTALL_PATH.'/src/CVarg/bootstrap.php');

$va = CVarg::Instance();
//
// PHASE: FRONTCONTROLLER ROUTE
//
$va->FrontControllerRoute();




//
// PHASE: THEME ENGINE RENDER
//

$va->ThemeEngineRender();























