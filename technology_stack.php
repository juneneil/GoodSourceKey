<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Grid Layout</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /** {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;  
            background-color: #43345d;
            min-height: 100vh;
        }*/

        .container_tech {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Responsive grid */
            gap: 20px; /* Space between grid items */
            padding: 30px;  
            width: 90%; /* Use percentage for responsiveness */
            max-width: 1100px; /* Limit max width */
        }

        .container_tech .card {
            position: relative;
            background-color: #fff;
            height: 215px;  
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            transition: 0.3s ease-in-out;
            border-radius: 15px;
        }

        .container_tech .card:hover {
            height: 300px;    
        }

        .container_tech .card .image {
            position: relative;
            width: 100%; /* Use full width of card */
            height: auto; /* Adjust height */
            max-height: 150px; /* Limit image height */
            top: -10%; /* Slightly adjust position */
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .container_tech .card .image img {
            width: 100%; /* Full width */
            height: auto; /* Maintain aspect ratio */
            border-radius: 15px;
        }

        .container_tech .card .content {
            position: relative;
            top: -30px; /* Adjust position */
            padding: 10px 15px;
            color: #111;
            text-align: center;
            visibility: hidden;
            opacity: 0;
            transition: 0.3s ease-in-out;
        }

        .container_tech .card:hover .content {
            margin-top: 100px;
            visibility: visible;
            opacity: 1;
            transition-delay: 0.2s;
        }
    </style>
</head>
<body>
    <div class="container_tech">
        <div class="card">
            <div class="image">
                <img src="https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg" alt="Python">
            </div>
            <div class="content">
                <h3>Python</h3>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img src="https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg" alt="Java Script">
            </div>
            <div class="content">
                <h3>JavaScript</h3>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img src="https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg" alt="PHP">
            </div>
            <div class="content">
                <h3>PHP</h3>
            </div>
        </div>
    </div>
</body>
</html>
