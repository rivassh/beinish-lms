<?php

return [

    /*
    |--------------------------------------------------------------------------
    * Theme Configuration
    |--------------------------------------------------------------------------
    |
    | Reads the per-site theme.config.json and exposes design tokens,
    | navigation, hero, and locale settings to Blade views.
    |
    */

    'config_path' => env('THEME_CONFIG_PATH', base_path('theme.config.json')),

    'site' => function () {
        $configPath = config('theme.config_path');
        if (!file_exists($configPath)) {
            return ['name' => 'Portfolio', 'locale' => 'fa', 'direction' => 'rtl'];
        }
        $data = json_decode(file_get_contents($configPath), true);
        return $data['site'] ?? ['name' => 'Portfolio', 'locale' => 'fa', 'direction' => 'rtl'];
    },

    'tokens' => function () {
        $configPath = config('theme.config_path');
        if (!file_exists($configPath)) {
            return [];
        }
        $data = json_decode(file_get_contents($configPath), true);
        return $data['tokens'] ?? [];
    },

    'nav' => function () {
        $configPath = config('theme.config_path');
        if (!file_exists($configPath)) {
            return [];
        }
        $data = json_decode(file_get_contents($configPath), true);
        return $data['nav'] ?? [];
    },

    'locales' => function () {
        $configPath = config('theme.config_path');
        if (!file_exists($configPath)) {
            return ['fa', 'en', 'ar'];
        }
        $data = json_decode(file_get_contents($configPath), true);
        return $data['locales'] ?? ['fa', 'en', 'ar'];
    },

];
