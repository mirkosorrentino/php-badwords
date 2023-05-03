<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php">
        <!-- paragraph -->
        <label for="paragraph">Write a paragraph</label>
        <input type="text" name="paragraph" id="paragraph">
    
        <!-- word to hide -->
        <label for="badword">Write a word that you want to cancel in your paragraph</label>
        <input type="text" id="badword" name="badword">

        <button type="submit">Send</button>
    </form>
    
</body>
</html>