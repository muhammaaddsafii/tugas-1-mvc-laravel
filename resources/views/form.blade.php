<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Challenge - Form</title>
</head>
<body>
    <form action="{{url('/welcome2')}}">
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    
    <p>First name:</p>
    <input type="text" name="first-name" value="">
    <p>Last name:</p>
    <input type="text" name="last-name" value="">
    
    <p>Gender:</p>
    <input type="radio" name="gender" value="male">Male<br>
    <input type="radio" name="gender" value="female">Female<br>
    <input type="radio" name="gender" value="other">Other<br>
    
    <p>Nationality:</p>
    <select name="nationality">
        <option value="indonesian">Indonesian</option>
        <option value="singaporean">Singaporean</option>
        <option value="malaysian">Malaysian</option>
        <option value="australian">Australian</option>
    </select>

    <p>Languange Spoken:</p>
    <input type="checkbox" name="language" value="indonesia">Bahasa Indonesia<br>
    <input type="checkbox" name="language" value="english">English<br>
    <input type="checkbox" name="language" value="other">Other<br>

    <p>Bio:</p>
    <textarea cols="40" rows="10"></textarea><br>

    <input type="submit" value="Sign Up">
</form>
</body>
</html>