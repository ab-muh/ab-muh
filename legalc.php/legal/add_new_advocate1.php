<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Sample Form</title>
   </head>
   <body><?php include 'header.php' ?>
      <center>
         <h1>Add New Advocate </h1>
         <form action="insert.php" method="post">
            <p>
               <label for="firstName">First Name:</label>
               <input type="text" name="name" id="firstName">
            </p> 
            <p>
               <label for="Gender">Gender:</label>
               <input type="text" name="gender" id="Gender">
            </p>
            <p>
               <label for="Address">Address:</label>
               <input type="text" name="address" id="Address">
            </p> 
            <input type="submit" value="Submit">
         </form>
      </center>
   </body>
</html>
