<?php

class ShortTermLoan {
	
	private $loanDetails;

	//use with Client 1
	public function __construct(ILoanDetails $loanDetails){
		$this->loanDetails = $loanDetails;
	}

	//Uncommment for use with Client 2
	/*public function __construct(ILoanDetailsBetter $loanDetails){
		$this->loanDetails = $loanDetails;
	}*/

	public function yoGetMeDetails(){
		return $this->loanDetails->getDetails($this);
	}
}