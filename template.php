  <html>
    <head>
        <meta charset="utf-8" />
        <title>Gerenciador de Tarefas</title>
        <link rel="stylesheet" href="tarefas.css" type="text/css"/> 
    </head>
     <body>
        <h1>Gerenciador de Tarefas</h1>
        <form>
            <fieldset>
                <legend> Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome" /><br>
                </label>
                 <label>
                 Decrição (Opcional):
                     <textarea name="descricao"></textarea><br>
                 </label>
                 <label>
                 Prazo (Opcional):
                      <input type="text" name="prazo"/>
          </label>
               
             <legend>Prioridade:</legend>
             <label>
             <input type="radio" name="prioridade"
                    value="baixa" checked />
                  Baixa            
                  
                  <input type="radio" name="prioridade" value="media"/>
                  Média
                  
                  <input type="radio" name="prioridade" value="alta"/>
                  Alta
                  
             </label>
             </fieldset>
             <label>
             Tarefa concluída:
                  <input type="checkbox" name="concluida" value="sim"/>
             </label>
             <input type="submit" value="Cadastrar"/>
          </form>
            </body>
       
       <table>
            <tr>Tarefa</tr>
            <tr>Descricao</tr>
            <tr>Prazo</tr>
            <tr>Prioridade</tr>
            <tr>Concluída</tr>
            completar pagina 49 
       </table>
</html>