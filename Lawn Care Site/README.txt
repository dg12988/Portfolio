README


Site Created By and Maintained by: Doug Goldberg 2014-2017

This README is to serve as a guide to Doug Goldberg's GitHub Portfolio. Certain information has been redacted
due to this project being used by an active business. 



TABLE OF CONTENTS
---------------------------------------------------#PUBLIC------------------------------------------------------
1* Homepage
2* About
3* Gallery
4* Contact Us
--------------------------------------------------#INTERNAL-----------------------------------------------------
5* Surveys
6* Database Search Utility


To search this document for instructions on the public or internal side of the site press [CTRL + F].
Then type either #PUBLIC or #INTERNAL. Click 'Find Next' until you've reached the desired area.

To search this document for instructions on the individual pages side of the site press [CTRL + F].
Then type the corresponding number above followed by the asterisk (*). An example is, if you wish to search
for the contact page, press [CTRL + F] and type 4*. Click 'Find Next' until you've reached the desired area.



1* Homepage - index.html
	- Main page for the website. Includes Javascript carousel and Facebook plugins


2* About - about.html
	- Information about this Lawn Care Business, Mission Statement.


3* Gallery - gallery.html
 	- Image gallery, Jquery Lightbox plugin.

4* Contact Us - contact.php
	
	- When the form on this page is filled out and submitted, the data is written to the database in the
table Contact DB. 


#INTERNAL --------------------------------------------------------------------------------------------------



5* Surveys - survey.php
	
	- Upon a valid login, the Survey sending page will load. This page allows an administrator to send up to
10 recipients an email with a predefinied customer survey. To view the Customer survey load this url into the
web browser: [REDACTED]/customerSurvey.html. When a customer has completed filling 
out the survey and submits it, the data from the server is stored in the database table Survey DB.

6* Database Search Utility - dbSearch.php

	- This utility allows you to search multiple tables in the database, which allows various querys based 
on the selection. First, choose a table from the dropdown. Then select a query to run on the database. Hit
Submit. The data chosen will populate on the same page.
