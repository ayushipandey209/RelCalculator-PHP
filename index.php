<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Love Calculator</h1>
        <form id="loveForm">
            <label for="yourName">Your Name:</label>
            <input type="text" id="yourName" name="yourName" required>
            
            <label for="lovedOne">Name of the Person You Love:</label>
            <input type="text" id="lovedOne" name="lovedOne" required>
            
            <button type="submit">Calculate Love</button>
        </form>
        <div id="result"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>
