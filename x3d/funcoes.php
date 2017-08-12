
<?php
    function cenario($nick){
        echo"<x3d width='400px' height='650px'>";
        echo"<scene id='cena'>";
        echo"<directionalLight id='directional' direction='0 0 1' on ='TRUE' intensity='1.0' shadowIntensity='0.0'> </directionalLight>";
        echo"<navigationInfo id='head' headlight='true' type='\"EXAMINE\"'>  </navigationInfo>";
        echo"<PointLight id='point' on='TRUE' intensity='0.9000' color='0.0 0.6 0.0' location='0 10 0.5 ' radius='5.0000' >  </PointLight>";
        echo"<SpotLight id='spot' on =\"TRUE\" beamWidth='0.9' color='0 0 1' cutOffAngle='0.78' location='0 0 12' radius='22' >  </SpotLight>";
        //echo"<viewpoint position='-1.94639 1.79771 -2.89271' orientation='0.03886 0.99185 0.1213";
        echo"<Inline nameSpaceName=\"$nick\" mapDEFToID=\"true\" url=\"dummy/$nick.x3d\" />";
        echo"</scene>";
        echo"</x3d>";
    }

    function manequim_m(){
        cenario("teste_roupa");
    }
    function manequim_g(){
        cenario("g");
    }
    function manequim_gg(){
        cenario("gg");
    }
?>