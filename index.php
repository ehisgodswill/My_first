<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3 PHP Tasks (b)> Arrays in PHP</title>
</head>
<body>
    <form method='post' action='user_data.php' >
        <label for="name">
            Name:
            <input type="text" name='name' />
        </label><br>
        <label for="email">
            Email:
            <input type="email" name='email' />
        </label><br>
        <label for="DOB">
            Date of Birth:
            <input type="date" name='DOB'/>
        </label><br>
        <label for="gender">
            Gender:
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </label><br>
        <label for="country">
            Country: 
            <input type="text" name='country' />
        </label><br>
        
        <input type="submit" value='submit'>
    </form>
</body>
</html>