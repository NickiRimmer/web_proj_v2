
<html>

<head>
  <style>
    .error {
      border: 2px solid red;
    }
  </style>
</head>

<body>
  <br>
  <a href="login.php" style="position: absolute; top: 0; right: 0;">
  <?php
  if (empty($_COOKIE[session_name()]))
    echo 'Войти';
  else
    echo 'Выйти';
  ?>
  </a>

  <?php
  if (!empty($messages)) {
    print('<div id="messages">');
    foreach ($messages as $message) {
      print("<div>" . $message . "<br></div>");
    }
    print('</div>');
  }
  ?>

<form id="feedback-form" method="POST" enctype="multipart/form-data" class="contact-form">
                        <div class="mb-2">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="mb-2">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Телефон" required>
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                        </div>
                        <div class="mb-2">
                            <textarea class="form-control" name="message" id="message" placeholder="Ваш комментарий" rows="3"></textarea>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="agreeCheckbox" required>
                            <label class="form-check-label" for="agreeCheckbox">
                                  Отправляя заявку, я даю согласие на обработку своих персональных данных.
                            </label>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Свяжитесь с нами</button>
                    </form>
                    <div id="feedback-result" class="result"></div>


  <form id="feedback-form" method="POST" enctype="multipart/form-data" class="contact-form">

      <input type="text" name="fio"
        <?php if ($errors['fio']) {
          print 'class="error"';
        } ?>
        value="<?php print $values['fio']; ?>" />
      <br>
    </label>
    <label>
      Телефон:
      <input type="text" name="phone"
        <?php if ($errors['phone']) {
          print 'class="error"';
        } ?>
        value="<?php print $values['phone']; ?>" />
      <br>
    </label>
    <label>
      Почта:
      <input type="email" name="email"
        <?php if ($errors['email']) {
          print 'class="error"';
        } ?>
        value="<?php print $values['email']; ?>" />
      <br>
    </label>
    <label>
      Дата рождения:
      <input type="date" name="dbirth"
        <?php if ($errors['dbirth']) {
          print 'class="error"';
        } ?>
        value="<?php print $values['dbirth']; ?>" />
    </label><br>

    <label <?php if ($errors['sex']) {
              print 'class="error"';
            } ?>>
      Пол:<br>
      <label><input type="radio"
          <?php if (!$errors['sex'] && $values['sex'] != 1) {
            print 'checked="checked"';
          } ?>
          name="sex" value="fem">Женский</label>
      <label><input type="radio"
          <?php if ($values['sex'] == '1') {
            print 'checked="checked"';
          } ?>
          name="sex" value="male">Мужской</label><br>
    </label>
    
    <label>
      Способности в языках:<br>
      <select style="width: 100px; height:250px" name="abilities[]" multiple="multiple">
        <?php
        foreach ($languages as $key => $name) {
          echo "<option value=\"$key\"";
          if (!empty($abilities_values[$key])) {
            echo " selected";
          }
          echo ">$name</option>";
        }
        ?>
      </select>
    </label>
    <br>
    <label
      <?php if ($errors['bio']) {
        print 'class="error"';
      } ?>>
      Биография:<br>
      <textarea name="bio"><?php print $values['bio']; ?></textarea>
    </label><br>

    <label>
      Согласен с обработкой персональных данных
      <input type="checkbox" name="agree"
        <?php if ($errors['agree']) {
          print 'class="error"';
        } ?>
        value="1"
        <?php if (!empty($values['agree'])) print('checked'); ?> />
      <br>
    </label>

    <input type="submit" value="ok" />
  </form>
</body>

</html>