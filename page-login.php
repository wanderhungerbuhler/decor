<?php
// Template Name: Login
get_header();
?>

  <div class="login">
    <div class="logo"></div>
    <form class="form-login" action="">
      <input class="inputs-login" type="text" name="email" id="email" placeholder="Digite seu e-mail">
      <input class="inputs-login" type="password" name="senha" id="senha" placeholder="Digite sua senha">
      <button class="btn-acesso" type="submit">Acessar</button>
    </form>
  </div>

<?php get_footer(); ?>