<?php

namespace FondOfSpryker\Yves\GoogleTagManagerCategoryVariables\Plugin\Variables;

use Codeception\Test\Unit;

class ContentTypePluginTest extends Unit
{
    /**
     * @return void
     */
    public function testAddVariable(): void
    {
        $plugin = new ContentTypePlugin();
        $result = $plugin->addVariable('pageType', [
            ContentTypePlugin::PARAM_CONTENT_TYPE => 'contentType',
        ]);

        $this->assertIsArray($result);
        $this->arrayHasKey(ContentTypePlugin::FIELD_CONTENT_TYPE);
    }
}
