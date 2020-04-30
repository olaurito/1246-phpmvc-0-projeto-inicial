<?php include __DIR__ . '/../inicio-html.php'; ?>
    <form action="/realiza-login" method="post">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control"> <!--  vinicius@alura.com.br -->
        </div>
        <div class="form-group"> <!-- 123456 -->
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <button class="btn btn-primary">
            Entrar
        </button>
    </form>
<?php include __DIR__ . '/../fim-html.php'; ?>