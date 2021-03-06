<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/lieu')) {
                // list
                if ($pathinfo === '/lieu/list') {
                    return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::listAction',  '_route' => 'list',);
                }

                // get
                if (preg_match('#^/lieu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::getAction',));
                }

                // delete
                if (0 === strpos($pathinfo, '/lieu/delete') && preg_match('#^/lieu/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::deleteAction',));
                }

                // create
                if (rtrim($pathinfo, '/') === '/lieu/create') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'create');
                    }

                    return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::createAction',  '_route' => 'create',);
                }

                // edit
                if (0 === strpos($pathinfo, '/lieu/edit') && preg_match('#^/lieu/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // login
                    if ($pathinfo === '/login') {
                        return array (  '_controller' => 'ps\\lieuxBundle\\Controller\\lieuController::loginAction',  '_route' => 'login',);
                    }

                    // login_check
                    if ($pathinfo === '/login_check') {
                        return array('_route' => 'login_check');
                    }

                }

                // logout
                if ($pathinfo === '/logout') {
                    return array('_route' => 'logout');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
