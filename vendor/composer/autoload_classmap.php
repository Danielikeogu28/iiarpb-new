<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\Console\\Kernel' => $baseDir . '/app/Console/Kernel.php',
    'App\\Exceptions\\Handler' => $baseDir . '/app/Exceptions/Handler.php',
    'App\\Http\\Controllers\\Controller' => $baseDir . '/app/Http/Controllers/Controller.php',
    'App\\Http\\Kernel' => $baseDir . '/app/Http/Kernel.php',
    'App\\Http\\Middleware\\Authenticate' => $baseDir . '/app/Http/Middleware/Authenticate.php',
    'App\\Http\\Middleware\\EncryptCookies' => $baseDir . '/app/Http/Middleware/EncryptCookies.php',
    'App\\Http\\Middleware\\PreventRequestsDuringMaintenance' => $baseDir . '/app/Http/Middleware/PreventRequestsDuringMaintenance.php',
    'App\\Http\\Middleware\\RedirectIfAuthenticated' => $baseDir . '/app/Http/Middleware/RedirectIfAuthenticated.php',
    'App\\Http\\Middleware\\TrimStrings' => $baseDir . '/app/Http/Middleware/TrimStrings.php',
    'App\\Http\\Middleware\\TrustHosts' => $baseDir . '/app/Http/Middleware/TrustHosts.php',
    'App\\Http\\Middleware\\TrustProxies' => $baseDir . '/app/Http/Middleware/TrustProxies.php',
    'App\\Http\\Middleware\\VerifyCsrfToken' => $baseDir . '/app/Http/Middleware/VerifyCsrfToken.php',
    'App\\Models\\User' => $baseDir . '/app/Models/User.php',
    'App\\Providers\\AppServiceProvider' => $baseDir . '/app/Providers/AppServiceProvider.php',
    'App\\Providers\\AuthServiceProvider' => $baseDir . '/app/Providers/AuthServiceProvider.php',
    'App\\Providers\\BroadcastServiceProvider' => $baseDir . '/app/Providers/BroadcastServiceProvider.php',
    'App\\Providers\\EventServiceProvider' => $baseDir . '/app/Providers/EventServiceProvider.php',
    'App\\Providers\\RouteServiceProvider' => $baseDir . '/app/Providers/RouteServiceProvider.php',
    'App\\Traits\\RespondsWithHttpStatus' => $baseDir . '/app/Traits/RespondsWithHttpStatus.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Database\\Factories\\UserFactory' => $baseDir . '/database/factories/UserFactory.php',
    'Database\\Seeders\\DatabaseSeeder' => $baseDir . '/database/seeders/DatabaseSeeder.php',
);