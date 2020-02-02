<?php

require_once 'vendor/autoload.php';
use Src\Controller\Structure;
use Src\Model\Model;


$structure = new Structure();
$CmsHome   = new Model();
$structure->setStructure();
echo $structure->getHeader();

echo $CmsHome->getCmsHome(62);

echo $structure->getFooter();