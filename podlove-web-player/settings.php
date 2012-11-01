<?php function podlove_pwp_settings_page() { ?>

<div class="wrap">
<h2>Podlove Web Player Options</h2>

<p>See <a href="http://mediaelementjs.com/">MediaElementjs.com</a> for more details on how the HTML5 player and Flash fallbacks work.</p>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

  <h3 class="title"><span>General Settings</span></h3>

  <table class="form-table">
    <tr valign="top">
      <th scope="row">
        <label for="pwp_script_on_demand">Load Script on Demand</label>
      </th>
      <td>
        <input name="pwp_script_on_demand" type="checkbox" id="pwp_script_on_demand" <?php echo (get_option('pwp_script_on_demand') == true ? "checked" : "")  ?>>
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">
        <label for="pwp_enclosure_detect">Auto-detect enclosures in posts</label>
        <br>
        <label for="pwp_enclosure_force">Force enclosure players</label>
        
      </th>
      <td>
        <input name="pwp_enclosure_detect" type="checkbox" id="pwp_enclosure_detect" <?php echo (get_option('pwp_enclosure_detect') == true ? "checked" : "")  ?>>
        <br>
        <input name="pwp_enclosure_force" type="checkbox" id="pwp_enclosure_force" <?php echo (get_option('pwp_enclosure_force') == true ? "checked" : "")  ?>> <label for="pwp_enclosure_force">… additionally to shortcode instances</label>
        
      </td>
    </tr>
    
  </table>


  <h3 class="title"><span>Video Settings</span></h3>

  <table class="form-table">
    <tr valign="top">
      <th scope="row">
        <label for="pwp_default_video_width">Default Width</label>
      </th>
      <td>
        <input name="pwp_default_video_width" id="pwp_default_video_width" value="<?php echo get_option('pwp_default_video_width'); ?>">
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">
        <label for="pwp_default_video_height">Default Height</label>
      </th>
      <td>
        <input name="pwp_default_video_height" id="pwp_default_video_height" value="<?php echo get_option('pwp_default_video_height'); ?>">
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">
        <label for="pwp_default_video_type">Default Type</label>
      </th>
      <td>
        <input name="pwp_default_video_type" id="pwp_default_video_type" value="<?php echo get_option('pwp_default_video_type'); ?>"> <span class="description">such as "video/mp4"</span>
      </td>
    </tr>
  </table>


  <h3 class="title"><span>Audio Settings</span></h3>

  <table class="form-table">
    <tr valign="top">
    <tr valign="top">
      <th scope="row">
        <label for="pwp_default_audio_width">Default Width</label>
      </th>
      <td>
        <input name="pwp_default_audio_width" id="pwp_default_audio_width" value="<?php echo get_option('pwp_default_audio_width'); ?>" />
      </td>
    </tr>
    <tr valign="top">
      <th scope="row">
        <label for="pwp_default_audio_height">Default Height</label>
      </th>
      <td>
        <input name="pwp_default_audio_height" id="pwp_default_audio_height" value="<?php echo get_option('pwp_default_audio_height'); ?>" />
      </td>
    </tr>
      <th scope="row">
        <label for="pwp_default_audio_type">Default Type</label>
      </th>
      <td>
        <input name="pwp_default_audio_type" id="pwp_default_audio_type" value="<?php echo get_option('pwp_default_audio_type'); ?>" /> <span class="description">such as "audio/mp3"</span>
      </td>
    </tr>
  </table>

  <input type="hidden" name="action" value="update">
  <input type="hidden" name="page_options" value="pwp_default_video_width,pwp_default_video_height,pwp_default_video_type,pwp_default_audio_type,pwp_default_audio_width,pwp_default_audio_height,pwp_video_skin,pwp_script_on_demand,pwp_enclosure_detect,pwp_enclosure_force,pwp_allow_embedding">

  <p>
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>">
  </p>

</form>

</div>

<?php } ?>