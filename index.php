<!DOCTYPE html>
<html lang="en">

<head>
    <title>SupplySync Inventory Management System</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="user/css/bootstrap.min.css" />
    <link rel="stylesheet" href="user/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="user/css/matrix-login.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background-image: url('https://st.depositphotos.com/9999814/52407/i/450/depositphotos_524071248-stock-photo-smart-warehouse-management-system-with.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }

        h1 {
            color: cyan;
            text-align: center;
            margin-bottom: 20px;
            font-size: 3.5em;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        #wrapper {
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            z-index: 1;
        }

        .panel {
            display: inline-block;
            vertical-align: top;
            border-radius: 10px;
            height: 100px;
            width: 200px;
            font-size: large;
            color: white;
            padding-top: 35px;
            cursor: pointer;
            margin: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .panel:hover {
            background-color: #444444;
            transform: scale(1.05);
        }

        .user-panel {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .admin-panel {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
    <h1>SupplySync Inventory Management System</h1>
    <div id="wrapper">
        <div class="panel user-panel" onclick="window.location='user/index.php';">
            USER PANEL
        </div>
        <div class="panel admin-panel" onclick="window.location='admin/index.php';">
            ADMIN PANEL
        </div>
    </div>
</body>

</html>
