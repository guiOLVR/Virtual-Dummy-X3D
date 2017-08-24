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
    <!--Os imports dos frameworks-->
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-green.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--Estilo css de alguns divs especiais-->
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
        .razul{
            height: 300px;
            background: url('razul.png') no-repeat center/cover;
        }
    </style>
    <script>
         document.getElementById('navType').setAttribute("type", currentMode);
    </script>    
</head>
<body> 
        <div class="transparent mdl-layout mdl-js-layout mdl-layout--fixed-header"><!--Toda pagina do corpo
            tem que estar dentro desta div de controle-->
            
            <!--Cabeçalho-->
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
            
            <!--Todo conteudo do site deve ficar dentro do main-->
            <main class="mdl-layout__content">
                <div class="mdl-grid"><!--Grid é uma divição da tela em colunas, para facilitar a construção
                    e a responsividade do site(o grid padrão é de 12 colunas, no monitar desktop, no tablet
                    são 8, no Smartphone são 4) você pode definir o tamanho do grid caso queira, e pode definir
                    por dispositivo-->
                    <div class="image1 mdl-cell mdl-cell--2-col"><!--Neste caso o chamo 3 classes dentro da div
                    a classe image1 é a classe da imagem do primeiro grid da tela, a classe mdl-cell é para
                    criar a celula do grid e a class mdl-cell--2--col diz q a celula do meu grid vai ocupar 2 colunas-->
                        <!--Checkbox das roupas para exibir no manequim-->
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label"></span>
                        </label>
                    </div>
                    <div class="thewho mdl-cell mdl-cell--2-col">
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                            <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label"></span>
                        </label>
                    </div>
                    <div class="razul mdl-cell mdl-cell--2-col">
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                            <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label"></span>
                        </label>
                    </div>
                    <!----------------------------Fim dos CheckBox------------------------------>
                    <div class="mdl-layout-spacer"></div><!--No espaço que esta sobrando é preenchido por vazio
                    e empurra a proxima grid para frente(porque cada linha de grid é tamanho 12 e não foi
                    ocupado os 12, deixando assim um espaço vazio que dei um spacer e empurrei a grid do manequim
                    para a direita)-->
                    <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"><!--Grid do x3d-->
                        <!--Botões de seleção das caracteristicas do manequim-->
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
                            <select name="num">
                                    <option value="1">P</option>
                                    <option value="2">M</option>
                                    <option value="3">G</option>
                                    <option value="4">GG</option>
                            </select>
                            <input type="submit" value="exibir">
                            </div> 
                        </form>
                        <!--------------Fim dos botões--------------->
                        
                            <!--Neste php acontece o chamado das funções que pelos parametros passados, 
                            chama o manequim correspondente.-->
                            <?php
                                $tam = isset($_POST["num"])?$_POST["num"]:0;//Tamanho do manequim(P,M,G,GG)
                                $sex = isset($_POST["sexo"])?$_POST["sexo"]:0;//Sexo do manequim(M,F)
                                include "funcoes.php";//incluindo a classe funcoes.php(funções de cenario e chamadas do objeto)

                                //se o valor da variavel for igual a string homen ele entra no if para chamar um manequim masculino
                                if($sex == "homen" ){
                                    //se o tamanho for diferente de 0 ele entra no swit
                                    if($tam != 0){
                                        //Pega o valor passado(P=1,M=2,G=3,GG=4) e chama a função do manequim correspondente.
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
                                //se não entrar no if ele vai criar um manequim do sexo feminino
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
                </div><!--Fim das grid da primeira linha-->    
                <div class="mdl-grid"><!--Grid da segunda linha-->
                    <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                    <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                    <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                    <div class="mdl-layout-spacer"></div>
                </div>
                <div class="mdl-grid"><!--Grid da terceira linha-->
                    <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                    <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                    <div class="image1 mdl-cell mdl-cell--2-col">oi</div>
                    <div class="mdl-layout-spacer"></div>
                </div>
            </main><!--Fim do main-->
        </div><!--Fim da div principal-->
</body>
</html>