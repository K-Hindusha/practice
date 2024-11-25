<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        h1 {
            text-align: center;
        }
        .menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        .menu a {
            display: block;
            text-decoration: none;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Banking Application</h1>
    <div class="menu">
        <a href="displayCustomers.php">Display Customers</a>
        <a href="insertCustomer.php">Insert Customer</a>
        <a href="displayAccounts.php">Display Accounts</a>
        <a href="insertAccount.php">Insert Account</a>
    </div>
</body>
</html>
