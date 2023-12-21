<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Atividade PHP</title>
</head>
<body>
    <main>
        
        <center><br>
        <fieldset>
        <form>
            <h1>Login</h1>
           
             <br><br>
             <div class="texto">
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Senha:</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1">
                  </div>
                  
                  <a href="index.php"><button type="button" class="btn btn-outline-dark"style="margin-left: 400px;">Voltar</button></a>
                  <a href="inicio.php"><button type="button" class="btn btn-warning" style="margin-left: 600px;margin-top: -65px;">Entrar</button></a>
             </div>
             <img src="imgcadastro.png" class="imgcadastro" alt="img">
        </form>
        </fieldset>
        </center>
    </main>
    <br><br>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color:#2A2E34 ;
        }.form-control{
          width: 300px;
          height: 40px;
         margin-top: 5px;
        }
        .imgcadastro{
            height: 600px;
            width: 600px;
            margin-left: -490px;
            margin-top: -374px;
        }
        fieldset{
            background-color: white;
            border-radius: 8px;
            width: 1000px;
            height: 580px;
          margin-top: 80PX;
            border: 2px ;
            border-color: rgb(250, 242, 2);;
          
        }
        .btn-btn-warning{
            margin-left: 30px;
        }
        input{
          width: 180px;
          height: 20px;
          outline: none;
          margin-left: 250px;
          border: black 1px solid;
          
        }
        label{
          color: black;
        }
        .texto{
            margin-top: 60px;
            margin-left: 150px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>