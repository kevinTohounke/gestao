<html>
<head>
</head >
<body>
    <fieldset >
        <legend> Cadastrar Paciente</legend>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    
            <label> Nome: </label> <br/>
            <input type="text" name ="nome" > <br/>
            <label> Endereço: </label> <br/>
            <input type="text" name ="endereco" ><br/>
            <label> Sexo: </label>
            <select name="sexo">
    <option value="Femininoo"> Feminino </option>
    <option value="Masculino"> Masculino </option>
            </select> <br/>

            <label> Mes de Nascimento: </label> <br/>
            <input type="text" name ="mesNascimento" ><br/>

            <label> Ano de Nascimento: </label> <br/>
            <input type="text" name ="anoNascimento" ><br/>

            <label> DiaNascimento: </label> <br/>
            <input type="text" name ="diaNascimento" ><br/>

            <label> Medico do Paciente: </label> <br/>
            <select name ="idMedico">
                <option value="1"> Nome - Especialidae  </option>
                <option value="2"> Nome - Especialidae  </option>
            </select> <br/>

            <button type="submit" name="guardar"> Cadastrar </button>
            
</form>

</fieldset>
</body>
</html>