<?php if ($view->position()->exists('navbar')): ?>
  <?= $view->position('navbar' , 'theme:views/theme/positions/position_blank.php') ?>
<?php endif; ?>

<?php if ($view->menu()->exists('second')): ?>
  <div class="uk-navbar-item">
    <a href="#second-menu" uk-toggle><i uk-icon="more-vertical"></i></a>
  </div>

  <div id="second-menu" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-height-viewport uk-flex uk-flex-middle uk-flex-center">
          <?= $view->menu('second' , 'theme:views/theme/navbar/nav.php') ?>
        </div>
    </div>
  </div>
<?php endif; ?>
