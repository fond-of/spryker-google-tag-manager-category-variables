<?php

namespace FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\Plugin\Variables;

use Codeception\Test\Unit;

class IdCategoryPluginTest extends Unit
{
    /**
     * @return void
     */
    public function testAddVariable(): void
    {
        $plugin = new IdCategoryPlugin();
        $result = $plugin->addVariable('pageType', [
            IdCategoryPlugin::PARAM_CATEGORY => [
                IdCategoryPlugin::PARAM_ID_CATEGORY => 99,
            ],
        ]);

        $this->assertIsArray($result);
        $this->arrayHasKey(IdCategoryPlugin::FIELD_ID_CATEGORY);
    }
}
