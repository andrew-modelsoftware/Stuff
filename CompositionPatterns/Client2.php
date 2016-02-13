<?php

require_once('bootstrap.php');

$loanFactory = new LoanFactory();

$shortTerm = $loanFactory->build('ShortTerm');
$longTerm = $loanFactory->build('LongTerm');

echo $shortTerm->yoGetMeDetails();
echo "\n";
echo $longTerm->iSayOldBoyWhatAreTheDetails();