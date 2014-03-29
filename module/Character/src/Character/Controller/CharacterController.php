<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Character for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Character\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class CharacterController extends AbstractActionController
{
    public function indexAction()
    {
        return array();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /character/character/foo
        return array();
    }
    public function listAction()
    {
    	// This shows the :controller and :action parameters in default route
    	// are working when you browse to /character/character/foo
    	return array();
    }

    public function characterAction()
    {
    	// This shows the :controller and :action parameters in default route
    	// are working when you browse to /character/character/foo
    	return array();
    }    
    
}
