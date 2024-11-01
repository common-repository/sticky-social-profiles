<?php
$options = $sp_core_loader->settings;
//foreach ($options as $k => $v) {
//    echo "'".$k."'=>'".$v."',<br/>";
//}
//exit();
//var_dump($options);
//exit();
?>


<div class="sp-wrapper wrap sct-wordpress-<?php echo SCS_WP_VERSION; ?>">
<div class="sp-header">
<h2>
    <?php _e("Social Profiles", "social-profiles"); ?>
    <span class="sct-version"> | <?php echo $sp_core_loader->get('__version__'); ?></span></h2>
    <p class="promo-txt">Most popular social plugins in one extenision. Facebook, Twitter, LinkedIn, YouTube, Google+</p>
</div>
<form id="SSForm" method="post">

<?php settings_fields('social-profiles'); ?>

<input type="hidden" name="Config" value="1" />
<div id="STabs">
<ul>
    <li><a href="#Social"><strong>Social</strong></a></li>
    <li><a href="#Settings"><strong>Settings</strong></a></li>

</ul>

<div id="Social">

<!-- Section -->
<h3>Facebook</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Facebook</span></legend>

            <label for="EnableFB">
                <input name="FacebookEnable" <?php echo  ($options['FacebookEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableFB" value="1" />
                Enabled
            </label>
            <label for="DisableFB">
                <input name="FacebookEnable" <?php echo  ($options['FacebookEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableFB" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="FacebookURL">Facebook Page URL</label></th>
    <td><input name="FacebookURL" type="text" id="FacebookURL" value="<?php echo  $options['FacebookURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section -->
<h3>Twitter</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Twitter</span></legend>

            <label for="EnableTwitter">
                <input name="TwitterEnable" <?php echo  ($options['TwitterEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableTwitter" value="1" />
                Enabled
            </label>
            <label for="DisableTwitter">
                <input name="TwitterEnable" <?php echo  ($options['TwitterEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableTwitter" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="FacebookPageURL">Twitter Page URL</label></th>
    <td><input name="TwitterURL" type="text" id="TwitterURL" value="<?php echo  $options['TwitterURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section -->
<h3>VK</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable LinkedIn</span></legend>

            <label for="EnableVK">
                <input name="VKEnable" <?php echo  ($options['VKEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableVK" value="1" />
                Enabled
            </label>
            <label for="DisableVK">
                <input name="VKEnable" <?php echo  ($options['VKEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableVK" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="VKPageURL">VK Page URL</label></th>
    <td><input name="VKURL" type="text" id="VKURL" value="<?php echo  $options['VKURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>


<!-- Section -->
<h3>Linkedin</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Linkedin</span></legend>

            <label for="EnableLinkedin">
                <input name="LinkedinEnable" <?php echo  ($options['LinkedinEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableLinkedin" value="1" />
                Enabled
            </label>
            <label for="DisableLinkedin">
                <input name="LinkedinEnable" <?php echo  ($options['LinkedinEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableLinkedin" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LinkedinPageURL">Linkedin Page URL</label></th>
    <td><input name="LinkedinURL" type="text" id="LinkedinURL" value="<?php echo  $options['LinkedinURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>


<!-- Section Lastfm -->
<h3>Lastfm</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Lastfm</span></legend>

            <label for="EnableLastfm">
                <input name="LastfmEnable" <?php echo  ($options['LastfmEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableLastfm" value="1" />
                Enabled
            </label>
            <label for="DisableLastfm">
                <input name="LastfmEnable" <?php echo  ($options['LastfmEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableLastfm" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LastfmPageURL">Lastfm Page URL</label></th>
    <td><input name="LastfmURL" type="text" id="LastfmURL" value="<?php echo  $options['LastfmURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>




<!-- Section Flickr -->
<h3>Flickr</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Flickr</span></legend>

            <label for="EnableFlickr">
                <input name="FlickrEnable" <?php echo  ($options['FlickrEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableFlickr" value="1" />
                Enabled
            </label>
            <label for="DisableFlickr">
                <input name="FlickrEnable" <?php echo  ($options['FlickrEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableFlickr" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="FlickrPageURL">Flickr Page URL</label></th>
    <td><input name="FlickrURL" type="text" id="FlickrURL" value="<?php echo  $options['FlickrURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>




<!-- Section Instagram -->
<h3>Instagram</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Instagram</span></legend>

            <label for="EnableInstagram">
                <input name="InstagramEnable" <?php echo  ($options['InstagramEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableInstagram" value="1" />
                Enabled
            </label>
            <label for="DisableInstagram">
                <input name="InstagramEnable" <?php echo  ($options['InstagramEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableInstagram" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="InstagramPageURL">Instagram Page URL</label></th>
    <td><input name="InstagramURL" type="text" id="InstagramURL" value="<?php echo  $options['InstagramURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section GooglePlus -->
<h3>GooglePlus</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable GooglePlus</span></legend>

            <label for="EnableGooglePlus">
                <input name="GooglePlusEnable" <?php echo  ($options['GooglePlusEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableGooglePlus" value="1" />
                Enabled
            </label>
            <label for="DisableGooglePlus">
                <input name="GooglePlusEnable" <?php echo  ($options['GooglePlusEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableGooglePlus" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="GooglePlusPageURL">GooglePlus Page URL</label></th>
    <td><input name="GooglePlusURL" type="text" id="GooglePlusURL" value="<?php echo  $options['GooglePlusURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Foursquare -->
<h3>Foursquare</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Foursquare</span></legend>

            <label for="EnableFoursquare">
                <input name="FoursquareEnable" <?php echo  ($options['FoursquareEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableFoursquare" value="1" />
                Enabled
            </label>
            <label for="DisableFoursquare">
                <input name="FoursquareEnable" <?php echo  ($options['FoursquareEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableFoursquare" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="FoursquarePageURL">Foursquare Page URL</label></th>
    <td><input name="FoursquareURL" type="text" id="FoursquareURL" value="<?php echo  $options['FoursquareURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Vimeo -->
<h3>Vimeo</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Vimeo</span></legend>

            <label for="EnableVimeo">
                <input name="VimeoEnable" <?php echo  ($options['VimeoEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableVimeo" value="1" />
                Enabled
            </label>
            <label for="DisableVimeo">
                <input name="VimeoEnable" <?php echo  ($options['VimeoEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableVimeo" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="VimeoPageURL">Vimeo Page URL</label></th>
    <td><input name="VimeoURL" type="text" id="VimeoURL" value="<?php echo  $options['VimeoURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Github -->
<h3>Github</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Github</span></legend>

            <label for="EnableGithub">
                <input name="GithubEnable" <?php echo  ($options['GithubEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableGithub" value="1" />
                Enabled
            </label>
            <label for="DisableGithub">
                <input name="GithubEnable" <?php echo  ($options['GithubEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableGithub" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="GithubPageURL">Github Page URL</label></th>
    <td><input name="GithubURL" type="text" id="GithubURL" value="<?php echo  $options['GithubURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Odnoklassniki -->
<h3>Odnoklassniki</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Odnoklassniki</span></legend>

            <label for="EnableOdnoklassniki">
                <input name="OdnoklassnikiEnable" <?php echo  ($options['OdnoklassnikiEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableOdnoklassniki" value="1" />
                Enabled
            </label>
            <label for="DisableOdnoklassniki">
                <input name="OdnoklassnikiEnable" <?php echo  ($options['OdnoklassnikiEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableOdnoklassniki" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="OdnoklassnikiPageURL">Odnoklassniki Page URL</label></th>
    <td><input name="OdnoklassnikiURL" type="text" id="OdnoklassnikiURL" value="<?php echo  $options['OdnoklassnikiURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section MailRu -->
<h3>MailRu</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable MailRu</span></legend>

            <label for="EnableMailRu">
                <input name="MailRuEnable" <?php echo  ($options['MailRuEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableMailRu" value="1" />
                Enabled
            </label>
            <label for="DisableMailRu">
                <input name="MailRuEnable" <?php echo  ($options['MailRuEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableMailRu" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="MailRuPageURL">MailRu Page URL</label></th>
    <td><input name="MailRuURL" type="text" id="MailRuURL" value="<?php echo  $options['MailRuURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Dribble -->
<h3>Dribble</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Dribble</span></legend>

            <label for="EnableDribble">
                <input name="DribbleEnable" <?php echo  ($options['DribbleEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableDribble" value="1" />
                Enabled
            </label>
            <label for="DisableDribble">
                <input name="DribbleEnable" <?php echo  ($options['DribbleEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableDribble" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="DribblePageURL">Dribble Page URL</label></th>
    <td><input name="DribbleURL" type="text" id="DribbleURL" value="<?php echo  $options['DribbleURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section CloudSound -->
<h3>SoundCloud</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable SoundCloud</span></legend>

            <label for="EnableCloudSound">
                <input name="CloudSoundEnable" <?php echo  ($options['CloudSoundEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableCloudSound" value="1" />
                Enabled
            </label>
            <label for="DisableCloudSound">
                <input name="CloudSoundEnable" <?php echo  ($options['CloudSoundEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableCloudSound" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="CloudSoundPageURL">SoundCloud Page URL</label></th>
    <td><input name="CloudSoundURL" type="text" id="CloudSoundURL" value="<?php echo  $options['CloudSoundURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>


<!-- Section Rdio -->
<h3>Rdio</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Rdio</span></legend>

            <label for="EnableRdio">
                <input name="RdioEnable" <?php echo  ($options['RdioEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableRdio" value="1" />
                Enabled
            </label>
            <label for="DisableRdio">
                <input name="RdioEnable" <?php echo  ($options['RdioEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableRdio" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="RdioPageURL">Rdio Page URL</label></th>
    <td><input name="RdioURL" type="text" id="RdioURL" value="<?php echo  $options['RdioURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Tumblr -->
<h3>Tumblr</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Tumblr</span></legend>

            <label for="EnableTumblr">
                <input name="TumblrEnable" <?php echo  ($options['TumblrEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableTumblr" value="1" />
                Enabled
            </label>
            <label for="DisableTumblr">
                <input name="TumblrEnable" <?php echo  ($options['TumblrEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableTumblr" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="TumblrPageURL">Tumblr Page URL</label></th>
    <td><input name="TumblrURL" type="text" id="TumblrURL" value="<?php echo  $options['TumblrURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Yelp -->
<h3>Yelp</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Yelp</span></legend>

            <label for="EnableYelp">
                <input name="YelpEnable" <?php echo  ($options['YelpEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableYelp" value="1" />
                Enabled
            </label>
            <label for="DisableYelp">
                <input name="YelpEnable" <?php echo  ($options['YelpEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableYelp" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="YelpPageURL">Yelp Page URL</label></th>
    <td><input name="YelpURL" type="text" id="YelpURL" value="<?php echo  $options['YelpURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Pinterest -->
<h3>Pinterest</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Pinterest</span></legend>

            <label for="EnablePinterest">
                <input name="PinterestEnable" <?php echo  ($options['PinterestEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnablePinterest" value="1" />
                Enabled
            </label>
            <label for="DisablePinterest">
                <input name="PinterestEnable" <?php echo  ($options['PinterestEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisablePinterest" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="PinterestPageURL">Pinterest Page URL</label></th>
    <td><input name="PinterestURL" type="text" id="PinterestURL" value="<?php echo  $options['PinterestURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Behance -->
<h3>Behance</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Behance</span></legend>

            <label for="EnableBehance">
                <input name="BehanceEnable" <?php echo  ($options['BehanceEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableBehance" value="1" />
                Enabled
            </label>
            <label for="DisableBehance">
                <input name="BehanceEnable" <?php echo  ($options['BehanceEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableBehance" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="BehancePageURL">Behance Page URL</label></th>
    <td><input name="BehanceURL" type="text" id="BehanceURL" value="<?php echo  $options['BehanceURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Blogger -->
<h3>Blogger</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Blogger</span></legend>

            <label for="EnableBlogger">
                <input name="BloggerEnable" <?php echo  ($options['BloggerEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableBlogger" value="1" />
                Enabled
            </label>
            <label for="DisableBlogger">
                <input name="BloggerEnable" <?php echo  ($options['BloggerEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableBlogger" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="BloggerPageURL">Blogger Page URL</label></th>
    <td><input name="BloggerURL" type="text" id="BloggerURL" value="<?php echo  $options['BloggerURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section LiveJournal -->
<h3>LiveJournal</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable LiveJournal</span></legend>

            <label for="EnableLiveJournal">
                <input name="LiveJournalEnable" <?php echo  ($options['LiveJournalEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableLiveJournal" value="1" />
                Enabled
            </label>
            <label for="DisableLiveJournal">
                <input name="LiveJournalEnable" <?php echo  ($options['LiveJournalEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableLiveJournal" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="LiveJournalPageURL">LiveJournal Page URL</label></th>
    <td><input name="LiveJournalURL" type="text" id="LiveJournalURL" value="<?php echo  $options['LiveJournalURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section MySpace -->
<h3>MySpace</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable MySpace</span></legend>

            <label for="EnableMySpace">
                <input name="MySpaceEnable" <?php echo  ($options['MySpaceEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableMySpace" value="1" />
                Enabled
            </label>
            <label for="DisableMySpace">
                <input name="MySpaceEnable" <?php echo  ($options['MySpaceEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableMySpace" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="MySpacePageURL">MySpace Page URL</label></th>
    <td><input name="MySpaceURL" type="text" id="MySpaceURL" value="<?php echo  $options['MySpaceURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>



<!-- Section Delicious -->
<h3>Delicious</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Delicious</span></legend>

            <label for="EnableDelicious">
                <input name="DeliciousEnable" <?php echo  ($options['DeliciousEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableDelicious" value="1" />
                Enabled
            </label>
            <label for="DisableDelicious">
                <input name="DeliciousEnable" <?php echo  ($options['DeliciousEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableDelicious" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="DeliciousPageURL">Delicious Page URL</label></th>
    <td><input name="DeliciousURL" type="text" id="DeliciousURL" value="<?php echo  $options['DeliciousURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section Reddit -->
<h3>Reddit</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Reddit</span></legend>

            <label for="EnableReddit">
                <input name="RedditEnable" <?php echo  ($options['RedditEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableReddit" value="1" />
                Enabled
            </label>
            <label for="DisableReddit">
                <input name="RedditEnable" <?php echo  ($options['RedditEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableReddit" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="RedditPageURL">Reddit Page URL</label></th>
    <td><input name="RedditURL" type="text" id="RedditURL" value="<?php echo  $options['RedditURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section YouTube -->
<h3>YouTube</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable YouTube</span></legend>

            <label for="EnableYouTube">
                <input name="YouTubeEnable" <?php echo  ($options['YouTubeEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableYouTube" value="1" />
                Enabled
            </label>
            <label for="DisableYouTube">
                <input name="YouTubeEnable" <?php echo  ($options['YouTubeEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableYouTube" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="YouTubePageURL">YouTube Page URL</label></th>
    <td><input name="YouTubeURL" type="text" id="YouTubeURL" value="<?php echo  $options['YouTubeURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section StumbleUpon -->
<h3>StumbleUpon</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable StumbleUpon</span></legend>

            <label for="EnableStumbleUpon">
                <input name="StumbleUponEnable" <?php echo  ($options['StumbleUponEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableStumbleUpon" value="1" />
                Enabled
            </label>
            <label for="DisableStumbleUpon">
                <input name="StumbleUponEnable" <?php echo  ($options['StumbleUponEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableStumbleUpon" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="StumbleUponPageURL">StumbleUpon Page URL</label></th>
    <td><input name="StumbleUponURL" type="text" id="StumbleUponURL" value="<?php echo  $options['StumbleUponURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section Flattr -->
<h3>Flattr</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Flattr</span></legend>

            <label for="EnableFlattr">
                <input name="FlattrEnable" <?php echo  ($options['FlattrEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableFlattr" value="1" />
                Enabled
            </label>
            <label for="DisableFlattr">
                <input name="FlattrEnable" <?php echo  ($options['FlattrEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableFlattr" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="FlattrPageURL">Flattr Page URL</label></th>
    <td><input name="FlattrURL" type="text" id="FlattrURL" value="<?php echo  $options['FlattrURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section Spotify -->
<h3>Spotify</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Spotify</span></legend>

            <label for="EnableSpotify">
                <input name="SpotifyEnable" <?php echo  ($options['SpotifyEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableSpotify" value="1" />
                Enabled
            </label>
            <label for="DisableSpotify">
                <input name="SpotifyEnable" <?php echo  ($options['SpotifyEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableSpotify" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="SpotifyPageURL">Spotify Page URL</label></th>
    <td><input name="SpotifyURL" type="text" id="SpotifyURL" value="<?php echo  $options['SpotifyURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section Bitbucket -->
<h3>Bitbucket</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Bitbucket</span></legend>

            <label for="EnableBitbucket">
                <input name="BitbucketEnable" <?php echo  ($options['BitbucketEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableBitbucket" value="1" />
                Enabled
            </label>
            <label for="DisableBitbucket">
                <input name="BitbucketEnable" <?php echo  ($options['BitbucketEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableBitbucket" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="BitbucketPageURL">Bitbucket Page URL</label></th>
    <td><input name="BitbucketURL" type="text" id="BitbucketURL" value="<?php echo  $options['BitbucketURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section SlideShare -->
<h3>SlideShare</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable SlideShare</span></legend>

            <label for="EnableSlideShare">
                <input name="SlideShareEnable" <?php echo  ($options['SlideShareEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableSlideShare" value="1" />
                Enabled
            </label>
            <label for="DisableSlideShare">
                <input name="SlideShareEnable" <?php echo  ($options['SlideShareEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableSlideShare" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="SlideSharePageURL">SlideShare Page URL</label></th>
    <td><input name="SlideShareURL" type="text" id="SlideShareURL" value="<?php echo  $options['SlideShareURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section Stackoverflow -->
<h3>Stackoverflow</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Stackoverflow</span></legend>

            <label for="EnableStackoverflow">
                <input name="StackoverflowEnable" <?php echo  ($options['StackoverflowEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableStackoverflow" value="1" />
                Enabled
            </label>
            <label for="DisableStackoverflow">
                <input name="StackoverflowEnable" <?php echo  ($options['StackoverflowEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableStackoverflow" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="StackoverflowPageURL">Stackoverflow Page URL</label></th>
    <td><input name="StackoverflowURL" type="text" id="StackoverflowURL" value="<?php echo  $options['StackoverflowURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section Renren -->
<h3>Renren</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Renren</span></legend>

            <label for="EnableRenren">
                <input name="RenrenEnable" <?php echo  ($options['RenrenEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableRenren" value="1" />
                Enabled
            </label>
            <label for="DisableRenren">
                <input name="RenrenEnable" <?php echo  ($options['RenrenEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableRenren" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="RenrenPageURL">Renren Page URL</label></th>
    <td><input name="RenrenURL" type="text" id="RenrenURL" value="<?php echo  $options['RenrenURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section Mixi -->
<h3>Mixi</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Mixi</span></legend>

            <label for="EnableMixi">
                <input name="MixiEnable" <?php echo  ($options['MixiEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableMixi" value="1" />
                Enabled
            </label>
            <label for="DisableMixi">
                <input name="MixiEnable" <?php echo  ($options['MixiEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableMixi" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="MixiPageURL">Mixi Page URL</label></th>
    <td><input name="MixiURL" type="text" id="MixiURL" value="<?php echo  $options['MixiURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section Mail -->
<h3>Mail</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Mail</span></legend>

            <label for="EnableMail">
                <input name="MailEnable" <?php echo  ($options['MailEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableMail" value="1" />
                Enabled
            </label>
            <label for="DisableMail">
                <input name="MailEnable" <?php echo  ($options['MailEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableMail" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="MailPageURL">Mail Page URL</label></th>
    <td><input name="MailURL" type="text" id="MailURL" value="<?php echo  $options['MailURL'] ?>" class="regular-text" /></td>
</tr>

<!-- Section Mail -->
<h3>Mail</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable Mail</span></legend>

            <label for="EnableMail">
                <input name="MailEnable" <?php echo  ($options['MailEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableMail" value="1" />
                Enabled
            </label>
            <label for="DisableMail">
                <input name="MailEnable" <?php echo  ($options['MailEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableMail" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="MailPageURL">Mail Page URL</label></th>
    <td><input name="MailURL" type="text" id="MailURL" value="<?php echo  $options['MailURL'] ?>" class="regular-text" /></td>
</tr>

</tbody>
</table>

<!-- Section RSS -->
<h3>RSS</h3>
<table class="form-table">
<tbody>
<tr valign="top">
    <th scope="row">Enable</th>
    <td>
        <fieldset>
            <legend class="screen-reader-text"><span>Enable RSS</span></legend>

            <label for="EnableRSS">
                <input name="RSSEnable" <?php echo  ($options['RSSEnable'] == '1' ? 'checked' : '' ) ?> type="radio" id="EnableRSS" value="1" />
                Enabled
            </label>
            <label for="DisableRSS">
                <input name="RSSEnable" <?php echo  ($options['RSSEnable'] == '0' ? 'checked' : '' ) ?> type="radio" id="DisableRSS" value="0" />
                Disabled
            </label>
        </fieldset>
    </td>
</tr>
<tr valign="top">
    <th scope="row"><label for="RSSPageURL">RSS Page URL</label></th>
    <td><input name="RSSURL" type="text" id="RSSURL" value="<?php echo  $options['RSSURL'] ?>" class="regular-text" /></td>
</tr>

<!--<tr valign="top">-->
<!--    <th scope="row">Plugin Developer</th>-->
<!--    <td>-->
<!--        <fieldset>-->
<!--            <legend class="screen-reader-text"><span>Developer Copyright</span></legend>-->
<!--            <label for="DeveloperCopy">-->
<!--                <input name="ShowHeader" --><?php //echo ($options['DeveloperCopy'] ? 'checked' : '' ) ?><!-- type="checkbox" id="DeveloperCopy" value="1" />-->
<!--            </label>-->
<!--        </fieldset>-->
<!--    </td>-->
<!--</tr>-->
</tbody>
</table>

</div>

<div id="Settings">

    <!-- Section -->
    <h3>Settigs</h3>
    <table class="form-table">
        <tbody>
        <tr valign="top">
            <th scope="row"><label for="position">Position</label></th>
            <td><input name="position" type="text" id="position" value="<?php echo  $options['position'] ?>" class="regular-text" /> % or px from top</td>
        </tr>

        </tbody>
    </table>
</div>

</div>

<p class="submit">
    <input type="submit" name="submit" id="submit" class="button-primary" value="Save settings" />
</p>
</form>

<script type="text/javascript">
jQuery(function(){
    jQuery('#STabs').tabs();
});
</script></div>