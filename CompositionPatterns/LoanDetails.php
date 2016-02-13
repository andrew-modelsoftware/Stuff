<?php

class LoanDetails implements ILoanDetails{

	public function getDetails($loanType){
		$details = NULL;

		if(is_a($loanType, 'ShortTermLoan')){
			$details = 'short';
		}elseif(is_a($loanType, 'LongTermLoan')){
			$details = 'long';
		}

		return $details;
	}
}