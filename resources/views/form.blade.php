<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
    <form action="welcome2.html" method="POST">
        <label for="fname">First Name:</label><br>
        <br>
            <input type="text" placeholder="Nama user" id="fname"><br>
        <br>
        <label for="lname">Last Name:</label><br>
        <br>
            <input type="text" placeholder="Nama user" id="lname"><br>
        <br>
        <label for="gender">Gender:</label><br>
        <br>
            <input type="radio" name="gender" value="Male">Male<br>
            <input type="radio" name="gender" value="Female">Female<br>
            <input type="radio" name="gender" value="Other">Other<br>
        <br>
        <label for="nationality">Nationality:</label><br>
        <br>
        <select>
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select><br>
        <br>
        <label>Language Spoken:</label><br>
        <br>
            <input type="checkbox" name="language" value="Bahasa">Bahasa Indonesia<br>
            <input type="checkbox" name="language" value="English">English<br>
            <input type="checkbox" name="language" value="Other">Other<br>
        <br>
        <label for="bio">Bio:</label><br>
        <br>
        <textarea cols="40" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>