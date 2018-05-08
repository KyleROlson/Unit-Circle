<html>
<head>
    <link rel="manifest" href="manifest.json">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    
    <title>Unit Circle</title>
</head>    
    <body>
       <header><a href="index.php"><img src="images/arrow.png"></a><div id="timer"><span id="points">0 pts&nbsp;&nbsp;&nbsp;&nbsp;</span><span id="minutes"></span>:<span id="seconds"></span></div></header>
          
          <!--Question One-->
           <div id="question">
            <center><img src="images/degrees/60.png"><br><br><br><br>
           <div class="choice" id="correctAnswer" onclick="correct(this);"><br>&#960;/3</div>
           <div class="choice" id="wrongAnswer" onclick="incorrect(this);"><br>&#960;/6</div>
           <br><br>
           <div class="choice" id="wrongAnswer" onclick="incorrect(this);"><br>2&#960;/3</div>
           <div class="choice" id="wrongAnswer" onclick="incorrect(this);"><br>3&#960;/2</div>
           </center>
           </div>
           <h1 onclick="nextQuestion();">--></h1>
           
           
           <script type="text/javascript">
    
         var sec = 0;
         var pointValue = 0;
    function pad ( val ) { return val > 9 ? val : "0" + val; }
    setInterval( function(){
        document.getElementById("seconds").innerHTML=pad(++sec%60);
        document.getElementById("minutes").innerHTML=pad(parseInt(sec/60,10));
    }, 1000);
    
        function correct(element){
        element.style.backgroundImage = "url('images/blue.png')";
        pointValue = pointValue + 10;
        document.getElementById("points").innerHTML=(parseInt(pointValue)+"pts&nbsp;&nbsp;&nbsp;&nbsp;");
        
    }
    function incorrect(element){
        element.style.backgroundImage = "url('images/red.png')";
        
    }
    function nextQuestion(){
     document.getElementById("question").innerHTML="<center><img src='images/degrees/60.png'><br><br><br><br> <div class='choice' id='correctAnswer' onclick='correct(this);'><br>&#960;/365</div> <div class='choice' id='wrongAnswer' onclick='incorrect(this);'><br>&#960;/6</div><br><br><div class='choice' id='wrongAnswer' onclick='incorrect(this);'><br>2&#960;/3</div><div class='choice' id='wrongAnswer' onclick='incorrect(this);'><br>3&#960;/2</div></center>"; 
    }
    </script>
       </body>
</html>