<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1Kzmk3y\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1Kzmk3y/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1Kzmk3y.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1Kzmk3y\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1Kzmk3y\App_KernelDevDebugContainer([
    'container.build_hash' => '1Kzmk3y',
    'container.build_id' => '009509d9',
    'container.build_time' => 1707263386,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1Kzmk3y');
