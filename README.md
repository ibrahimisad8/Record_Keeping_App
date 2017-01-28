# Table Of Contents

* [Team Members](#team-members)
* [Project Title And Description](#project-title-and-description)
* [Software Functional And Non-Functional Requirements](#software-non-functional-and-functional-requirements)
* [Use Cases](#use-cases)
* [Database Modeling](#database-modeling)
* [Class Diagram](#class-diagram)
* [ERD Diagram](#ERD-diagram)

# Team Members
* "Abokor Djama OMAR". Username: Abokor-AJ. Email: <abodjama@gmail.com>
* "Ibrahim Isa". Username: ibrahimisa.d8. Email: <ibrahimisa@gmail.com>

# Project Title And Description

AKIHA ACCOUNTING SOFTWARE.
This is a record keeping app. It's meant to hold data after the employees finish the day.

# Software Functional And Non-Functional Requirements
* Interface Requirements
```
There should be 4 different types of users.

- SuperAdmins whose job is to oversee the operations of the employees on the system
and has total power on the system.
- Admins whose job is to enable certain employees to do certain tasks
- Chief Cashier whose job is to allocate opening balance (e.g seed money) every morning
to Tellers for them to work with for the day.
- Tellers whose job is to send remittance (money) to people or pay people in case
they received money from their families or friends.
```
```
Users should be registered by the SuperAdmins in the admin panels
```
```
The system starts with a login screen for already registered users to login.
```

* Business Requirements
```
The business day starts with the Chief Cashier sending the opening balance to each Teller
both in US Dollars (USD) and Franc Djibouti (DJF)
```
```
Tellers must receive a notification on their profiles to approve the reception.
```
```
- This is for the CASH IN (Remittance Received)

After the day is finished, Tellers must fill up the remittance form and type in
how much in both US Dollars and Franc Djibouti they have collected the whole day in Cash (USD or DJF).
Then fill in the Cheques form (USD or DJF).
Then fill in the Stamps form (this one is always in DJF).
All in their respective forms.
```
```
- This is for the CASH OUT (Payment Made To Customers)

After the day is finished, Tellers must fill up the payment form and type in
how much in both US Dollars and Franc Djibouti they have paid the customers the
whole day in Cash (USD or DJF).
Then fill in the Refund form (USD or DJF).
Then fill in the Loan form (USD or DJF).
Then fill in the Expenses form (always in DJF).
Then fill in the Transfer Funds form (USD or DJF).

- Sometimes employees can transfer funds to each other. Like Tellers to Teller
and Tellers to Chief Cashiers and Chief Cashiers to Chief Cashiers
```
```
- REPORTS

All forms must have a report to summarize it and An overall report, printed by
tellers to show what they have done for the day.
```
