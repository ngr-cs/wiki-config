<?php
# Include common settings
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/WikiFamilySettings.php'); 
require_once(__ROOT__.'/SharedMediaSettings.php'); 
require_once(__ROOT__.'/ExtensionSettings.php'); 


# https://www.mediawiki.org/wiki/Manual:Wiki_family#Multiple_wikis_sharing_common_resources
$wikiId = 'pool_climatestrike';

$wgSitename = 'Climatewiki (Pool)';

## The protocol and server name to use in fully-qualified URLs
$wgServer = 'http://gz5sazcol.preview.infomaniak.website';

## Database settings
$wgDBname = 'gz5sa_app_mediawiki_4';
$wgDBuser = 'gz5sa_app_medi_4';
$wgDBpassword = '<hidden>';

# MySQL specific settings
$wgDBprefix = 'uan0_';

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = 'en';

$wgSecretKey = '<hidden>';

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgSecretKey = '<hidden>';


wfLoadExtension( 'VisualEditor' );

// Enable by default for everybody
$wgDefaultUserOptions['visualeditor-enable'] = 1;

// Optional: Set VisualEditor as the default for anonymous users
// otherwise they will have to switch to VE
// $wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";

// Don't allow users to disable it
$wgHiddenPrefs[] = 'visualeditor-enable';

// OPTIONAL: Enable VisualEditor's experimental code features
#$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;

$wgVirtualRestConfig['modules']['parsoid'] = array(
    // URL to the Parsoid instance
    // Use port 8142 if you use the Debian package
    'url' => 'localhost:8000',
    // Parsoid "domain", see below (optional)
    // 'domain' => 'localhost/',
    // Parsoid "prefix", see below (optional)
    // 'prefix' => 'localhost/'
);
