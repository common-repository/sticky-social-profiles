<?php
global $sp_core_loader;
$options = $sp_core_loader->settings;
?>

<div class="social MojoShare" style="top: <?php echo $options['position']; ?>">
    <?php if ($options['FacebookEnable']): ?>
        <a href="<?php echo $options['FacebookURL']; ?>" class="Facebook"><span></span></a>
    <?php endif; ?>
    <?php if ($options['TwitterEnable']): ?>
        <a href="<?php echo $options['TwitterURL']; ?>" class="Twitter"><span></span></a>
    <?php endif; ?>
    <?php if ($options['VKEnable']): ?>
        <a href="<?php echo $options['VKURL']; ?>" class="VK"><span></span></a>
    <?php endif; ?>

    <?php if ($options['YouTubeEnable']): ?>
        <a href="<?php echo $options['YouTubeURL']; ?>" class="YouTube"><span></span></a>
    <?php endif; ?>
    <?php if ($options['GooglePlusEnable']): ?>
        <a href="<?php echo $options['GooglePlusURL']; ?>" class="GooglePlus"><span></span></a>
    <?php endif; ?>
    <?php if ($options['PinterestEnable']): ?>
        <a href="<?php echo $options['PinterestURL']; ?>" class="Pinterest"><span></span></a>
    <?php endif; ?>

    <?php if ($options['DribbleEnable']): ?>
        <a href="<?php echo $options['DribbleURL']; ?>" class="Dribble"><span></span></a>
    <?php endif; ?>
    <?php if ($options['CloudSoundEnable']): ?>
        <a href="<?php echo $options['CloudSoundURL']; ?>" class="CloudSound"><span></span></a>
    <?php endif; ?>
    <?php if ($options['Rdio']): ?>
        <a href="<?php echo $options['Rdio']; ?>" class="Rdio"><span></span></a>
    <?php endif; ?>
    <?php if ($options['InstagramEnable']): ?>
        <a href="<?php echo $options['InstagramURL']; ?>" class="Instagram"><span></span></a>
    <?php endif; ?>
    <?php if ($options['BehanceEnable']): ?>
        <a href="<?php echo $options['BehanceURL']; ?>" class="Behance"><span></span></a>
    <?php endif; ?>
    <?php if ($options['BloggerEnable']): ?>
        <a href="<?php echo $options['BloggerURL']; ?>" class="Blogger"><span></span></a>
    <?php endif; ?>
    <?php if ($options['LiveJournalEnable']): ?>
        <a href="<?php echo $options['LiveJournalURL']; ?>" class="LiveJournal"><span></span></a>
    <?php endif; ?>
    <?php if ($options['LinkedinEnable']): ?>
        <a href="<?php echo $options['LinkedinURL']; ?>" class="Linkedin"><span></span></a>
    <?php endif; ?>
    <?php if ($options['LastfmEnable']): ?>
        <a href="<?php echo $options['LastfmURL']; ?>" class="Lastfm"><span></span></a>
    <?php endif; ?>
    <?php if ($options['FlickrEnable']): ?>
        <a href="<?php echo $options['FlickrURL']; ?>" class="Flickr"><span></span></a>
    <?php endif; ?>
    <?php if ($options['MySpaceEnable']): ?>
        <a href="<?php echo $options['MySpaceURL']; ?>" class="MySpace"><span></span></a>
    <?php endif; ?>
    <?php if ($options['DeliciousEnable']): ?>
        <a href="<?php echo $options['DeliciousURL']; ?>" class="Delicious"><span></span></a>
    <?php endif; ?>
    <?php if ($options['RedditEnable']): ?>
        <a href="<?php echo $options['RedditURL']; ?>" class="Reddit"><span></span></a>
    <?php endif; ?>
    <?php if ($options['StumbleUponEnable']): ?>
        <a href="<?php echo $options['StumbleUponURL']; ?>" class="StumbleUpon"><span></span></a>
    <?php endif; ?>
    <?php if ($options['FlattrEnable']): ?>
        <a href="<?php echo $options['FlattrURL']; ?>" class="Flattr"><span></span></a>
    <?php endif; ?>
    <?php if ($options['SpotifyEnable']): ?>
        <a href="<?php echo $options['SpotifyURL']; ?>" class="Spotify"><span></span></a>
    <?php endif; ?>
    <?php if ($options['BitbucketEnable']): ?>
        <a href="<?php echo $options['BitbucketURL']; ?>" class="Bitbucket"><span></span></a>
    <?php endif; ?>
    <?php if ($options['SlideShareEnable']): ?>
        <a href="<?php echo $options['SlideShareURL']; ?>" class="SlideShare"><span></span></a>
    <?php endif; ?>
    <?php if ($options['StackoverflowEnable']): ?>
        <a href="<?php echo $options['StackoverflowURL']; ?>" class="Stackoverflow"><span></span></a>
    <?php endif; ?>
    <?php if ($options['FoursquareEnable']): ?>
        <a href="<?php echo $options['FoursquareURL']; ?>" class="Foursquare"><span></span></a>
    <?php endif; ?>
    <?php if ($options['VimeoEnable']): ?>
        <a href="<?php echo $options['VimeoURL']; ?>" class="Vimeo"><span></span></a>
    <?php endif; ?>
    <?php if ($options['GithubEnable']): ?>
        <a href="<?php echo $options['GithubURL']; ?>" class="Github"><span></span></a>
    <?php endif; ?>
    <?php if ($options['OdnoklassnikiEnable']): ?>
        <a href="<?php echo $options['OdnoklassnikiURL']; ?>" class="Odnoklassniki"><span></span></a>
    <?php endif; ?>
    <?php if ($options['MailRuEnable']): ?>
        <a href="<?php echo $options['MailRuURL']; ?>" class="MailRu"><span></span></a>
    <?php endif; ?>
    <?php if ($options['TumblrEnable']): ?>
        <a href="<?php echo $options['TumblrURL']; ?>" class="Tumblr"><span></span></a>
    <?php endif; ?>
    <?php if ($options['YelpEnable']): ?>
        <a href="<?php echo $options['YelpURL']; ?>" class="Yelp"><span></span></a>
    <?php endif; ?>
    <?php if ($options['RenrenEnable']): ?>
        <a href="<?php echo $options['RenrenURL']; ?>" class="Renren"><span></span></a>
    <?php endif; ?>
    <?php if ($options['MixiEnable']): ?>
        <a href="<?php echo $options['MixiURL']; ?>" class="Mixi"><span></span></a>
    <?php endif; ?>
    <?php if ($options['MailEnable']): ?>
        <a href="<?php echo $options['MailURL']; ?>" class="Mail"><span></span></a>
    <?php endif; ?>
    <?php if ($options['RSSEnable']): ?>
        <a href="<?php echo $options['RSSURL']; ?>" class="RSS"><span></span></a>
    <?php endif; ?>
    <?php if ($options['developer']): ?>
        <div class="developer-copyright">
            <a href="http://www.kidzarella.com/ru/boys.html">одежда для мальчиков</a>магазин
        </div
    <?php endif; ?>

</div>