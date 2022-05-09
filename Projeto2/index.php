<?php include "head.php"; ?>
<?php include "menu.php"; ?>

<section id="cadastro">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Cadastro de Clientes</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid col-md-6" id="form">
        <form class="row g-3" method="post" 
        action="_scripts/salvar.php">
            <div class="col-md-12">
                <label for="nome" class="form-label ">Nome</label>
                <input type="text" class="form-control caixa" name="nome" id="nome" required>
            </div>
             
            <div class="col-md-12">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control caixa" onblur="validarCPF(this);" maxlength ="14" name="cpf" id="cpf" required>
                
              </div>

            <div class="col-md-12">
              <label for="inputEmail" class="form-label">
                E-mail:
              </label>
              <input type="email" class="form-control caixa" id="inputEmail" name="email" required>
            </div>
            <div class="col-md-12">
              <label for="inputCep" class="form-label">
                CEP:
              </label>
              <input type="text" name="cep" id="cep" onblur="pesquisacep(this.value);"  maxlength="9" class="form-control caixa"  required>
            </div>
            <div class="col-md-12">
              <label for="inputRua" class="form-label">Rua:</label>
              <input type="text" name="rua" id="rua" class="form-control caixa" readonly>
            </div>
            <div class="col-md-12">
              <label for="inputBairro" class="form-label">Bairro:</label>
              <input type="text" name="bairro" id="bairro" class="form-control caixa" readonly>
            </div>
            <div class="col-md-12">
              <label for="inputCidade" class="form-label">Cidade:</label>
              <input type="text" name="cidade" id="cidade" class="form-control caixa" readonly>
            </div>
            <div class="col-md-12">
              <label for="estado" class="form-label">Estado</label>
              <input name="estado" type="text" class="form-control caixa" required readonly id="estado" size="60" />
            </div>

            <div class="col-md-12">
              <label for="situacao" class="form-label ">Situação</label>
              <select class="form-control caixa" name="situacao">
                <option value="">-</option>
                <option value="ATIVO">ATIVO</option>
                <option value="DESATIVADO">DESATIVADO</option>
              </select>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>





        </form>
    </div>
</section>

<?php include "js.php"; ?>
<?php include "footer.php"; ?>