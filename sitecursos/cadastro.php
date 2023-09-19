<style>
    .labels{
        background-color: #7287A1;
        text-align: center; 
        padding: 6px; 
        width: 200px;
    }

    .tituloCad {
        background-color: #91CDD7;
        text-align: center; 
        padding: 6px; 
        width: 200px;
    }
</style>
<h1 class="tituloCad">Cadastro</h1>
<link rel="stylesheet" href="style.css">
<br>
<form action="" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label class="labels">Nome</label>
        <input type="text" name="nome" class="from-control">
    </div>
    <div class="mb-3">
        <label class="labels">Sobrenome</label>
        <input type="text" name="sobrenome" class="from-control">
    </div>
    <div class="mb-3">
        <label class="labels">RA</label>
        <input type="text" name="ra" class="from-control">
    </div>
    <div class="mb-3">
        <label class="labels">Email</label>
        <input type="email" name="email" class="from-control">
    </div>
    <div>
        <label class="labels">Curso</label>
        <select name="curso">
            <option value="">----</option>
            <option value="Segurança da Informação">Segurança da Informação</option>
            <option value="Pentester Basico">Pentester Basico</option>
            <option value="Logica de Programacao">Lógica de Programação</option>
            <option value="Conceitos Web">Conceitos Web</option>
            <option value="SCRUM Basico">SCRUM Básico</option>
        </select>
    </div>
    <br>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>