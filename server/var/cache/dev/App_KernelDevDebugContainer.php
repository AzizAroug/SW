<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDoOO9Up\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDoOO9Up/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDoOO9Up.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDoOO9Up\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDoOO9Up\App_KernelDevDebugContainer([
    'container.build_hash' => 'DoOO9Up',
    'container.build_id' => '1fd21389',
    'container.build_time' => 1708334679,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDoOO9Up');
