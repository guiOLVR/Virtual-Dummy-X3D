
<?php
    /*Cenario é a função que cria a tela x3d e recebe um variavel com o nome do objeto a ser chamado,
     *  <x3d>Cria a tela
     * <scene>cria o cenario
     * <directionalLight> Iluminação
     * <navigationInfo>
     * <PointLight>
     * <SpotLight>
     * <viewpoint> posiciona o objeto na tela
     * <Inline> chama o objeto para dentro do cenario>
     */
    function cenario($nick){
        echo" <x3d width='400px' height='650px'>";
           echo"<scene>";
                echo"<directionalLight id='directional' direction='0 0 1' on ='TRUE' intensity='1.0' shadowIntensity='0.0'> </directionalLight>";
                echo" <navigationInfo id='navType' headlight='true' type='\"examine\"'>  </navigationInfo> ";
                echo"<PointLight id='point' on='TRUE' intensity='0.9000' color='0.0 0.6 0.0' location='0 10 0.5 ' radius='5.0000' >  </PointLight>"; 
                echo"<SpotLight id='spot' on =\"TRUE\" beamWidth='0.9' color='0 0 1' cutOffAngle='0.78' location='0 0 12' radius='22' >  </SpotLight>";
                echo"<!--position X, Y, x --> <viewpoint position=\"-1.94639 1.79771 -2.89271\" orientation=\"0.03886 0.99185 0.12133 3.75685\"></viewpoint>";
                echo"<Inline nameSpaceName=\"$nick\" mapDEFToID=\"true\" url=\"dummy/$nick.x3d\" />";
            echo"</scene>";
        echo"</x3d>";
    }
    
    //Funções que passam o nome do objeto para o cenario e que são as chamadas no swit case no php do index.php
    function manequim_p(){
        cenario("p_homen");
    }
    function manequim_p_gday(){
        cenario("p_homen_gday");
    }
    function manequim_p_thewho(){
        cenario("p_homen_thewho");
    }
    function manequim_p_razul(){
        cenario("p_homen_razul");
    }
//---------------//----------------
    function manequim_m(){
        cenario("m_homen");
    }
    function manequim_m_gday(){
        cenario("m_homen_gday");
    }
    function manequim_m_thewho(){
        cenario("m_homen_thewho");
    }
    function manequim_m_razul(){
        cenario("m_homen_razul");
    }
//-------------//------------------
    function manequim_g(){
        cenario("g_homen");
    }
    function manequim_g_gday(){
        cenario("g_homen_gday");
    }
    function manequim_g_thewho(){
        cenario("g_homen_thewho");
    }
    function manequim_g_razul(){
        cenario("g_homen_razul");
    }
//--------------//----------------
    function manequim_gg(){
        cenario("gg_homen");
    }
    function manequim_gg_gday(){
        cenario("gg_homen_gday");
    }
    function manequim_gg_thewho(){
        cenario("gg_homen_thewho");
    }
    function manequim_gg_razul(){
        cenario("gg_homen_razul");
    }
//--------------//----------------
    function manequim_pw(){
        cenario("p_mulher");
    }
    function manequim_mw(){
        cenario("m_mulher");
    }
    function manequim_gw(){
        cenario("g_mulher");
    }
    function manequim_ggw(){
        cenario("gg_mulher");
    }
?>