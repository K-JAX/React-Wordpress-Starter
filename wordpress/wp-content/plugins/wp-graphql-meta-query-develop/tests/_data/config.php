<?php
/**
 * Disable autoloading while running tests, as the test
 * suite already bootstraps the autoloader and creates
 * fatal errors when the autoloader is loaded twice
 */
define( 'WPGRAPHQL_METAQUERY_AUTOLOAD', false );
define( 'CODECEPTION_REMOTE_COVERAGE', true );