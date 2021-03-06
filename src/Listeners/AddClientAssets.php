<?php
namespace Cryptobits\CoinTicker\Listeners;
use Flarum\Event\ConfigureWebApp;
use Illuminate\Contracts\Events\Dispatcher;

class AddClientAssets
{

    public function subscribe(Dispatcher $events)
    {

        $events->listen(ConfigureWebApp::class, [$this, 'addAssets']);

    }
    /**
     * @param Rendering $app
     */
    public function addAssets(ConfigureWebApp $app)
    {
        if ($app->isForum()) {

            $app->addAssets([
                __DIR__.'/../../js/forum/dist/extension.js'
            ]);
            $app->addBootstrapper('cryptobits/cointicker/main');
        }

    }

}