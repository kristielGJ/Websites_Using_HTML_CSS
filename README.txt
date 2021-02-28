Q/A: What I have implemented in my Website.

Gera Jahja, Coursework 2 submission, Web development , April 2020
Website link: https://smcse.city.ac.uk/student/adbc524/index.php

Q:Your website needs to be responsive: 
A:Achieved using Bootstrap

Q:Refference where you got assets/code
A:These are all commented in my code, what i have used and their links

Q:Your website should have content on the theme that you chose
A: A website that allows you to find out about different pieces of a motherboard 
   and take a quiz on the knowledge you have learnt

Q:You create this content and lay it out using HTML.Then you apply CSS to style this content 
A: all web pages have been created using php(for database acess), 
   html(formatting and image mapping),css(layout design), 
   ajax and bootstrap(so that the web page can scale for mobile phones)

Q:Depending on what you proposed in your plan, use Javascript to provide some functionality 
A:A quiz and image Mapping are the main functions

Q:Collecting user details and storing them in the database
A:username, email and password are taken when you sign up and stored in a database
 
Q:In this form, you need to demonstrate that you validate the input from the user
  either using native HTML validation or Javascript (or both). 
A:There is validation for email(the presence of an @ is checked), 
  there is a check that doesnt allow you to sign up if you type two passwords
  incorrectly when you signup, also if your account does not exist when you try
  and login it will display and error message.
  
Q:You should write this data into the database using PHP and MySQL.
A: My website availabe on :https://smcse.city.ac.uk/student/adbc524 uses both php and mysqli
   my database that will receive this data using phpMyAdmin is called users. It has columns that
   correspond to the fields in your form, e.g. username and password.

Q:You need to store the password securely.
A:Before my code writes a password into the database, it uses a hashing algorithm,md5()

Q:You should also display the data from the database in some way
A:“Hello, ***!” message that changes based on the username
