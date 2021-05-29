# UniversityFinder

Index.php - Contains Php,Ajax,HTML and CSS Code 
            Php -- it is used for redirecting us to another page, creating session, overall processing data 
            Ajax -- It is used for Auto suggest, in this case it will suggest college name by default, if we select another option such as degree or course
            it will show us data as per that, here ajax code will take value from input field and pass it to another page containing php code 
            HTML -- It is used for structuring the page 
            CSS -- I have used boostrap library, It is used for designing
            
Action.php -- This file contains php code for auto suggestion while searching university;
              we will fetch Univeristy Names, Course Names, Degree Names from Mysql Database

Database.php -- It contains the code for connecting to the database.

University.php -- It Contains the code for Fetching all the details Regarding University, when we redirect from index.php to University.php, we will create session
                  and pass University Name to that session variable and in University.php we will use that session variable to fetch the data from mysql by passing 
                  Univeristy Name in SQL query.
                  
