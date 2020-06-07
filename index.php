<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <title>Ativadade Online 03</title>
    </head>
    <body>

        <table id="perfil">
            <tr>
                <td><img src="assets/imagens/foto.png" alt="Foto de Hygor" height="100" width="100"></td>
                <td>
                    <h1>HYGOR ALMEIDA</h1>
                </td>
            </tr>
        </table>

        <br /><br /><br />
        <div class="table-responsive">
            <div id="horario_estudo">
                <table class="table-dark table table-bordered table-striped table-hover">
                    <caption>Conograma de estudos</caption>
                    <thead>
                        <tr>
                            <th>Horarios</th>
                            <th>Domingo</th>
                            <th>Segunda-Feira</th>
                            <th>Terça-Feira</th>
                            <th>Quarta-Feira</th>
                            <th>Quinta-Feira</th>
                            <th>Sexta-Feira</th>
                            <th>Sábado</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>7h30min as 11h30min</td>
                            <td>Programação Web</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                        </tr>
                        <tr>
                            <td>19h as 21h</td>
                            <td>_</td>
                            <td>Planejamento e Práticas de Gestão Escolar </td>
                            <td>Instrumentação para o Ensino de Computação I</td>
                            <td>Programação Web</td>
                            <td>Estágio Curricular Supervisionado I</td>
                            <td>_</td>
                            <td>Estudo a diciplina que eu estiver com mais dificuldade</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <div class="table-responsive">
            <div id="horario_trabalho">
                <table class="table-dark table table-bordered table-striped table-hover">
                    <caption>
                        <h6>Horario de trabalho.</h6>
                    </caption>
                    <thead>
                    <th>Horarios</th>
                    <th>Domingo</th>
                    <th>Segunda-Feira</th>
                    <th>Terça-Feira</th>
                    <th>Quarta-Feira</th>
                    <th>Quinta-Feira</th>
                    <th>Sexta-Feira</th>
                    <th>Sábado</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>14h as 20h</td>
                            <td>Trabalho - não é todos os domingos</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                            <td>_</td>
                        </tr>
                        <tr>
                            <td> 7h30min as 17h30min</td>
                            <td>-</td>
                            <td>Trabalho</td>
                            <td>Trabalho</td>
                            <td>Trabalho</td>
                            <td>Trabalho</td>
                            <td>Trabalho</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <form action="formulario_contato.php" method="POST" name="formulario_contato">
            <fieldset id="forms">
                <legend>Contato:</legend>
                <div>
                    <label for="Nome_id"> Nome completo:</label>
                    <input id="Nome_id" type="
                           text" name="nome" minlength="2" maxlength="40" placeholder="Ex.: João Carlos Costa" onkeyup="uppercase('Nome_id')"><br>
                </div>

                <div>
                    <label for="email_id">E-mail:</label>
                    <input id="email_id" type="text" name="email" placeholder="Ex.: algumNome@outroNome.com"onblur="IsEmail('email_id')"><br>
                </div>

                <div>
                    <label for="celular_id">Telefone/Celular:</label>
                    <input id="celular_id" type="text" name="telefone_celular" /><br>
                </div>

                <div>
                    <label for="assunto_id">Assunto:</label>
                    <input id="assunto_id" type="text" name="assunto"><br>
                </div>

                <div>
                    <label for="msg">Mensagem:</label>
                    <textarea id="msg" name="mensagem" rows="5" cols="50" minlength="5" maxlength="80"></textarea><br>
                </div>

                <div class="botao">
                    <button id="enviar" type="submit" onclick="return validar_formulario_contato()">Enviar</button>
                    <button id="reset" type="reset">Limpar</button>
                </div>
            </fieldset>
        </form>
        <script type="text/javascript" src="assets/js/validacao-formulario.js"></script>
    </body>
</html>
