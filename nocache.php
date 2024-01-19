<?php
	defined('_JEXEC') or die('Access deny');

	class plgContentNoCache extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){	
			$doc = JFactory::getDocument();
			if ($this->params->get('noncache', '') == 1)
			{
					
				$doc->setMetaData('Pragma', 'no-cache');
				$doc->setMetaData('Cache-Control', 'no-cache, no-store, must-revalidate');
				$doc->setMetaData('Expires', 0);
			}
				
		}	
	}
