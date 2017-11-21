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
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-pink.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--Estilo css de alguns divs especiais-->
    <style>
        .transparent{
            background: url('fundo.jpg') center / cover;
        }
        .mdl-cell{
            height: 50px;
        }
        .image1{
            height: 300px;
            background: url('camisas/imgtest.jpg') no-repeat center/cover;
        }
        .thewho{
            height: 300px;
            background: url('camisas/thewho.png') no-repeat center/cover;
        }
        .razul{
            height: 300px;
            background: url('camisas/razul.png') no-repeat center/cover;
        }
        .greenday{
            height: 300px;
            background: url('camisas/gday.png') no-repeat center/cover;
        }
        .home{
            font-size: 40px;
            font-weight: bold;
            color: rgba(77,77,77,1);
            font-family: "Tangerine";
            font-style: italic;
        }
        a:link{ /*Link*/
                text-decoration: none;
                font-weight: bold;
                color:  rgba(77,77,77,1.0);
                text-decoration:    none;
                list-style-type:    none;

            }
        a:visited { /*Link*/
                color:  rgba(77,77,77,1.0);
                font-weight: bold;
                text-decoration:    underline;
                list-style-type:    none;
            }
         a:hover {   /*Link*/
                text-decoration:    none;
                font-weight: bold;
                color:  rgba(77,77,77,1.0);
                text-decoration:    none;
                list-style-type:    none;
            }
            a:active {  /*Link*/
                text-decoration:    none;
                font-weight: bold;
                text-decoration:    none;
                list-style-type:    none;
            }
            .cabmenu{
                    font-size: 25px;
                    font-weight: bold;
                    color: rgba(100,100,100,1);
                    font-family: "Tangerine";
                }
            .cabmenu:hover{
                    color: rgba(100,100,100,1);
                    text-decoration: underline;
                    list-style-type: none;
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
                    <span class="mdl-layout-title home">
                        <a href="../index.php">Look Star</a>
                    </span>
                    <div class="mdl-layout-spacer"></div>
                    <nav class="mdl-layout-navigation">
                        <a href="homens.php" class="mdl-layout-navigation__link cabmenu">Homen</a>
                        <a href="mulheres.php" class="mdl-layout-navigation__link cabmenu">Mulher</a>
                        <a href="meninas.php" class="mdl-layout-navigation__link cabmenu">Menina</a>
                        <a href="meninos.php" class="mdl-layout-navigation__link cabmenu">Menino</a>
                    </nav>
                </div>
            </header>
            
            <!--Todo conteudo do site deve ficar dentro do main-->
            <main class="mdl-layout__content">
                <div class="mdl-grid"><!--Grid é uma divição da tela em colunas, para facilitar a construção
                    e a responsividade do site(o grid padrão é de 12 colunas, no monitar desktop, no tablet
                    são 8, no Smartphone são 4) você pode definir o tamanho do grid caso queira, e pode definir
                    por dispositivo-->
                    
                    <div class="greenday mdl-cell mdl-cell--2-col"><!--Neste caso o chamo 3 classes dentro da div
                    a classe image1 é a classe da imagem do primeiro grid da tela, a classe mdl-cell é para
                    criar a celula do grid e a class mdl-cell--2--col diz q a celula do meu grid vai ocupar 2 colunas-->
                        <!--Checkbox das roupas para exibir no manequim-->
                        <form method="post">
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="gday"><!--camiseta green day-->
                            <input type="checkbox" name="camiseta" value="1" id="gday" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label"></span>
                        </label>
                    </div>
                    <div class="thewho mdl-cell mdl-cell--2-col">
                        <!--Form do check box-->
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="thewho"><!--camiseta the who-->
                                <input type="checkbox" name="camiseta" value="2" id="thewho" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label"></span>
                            </label>
                    </div>
                    <div class="razul mdl-cell mdl-cell--2-col">
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="razul"><!--Camiseta R. Azul-->
                            <input type="checkbox" name="camiseta" value="3" id="razul" class="mdl-checkbox__input">
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
                       <!-- <form method="post">-->
                            
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
                                $camisa = isset($_POST["camiseta"])?$_POST["camiseta"]:2;//camiseta selecionada
                                $tam = isset($_POST["num"])?$_POST["num"]:0;//Tamanho do manequim(P,M,G,GG)
                                include "funcoes.php";//incluindo a classe funcoes.php(funções de cenario e chamadas do objeto)
                                //echo"<h1>$camisa</h1>";
                                

                                switch ($camisa) {
                                    case 1:
                                        switch ($tam){
                                            case 1:
                                                manequim_p_gday();
                                                break;
                                            case 2:
                                                manequim_m_gday();
                                                break;
                                            case 3:
                                                manequim_g_gday();
                                                break;
                                            case 4:
                                                manequim_gg_gday();
                                                break;
                                        }
                                        break;
                                    case 2:
                                        switch ($tam){
                                            case 1:
                                                manequim_p_thewho();
                                                break;
                                            case 2:
                                                manequim_m_thewho();
                                                break;
                                            case 3:
                                                manequim_g_thewho();
                                                break;
                                            case 4:
                                                manequim_gg_thewho();
                                                break;
                                        } 
                                        break;
                                    case 3:
                                        switch ($tam){
                                            case 1:
                                                manequim_p_razul();
                                                break;
                                            case 2:
                                                manequim_m_razul();
                                                break;
                                            case 3:
                                                manequim_g_razul();
                                                break;
                                            case 4:
                                                manequim_gg_razul();
                                                break;
                                        }
                                        break;
                                }

                                  /* if($tam != 0){
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
                                   }   */ 
                                
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