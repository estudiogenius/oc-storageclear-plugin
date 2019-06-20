<?php namespace Wiz\StorageClear;

use Wiz\StorageClear\Console\StorageClear;
use Wiz\StorageClear\Console\StorageDump;
use Wiz\StorageClear\Console\StorageDumpDatabase;
use Wiz\StorageClear\Console\StorageDumpProject;
use System\Classes\PluginBase;

/**
 * StorageClear Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'wiz.storageclear::lang.plugin.name',
            'description' => 'wiz.storageclear::lang.plugin.description',
            'author' => 'Wiz Comunicaciones',
            'icon' => 'icon-recycle',
            'homepage' => 'https://github.com/wiz-comunicaciones/oc-storageclear-plugin'
        ];
    }

    /**
     * Register events and more.
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommand('wiz.storage:clear', StorageClear::class);
        $this->registerConsoleCommand('wiz.storage:dump', StorageDump::class);
        $this->registerConsoleCommand('wiz.storage:dump-project', StorageDumpProject::class);
        $this->registerConsoleCommand('wiz.storage:dump-database', StorageDumpDatabase::class);
    }
}
