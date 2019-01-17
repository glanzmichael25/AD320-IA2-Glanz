<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<header>
    <h1>Individual Assignment 2: PHP Forms</h1>
</header>
<body>
    <form>
    Name: <?php echo $_GET["name"]; ?><br>
    Email: <?php echo $_GET["email"]; ?><br>
    Phone: <?php echo $_GET["number"]; ?><br>
    State: <?php echo $_GET["state"]; ?>   
    </form>
</body>
</html>