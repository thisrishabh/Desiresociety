<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hero{
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: rgb(161, 228, 205);
          
        }

        .hero h1{
            font-size: 40px;
        }
        .hero p{
            font-size: 20px;
        }

        #para1{
            animation-name: hero;
            animation-iteration-count: infinite;
            animation-delay: 3s;
            animation-duration: 5s
        }
        @keyframes hero{
            from{
                color: transparent;
            }
            to {
                color: rgb(10, 0, 53);
            }
        }
        #para2{
            animation-name: hero1;
            animation-iteration-count: infinite;
            animation-delay: 3s;
            animation-duration: 5s
        }
        @keyframes hero1{
            from{
                color: transparent;
                margin-left: 50%;
            }
            to {
                color: rgb(10, 0, 53);
                margin-left: 0px;
            }
        }


    </style>
</head>
<body>
    <div class="hero">
      <h1 id="para1">SMALL EFFORT MAKE BIG CHANGE</h1>
      <p id="para2">We are ready for provide better service to make the world happy...</p>
    </div>
    
</body>
</html>