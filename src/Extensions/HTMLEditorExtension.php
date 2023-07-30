<?php

namespace Goldfinch\EditorConfig\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\Control\Director;
use SilverStripe\Core\Config\Config;

class HTMLEditorExtension extends Extension
{
    // ->addExtraClass('stacked')
    public function onBeforeRenderHolder($field): void
    {
        $config = $this->owner->config();


        // - Editor configs

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




        // - Components

        // $globalReplace = Config::inst()->get(self::class, 'keep_content_fields');
        // Config::inst()->get(__CLASS__, 'animations')
        $basedOnClass = $field->getForm()->getRecord()->getClassName();

        $field->setAttribute('data-based-on-class', $basedOnClass);


        $allowed_components = $config->get('allowed_components');

        if (isset($allowed_components[$basedOnClass]))
        {
            $components = $allowed_components[$basedOnClass];

            if (isset($components[$field->getName()]))
            {
                $fieldComponents = $components[$field->getName()];

                // $cfg = TinyMCEConfig::get('basic')->enablePlugins(['customplugin' => '/public/customplugin.js']);
                // $cfg->addButtonsToLine(1, ['customDropdown']);
                $enabledPlugins = $field->getEditorConfig()->getPlugins();

                if (!array_key_exists('customplugin', $enabledPlugins))
                {
                    $cfg = $field->getEditorConfig();
                    // var_dump($field->getName());
                    // Director::baseFolder()
                    // dd($enabledPlugins);
                    $cfg->enablePlugins(['customplugin' => '/customplugin.js']);
                    $cfg->addButtonsToLine(1, ['customDropdown']);
                    // dd($cfg, $field->getEditorConfig()->getPlugins());
                }
            }
        }
    }
}

