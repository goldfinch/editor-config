<?php

namespace App\Goldfinch\EditorConfig;

use SilverStripe\Control\Director;
use SilverStripe\Core\Manifest\ModuleLoader;
use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;
use SilverStripe\Forms\HTMLEditor\HTMLEditorConfig;

class TinyMCEConfigManager
{
    /**
     * Options : https://www.tiny.cloud/docs/configure/editor-appearance/
     * Options typograpy: https://www.tiny.cloud/docs/tinymce/6/user-formatting-options/
     * Plugins : https://www.tiny.cloud/docs/tinymce/6/plugins/
     *
     */
    public static function init()
    {
        // self::devCfg();

        self::addCfg([
            'name' => 'expert',
            'options' => [...self::getDefaultOptions(),
                'min_height'=> 600,
                'height'=> 600,
                'menubar' => 'file edit insert view format table tools help',
                'importcss_append' => true,
                'style_formats' => [
                  [ 'title' => 'Headings', 'items' => [
                          ['title' => 'Heading 1', 'block' => 'h1' ],
                          ['title' => 'Heading 2', 'block' => 'h2' ],
                          ['title' => 'Heading 3', 'block' => 'h3' ],
                          ['title' => 'Heading 4', 'block' => 'h4' ],
                          ['title' => 'Heading 5', 'block' => 'h5' ],
                          ['title' => 'Heading 6', 'block' => 'h6' ],
                          [
                              'title'           => 'Subtitle',
                              'selector'        => 'p',
                              'classes'         => 'title-sub',
                          ],
                      ]
                  ],
                  [
                      'title' => 'Misc Styles', 'items' => [
                          [
                              'title' => 'Style 1',
                              'selector' => 'ul',
                              'classes' => 'style1',
                              'wrapper' => true,
                              'merge_siblings' => false,
                          ],
                          [
                              'title' => 'Button red',
                              'inline' => 'span',
                              'classes' => 'btn-red',
                              'merge_siblings' => true,
                          ],
                      ]
                  ],
                ],
                'font_size_formats' => '10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px',
                'font_family_formats' => 'Arial=arial,helvetica,sans-serif; Courier New=courier new,courier,monospace; AkrutiKndPadmini=Akpdmi-n',
                'color_map' => [
                  '000000', 'Black',
                  '808080', 'Gray',
                  'FFFFFF', 'White',
                ],
                // 'custom_colors' => false,
            ],
            'plugins' => [...self::getDefaultPlugins(),
                'fullscreen',
                'charmap',
                'codesample',
                'insertdatetime',
                'pagebreak',
                'preview',
                'template',
                'visualblocks',
                'directionality',
                'nonbreaking',
            ],
            'buttons' => [
                [
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    'removeformat',
                    'bullist',
                    'numlist',
                    'sslink',
                    'unlink',
                    'charmap',
                    'emoticons',
                    'ssmedia',
                    'ssembed',
                    'table',
                    'searchreplace',
                ],
                [
                    'forecolor',
                    'backcolor',
                    'subscript',
                    'superscript',
                    'blockquote',
                    'anchor',
                    'alignleft',
                    'aligncenter',
                    'alignright',
                    'alignjustify',
                    'alignnone',
                    'outdent',
                    'indent',
                    'hr',
                ],
                [
                    'blocks',
                    'styles',
                    'fontsize',
                    'fontfamily',
                    'codesample',
                    'insertdatetime',
                    'wordcount',
                    'preview',
                    'fullscreen',
                    'code',
                ],
                [
                    'pagebreak',
                    'visualblocks',
                    'ltr',
                    'rtl',
                    'template',
                    'nonbreaking',
                    'help',
                ]
            ],
        ]);

        self::addCfg([
            'name' => 'advanced',
            'options' => [...self::getDefaultOptions(),
                'min_height'=> 500,
                'height'=> 500,
                'importcss_append' => true,
                'style_formats' => [
                  [ 'title' => 'Headings', 'items' => [
                          ['title' => 'Heading 1', 'block' => 'h1' ],
                          ['title' => 'Heading 2', 'block' => 'h2' ],
                          ['title' => 'Heading 3', 'block' => 'h3' ],
                          ['title' => 'Heading 4', 'block' => 'h4' ],
                          ['title' => 'Heading 5', 'block' => 'h5' ],
                          ['title' => 'Heading 6', 'block' => 'h6' ],
                          [
                              'title'           => 'Subtitle',
                              'selector'        => 'p',
                              'classes'         => 'title-sub',
                          ],
                      ]
                  ],
                  [
                      'title' => 'Misc Styles', 'items' => [
                          [
                              'title' => 'Style 1',
                              'selector' => 'ul',
                              'classes' => 'style1',
                              'wrapper' => true,
                              'merge_siblings' => false,
                          ],
                          [
                              'title' => 'Button red',
                              'inline' => 'span',
                              'classes' => 'btn-red',
                              'merge_siblings' => true,
                          ],
                      ]
                  ],
                ],
                'font_size_formats' => '10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px',
            ],
            'plugins' => [...self::getDefaultPlugins(),
                'fullscreen',
                'charmap',
                'codesample',
                'insertdatetime',
                'preview',
            ],
            'buttons' => [
                [
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    'removeformat',
                    'bullist',
                    'numlist',
                    'sslink',
                    'unlink',
                    'charmap',
                    'emoticons',
                    'ssmedia',
                    'ssembed',
                    'table',
                    'searchreplace',
                ],
                [
                    'forecolor',
                    'backcolor',
                    'subscript',
                    'superscript',
                    'blockquote',
                    'anchor',
                    'alignleft',
                    'aligncenter',
                    'alignright',
                    'alignjustify',
                    'alignnone',
                    'outdent',
                    'indent',
                    'hr',
                ],
                [
                    'blocks',
                    'styles',
                    'fontsize',
                    'codesample',
                    'insertdatetime',
                    'wordcount',
                    'preview',
                    'fullscreen',
                    'code',
                ]
            ],
        ]);

        self::addCfg([
            'name' => 'intermediate',
            'options' => [...self::getDefaultOptions(),
                'min_height'=> 400,
                'height'=> 400,
            ],
            'plugins' => [...self::getDefaultPlugins(),
                'charmap',
            ],
            'buttons' => [
                [
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    'removeformat',
                    'bullist',
                    'numlist',
                    'sslink',
                    'unlink',
                    'charmap',
                    'emoticons',
                    'ssmedia',
                    'ssembed',
                    'table',
                    'searchreplace',
                ],
                [],
                [],
            ],
        ]);

        self::addCfg([
            'name' => 'basic',
            'options' => [...self::getDefaultOptions(),
                'contextmenu' => false,
                'min_height'=> 300,
                'height'=> 300,
            ],
            'plugins' => [...self::getDefaultPlugins(),
                'charmap',
            ],
            'buttons' => [
                [
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    'removeformat',
                    'bullist',
                    'numlist',
                    'sslink',
                    'unlink',
                    'charmap',
                    'emoticons',
                ],
                [],
                [],
            ],
        ]);

        // reset default cms config to be basic
        HTMLEditorConfig::set_config('cms', TinyMCEConfig::get('basic'));
    }

    private static function addCfg($data)
    {
        $tiny = TinyMCEConfig::get($data['name']);

        if (isset($data['options']))
        {
            $tiny->setOptions($data['options']);
        }

        if (isset($data['plugins']))
        {
            $tiny->enablePlugins($data['plugins']);
        }

        if (isset($data['buttons']))
        {
            foreach($data['buttons'] as $key => $buttons)
            {
                $line = $key + 1;
                $tiny->setButtonsForLine($line, $buttons);
            }
        }

        // $tiny->setContentCSS(['/editor.css']);

        if ($data['name'] == 'advanced')
        {
            // dd('advanced', $tiny->getOption('style_formats'));
            // dd('advanced', $tiny->getPlugins());
        }
    }

    private static function getDefaultPlugins()
    {
        $silverstripe_admin_module = ModuleLoader::inst()->getManifest()->getModule('silverstripe/admin');
        $silverstripe_asset_admin = ModuleLoader::inst()->getManifest()->getModule('silverstripe/asset-admin');
        $silverstripe_cms = ModuleLoader::inst()->getManifest()->getModule('silverstripe/cms');

        return [
            'image' => null,
            'anchor' => null,
            'sslink' => $silverstripe_admin_module->getResource('client/dist/js/TinyMCE_sslink.js'),
            'sslinkexternal' => $silverstripe_admin_module->getResource('client/dist/js/TinyMCE_sslink-external.js'),
            'sslinkemail' => $silverstripe_admin_module->getResource('client/dist/js/TinyMCE_sslink-email.js'),
            'sslinkinternal' => $silverstripe_cms->getResource('client/dist/js/TinyMCE_sslink-internal.js'),
            'sslinkanchor' => $silverstripe_cms->getResource('client/dist/js/TinyMCE_sslink-anchor.js'),
            'ssmedia' => $silverstripe_asset_admin->getResource('client/dist/js/TinyMCE_ssmedia.js'),
            'ssembed' => $silverstripe_asset_admin->getResource('client/dist/js/TinyMCE_ssembed.js'),
            'sslinkfile' => $silverstripe_asset_admin->getResource('client/dist/js/TinyMCE_sslink-file.js'),
        ];
    }

    private static function getDefaultOptions()
    {
        $cms = TinyMCEConfig::get('cms');

        return [
            'friendly_name' => $cms->getOption('friendly_name'),
            'priority' => $cms->getOption('priority'),
            'skin' => 'oxide',
            'body_class' => $cms->getOption('body_class'),
            'contextmenu' => $cms->getOption('contextmenu'),
            'use_native_selects' => $cms->getOption('use_native_selects'),
            'valid_elements' => $cms->getOption('valid_elements') . '|gf-component[data-id,data-class,class]',
            'extended_valid_elements' => $cms->getOption('extended_valid_elements') . '|gf-component[data-id,data-class,class]',
            'custom_elements' => 'gf-component',
            'noneditable_class' => 'gf-component',
            'content_style' => '
                .gf-component {
                  margin: 20px 0;
                  padding: 20px;
                  background-color: #fefefe;
                  display: flex;
                  flex-wrap: wrap;
                  justify-content: center;
                  align-items: center;
                  color: #6487b6;
                  border: 2px dashed #6487b6;

                  &:after {
                    content: attr(data-bn) " • " attr(data-n) " • " attr(data-id);
                    display: block;
                    width: 100%;
                    font-size: 11px;
                    text-align: center;
                    margin-top: 10px;
                  }
                }
            ',

            'paste_as_text' => true,


            // 'spellchecker_language' => 'en',
            // 'inline' => true,
            // 'toolbar' => false,
            // 'quickbars_insert_toolbar' => 'quicktable image media codesample',
            // 'quickbars_selection_toolbar' => 'bold italic underline | blocks | bullist numlist | blockquote quicklink',
            // 'contextmenu' => 'undo redo | inserttable | cell row column deletetable | help',
            // 'powerpaste_word_import' => 'clean',
            // 'powerpaste_html_import' => 'clean',
            // 'quickbars_insert_toolbar'=> true,
            // 'quickbars_selection_toolbar' => false,


            // 'importcss_append' => true,
            // 'style_formats_merge' => true,
            // 'style_formats' => [
            //   [ 'title' => 'Headings', 'items' => [
            //           ['title' => 'Heading 1', 'block' => 'h1' ],
            //           ['title' => 'Heading 2', 'block' => 'h2' ],
            //           ['title' => 'Heading 3', 'block' => 'h3' ],
            //           ['title' => 'Heading 4', 'block' => 'h4' ],
            //           ['title' => 'Heading 5', 'block' => 'h5' ],
            //           ['title' => 'Heading 6', 'block' => 'h6' ],
            //           [
            //               'title'           => 'Subtitle',
            //               'selector'        => 'p',
            //               'classes'         => 'title-sub',
            //           ],
            //       ]
            //   ],
            //   [
            //       'title' => 'Misc Styles', 'items' => [
            //           [
            //               'title' => 'Style 1',
            //               'selector' => 'ul',
            //               'classes' => 'style1',
            //               'wrapper' => true,
            //               'merge_siblings' => false,
            //           ],
            //           [
            //               'title' => 'Button red',
            //               'inline' => 'span',
            //               'classes' => 'btn-red',
            //               'merge_siblings' => true,
            //           ],
            //       ]
            //   ],
            // ],
        ];
    }

    private static function devCfg()
    {
        // -- Dev playground config

        if (Director::isDev())
        {
            self::addCfg([
                'name' => 'dev',
                'options' => [...self::getDefaultOptions(),
                    'menubar' => 'file edit insert view format table tools help',
                    // 'block_formats' => 'Paragraph=p; Header 1=h1; Header 2=h2; Header 3=h3',
                    'elementpath' => true,
                    // 'font_formats' =>  'Arial=arial,helvetica,sans-serif; Courier New=courier new,courier,monospace; AkrutiKndPadmini=Akpdmi-n',
                    'fontsize_formats' => '11pt 10pt 12pt 14pt 16pt 18pt 24pt 36pt 48pt',
                    'height' => 800,
                    'min_height'=> 800,
                    'max_height'=> 2000,
                    'lineheight_formats' => '1 1.1 1.2 1.3 1.4 1.5 2',
                    'placeholder' => 'Tyoe here..',

                    // 'toolbar_location' => 'bottom',
                    // 'browser_spellcheck' => true,
                    // 'contextmenu' => false,

                    // 'resize' => false,
                    // 'statusbar' => false,

                    // 'template_mdate_format' => '%m/%d/%Y : %H:%M',
                    // 'template_replace_values' => [
                    //   'username' => 'Jack Black',
                    //   'staffid' => '991234',
                    //   'inboth_username' => 'Famous Person',
                    //   'inboth_staffid' => '2213',
                    // ],
                    // 'template_preview_replace_values' => [
                    //   'preview_username' => 'Jack Black',
                    //   'preview_staffid' => '991234',
                    //   'inboth_username' => 'Famous Person',
                    //   'inboth_staffid' => '2213',
                    // ],
                    // 'templates' => [
                    //   [
                    //     'title' => 'Date modified example',
                    //     'description' => 'Adds a timestamp indicating the last time the document modified.',
                    //     'content' => '<p>Last Modified: <time class="mdate">This will be replaced with the date modified.</time></p>'
                    //   ],
                    //   [
                    //     'title' => 'Replace values example',
                    //     'description' => 'These values will be replaced when the template is inserted into the editor content.',
                    //     'content' => '<p>Name: {$username}, StaffID: {$staffid}</p>'
                    //   ],
                    //   [
                    //     'title' => 'Replace values preview example',
                    //     'description' => 'These values are replaced in the preview, but not when inserted into the editor content.',
                    //     'content' => '<p>Name: {$preview_username}, StaffID: {$preview_staffid}</p>'
                    //   ],
                    //   [
                    //     'title' => 'Replace values preview and content example',
                    //     'description' => 'These values are replaced in the preview, and in the content.',
                    //     'content' => '<p>Name: {$inboth_username}, StaffID: {$inboth_staffid}</p>'
                    //   ]
                    // ],
                ],
                'plugins' => [...self::getDefaultPlugins(),
                    // 'accordion',
                    'autosave',
                    'charmap',
                    'codesample',
                    'directionality',
                    'fullscreen',
                    'help',
                    'insertdatetime',
                    'nonbreaking',
                    'pagebreak',
                    'preview',
                    'quickbars',
                    'save',
                    'searchreplace',
                    'template',
                    'visualblocks',
                    'visualchars',
                ],
                'buttons' => [
                    [
                        'bold', 'italic', 'underline', 'removeformat', '|',
                        'alignleft', 'aligncenter', 'alignright', 'alignjustify', '|',
                        'bullist', 'numlist', 'outdent', 'indent',
                    ],
                    [
                        'blocks', '|',
                        'pastetext', '|',
                        'table', 'ssmedia', 'ssembed', 'sslink', 'anchor', 'unlink', '|',
                        'code', 'visualblocks'
                    ],
                    [
                        'image', 'strikethrough', 'forecolor', 'hilitecolor', 'fontname', 'fontsize', 'blockquote', 'p'
                    ],
                    [
                        'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
                        'div',
                        'address',
                        'pre',
                        'div',
                        'dt, dd',
                        'samp',
                        'styles',
                        // 'accordion'
                        'restoredraft',
                        'charmap',
                        'codesample',
                        'ltr rtl',
                        'emoticons',
                        'fullscreen',
                        'help',
                        'insertdatetime',
                        'nonbreaking',
                        'pagebreak',
                        'preview',
                        'quicktable',
                        'save',
                        'searchreplace',
                        'template',
                        'visualblocks',
                        'visualchars',
                        // 'tinymcespellchecker',
                        'fontselect',
                        'fontsizeselect',
                        'lineheight',
                    ],


                    [
                      'aligncenter', 'alignjustify', 'alignleft', 'alignnone', 'alignright|', 'anchor', '|', 'blockquote', 'blocks', '|', 'backcolor', '|', 'bold', '|', 'copy', '|', 'cut', '|', 'fontfamily', 'fontsize', 'forecolor', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'hr', 'indent', '|', 'italic', '|', 'language', '|', 'lineheight', '|', 'newdocument', '|', 'outdent', '|', 'paste', 'pastetext', '|', 'print', '|', 'redo', '|', 'remove', 'removeformat', '|', 'selectall', '|', 'strikethrough', '|', 'styles', '|', 'subscript', 'superscript', 'underline', '|', 'undo', '|', 'visualaid', '|', 'a11ycheck', 'advtablerownumbering', 'typopgraphy', 'anchor', 'restoredraft', 'casechange', 'charmap', 'checklist', 'code', 'codesample', 'addcomment', 'showcomments', 'ltr', 'rtl', 'editimage', 'fliph', 'flipv', 'imageoptions', 'rotateleft', 'rotateright', 'emoticons', 'export', 'footnotes', 'footnotesupdate', 'formatpainter', 'fullscreen', 'help', 'image', 'insertdatetime', 'link', 'openlink', 'unlink', 'bullist', 'numlist', 'media', 'mergetags', 'mergetags_list', 'nonbreaking', 'pagebreak', 'pageembed', 'permanentpen', 'preview', 'quickimage', 'quicklink', 'quicktable', 'cancel', 'save', 'searchreplace', 'spellcheckdialog', 'spellchecker', '|', 'table', 'tablecellprops', 'tablecopyrow', 'tablecutrow', 'tabledelete', 'tabledeletecol', 'tabledeleterow', 'tableinsertdialog', 'tableinsertcolafter', 'tableinsertcolbefore', 'tableinsertrowafter', 'tableinsertrowbefore', 'tablemergecells', 'tablepasterowafter', 'tablepasterowbefore', 'tableprops', 'tablerowprops', 'tablesplitcells', 'tableclass', 'tablecellclass', 'tablecellvalign', 'tablecellborderwidth', 'tablecellborderstyle', 'tablecaption', 'tablecellbackgroundcolor', 'tablecellbordercolor', 'tablerowheader', 'tablecolheader', '|', 'tableofcontents', 'tableofcontentsupdate', '|', 'template', 'typography', '|', 'insertfile', '|', 'visualblocks', 'visualchars', '|', 'wordcount'
                    ]
                ],
            ]);
        }
    }

    // ->setOption('image_size_presets', [
    //     [
    //         'width' => 300,
    //         'text' => 'Small fit',
    //         'name' => 'smallfit',
    //         'default' => true
    //     ],
    //     [
    //         'width' => 600,
    //         'i18n' =>  TinyMCEConfig::class . '.BEST_FIT',
    //         'text' => 'Best fit',
    //         'name' => 'bestfit'
    //     ],
    //     [
    //         'i18n' =>  TinyMCEConfig::class . '.ORIGINAL_SIZE',
    //         'text' => 'Original size',
    //         'name' => 'originalsize'
    //     ]
    // ]);

    // $validElements = str_replace('iframe[', 'iframe[data-*|');
    // $editor->setOption('extended_valid_elements', $validElements);

    /**
     * Register the default internal shortcodes.
     */
    // ShortcodeParser::get('default')->register(
    //     'sitetree_link',
    //     [SiteTree::class, 'link_shortcode_handler']
    // );

    /**
     * Replace a "[sitetree_link id=n]" shortcode with a link to the page with the corresponding ID.
     *
     * @param array      $arguments
     * @param string     $content
     * @param ShortcodeParser $parser
     * @return string
     */
    // public static function link_shortcode_handler($arguments, $content = null, $parser = null)
    // {
    //     if (!isset($arguments['id']) || !is_numeric($arguments['id'])) {
    //         return null;
    //     }

    //     /** @var SiteTree $page */
    //     if (!($page = DataObject::get_by_id(self::class, $arguments['id']))         // Get the current page by ID.
    //         && !($page = Versioned::get_latest_version(self::class, $arguments['id'])) // Attempt link to old version.
    //     ) {
    //         return null; // There were no suitable matches at all.
    //     }

    //     /** @var SiteTree $page */
    //     $link = Convert::raw2att($page->Link());

    //     if ($content) {
    //         return sprintf('<a href="%s">%s</a>', $link, $parser->parse($content));
    //     } else {
    //         return $link;
    //     }
    // }
}
