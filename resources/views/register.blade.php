<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/index" method="post">
        @csrf
            <label>First name :</label> <br><br>
        <input type="text" name="nama1">
        <br><br>
        <label>Last name :</label> <br><br>
        <input type="text" name="nama2">
        <br><br>
        <label>Gender : </label> <br><br>
        <input type="radio" name="gender"> Male <br>
        <input type="radio" name="gender"> Female <br>
        <input type="radio" name="gender"> Other <br>
        <br><br>
        <label>Nationality : </label> <br><br>
        <select name="Nationality">
            <option value="1">Indonesia</option>
            <option value="2">Malaysia</option>
            <option value="3">English</option>
        </select>
        <br><br>
        <label>Language Spoken : </label> <br><br>
        <input type="checkbox">Bahasa Indonesia <br>
        <input type="checkbox">English <br>
        <input type="checkbox">Other <br>
        <br><br>
        <label>Bio :</label><br>
        <textarea name="bio" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="sign up">
    </form>
</body>
</html>