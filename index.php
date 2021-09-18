<?php 
    //include_once 'PHPActions/ConexaoBD.php';
	include_once 'Includes/Header.php';
	//include_once 'includes/mensagem.php';
?>   
    <h1>Sistema de Gerenciamento de Heróis (SGH)</h1>
    <h2>Criar herói</h2>
    <form action="HeroAPI/V1/API.php?apicall=createhero" method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="name" id="nome">
        </div>
        <div>
            <label for="nome_verdadeiro">Nome Verdadeiro</label>
            <input type="text" name="realname" id="nome_verdadeiro">
        </div>
        <div>
            <label for="classificacao">Classificação</label>
            <input type="text" name="rating" id="classificacao">
        </div>
        <div>
            <label for="afiliacao">Afiliação</label>
            <input type="text" name="teamaffiliation" id="afiliacao">
        </div>
        
        <button type="submit" name="m_btn_criar">Criar herói</button>
    </form>

    <h2>Pesquisar heróis</h2>
    <form action="HeroAPI/V1/API.php?apicall=getheroes" method="POST">
        <button type="submit" name="m_btn_pesquisar">Pesquisar heróis</button>
    </form>

    <h2>Alterar herói</h2>
    <form action="HeroAPI/V1/API.php?apicall=updatehero" method="POST">
        <div>
            <label for="id">ID</label>
            <input type="text" name="id" id="id">
        </div>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="name" id="nome">
        </div>
        <div>
            <label for="nome_verdadeiro">Nome Verdadeiro</label>
            <input type="text" name="realname" id="nome_verdadeiro">
        </div>
        <div>
            <label for="classificacao">Classificação</label>
            <input type="text" name="rating" id="classificacao">
        </div>
        <div>
            <label for="afiliacao">Afiliação</label>
            <input type="text" name="teamaffiliation" id="afiliacao">
        </div>

        <button type="submit" name="m_btn_criar">Alterar herói</button>
    </form>

    <h2>Excluir herói</h2>
    <form action="HeroAPI/V1/API.php" method="GET">
        <div>
            <label for="identificacao">ID</label>
            <input type="hidden" name="apicall" value="deletehero">
            <input type="text" name="id" id="identificacao">
        </div>

        <button type="submit">Excluir herói</button>
    </form>
<?php 
	include_once 'includes/footer.php';
?>