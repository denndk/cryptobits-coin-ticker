<?php
namespace Cryptobits\CoinTicker\Listeners;
use Flarum\Frontend\Event\Rendering;
use Illuminate\Contracts\Events\Dispatcher;

class AddClientAssets
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(Rendering::class, [$this, 'addAssets']);

    }
    /**
     * @param Rendering $app
     */
    public function addAssets(Rendering $app)
    {
        if ($app->isForum()) {
            $app->addAssets([
                __DIR__.'/../../js/forum/dist/extension.js'
            ]);
            $app->addBootstrapper('cryptobits/cointicker/main');
        }

    }

}