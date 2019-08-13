<?php setcookie( ) ?>
<html>

<head>
     <title>Gerenciador de contatos</title>
     <style>
          body {
               font-family: Arial, Helvetica, sans-serif
          }

     </style>
</head>


<body>
     <h1>Lista de Contatos</h1>
     <form>
          <fieldset>
               <legend> Novo Contato </legend>
               <label>
                    Nome:
                    <input type="text" name="nome" />
                    <br>
               </label>

               <label>
                    Telefone:
                    <input type="tel" id="telefone" />
                    <br>
               </label>

               <label>
                    Email:
                    <input type="email" id="email" />
                    <br>


               </label>

               <input type="submit" value="cadastrar" />
          </fieldset>
     </form>
     <?php   
        if (isset($_GET['nome'])){
            $_COOKIE['lista_tarefas'][] = $_GET['nome'];
        }
          $lista_tarefas = array();
         
         if (isset($_COOKIE['lista_tarefas'])) {
              $lista_tarefas = $_COOKIE['lista_tarefas'];
         } ?>
     <table>
          <tr>
               <th>Tarefas</th>
          </tr>
          <?php foreach ($lista_tarefas as $tarefa) : ?>
          <tr>
               <td><?php echo $_COOKIE; ?></td>
          </tr>
          <?php endforeach; ?>
     </table>
</body>

</html>
