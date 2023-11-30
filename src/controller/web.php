<?php

namespace Routes\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Web {
  public $template = null;

  public function __construct() {
    $this->template = new Engine(TEMPLATES, 'php');
  }

  public function renderPage(Request $request, Response $response){
    $content = $this->template->render('index');

    $response->getBody()->write($content);

    return $response;
  }

  public function rootPage(Request $request, Response $response) {
    $form = '
      <form method="post" action="/create-user">
        <div>
          <input type="text" name="nome" placeholder="Nome">
        </div>
        <div>
          <input type="email" name="email" placeholder="E-mail">
        </div>
        <div>
          <input type="password" name="senha" placeholder="Senha">
        </div>
        <div>
          <input type="submit" value="cadastrar">
        </div>
      </form>
    ';

    // var_dump($this->template);
    $response->getBody()->write($form);
    return $response;
  }

  public function createUser(Request $request, Response $response){
    $content = $this->template->render('index', $_POST);

    $response->getBody()->write($content);

    return $response;
  }
}