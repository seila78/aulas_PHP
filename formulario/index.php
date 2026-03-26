<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>formulario de contato </h1>
    <form action="recebe.php" method="POST">
        <input type="text" placeholder="nome" name="nome" />
        <input type="text" placeholder="endereço" name="endereco" />
        <input type="email" placeholder="email" name="email" />
        <select name="pais">
            <option value="">selecione um pais:</option>
            <option value="Brasil">Brasil</option>
            <option value="França">França</option>
            <option value="Croacia">Croacia</option>
        </select>
        <div>
            <input type="radio" name="turno" value="manhã"> manhã
            <input type="radio" name="turno" value="tarde"> tarde
            <input type="radio" name="turno" value="noite"> noite
        </div>
        <button type="submit">enviar</button>
    </form>
</body>
</html>
