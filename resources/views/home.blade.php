@extends ('template')


@section('content','home')

@section('body')

<?php
    echo "<br>";
?>
<div class="title">
    <h1>Welcome To Rolling Dice</h1>
</div>
<style>
.button {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}
.title {
  margin: 0;
  position: absolute;
  top: 30%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}
</style>


<div class="container">
   <div class="button">
    <button type="button" class="btn btn-primary btn-lg"  onclick="myFunction()">Roll Me</button>
    <br>
<br>
    <p id="butn"></p>

    <script>
        function myFunction() {
        document.getElementById("butn").innerHTML = Math.floor(Math.random() *6) + 1;
        }
        
    </script>
    </div>
</div>

@endsection


