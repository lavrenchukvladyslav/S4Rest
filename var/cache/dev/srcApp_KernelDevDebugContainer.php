<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYF9nfqU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYF9nfqU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYF9nfqU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYF9nfqU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerYF9nfqU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'YF9nfqU',
    'container.build_id' => '7cd83b1a',
    'container.build_time' => 1549654239,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYF9nfqU');