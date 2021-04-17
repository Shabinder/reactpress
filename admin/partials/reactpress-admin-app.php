<?php

/**
 * Provide a view for an sinlge react app in the admin
 *
 * @link       https://rockiger.com
 * @since      1.0.0
 *
 * @package    Reactpress
 * @subpackage Reactpress/admin/partials
 */
?>

<div id="<?php echo $appname ?>" class="card col flex fullwidth m0 p2">
  <h3 class="title flex m0 mb-05 row"><?php echo REPR_REACT_ICON_SVG ?><?php echo $appname ?></h3>
  <table class="form-table" role="presentation">
  <tbody>
      <tr>
        <th scope="row">URL Slug</th>
        <td>
          <div id="link-to-slug-<?php echo $appname ?>">
            <?php if(!$pageslug): ?>
              <i class="fg-grey inline-block lh1 pt05">Not set.</i>
            <?php else: ?>
            <a class="inline-block lh1 pt05" href="<?php echo $pageslug ?>"><?php echo $pageslug ?></a>
            <?php endif ?>
            <button class="button button-icon button-link-to-slug" data-appname="<?php echo $appname?>">
              <span class="dashicons dashicons-edit" data-appname="<?php echo $appname?>"></span>
            </button>
          </div>
          <div id="edit-slug-<?php echo $appname ?>" style="display: none;">
            <input id="edit-slug-input-<?php echo $appname ?>" type="text" value="<?php echo $pageslug ?>"/> 
            <button class="button button-primary button-edit-slug-save" id="edit-slug-save-<?php echo $appname ?>" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Save</button> 
            <button class="button button-link button-edit-slug-cancel ml025" id="edit-slug-cancel-<?php echo $appname ?>" data-appname="<?php echo $appname ?>">Cancel</button>
          </div>
        </td>
      </tr>
      <tr>
        <th scope="row">Type</th>
        <td>
          <span style="text-transform: capitalize;"> <?php echo esc_html($app['type']) ?></span>
        </td>
      </tr>
    <?php if ($app['type'] === 'development') : ?>
      <tr>
        <th scope="row">Update Dev-Environtment</th>
        <td>
          <button class="button button-primary button-update" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Update Dev-Environment</button>
      <span id="rp-start-spinner-<?php echo $appname ?>" class="crpw-button-spinner spinner"></span>
      <p class="description">Update the <code>index.html</code> of your local react dev environment.</p>
      
        </td>
      </tr>
      <tr>
        <th scope="row">Build App</th>
        <td>
            <span id="rp-build-spinner-<?php echo $appname ?>" class="crpw-button-spinner spinner"></span>
      <button class="button button-build mr025" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Build App</button>
      <p class="description">Build the app. All changes are reflected at the given slug.</p>

        </td>
      </tr>
      <?php endif; ?>
      </tbody>
  </table>
  <div><button class="button-link button-delete" data-appname="<?php echo $appname ?>" data-pageslug="<?php echo $pageslug ?>">Delete App</button></div>
</div>