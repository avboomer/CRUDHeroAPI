<?php 
    //include_once 'PHPActions/ConexaoBD.php';
	include_once 'Includes/Header.php';
	//include_once 'includes/mensagem.php';
?>   
    <div class="container">
        <h3>Sistema de Gerenciamento de Heróis (SGH)</h1>
        <div class="row">
            <form action="HeroAPI/V1/API.php?apicall=getheroes" method="POST">
                <button type="submit" name="m_btn_pesquisar" class="btn waves-effect waves-light col s2 offset-s5">Listar heróis</button>
            </form>
        </div>
        <div class="divider"></div>
        <div class="row">
            <h4>Criar herói</h4>
            <form action="HeroAPI/V1/API.php?apicall=createhero" method="POST">
                <div class="col s3">
                    <div class="input-field">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" id="nome" class="validate" required>
                    </div>
                </div>
                <div class="col s3">
                    <div class="input-field">
                        <label for="nome_verdadeiro">Nome Verdadeiro</label>
                        <input type="text" name="realname" id="nome_verdadeiro" class="validate" required>
                    </div>
                </div>
                <div class="col s3">
                    <div class="input-field">
                        <label for="classificacao">Classificação</label>
                        <input type="text" name="rating" id="classificacao" class="validate" required>
                    </div>
                </div>
                <div class="col s3">
                    <div class="input-field">
                        <label for="afiliacao">Afiliação</label>
                        <input type="text" name="teamaffiliation" id="afiliacao" class="validate" required>
                    </div>
                </div>
                
                <div class="">
                    <button type="submit" name="m_btn_criar" class="btn waves-effect waves-light col s2 offset-s5">Criar herói</button>
                </div>
            </form>
        </div>

        <div class="divider"></div>

        <div class="row">
            <h4>Alterar herói</h4>
            <form action="HeroAPI/V1/API.php?apicall=updatehero" method="POST">
                <div class="col s2">
                    <div class="input-field">
                        <label for="id">ID</label>
                        <input type="text" name="id" id="id" required>
                    </div>
                </div>
                <div class="col s2">
                    <div class="input-field">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" id="nome" required>
                    </div>
                </div>
                <div class="col s2">
                    <div class="input-field">
                        <label for="nome_verdadeiro">Nome Verdadeiro</label>
                        <input type="text" name="realname" id="nome_verdadeiro" required>
                    </div>
                </div>
                <div class="col s2">
                    <div class="input-field">
                        <label for="classificacao">Classificação</label>
                        <input type="text" name="rating" id="classificacao" required>
                    </div>
                </div>
                <div class="col s3">
                    <div class="input-field">
                        <label for="afiliacao">Afiliação</label>
                        <input type="text" name="teamaffiliation" id="afiliacao" required>
                    </div>
                </div>

                <div class="">
                    <button type="submit" name="m_btn_alterar" class="btn waves-effect waves-light col s2 offset-s5">Alterar herói</button>
                </div>
            </form>
        </div>

        <div class="divider"></div>

        <div class="row">
            <h4>Excluir herói</h4>
            <form action="HeroAPI/V1/API.php" method="GET">
                <div class="col s2 offset-s4">
                    <div class="input-field">
                        <label for="identificacao">ID</label>
                        <input type="hidden" name="apicall" value="deletehero">
                        <input type="text" name="id" id="identificacao" required>
                    </div>
                </div>

                <div class="">
                    <button type="submit" class="btn waves-effect waves-light col s2">Excluir herói</button>
                </div>
            </form>

            
        </div>
    </div>
    
<?php 
	include_once 'includes/footer.php';
?>