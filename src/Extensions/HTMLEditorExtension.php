<?php

namespace Goldfinch\EditorConfig\Extensions;

use SilverStripe\Core\Extension;

class HTMLEditorExtension extends Extension
{
    public function onBeforeRenderHolder($field): void
    {
        $config = $this->owner->config();

        $basedOnClass = $field->getForm()->getRecord()->getClassName();

        $configs = $config->get('registered_configs');

        if (isset($configs[$basedOnClass]))
        {
            $object = $configs[$basedOnClass];

            if (isset($object[$field->getName()]))
            {
                $cfgName = $object[$field->getName()];
                $field->setEditorConfig($cfgName);
            }
        }
    }
}

