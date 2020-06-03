<!doctype html>


<html>
    <head>
        <title>Questionário de Dados</title>

        <meta charset="utf-8"/>

        <link rel="stylesheet" type="text/css" href="css_quest.css" media="screen" />

</head>






<body>
	<form action= "teste.php" method="post">

        <div id="agente_trat">

            <h1>Agentes de tratamento</h1>
            Controlador * <br>

            <input type="text" name="controlador" autofocus><br><br>

            # Operador * <br>
            <input type="text" name="operador" autofocus><br><br>


            Encarregado * <br>
            <input type="text" name="Encarregado"  autofocus><br><br>

            Contato do Encarregado * <br>
            <input type="text" name="Telefone Encarregado"  autofocus><br><br>

            Site do Encarregado * <br>
            <input type="text" name="Site do Encarregado"  autofocus><br><br>

        </div>






        <div id="dados">
            <h1>Dados</h1>
            <h2>Dados Pessoais</h2>

            <input type="text" name="dados pessoais" width="30" placeholder="Qual é o Dado?"  autofocus> &emsp;
            <input type="text" name="justificativa" placeholder="Este dado é utilizado em que?"  autofocus><br></br>

            <input type="button" value="+" name="adicionar"  autofocus><br><br>

        </div>






        <div id="dadoSensiveis">
            <h2>Dados Pessoais Sensíveis</h2>
            <input type="checkbox" name="origem" id="ORE" value="UserAccept"> 
                <label for="origem">Origem Racial ou étnica</label>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;
                <input type="text" name="ORE" placeholder="Este dado é utilizado em que?"> <br>
        </br>



            <input type="checkbox" name="conviccoes" id="CRF" value="UserAccept">
                <label for="conviccoes">Convicções religiosas ou filosóficas</label>&nbsp;&nbsp;&nbsp;&emsp;
                <input type="text" name="conviccoes1" placeholder="Este dado é utilizado em que?"  autofocus><br>
        </br>



            <input type="checkbox" name="opinioes" id="OP" value="UserAccept">
                <label for="opinioes">Opiniões Políticas</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;
                <input type="text" name="opinioes1" placeholder="Este dado é utilizado em que?"  autofocus><br>
        </br>



            <input type="checkbox" name="filiacao" id="FS" value="UserAccept">
                <label for="filiacao">Filiação Sindical</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;
                <input type="text" name="filiacao1" placeholder="Este dado é utilizado em que?"  autofocus><br>
        </br>


            <input type="checkbox" name="questoes" id="QG" value="UserAccept">
                <label for="questoes">Questões Genéticas</label>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&emsp;
                <input type="text" name="questoes1" placeholder="Este dado é utilizado em que?"  autofocus><br>
        </br>


            <input type="checkbox" name="biometrica" id="B1" value="UserAccept">
                <label for="biometrica">Biométricas</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <input type="text" name="biometrica1" placeholder="Este dado é utilizado em que?"  autofocus><br>
        </br>


            <input type="checkbox" name="saude" id="S1" value="UserAccept">
                <label for="saude">Saúde</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;
                <input type="text" name="saude1" placeholder="Este dado é utilizado em que?"  autofocus><br>
        </br>


            <input type="checkbox" name="vida" id="VS" value="UserAccept">
                <label for="vida">Vida Sexual</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <input type="text" name="vida1" placeholder="Este dado é utilizado em que?"  autofocus><br>
        </br>
        </div>





        <div id="Segurança">
            <h1>Segurança dos Dados</h1>
            <h2>Dados Pessoais de Menores?</h2>
            <input type="checkbox" name="sim" id="sim1" value="UserAccept">
                <label for="sim">Sim</label>
            <input type="checkbox" name="nao" id="nao1" value="UserAccept">
                <label for="nao">Não</label><br>
            </br>
        </div>







        <div id="BoasPraticas">
            <h1>Boas práticas da Empresa</h1>
            <textarea rows="15" cols="100" placeholder="Digite sua mensagem aqui..."> </textarea><br></br><br></br>

        </div>

		<input type="submit" class="button" value="GERAR RELATÓRIO" name="adicionar"  autofocus><br><br><br></br>
				</form>

		
</body>

</html>