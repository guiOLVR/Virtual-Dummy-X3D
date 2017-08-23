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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-green.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <style>
        .transparent{
            background: url('transparent.jpg') center / cover;
        }
        .mdl-cell{
            height: 50px;
        }
        .image1{
            height: 300px;
            background: url('imgtest.jpg') no-repeat center/cover;
        }
        .thewho{
            height: 300px;
            background: url('thewho.png') no-repeat center/cover;
        }
    </style>
</head>
<body> 
        <div class="transparent mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">
                        Introdução
                    </span>
                    <div class="mdl-layout-spacer"></div>
                    <nav class="mdl-layout-navigation">
                        <a href="#" class="mdl-layout-navigation__link">Homen</a>
                        <a href="#" class="mdl-layout-navigation__link">Mulher</a>
                        <a href="#" class="mdl-layout-navigation__link">Infantil</a>
                    </nav>
                </div>
            </header>
            <main class="mdl-layout__content">
            <div class="mdl-grid">
                <div class="image1 mdl-cell mdl-cell--2-col"></div>
                <div class="thewho mdl-cell mdl-cell--2-col"></div>
                 <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet">
                    <div id="select">
                    <form method="post">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="man">
                            <input type="radio" name="sexo" value="homen" id="man" class="mdl-radio__button" name="options" value="1" checked>
                            <span class="mdl-radio__label">Masculino</span>
                        </label>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="woman">
                            <input type="radio" name="sexo" value="mulher" id="woman" value="homen" class="mdl-radio__button">
                            <span class="mdl-radio__label">Feminino</span>
                        </label>
                        <!--Sexo: <input type="radio" name="sexo" value="homen" id="man" checked="">
                        <label for="man">Masculino</label>
                        <input type="radio" name="sexo" value="mulher" id="woman">
                        <label for="woman">Feminino</label>-->
                        <select name="num">
                                <option value="1">P</option>
                                <option value="2">M</option>
                                <option value="3">G</option>
                                <option value="4">GG</option>
                        </select>
                        <input type="submit" value="exibir">
                        </div> 
                    </form>
                        <?php
                            $tam = isset($_POST["num"])?$_POST["num"]:0;
                            $sex = isset($_POST["sexo"])?$_POST["sexo"]:0;
                            include "funcoes.php";

                            if($sex == "homen" ){
                                if($tam != 0){
                                    switch ($tam){
                                        case 1:
                                            manequim_p();
                                            break;
                                        case 2:
                                            manequim_m();
                                            break;
                                        case 3:
                                            manequim_g();
                                            break;
                                        case 4:
                                            manequim_gg();
                                    }
                                }
                                $tam = 0;
                            }
                            else{
                               if($tam != 0){
                                    switch ($tam){
                                        case 1:
                                            manequim_pw();
                                            break;
                                        case 2:
                                            manequim_mw();
                                            break;
                                        case 3:
                                            manequim_gw();
                                            break;
                                        case 4:
                                            manequim_ggw();
                                    }
                               }    
                            }
                        ?>
                </div>
            </div>    
            <div class="mdl-grid">
                <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                <div class="mdl-layout-spacer"></div>
            </div>
            <div class="mdl-grid">
                <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                <div class="mdl-layout-spacer"></div>
            </div>
            </main>
                    <!--
                           /* $tam = isset($_POST["num"])?$_POST["num"]:0;
                            $sex = isset($_POST["sexo"])?$_POST["sexo"]:0;
                            include "funcoes.php";

                            if($sex == "homen" ){
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
                            }
                            else{
                               if($tam != 0){
                                    switch ($tam){
                                        case 1:
                                            manequim_mw();
                                            break;
                                        case 2:
                                            manequim_gw();
                                            break;
                                        case 3:
                                            manequim_ggw();
                                            break;
                                    }
                               }    
                            }*/
                        -->
                         
        </div>
</body>
</html>