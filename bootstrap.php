<?php

/**
 * 简体中文
 * 
 * @package   justjavac\Flarum\SimpleChinese
 * @copyright Copyright (c) 2015 The justjavac Authors
 * @license   http://www.opensource.org/licenses/mit-license.php The MIT License
 */
namespace justjavac\Flarum\SimpleChinese;

use Flarum\Support\Extension as BaseExtension;
use Illuminate\Events\Dispatcher;
use Flarum\Events\RegisterLocales;

class Extension extends BaseExtension
{
    public function listen(Dispatcher $events)
    {
        $events->listen(RegisterLocales::class, function (RegisterLocales $event) {
            $event->manager->addLocale('zh-CN', '中文简体');
            $event->addTranslations('zh-CN', __DIR__.'/locale/core.yml');
            $event->manager->addJsFile('zh-CN', __DIR__.'/locale/core.js');
            $event->manager->addConfig('zh-CN', __DIR__.'/locale/core.php');
            $event->addTranslations('zh-CN', __DIR__.'/locale/likes.yml');
            $event->addTranslations('zh-CN', __DIR__.'/locale/lock.yml');
            $event->addTranslations('zh-CN', __DIR__.'/locale/mentions.yml');
            $event->addTranslations('zh-CN', __DIR__.'/locale/pusher.yml');
            $event->addTranslations('zh-CN', __DIR__.'/locale/sticky.yml');
            $event->addTranslations('zh-CN', __DIR__.'/locale/subscriptions.yml');
            $event->addTranslations('zh-CN', __DIR__.'/locale/tags.yml');
        });
    }
}

return __NAMESPACE__ . '\\Extension';