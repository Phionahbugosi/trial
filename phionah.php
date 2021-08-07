
<html>
    <head>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body background-color="yellow";>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-6 col-xl-6">
                <div class="card card-body shadow">
    <form method="post">
        <input type="text" name="num1" placeholder="first number" class="form-control">
        <br></br>
        <input type="text" name="num2" placeholder="last number" class="form-control"> 
        <br><br/>
        <input type="submit" name="submit" value="submit">
        <br><br/>
</form>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php 

if(isset($_POST['submit'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $sum=0;
   for ($a=$num1;$a<=$num2;$a++){
        $sum=$sum+$a;
        echo $a ."<br>";
    
        
    }

    echo "the sum is :" .$sum ."<br>";
    

}
    

        ?>
</body>
        </html>