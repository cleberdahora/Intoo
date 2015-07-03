
<html lang="pt-BR">
    <head>
        <title>Intoo</title>

        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>

       
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap,min.css" rel="stylesheet"/>
        <link rel="shortcut icon" href="img/intoo.ico"/>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/bootstrap.js" ></script>
        <script type="text/javascript" src="js/database.js" ></script>
        <script src="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" type="text/javascript" charset="utf-8"></script>
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">

        <!-- jQuery -->
        <script type="text/javascript" charset="utf-8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

        <!-- DataTables -->
        <script type="text/javascript" charset="utf-8" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.js"></script>

        <style>

            body {
                padding-bottom: 40px;
                color: #5a5a5a;
            }
            .cor1{
                background: #009100;
            }
            .dropdown-menu li> a:hover{
                background-color: #C8FF91;
                border-top: 1px #C8FF91;
            }
            .navbar-form{
                margin-left:260px;
            }
            .navbar-nav{
                margin-left:60px;
            }
            .form-control{
                padding: 12px 90px;
            }
            .bordaAzul{
                border-top-width: 2px;
                border-top-style: solid;
                border-top-color: #1DB0B0;
            }
            .glyphicon-home,.glyphicon-phone-alt,.glyphicon-user,.glyphicon-comment{
                color:white;
            }
            .caret{
                color:white;
            }
        </style>

    </head>
    <body>
        <nav class="navbar navbar-default cor1">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="img/logo2_3.png">
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"> <span class="glyphicon glyphicon-comment" aria-hidden="true"></span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Video de Instrução</a></li>
                                <li><a href="#">Dúvidas</a></li>
                                <li><a href="#">Suporte</a></li>

                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php">Sair</a></li>

                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="jumbotron">

                <h1>Cléber de Jesus Silva da Hora</h1>
                <p>Contato: cel:(11)96561-4986 email: cleberdahora@hotmail.com</p>
            </div>
        </div>
        
        <div class="container">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Endereço</th>
                        <th>Profissão</th>
                        <th>Grau de Escolaridade</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fulano1</td>
                        <td>21</td>
                        <td>Rua Zero</td>
                        <td>VASP</td>
                        <td>Fundamental</td>

                    </tr>
                    <tr>
                        <td>Fulano2</td>
                        <td>25</td>
                        <td>Rua Um</td>
                        <td>Mecânico</td>
                        <td>Ensino Médio</td>

                    </tr>
                    <tr>
                        <td>Fulano3</td>
                        <td>19</td>
                        <td>Rua 3</td>
                        <td>Estudante</td>
                        <td>Ensino Médio</td>

                    </tr>
                    <tr>
                        <td>Fulano4</td>
                        <td>50</td>
                        <td>Rua 4</td>
                        <td>Medico</td>
                        <td>Phd</td>

                    </tr>
                    <tr>
                        <td>Fulano 5</td>
                        <td>33</td>
                        <td>Rua 5</td>
                        <td>Fazendeiro</td>
                        <td>Fundamental</td>

                    </tr>
                    <tr>
                        <td>Fulano 6</td>
                        <td>40</td>
                        <td>Rua 6</td>
                        <td>Borracheiro</td>
                        <td>Fundamental</td>

                    </tr>

                    <tr>
                        <td>Fulano 7</td>
                        <td>45</td>
                        <td>Rua 7</td>
                        <td>Pedreiro</td>
                        <td>Fundamental</td>
                    </tr>
                    <tr>
                        <td>Fulano 8</td>
                        <td>30</td>
                        <td>Rua 8</td>
                        <td>Professor</td>
                        <td>Mestrado</td>

                    </tr>
                    <tr>
                        <td>Fulano 9</td>
                        <td>60</td>
                        <td>Rua 6</td>
                        <td>Aposentado</td>
                        <td>Ensino Superior</td>

                    </tr>
                    <tr>
                        <td>Fulano 10</td>
                        <td>50</td>
                        <td>Rua 3</td>
                        <td>Musico</td>
                        <td>Ensino Médio</td>

                    </tr>
                    <tr>
                        <td>Fulano 11</td>
                        <td>70</td>
                        <td>Rua 6</td>
                        <td>Aposentado</td>
                        <td>Fundamental</td>

                    </tr>

                </tbody>
            </table>

        </div>
        <br><br>
        <div align="center" class="bordaAzul"> 

            <footer>

                <p><b>© Company 2015 - Intoo - All rights reserved</b></p>

            </footer>
        </div>
    </body>

</html>
