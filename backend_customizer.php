<?php
/**
 * 
 * @version             See field version manifest file
 * @package             See field name manifest file
 * @author				Gregorio Nuti
 * @copyright			See field copyright manifest file
 * @license             GNU General Public License version 2 or later
 * 
 */

// No direct access
defined('_JEXEC') or die;

// Namespaces
use Joomla\CMS\Factory;

// Import library dependencies
jimport('joomla.plugin.plugin');

class plgSystemBackend_Customizer extends JPlugin
{

	function onBeforeCompileHead() {
		
		// General variables
		$document = Factory::getDocument();
		$app = Factory::getApplication();
		$user = Factory::getUser();
		
		// Get plugin params
		$backend_custom_css = $this->params->get('backend-custom-css');
		$backend_custom_js = $this->params->get('backend-custom-js');
		
		// Check if the app is admin and if the current user has permissions
    	if ($app->isClient('administrator') && $user->authorise('core.admin') && ($backend_custom_css || $backend_custom_js)) {
    		if ($backend_custom_css) {
    			$document->addStyleDeclaration($backend_custom_css);
    		}
    		if ($backend_custom_js) {
    			$document->addScriptDeclaration($backend_custom_js);
    		}
    	}
    	
	}
	
}