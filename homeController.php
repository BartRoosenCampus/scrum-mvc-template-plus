<?php
// homeController.php
declare(strict_types = 1);

require_once 'vendor/autoload.php';

use App\Services\TwigService;


$twigService = new TwigService();

// hier wordt de 'tab' parameter overschreven (zie TwigService.php)
// standaard zal deze 'mvc-template' zijn
$twigService->addParameter('tab', 'Basic plus template');
$twigService->addParameter('header', 'Home');
$twigService->renderPage('home/index.twig');