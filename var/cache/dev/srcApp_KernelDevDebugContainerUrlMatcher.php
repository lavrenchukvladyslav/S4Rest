<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/api/books' => [[['_route' => 'get_books', '_controller' => 'App\\Controller\\BookController::getBooksAction'], null, null, null, false, false, null]],
            '/api/book/new' => [[['_route' => 'post_book', '_controller' => 'App\\Controller\\BookController::postBookAction'], null, null, null, false, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/api/books/(?'
                        .'|([^/]++)(*:29)'
                        .'|edit/([^/]++)(*:49)'
                        .'|remove/([^/]++)(*:71)'
                    .')'
                    .'|/([^/]++)(*:88)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:126)'
                        .'|wdt/([^/]++)(*:146)'
                        .'|profiler(?'
                            .'|(*:165)'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|search/results(*:203)'
                                    .'|router(*:217)'
                                    .'|exception(?'
                                        .'|(*:237)'
                                        .'|\\.css(*:250)'
                                    .')'
                                .')'
                                .'|(*:260)'
                            .')'
                        .')'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            29 => [[['_route' => 'get_book', '_controller' => 'App\\Controller\\BookController::getBookAction'], ['id'], null, null, false, true, null]],
            49 => [[['_route' => 'put_book', '_controller' => 'App\\Controller\\BookController::putBookAction'], ['id'], null, null, false, true, null]],
            71 => [[['_route' => 'delete_book', '_controller' => 'App\\Controller\\BookController::deleteBookAction'], ['id'], null, null, false, true, null]],
            88 => [[['_route' => 'hello', '_controller' => 'App\\Controller\\HelloController::indexAction'], ['id'], null, null, false, true, null]],
            126 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            146 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            165 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
            203 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            217 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            237 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            250 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            260 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
