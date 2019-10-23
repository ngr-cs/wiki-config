<?php
# Include common settings
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/WikiFamilySettings.php');
require_once(__ROOT__.'/SharedMediaSettings.php'); 
require_once(__ROOT__.'/ExtensionSettings.php'); 


# https://www.mediawiki.org/wiki/Manual:Wiki_family#Multiple_wikis_sharing_common_resources
$wikiId = 'fr_climatestrike';

$wgSitename = 'Wiki de la Grève du Climat';

## The protocol and server name to use in fully-qualified URLs
$wgServer = 'http://fr.wikiff.ch';

## Database settings
$wgDBname = 'gz5sa_app_mediawiki_1';
$wgDBuser = 'gz5sa_app_medi_1';
$wgDBpassword = '<hidden>';

# MySQL specific settings
$wgDBprefix = 'wjtw_';

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = 'fr';

$wgSecretKey = '<hidden>';

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgSecretKey = '<hidden>';
