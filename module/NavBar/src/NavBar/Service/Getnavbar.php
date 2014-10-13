<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Getnavbar
 *
 * @author flavio
 */
namespace NavBar\Service;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Navigation\Service\DefaultNavigationFactory;

class Getnavbar extends DefaultNavigationFactory {    
       protected function getPages(ServiceLocatorInterface $serviceLocator)
    {
        if (null === $this->pages) {
           
            $configuration['navigation']['default'] = array(
                array(
                    'label' => 'Inicio',
                    'route' => 'home',
                ),
                array(
                    'label'=>'Mecánica',
                    'route'=>'mecanica',
                    'pages'=>array(
                        array(
                            'label'=>'Mecánica ADPRESS',
                            'route'=>'mecanica'
                        ),
                        array(
                            'label'=>'Promociones',
                            'route'=>'promociones'
                        ),
                        array(
                            'label'=>'Descarga de APPS',
                            'route'=>'apps'
                        ),
                    )
                ),                
            );
          
            if (!isset($configuration['navigation'])) {
                throw new Exception\InvalidArgumentException('Could not find navigation configuration key');
            }
            if (!isset($configuration['navigation'][$this->getName()])) {
                throw new Exception\InvalidArgumentException(sprintf(
                    'Failed to find a navigation container by the name "%s"',
                    $this->getName()
                ));
            }
 
            $application = $serviceLocator->get('Application');
            $routeMatch  = $application->getMvcEvent()->getRouteMatch();
            $router      = $application->getMvcEvent()->getRouter();
            $pages       = $this->getPagesFromConfig($configuration['navigation'][$this->getName()]);
            
            // echo "<pre>";
            // var_dump($pages);die;

            $this->pages = $this->injectComponents($pages, $routeMatch, $router);
        }
        return $this->pages;
    }
}

?>
