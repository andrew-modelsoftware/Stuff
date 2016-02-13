<?php

require_once('bootstrap.php');

$loanDetails = new LoanDetails();

$shortTerm = new ShortTermLoan($loanDetails);
$longTerm = new LongTermLoan($loanDetails);

echo $shortTerm->yoGetMeDetails();
echo "\n";
echo $longTerm->iSayOldBoyWhatAreTheDetails();

