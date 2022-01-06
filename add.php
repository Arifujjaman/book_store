<!DOCTYPE html>
<html>
  
<body>
    
<div class="form-container">
    <form action="save.php" method="get">
        <label for="fname">ID:</label><br>
        <input type="number" id="id" name="id"><br>
        <label for="fname">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="fname">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <p>Available:</p>
        <input type="radio" id="available" name="available" value="Yes">
        <label for="html">Available</label><br>
        <input type="radio" id="not available" name="available" value="No">
        <label for="css">Not Available</label><br>

        <label for="lname"> Pages:</label><br>
        <input type="text" id="pages" name="pages"><br>

        <label for="lname"> ISBN:</label><br>
        <input type="text" id="isbn" name="isbn"><br>

        <input type="submit" value="Submit">
    </form>

</div>
</body>
  
</html>