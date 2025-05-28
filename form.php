    <?php
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    if (!empty($messages)) {
      print('<div id="messages">');
      foreach ($messages as $message) {
        print($message);
      }
      print('</div>');
    }
    ?>

    <form id="feedback-form" method="POST" enctype="multipart/form-data" class="contact-form">
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

      <div class="mb-2">           
        <input name="fio" type="text" placeholder="ФИО" 
          <?php if ($errors['fio']) {print 'class="error"';} ?> value="<?php print $values['fio']; ?>" class="form-control" required><br>
      </div>

      <div class="mb-2">
         <input name="telephone" type="tel" placeholder="Номер телефона"
          <?php if ($errors['telephone']) {print 'class="error"';} ?> value="<?php print $values['telephone']; ?>" class="form-control" required><br>                   
      </div>
      
      <div class="mb-2">
         <input name="email" type="email" placeholder="Email@mail.mail"
          <?php if ($errors['email']) {print 'class="error"';} ?> value="<?php print $values['email']; ?>" class="form-control" required><br>                   
      </div>
      

      <small> Дата рождения:<br></small> 
      <div class="mb-2">
        <input name="dateOfBirth" type="date"
          <?php if ($errors['dateOfBirth']) {print 'class="error"';} ?> value="<?php print $values['dateOfBirth']; ?>" class="form-control" required><br>                   
      </div>
      

      <div class="mb-2 <?php if ($errors['radio']) {print ' error';} ?>">
        <label><input class="radio" name="radio" checked="checked" type="radio" value="female" class="form-control" required>Женский</label>
        <label><input class="radio" name="radio" type="radio" value="male" class="form-control" required>Мужской</label><br>                  
      </div>
      
      <small> Любимый язык программирования</small>
      <br>
      <div class="mb-2 <?php if ($errors['abilities']) {print ' error';} ?>">
        <select style="width: 100px; height:250px" id="abilities" name="abilities[]" multiple="multiple">
            <?php 
              print_r($values);
              foreach ($abilities as $key => $value) {
                $selected = $values[$key];
                printf('<option value="%s"', $key);
                if(!empty($selected)){
                  print(' selected ');
                }
                printf('>%s</option>', $value);
              } 
            ?>
        </select>                   
      </div><br>
        
      <div class="mb-2 <?php if ($errors['bio']) {print ' error';} ?>">
        <textarea id="bio" name="bio"class="form-control" name="message" id="message" placeholder="Биография" rows="3"><?php print htmlspecialchars($values['bio']); ?></textarea>                
      </div><br>

      <div class="form-check mb-3 <?php if ($errors['check']) {print ' error';} ?>">
        <input class="form-check-input" name="check" type="checkbox" id="agreeCheckbox" checked="checked" required>
        <label class="form-check-label" for="agreeCheckbox">
           С контрактом ознакомлен(а)      
        </label>               
      </div><br>

      <button type="submit" name="send" class="btn btn-danger w-100">Отправить</button>

      <div id="feedback-result" class="result"></div>
    </form>