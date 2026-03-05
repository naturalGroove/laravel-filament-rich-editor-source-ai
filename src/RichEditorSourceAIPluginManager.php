<?php

declare(strict_types=1);

namespace NaturalGroove\Filament\RichEditorSourceAI;

class RichEditorSourceAIPluginManager
{
    public function getPlugin(): RichEditorSourceAIPlugin
    {
        return RichEditorSourceAIPlugin::get();
    }
}
