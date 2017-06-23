<html>
<head>
    <meta charset='UTF-8'>
    <title>Login</title>
    <link  href='bootstrap.css' rel="stylesheet"/>
    
    <style>
  .titulo{
    font-family: Droid Serif;
    color: #000;
    font-size: 47px;
    position: absolute;
    top: 167px;
    left: 298px;
  }
        #nombre{
     margin-left: 574px;
    position: absolute;
    margin-top: 99px;
}
          #pass{
            margin-left: 574px;
             position: absolute;
             margin-top: 140px;
        }
          #en{
           margin-left: 571px;
              position: absolute;
              margin-top: 197px;
        }
        #sa{
          margin-left: 668px;
            position: absolute;
            margin-top: 197px;
        }
          #u{
            margin-left: 494px;
             position: absolute;
             margin-top: 100px;
        
         }
          #p{
            margin-left: 489px;
             position: absolute;
             margin-top: 142px;
        }
    </style>
</head>
<body>
        <IMG src="img/logo_ceal.jpg" width="1100" height="190"/>
            <div class="arriba">
  <h1 class="titulo">Bienvenido a transportes CEAL</h1>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        
        <div class="form-group">
        <label id="u" for="usuario">Usuario</label>
            <input id="nombre" type="text" name="usuario" class="form-control"/>
        </div>
        <div class="form-group">
        <label id="p" for="password">password</label>
            <input id="pass" type="password" name="password" class="form-control"/>
        </div>
        
        <form method="get" action="Ceal.php">
                    <input id="en" type="submit" class="btn btn-success" value="Entrar">
                    <input id="sa" type="submit" class="btn btn-success" value="Salir">
                </form>
    </div>
    </div>
</body>
</html>