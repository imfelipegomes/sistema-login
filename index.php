<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
  <div class="login">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <div class="card">
          <div class="card-body">
            <div class="card-body">
            <h3>Acesse sua conta</h3>
              </div>
          <form action="login.php" method="POST">
          <div>
            <div class="mb-3">
              <label>Usuário</label>
              <input type="text" name="usuario" class="form-control">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control">
            </div>
          </div>
          <div>
            <div class="mb-3">
            <button type="submit" class="btn">Entrar</button>
            </div>
          </div>
        </form>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>