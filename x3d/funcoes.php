
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
                echo" <navigationInfo id='head' headlight='true' type='\"EXAMINE\"'>  </navigationInfo> ";
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
    function manequim_m(){
        cenario("m_homen");
    }
    function manequim_g(){
        cenario("g_homen");
    }
    function manequim_gg(){
        cenario("gg_homen");
    }
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