README

Survey Created By and Maintained by: Doug Goldberg 2017

This README is to serve as a guide to Doug Goldberg's GitHub Portfolio. Certain information has been redacted
due to this project being used by an active business. 

This project was to create a demographic survey. The survey is 10 questions, with a single submit at the end. 
Each question is its own form. To navigate the "pages", swipe left to the next question, swipe right to the
previous question. Since the forms are not submitted until after question 10, going back and forth between questions
does not remove any previous answers. The data is serialized using AJAX, upon submit, and sent to a PHP script which in turn enters
the results in a database table using a MySQL query. 