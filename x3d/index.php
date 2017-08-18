<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>X3D</title>
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
    <!--<link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'/>-->
</head>
<body >
    <h1>teste</h1>
    <p>
        objeto 3d
    </p>
    <div id="php">
    <form method="post">
        <select name="num">
                <option value="1">M</option>
                <option value="2">G</option>
                <option value="3">GG</option>
        </select>
        <input type="submit" value="exibir">
    </form>
    <?php
        $tam = isset($_POST["num"])?$_POST["num"]:0;
        include "funcoes.php";
        
        if($tam != 0){
            switch ($tam){
                case 1:
                    manequim_m();
                    break;
                case 2:
                    manequim_g();
                    break;
                case 3:
                    manequim_gg();
                    break;
            }
        }
        $tam = 0;
    ?>
   </div>
</body>
</html>

