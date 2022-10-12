<?php
// se na url existe a variável id
if (isset($_GET['id'])) {

  $id = $_GET['id'];

  // garante q a id seja um valor numérico
  if (preg_match('/\D+/', $id)) {

    // define o statusCode de erro
    http_response_code(404);
    die(json_encode('id inválida'));
  }

  // exemplo de montagem de query
  $query = "select * from table where id = $id";

  // exemplo de retorno de dados
  die(json_encode([
    'query' => $query,
    'data' => 'outros dados',
    'etc' => 'etc'
  ]));
}
