<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.api' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallContext.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Util/TargetPathTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ExceptionListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/HttpUtils.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/EntryPoint/BasicAuthenticationEntryPoint.php';

$a = ($this->services['router'] ?? $this->getRouterService());

return $this->privates['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.0'] ?? $this->load('getSecurity_ContextListener_0Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.basic.api'] ?? $this->load('getSecurity_Authentication_Listener_Basic_ApiService.php'));
    yield 3 => ($this->privates['security.authentication.listener.anonymous.api'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_ApiService.php'));
    yield 4 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), new \Symfony\Component\Security\Http\HttpUtils($a, $a), 'api', ($this->privates['security.authentication.basic_entry_point.api'] ?? ($this->privates['security.authentication.basic_entry_point.api'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area'))), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'security.user_checker', '.security.request_matcher.p4VlLPC', true, false, NULL, 'api', 'security.authentication.basic_entry_point.api', NULL, NULL, [0 => 'http_basic', 1 => 'anonymous'], NULL));
