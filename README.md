Trabalho 3 - Metodologias Ágeis

TASIMA - Tecnologias Aplicadas a Sistemas de Informação com Métodos Ágeis - Uniritter

Professor: Daniel Wildt; Aluno: Gelson W. Gonçalves

Tarefas:
- Efetuar deploy automático utilizando o heroku;
  - Heroku deve estar configurado para fazer deploy automático integrado ao GitHub. Ou seja, ao ser dado algum commit no projeto do GitHub, o Heroku deve efetuar uma build da aplicação;
- Realizar algum tipo de teste unitário;

Tecnologias utilizadas:
Heroku;
GitHub;
PHP;
PHP Composer;
PHPUnit;

Descrição:
Estou ajustando ainda.
Eu não tenho experiência com esta infraestrutura toda. Tem sido bastante gratificante aprender esta tecnologia
e eu pretendo dar continuidade no exercício para tentar colocar isso em prática de alguma forma.
Ainda falta efetuar o teste da aplicação.

Roteiro incialmente utilizado:
# php-getting-started

A barebones PHP app that makes use of the [Silex](http://silex.sensiolabs.org/) web framework, which can easily be deployed to Heroku.

This application supports the [Getting Started with PHP on Heroku](https://devcenter.heroku.com/articles/getting-started-with-php) article - check it out.

## Deploying

Install the [Heroku Toolbelt](https://toolbelt.heroku.com/).

```sh
$ git clone git@github.com:heroku/php-getting-started.git # or clone your own fork
$ cd php-getting-started
$ heroku create
$ git push heroku master
$ heroku open
```

or

[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

## Documentation

For more information about using PHP on Heroku, see these Dev Center articles:

- [Getting Started with PHP on Heroku](https://devcenter.heroku.com/articles/getting-started-with-php)
- [PHP on Heroku](https://devcenter.heroku.com/categories/php)
