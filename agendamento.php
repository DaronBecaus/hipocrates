<?php
require_once "paciente.php";
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>

<body>
    <div>
        <form action="controller.php" method="post" enctype="multipart/form-data" id="forms">
            <div class="indetificacao">
                <div class="img_indetificacao">
                    <input type="file" name="imagem" id="imagem">
                    <!-- <input type="file" id="foto" name="foto" > -->
                    <!-- <img src="data:foto/jpg;charset=utf8;base64, <?= base64_encode($_POST['foto']); ?>" alt=""> -->
                </div>
                <div class="dados_indetificacao">
                    <label for="nome">Nome completo</label>
                    <input type="text" name="nome" id="nome" value="" placeholder="Digite seu nome completo">
                    <fieldset>
                        <legend>Gênero</legend>
                        <input type="radio" name="genero" value="Masculino" id="masculino">
                        <label for="masculino">Masculino</label>
                        <input type="radio" name="genero" value="Feminino" id="feminino">
                        <label for="feminino">Feminino</label>
                    </fieldset>
                    <label for="data_nascimento">Data Nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="" placeholder="Data nascimento">
                    <fieldset>
                        <legend>Estado civil</legend>
                        <input type="radio" name="estado_civil" value="solteiro" id="solteiro">
                        <label for="solteiro">Solteiro</label>
                        <input type="radio" name="estado_civil" value="casado" id="casado">
                        <label for="casado">Casado</label>
                        <input type="radio" name="estado_civil" value="divorciado" id="divorciado">
                        <label for="divorciado">Divorciado</label>
                    </fieldset>
                    <label for="cpf">Seu CPF</label>
                    <input type="number" name="cpf" id="cpf" value="" placeholder="Digite seu CPF">
                    <label for="rg">Seu RG</label>
                    <input type="number" name="rg" id="rg" value="" placeholder="Digite seu RG">
                    <label for="orgao_emissor">Órgão Emissor</label>
                    <select name="orgao_emissor" id="orgao_emissor">
                        <option value="SSP">SSP - Secretaria de Segurança Pública</option>
                        <option value="PC">PC - Polícia Civil</option>
                        <option value="PM">PM - Polícia Militar</option>
                        <option value="DETRAN">DETRAN - Departamento Estadual de Trânsito</option>
                        <option value="DPF">DPF - Departamento de Polícia Federal</option>
                        <option value="CREA">CREA - Conselho Regional de Engenharia e Agronomia</option>
                        <option value="OAB">OAB - Ordem dos Advogados do Brasil</option>
                        <option value="CRM">CRM - Conselho Regional de Medicina</option>
                        <option value="COREN">COREN - Conselho Regional de Enfermagem</option>
                        <option value="CRO">CRO - Conselho Regional de Odontologia</option>
                    </select>
                </div>
                <div class="endereco">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep">
                    <br><br>
                    <label for="logradouro">Logradouro:</label>
                    <input type="text" id="logradouro" name="logradouro">
                    <br><br>
                    <label for="numero">Numero:</label>
                    <input type="number" id="numero" name="numero">
                    <br><br>
                    <label for="complemento">Complemento:</label>
                    <input type="text" id="complemento" name="complemento">
                    <br><br>
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro">
                    <br><br>
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade">
                    <br><br>
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado">
                    <br><br>
                </div>
                <div class="contato">
                    <label for="telefone_1">Celular</label>
                    <input type="tel" name="telefone_1" id="telefone_1" placeholder="Digite seu número">
                    <label for="telefone_2">Telefone Fixo</label>
                    <input type="tel" name="telefone_2" id="telefone_2" placeholder="Digite seu telefone fixo(opcional)">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" value="" placeholder="Digite seu E-mail">
                </div>
                <div class="limitacoes">
                    <fieldset>
                        <legend>Limitações</legend>
                        <input type="checkbox" name="limitacoes[]" value="Sem Deficiência"> Sem Deficiência<br>
                        <input type="checkbox" name="limitacoes[]" value="Cognitiva"> Cognitiva<br>
                        <input type="checkbox" name="limitacoes[]" value="Locomoção"> Locomoção<br>
                        <input type="checkbox" name="limitacoes[]" value="Audição"> Audição<br>
                    </fieldset>
                </div>
                <div class="cadastro">
                    <fieldset>
                        <legend>Etinia</legend>
                        <input type="radio" name="etinia" value="Negro" id="negro">
                        <label for="negro">Negro</label>
                        <input type="radio" name="etinia" value="Branco" id="branco">
                        <label for="branco">Branco</label>
                        <input type="radio" name="etinia" value="Pardo" id="pardo">
                        <label for="pardo">Pardo</label>
                    </fieldset>
                    <label for="tipo_saguineo">Tipo saguineo</label>
                    <select name="tipo_saguineo" id="tipo_sanguineo">
                        <option value="">selecione</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <label for="cns">CNS</label>
                    <input type="number" name="cns" value="cns" id="cns" placeholder="Digite o CNS">
                </div>
                <div class="relacoes">
                    <label for="nomeMae">Nome da mãe</label>
                    <input type="text" name="nomeMae" value="" id="nomeMae" placeholder="Nome do Mãe">

                    <label for="nomePai">Nome do Pai</label>
                    <input type="text" name="nomePai" value="" id="nomePai" placeholder="Nome da Pai">

                    <label for="conjugue">Conjugue</label>
                    <input type="text" name="conjugue" value="" id="conjugue" placeholder="Nome do Conjugue">

                    <label for="nomeResponsavel">Nome do Responsavel</label>
                    <input type="text" name="nomeResponsavel" value="" id="nomeResponsavel" placeholder="Nome do Responsavel">

                    <label for="cpfResponsavel">CPF do Responsavel</label>
                    <input type="number" name="cpfResponsavel" value="cpfResponsavel" id="cpfResponsavel" placeholder="CPF do Responsavel">
                </div>
                <div class="educaçãoTrabalho">
                    <label for="eduTra">Nível de escolaridade</label>
                    <select name="eduTra" id="eduTra">
                        <option value="">selecione</option>
                        <option value="">Analfabeto</option>
                        <option value="">Ensino Fundamental</option>
                        <option value="">Ensino Médio</option>
                        <option value="">Ensino Superior</option>
                    </select>
                    <label for="profissao">Profissão</label>
                    <input type="text" name="profissao" value="" id="profissao" placeholder="Campo não obrigatorio">
                    <label for="empresa">Empresa onde trabalha</label>
                    <input type="text" name="empresa" value="" id="empresa" placeholder="Campo não obrigatorio">
                </div>
                <div>
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>