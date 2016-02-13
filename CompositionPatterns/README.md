Aim:
Looking at encapsulating code through compostion

Notes:
Encapsulation or 'hiding' of implementation decouples code 
and makes it easier to replace invidividual parts of the system 
without having to update the system as a whole.

Here we use interfaces to creat a contract with the encapsulated 
classes to create a standard API.

Examples:

***Client1
A single loanDetails class has a contract to implement 
getDetails($loanType), the implementation changes depending 
on the class that calls it.

Details:
- 2 classes of loan; 'ShortTermLoan' & 'LongTermLoan'
- both classes have a 'loanDetails' property.
- 'loanDetails' is an injected class that implements 'ILoanDetails'
- each class of loan therefore knows that a contract exists
  with 'ILoanDeatils; such as it's 'loanDetails' property will have 
  a getDetails() method.
- the loan class has no idea of the implementation of getDetails(), 
  however it passes a reference to itself so that the 'LoanDetails' 
  class will know what getDetails() should return.

***Client2
Instead of putting the 'decision' of how to implement getDetails() 
into a single loanDetails class use a factory to inject the appropriate 
'loanDetails' class.

Details:
- 2 classes of loan; 'ShortTermLoan' & 'LongTermLoan'.
- Both classes have a 'loanDetails' property.
- A factory class is used to inject a 'ShortTermDetails' class into 
  'ShortTermLoan' or a 'LongTermDetails' class into 'LongTermLoan'.
- Both 'ShortTermDetails' & 'LongTermDetails' implement 'ILoanDetailsBetter'
  therefore the loan classes know that a contract exists with their 
  'loanDetails' property to implement a getDetails() method.

RUN THE CODE
Client1.php
  - ensure that ShortTermLoan.php & LongTermLoan.php have 'use with 
    client 1' constructor uncommented
  - in a console run: php Client1.php

Client2.php
  - ensure that ShortTermLoan.php & LongTermLoan.php have 'Uncommment 
    for use with Client 2' constructor uncommented
  - in a console run: php Client2.php
