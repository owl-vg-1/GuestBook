<?php
?>

<form class="feedback" action="index.php.<?=$targettURL?>"  method="post">
  <div class="form-row">
    <div class="col">
      <input type="text" name="name" class="form-control" placeholder="Представьтесь, пожалуйста">
    </div>
  </div>
    <div class="form-group">
        <label for="recipient-mail" class="col-form-label">Ваш email:</label>
        <input type="email" name="email" id="recipient-mail" class="form-control" placeholder="example@mail.ru">
    </div>
    <div class="form-group">
        <label for="recipient-phone" class="col-form-label">Ваш телефон:</label>
        <input type="text" id="recipient-phone" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="message-text" class="col-form-label">Сообщение:</label>
        <textarea name="message" id="message-text" class="form-control"></textarea>
    </div>
  <button type="submit" class="btn btn-primary">Оставить отзыв</button>
</form>