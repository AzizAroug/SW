<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUgcKdeL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUgcKdeL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUgcKdeL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUgcKdeL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUgcKdeL\App_KernelDevDebugContainer([
    'container.build_hash' => 'UgcKdeL',
    'container.build_id' => '30feddd6',
    'container.build_time' => 1708292174,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUgcKdeL');
