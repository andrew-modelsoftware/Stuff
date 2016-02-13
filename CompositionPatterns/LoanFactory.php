<?php

class LoanFactory {

	public function build($type){

		$loan = NULL;
		if($type == 'ShortTerm'){
			$loan = new ShortTermLoan(new ShortTermDetails());
			$details = $loan->yoGetMeDetails();
		}elseif($type == 'LongTerm'){
			$loan = new LongTermLoan(new LongTermDetails());
			$details = $loan->iSayOldBoyWhatAreTheDetails();
		}

		return $loan;
	}
}