<?php

namespace Drupal\Console\Test\DataProvider;

/**
 * Class PluginFieldWidgetDataProviderTrait
 * @package Drupal\Console\Test\DataProvider
 */
trait PluginFieldWidgetDataProviderTrait
{
    /**
     * @return array
     */
    public function commandData()
    {
        $this->setUpTemporalDirectory();

        return [
          ['Foo',  'foo' . rand(), 'foo', 'foo-bar', 'Foo-Bar']
        ];
    }
}
