<!DOCTYPE html>
<html>
	<heade>
		<meta charset="utf-8"/>
		<title>Look Star Moda</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-pink.min.css" />
	    <link href="https://fonts.googleapis.com/css?family=Mr+De+Haviland" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
	    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	    <style type="text/css">
	    	.opcao{
	    		background-color: grey;
	    		height: 200px;
	    	}
	    	.dist_cabecalho{
	    		height: 30px;
	    	}
	    	.imgfdn{
	    		margin-left: -2%;
	    		margin-top: -2%;
	    	}
	    	.logo{
	    		margin-top: -500px;
	    		height: 300px;
	    		width: 400px;
	    		background-color: rgba(255,255,255,0.5);
	    		border-radius: 10px;
	    		border-style: dotted;
	    		border-color: rgba(207,207,207,0.8);
	    		text-align: center;

	    	}
	    	.fund_menu{
	    		position: absolute;
	    		margin-top: -200px;
	    		height: 200px;
	    		width: 300px;
	    		background-color: rgba(255,255,255,0.5);
	    	}
	    	.hlog{
	    		margin-top: 5px;
	    		color: rgba(77,77,77,1);
	    		font-family: "Tangerine";
	    		font-weight: bold;
	    		font-size: 110px;
	    		text-shadow: 2px 2px 2px rgba(255,255,255,1);
	    	}
	    	.h2log{
	    		margin-top: -30px;
	    		color: rgba(77,77,77,1);
	    		font-family: "Chewy";
	    		font-style: italic;
	    		text-shadow: 4px 4px 2px rgba(225,225,225,1);
	    	}
	    	.fem{
	    		margin-top: -120px;
	    		text-align: center;
	    		/*color: rgba(200,100,255,0.8);*/
	    		color: rgba(80,80,80,1);
	    		text-shadow: 0px 0px 5px rgba(255,255,255,1);
	    		font-weight: bold;
	    		font-family: "Alex Brush";
	    	}
	    	.btnmenu:link{	/*Link*/
				text-decoration: none;
				color:	rgba(255,255,255,1.0);
				text-decoration:	none;
				list-style-type:	none;
			}
			.btnmenu:visited {	/*Link*/
				color:	rgba(255,255,255,1.0);
				text-decoration:	underline;
				list-style-type:	none;
			}
			.btnmenu:hover {	/*Link*/
				text-decoration:	none;
				color:	rgba(255,255,255,1.0);
				text-decoration:	none;
				list-style-type:	none;
			}
			.btnmenu:active {	/*Link*/
				text-decoration:	none;
				color: rgba(200,200,205,1.0);
				text-decoration:	underline;
				list-style-type:	none;
			}

			a:link{
				color: rgba(77,77,77,1);
				text-decoration: none;
				list-style-type: none;
				text-decoration: none; 
			}
			a:hover{
				color: rgba(77,77,77,1);
				text-decoration: none;
				list-style-type: none;
				text-decoration: none; 
			}
			a:active{
				color: rgba(77,77,77,1);
				text-decoration: none;
				list-style-type: none; 
			}
			a:visited{
				color: rgba(77,77,77,1);
				text-decoration: none;
				list-style-type: none;
				text-decoration: none; 
			}
		.home{
	            font-size: 40px;
	            font-weight: bold;
	            color: rgba(77,77,77,1);
	            font-family: "Tangerine";
	            font-style: italic;
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
	</head>

	<body>
		<div class="transparent mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header mdl-layout__header"><!--Cabecalho-->
	            <div class="mdl-layout__header-row">
	            	<a href="index.php">
		            	<span class="mdl-layout-title home">
		                    Look Star
		                </span>
		            </a>
	                <div class="mdl-layout-spacer"></div>
	                <nav class="mdl-layout-navigation">
                            <a href="subpage/homens.php" class="mdl-layout-navigation__link cabmenu">Homen</a>
                            <a href="subpage/mulheres.php" class="mdl-layout-navigation__link cabmenu">Mulher</a>
	                    <a href="#" class="mdl-layout-navigation__link cabmenu">Menina</a>
                            <a href="#" class="mdl-layout-navigation__link cabmenu">Menino</a>
	                </nav>
	            </div>
	        </header>
	        <main class="mdl-layout__content">
	        	<div class="mdl-grid">
	        		<img src="imagens/modelo01.jpg" class="imgfdn" width="105%" height="700px"/>
	        		<div class="mdl-layout-spacer"></div>
	        		<div class="logo">
	        			<h1 class="hlog">Look Star</h1></br>
	        			<h2 class="h2log">PARA QUALQUER ESTAÇÃO</h2>
	        		</div>
	        		<div class="mdl-layout-spacer"></div>
	        	</div>
		        <div class="mdl-grid">
		        	<div class="dist_cabecalho mdl-cell"></div>
		        </div>
		        <div class="mdl-grid">
		        	<div class="mdl-layout-spacer"></div>
			        <div class="opcao mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet" >
			        	<a href="subpage/mulheres.php" class="btnmenu">	
			        		<img src="imagens/modelo02.jpg" height="100%" width="100%">
			        		<h1 class="fem">Mulheres</h1>
			        	</a>
			        </div>
		        	<div class="mdl-cell mdl-cell--1-col"></div>
		        	<div class="opcao mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
		        		<a href="subpage/homens.php" class="btnmenu">
			        		<img src="imagens/modelo03.jpg" height="100%" width="100%">
			        		<h1 class="fem">Homens</h1>
			        	</a>
		        	</div>
		        	<div class="mdl-layout-spacer"></div>
		        </div>
		        <div class="mdl-grid">
		        	<div class="mdl-layout-spacer"></div>
		        	<div class="opcao mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
		        		<a href="resbla" class="btnmenu">
			        		<img src="imagens/modelo04.jpg" height="100%" width="100%">
			        		<h1 class="fem">Meninas</h1>
			        	</a>
		        	</div>
		        	<div class="mdl-cell mdl-cell--1-col"></div>
		        	<div class="opcao mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
		        		<a href="resbla" class="btnmenu">
			        		<img src="imagens/modelo05.jpg" height="100%" width="100%">
			        		<h1 class="fem">Meninos</h1>
			        	</a>
		        	</div>
		        	<div class="mdl-layout-spacer"></div>
		        </div>
	        </main>
	    </div>
	</body>
</html>