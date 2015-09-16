<?php namespace justjavac;

use Flarum\Support\Extension as BaseExtension;
use Illuminate\Events\Dispatcher;
use Flarum\Events\RegisterLocales;

class Extension extends BaseExtension
{
    public function listen(Dispatcher $events)
    {
        $events->listen(RegisterLocales::class, function (RegisterLocales $event) {
            $event->manager->addLocale('zh_CN', '中文简体');
            $event->addTranslations('zh_CN', __DIR__.'/../locale/core.yml');
            $event->manager->addJsFile('zh_CN', __DIR__.'/../locale/core.js');
            $event->manager->addConfig('zh_CN', __DIR__.'/../locale/core.php');
            $event->addTranslations('zh_CN', __DIR__.'/../locale/likes.yml');
            $event->addTranslations('zh_CN', __DIR__.'/../locale/lock.yml');
            $event->addTranslations('zh_CN', __DIR__.'/../locale/mentions.yml');
            $event->addTranslations('zh_CN', __DIR__.'/../locale/pusher.yml');
            $event->addTranslations('zh_CN', __DIR__.'/../locale/sticky.yml');
            $event->addTranslations('zh_CN', __DIR__.'/../locale/subscriptions.yml');
            $event->addTranslations('zh_CN', __DIR__.'/../locale/tags.yml');
        });
    }
}
