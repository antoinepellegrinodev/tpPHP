<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV2buDRq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV2buDRq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV2buDRq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV2buDRq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerV2buDRq\App_KernelDevDebugContainer([
    'container.build_hash' => 'V2buDRq',
    'container.build_id' => '76f35eb8',
    'container.build_time' => 1674115680,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV2buDRq');