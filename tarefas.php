<?php 
session_start();
include "banco.php";
 
     if(isset($_Get['nome']) && $_GET['nome'] != ''){
          $tarefa = array();
          
          $tarefa['nome'] = $_GET['nome'];
          
          if(isset($_GET['descricao'])){
               $tarefa['descricao'] = $_GET['descricao'];
          } else {
               $tarefa['descricao'] = '';
          }
          
          
          if(isset($_GET['prazo'])){
                              $tarefa['prazo'] = $_GET['prazo'];
          } else{
               $tarefa['prazo'] = '';
          }
          
          $tarefa['prioridade'] = $_GET['prioridade'];
         
          
          if(isset($_GET['concluida'])){
               $tarefa['concluida'] = $_GET['concluida'];
          } else{
               $tarefa['concluida'] = '';
          }
          
          $_SESSION['lista_tarefas'][] = $tarefa;
          
     }

  
        if (isset($_GET['nome'])){
            $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }
$lista_tarefas = buscar_tarefas($conexao);       
include "template.php";        
  
