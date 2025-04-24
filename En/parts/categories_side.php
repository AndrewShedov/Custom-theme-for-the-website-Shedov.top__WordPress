<?php if ( $categories = get_categories(  )) : ?>
    <section class="categories_side_wrap">
      <div class="categories_side">
        <div class="categories_side_title">
          <h3>All categories</h3>
        </div>
        <ul class="categories_side_list">
          <?php foreach($categories as $cat) : ?>
           <li>
            <a href="<?php echo get_category_link( $cat )?>">
              <?php echo $cat ->name;?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
    </section>