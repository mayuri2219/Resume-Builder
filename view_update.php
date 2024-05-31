<!DOCTYPE html>
<html>
<head>
    <title>Basic HTML Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form action="/submit-form" method="post">
        <!-- Text input for Name -->
        <label for="id">id:</label><br>
        <input type="text" id="id" name="id"><br><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <!-- Email input for Email -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

     
        <!-- Submit button -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
