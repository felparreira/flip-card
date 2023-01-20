<?php
    include_once('includes/header.php');
?>

<div class="container">
        <div class="produtos">
            <div class="img_prod1">
                <img class="img_prod" src="/img/produto1.jpg">
            </div>
            <div class="col-md-4">
                <h5>Título Produto 1</h5>            
                <p>Texto explicando os detalhes do produtos ou elemento exibido na imagem acima.</p> 
                <button id="btn-info1" data-toggle="modal" data-target="#modal-info1">Saiba Mais</button>
            </div>
        </div>
        
        <div class="produtos">
            <div class="img_prod2">
                <img class="img_prod" src="/img/produto-back.jpg">
            </div>
            <div>
                <h5>Título Produto 2</h5>            
                <p>Texto explicando os detalhes do produtos ou elemento exibido na imagem acima.</p>
                <button id="btn-info2" data-toggle="modal" data-target="#modal-info2">Saiba Mais</button>
            </div>
        </div>

        <div class="produtos">
            <div class="img_prod3">
                <img class="img_prod" src="/img/produto1.jpg">                
            </div>
            <div>
                <h5>Título Produto 3</h5>            
                <p>Texto explicando os detalhes do produtos ou elemento exibido na imagem acima.</p>
                <button id="btn-info3" data-toggle="modal" data-target="#modal-info3">Saiba Mais</button>
            </div>
        </div>
</div>

<!-- Modal Produto 1-->
<div class="modal" role="dialog" id="modal-info1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="/img/produto1.jpg" alt="Imagem Produto">
                        </div>
                        <div class="flip-box-back">
                            <img src="/img/produto-back.jpg" alt="Imagem Produto">
                        </div>
                    </div>
                </div>
                <div class="modal-text">
                    <h5>Título do Produto 1</h5>
                    <p>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    </p>
                    <hr></br>
                    <button class="btn-close" id="btn-info1" data-toggle="modal" data-target="#modal-info1">Fechar</button>
                </div>                
            </div>            
        </div>
    </div>
</div>
<!-- Modal Produto 2-->
<div class="modal" role="dialog" id="modal-info2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="/img/produto1-back.jpg" alt="Imagem Produto">
                        </div>
                        <div class="flip-box-back">
                            <img src="/img/produto1.jpg" alt="Imagem Produto">
                        </div>
                    </div>
                </div>
                <div class="modal-text">
                    <h5>Título do Produto 2</h5>
                    <p>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    </p>
                    <hr></br>
                    <button class="btn-close" id="btn-info2" data-toggle="modal" data-target="#modal-info2">Fechar</button>
                </div>                
            </div>            
        </div>
    </div>
</div>
<!-- Modal Produto 3-->
<div class="modal" role="dialog" id="modal-info3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="/img/produto1.jpg" alt="Imagem Produto">
                        </div>
                        <div class="flip-box-back">
                            <img src="/img/produto-back.jpg" alt="Imagem Produto">
                        </div>
                    </div>
                </div>
                <div class="modal-text">
                    <h5>Título do Produto 3</h5>
                    <p>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    Texto explicando os detalhes do produtos ou elemento exibido na imagem ao lado.</br>
                    </p>
                    <hr></br>
                    <button class="btn-close" id="btn-info3" data-toggle="modal" data-target="#modal-info3">Fechar</button>
                </div>                
            </div>            
        </div>
    </div>
</div>

<?php
    include_once('includes/footer.php');
?>