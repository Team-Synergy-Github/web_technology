<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deep Blue</title>
    <link rel="stylesheet" href="style.css">
    
    
    

</head>

<body>

    <script type="text/javascript">
            
            var i = 1;
            
            function replaceImage(e) {

                var image1= document.getElementById('carl');
                var image2= document.getElementById('platel');
                var image3= document.getElementById('textl');
            
                image1.src = "car/car"+i+".jpg";
                image2.src = "car/np"+i+".jpg";  
                image3.src = "car/"+i+".png";

                i++;

                if (i == 12){
                    i--;
                }
                
                //document.getElementsByClassName("number").innerHTML = '';
                //document.getElementsById("number").innerHTML="123";


                //document.getElementsByClassName("bumble").innerHTML = "Hello World!";
                 

            }

    </script>



        <div class="parent">
            <div class="div1">
                <img src="deepblue.png" id="dlogo">
            </div>

        
            <div class="div3">
                <img src="team6.png" id="tlogo">
            </div>

            <div class="div2">
                <img src="kklogo.png" id="klogo">
            </div>
        
        </div>

            
        <div class="frame">
            
            <div class="cframev">
            
            
                <h2>VEHICLE IMAGE</h2>

                <div class="carframe">
                    <img src="car.png" id="clogo">
                    <img src="car/car1.jpg" id="carl">

                </div>

            </div>
                
            <div class="plateFrame">

                    <h2 class="ptext">NUMBER PLATE</h2>
                    <img src="plateframe.png" id="plogo">

                    <img src="car/np1.jpg" id="platel">
                    


                    <h2 class="ntext">CAR NUMBER</h2>
                     
                    <img src="numframe.png" id="nlogo">
                    <img src="car/1.png" id="textl">
                    <p id="bumble"> Sameer</p> 

            </div>

            

        </div>

        <a href='#' onClick='setInterval(replaceImage,1000);' title='Reload image'>Replace Image</a>
</body>
</html>
