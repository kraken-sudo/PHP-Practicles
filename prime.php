<!Doctype html>
<html>
  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet1.css" rel="stylesheet" />
  </head>

  <body>

    <?php

    function prime($x)
    {

    }

    function solution(){
    if(isset($_POST['submit'])){
      $n = $_POST['num'];
      $flag = 0;  // 0 is false

      for ($i = 2; $i < $n; $i++)
      {
       if($n%$i==0)
         break;
       else
         continue;
      }

      if($i==$n)
        $flag = 1;
      else
        $flag = 0;

      if($flag == 0)
        $message = "Oops!! Given number i.e. " . $n . " is not Prime.";
      else
        $message = "Yeah!! Given number i.e. " . $n . " is Prime.";


      echo "<script type='text/javascript'>
        alert('". $message ."');
      </script>";
    }
  }
    ?>
<pre>
    <header class="text-center">    <h1>Check for Prime</h1>    </header>
    <form action="" method="POST" class="form">
      <?= solution(); ?>
      <h3>Enter the number: </h3>
      <div class="form-group">
        <center>
<input type="number" name="num" class="inputBox" placeholder="Your Number" />
        </center>
<button type="submit" name="submit">Check</button>
      </div>
    </form>
  </pre>
  </body>
</html>