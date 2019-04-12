<!DOCTYPE html>
<html>
<head>
<title>Kontakt</title>
</head>
<body>

<h1>Feedback Formular</h1>
<h2>Anliegen</h2>
<form action="/sendmail.py" method="POST">
        <img src="imagefeedback.png" alt="Trulli" width="512" height="512"><br><br>
        <label for="emailaddress">E-Mail Adresse:<br><br>
                <input type="text" name="emailname" required><br>
        </label>
        <br>Betreff:<br>
        <br><input type="text" name="betreff" required><br>
        <br><label for="Nachricht">Nachricht</label><br>
        <br><textarea id="text" name="text" cols="50" rows="5" placeholder="Nachricht verfassen"></textarea>
        <br><input type="submit" value="Submit" />
</form>
</body>
</html>








