<li>
    <a href="">
        <?= $category['name'] ?>
        <?php if(isset($category['childs'])): ?>
            <span class="badge pull-right">
              <i class="fa fa-plus"></i>
            </span>
    </a>
<?php endif ?>

        <?php if(isset($category['childs'])): ?>
            <ul>
                <?= $this->getMenuHtml($category['childs']) ?>
            </ul>
        <?php endif ?>

</li>


