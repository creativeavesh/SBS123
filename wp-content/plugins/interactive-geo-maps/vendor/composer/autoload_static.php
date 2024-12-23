<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit010e8813bde93bc751acf862531bc8b7
{
    public static $files = array (
        '57aea4427272562eb78cf61f6733ec6a' => __DIR__ . '/..' . '/saltus/framework/lib/codestar-framework/codestar-framework.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\' => 40,
            'Saltus\\WP\\Framework\\' => 20,
        ),
        'N' => 
        array (
            'Noodlehaus\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\' => 
        array (
            0 => __DIR__ . '/../..'.'/build' . '/../src',
        ),
        'Saltus\\WP\\Framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/saltus/framework/src',
        ),
        'Noodlehaus\\' => 
        array (
            0 => __DIR__ . '/..' . '/hassankhan/config/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Noodlehaus\\AbstractConfig' => __DIR__ . '/..' . '/hassankhan/config/src/AbstractConfig.php',
        'Noodlehaus\\Config' => __DIR__ . '/..' . '/hassankhan/config/src/Config.php',
        'Noodlehaus\\ConfigInterface' => __DIR__ . '/..' . '/hassankhan/config/src/ConfigInterface.php',
        'Noodlehaus\\ErrorException' => __DIR__ . '/..' . '/hassankhan/config/src/ErrorException.php',
        'Noodlehaus\\Exception' => __DIR__ . '/..' . '/hassankhan/config/src/Exception.php',
        'Noodlehaus\\Exception\\EmptyDirectoryException' => __DIR__ . '/..' . '/hassankhan/config/src/Exception/EmptyDirectoryException.php',
        'Noodlehaus\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/hassankhan/config/src/Exception/FileNotFoundException.php',
        'Noodlehaus\\Exception\\ParseException' => __DIR__ . '/..' . '/hassankhan/config/src/Exception/ParseException.php',
        'Noodlehaus\\Exception\\UnsupportedFormatException' => __DIR__ . '/..' . '/hassankhan/config/src/Exception/UnsupportedFormatException.php',
        'Noodlehaus\\Exception\\WriteException' => __DIR__ . '/..' . '/hassankhan/config/src/Exception/WriteException.php',
        'Noodlehaus\\Parser\\AbstractParser' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/AbstractParser.php',
        'Noodlehaus\\Parser\\Ini' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/Ini.php',
        'Noodlehaus\\Parser\\Json' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/Json.php',
        'Noodlehaus\\Parser\\ParserInterface' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/ParserInterface.php',
        'Noodlehaus\\Parser\\Php' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/Php.php',
        'Noodlehaus\\Parser\\Properties' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/Properties.php',
        'Noodlehaus\\Parser\\Serialize' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/Serialize.php',
        'Noodlehaus\\Parser\\Xml' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/Xml.php',
        'Noodlehaus\\Parser\\Yaml' => __DIR__ . '/..' . '/hassankhan/config/src/Parser/Yaml.php',
        'Noodlehaus\\Writer\\AbstractWriter' => __DIR__ . '/..' . '/hassankhan/config/src/Writer/AbstractWriter.php',
        'Noodlehaus\\Writer\\Ini' => __DIR__ . '/..' . '/hassankhan/config/src/Writer/Ini.php',
        'Noodlehaus\\Writer\\Json' => __DIR__ . '/..' . '/hassankhan/config/src/Writer/Json.php',
        'Noodlehaus\\Writer\\Properties' => __DIR__ . '/..' . '/hassankhan/config/src/Writer/Properties.php',
        'Noodlehaus\\Writer\\Serialize' => __DIR__ . '/..' . '/hassankhan/config/src/Writer/Serialize.php',
        'Noodlehaus\\Writer\\WriterInterface' => __DIR__ . '/..' . '/hassankhan/config/src/Writer/WriterInterface.php',
        'Noodlehaus\\Writer\\Xml' => __DIR__ . '/..' . '/hassankhan/config/src/Writer/Xml.php',
        'Noodlehaus\\Writer\\Yaml' => __DIR__ . '/..' . '/hassankhan/config/src/Writer/Yaml.php',
        'Saltus\\WP\\Framework\\Core' => __DIR__ . '/..' . '/saltus/framework/src/Core.php',
        'Saltus\\WP\\Framework\\Exception\\SaltusFrameworkThrowable' => __DIR__ . '/..' . '/saltus/framework/src/Exception/SaltusFrameworkThrowable.php',
        'Saltus\\WP\\Framework\\Features\\AdminCols\\AdminCols' => __DIR__ . '/..' . '/saltus/framework/src/Features/AdminCols/AdminCols.php',
        'Saltus\\WP\\Framework\\Features\\AdminCols\\SaltusAdminCols' => __DIR__ . '/..' . '/saltus/framework/src/Features/AdminCols/SaltusAdminCols.php',
        'Saltus\\WP\\Framework\\Features\\AdminFilters\\AdminFilters' => __DIR__ . '/..' . '/saltus/framework/src/Features/AdminFilters/AdminFilters.php',
        'Saltus\\WP\\Framework\\Features\\AdminFilters\\SaltusAdminFilters' => __DIR__ . '/..' . '/saltus/framework/src/Features/AdminFilters/SaltusAdminFilters.php',
        'Saltus\\WP\\Framework\\Features\\AdminFilters\\WalkerTaxonomyDropdown' => __DIR__ . '/..' . '/saltus/framework/src/Features/AdminFilters/WalkerTaxonomyDropdown.php',
        'Saltus\\WP\\Framework\\Features\\DragAndDrop\\DragAndDrop' => __DIR__ . '/..' . '/saltus/framework/src/Features/DragAndDrop/DragAndDrop.php',
        'Saltus\\WP\\Framework\\Features\\DragAndDrop\\SaltusDragAndDrop' => __DIR__ . '/..' . '/saltus/framework/src/Features/DragAndDrop/SaltusDragAndDrop.php',
        'Saltus\\WP\\Framework\\Features\\DragAndDrop\\UpdateMenuDragAndDrop' => __DIR__ . '/..' . '/saltus/framework/src/Features/DragAndDrop/UpdateMenuDragAndDrop.php',
        'Saltus\\WP\\Framework\\Features\\Duplicate\\Duplicate' => __DIR__ . '/..' . '/saltus/framework/src/Features/Duplicate/Duplicate.php',
        'Saltus\\WP\\Framework\\Features\\Duplicate\\SaltusDuplicate' => __DIR__ . '/..' . '/saltus/framework/src/Features/Duplicate/SaltusDuplicate.php',
        'Saltus\\WP\\Framework\\Features\\FeatureA\\FeatureA' => __DIR__ . '/..' . '/saltus/framework/src/Features/FeatureA/FeatureA.php',
        'Saltus\\WP\\Framework\\Features\\FeatureA\\SaltusFeatureA' => __DIR__ . '/..' . '/saltus/framework/src/Features/FeatureA/SaltusFeatureA.php',
        'Saltus\\WP\\Framework\\Features\\Meta\\CMB2Meta' => __DIR__ . '/..' . '/saltus/framework/src/Features/Meta/CMB2Meta.php',
        'Saltus\\WP\\Framework\\Features\\Meta\\CodestarMeta' => __DIR__ . '/..' . '/saltus/framework/src/Features/Meta/CodestarMeta.php',
        'Saltus\\WP\\Framework\\Features\\Meta\\Meta' => __DIR__ . '/..' . '/saltus/framework/src/Features/Meta/Meta.php',
        'Saltus\\WP\\Framework\\Features\\RememberTabs\\RememberTabs' => __DIR__ . '/..' . '/saltus/framework/src/Features/RememberTabs/RememberTabs.php',
        'Saltus\\WP\\Framework\\Features\\RememberTabs\\SaltusRememberTabs' => __DIR__ . '/..' . '/saltus/framework/src/Features/RememberTabs/SaltusRememberTabs.php',
        'Saltus\\WP\\Framework\\Features\\Settings\\CodestarSettings' => __DIR__ . '/..' . '/saltus/framework/src/Features/Settings/CodestarSettings.php',
        'Saltus\\WP\\Framework\\Features\\Settings\\Settings' => __DIR__ . '/..' . '/saltus/framework/src/Features/Settings/Settings.php',
        'Saltus\\WP\\Framework\\Features\\SingleExport\\SaltusSingleExport' => __DIR__ . '/..' . '/saltus/framework/src/Features/SingleExport/SaltusSingleExport.php',
        'Saltus\\WP\\Framework\\Features\\SingleExport\\SingleExport' => __DIR__ . '/..' . '/saltus/framework/src/Features/SingleExport/SingleExport.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Container\\CanRegister' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Container/CanRegister.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Container\\Container' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Container/Container.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Container\\ContainerAssembler' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Container/ContainerAssembler.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Container\\FailedToMakeInstance' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Container/FailedToMakeInstance.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Container\\GenericContainer' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Container/GenericContainer.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Container\\Instantiator' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Container/Instantiator.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Container\\Invalid' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Container/Invalid.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Container\\ServiceContainer' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Container/ServiceContainer.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Plugin\\Activateable' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Plugin/Activateable.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Plugin\\Deactivateable' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Plugin/Deactivateable.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Plugin\\Plugin' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Plugin/Plugin.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Plugin\\Registerable' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Plugin/Registerable.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Service\\Actionable' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Service/Actionable.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Service\\App' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Service/App.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Service\\Assembly' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Service/Assembly.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Service\\Conditional' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Service/Conditional.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Service\\Processable' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Service/Processable.php',
        'Saltus\\WP\\Framework\\Infrastructure\\Service\\Service' => __DIR__ . '/..' . '/saltus/framework/src/Infrastructure/Service/Service.php',
        'Saltus\\WP\\Framework\\Modeler' => __DIR__ . '/..' . '/saltus/framework/src/Modeler.php',
        'Saltus\\WP\\Framework\\Models\\BaseModel' => __DIR__ . '/..' . '/saltus/framework/src/Models/BaseModel.php',
        'Saltus\\WP\\Framework\\Models\\Config\\NoFile' => __DIR__ . '/..' . '/saltus/framework/src/Models/Config/NoFile.php',
        'Saltus\\WP\\Framework\\Models\\Model' => __DIR__ . '/..' . '/saltus/framework/src/Models/Model.php',
        'Saltus\\WP\\Framework\\Models\\ModelFactory' => __DIR__ . '/..' . '/saltus/framework/src/Models/ModelFactory.php',
        'Saltus\\WP\\Framework\\Models\\PostType' => __DIR__ . '/..' . '/saltus/framework/src/Models/PostType.php',
        'Saltus\\WP\\Framework\\Models\\Taxonomy' => __DIR__ . '/..' . '/saltus/framework/src/Models/Taxonomy.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Core' => __DIR__ . '/../..'.'/build' . '/../src/Core.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Loader' => __DIR__ . '/../..'.'/build' . '/../src/Loader.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Actions' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Actions.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Assets' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Assets.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Blocks\\MapBlock' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Blocks/MapBlock.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\EditMap' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/EditMap.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Field' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Field.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\I18n' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/I18n.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Integrations\\ElementorMapWidget' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Integrations/ElementorMapWidget.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Map' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Map.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\MapList' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/MapList.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\Extras\\ProDropdownMapEntries' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/Extras/ProDropdownMapEntries.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\Extras\\ProGeolocateContent' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/Extras/ProGeolocateContent.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\Extras\\ProListMapEntries' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/Extras/ProListMapEntries.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\Pro' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/Pro.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\ProActions' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/ProActions.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\ProIcons' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/ProIcons.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\ProMap' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/ProMap.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\ProMeta' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/ProMeta.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Pro\\ProSettings' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Pro/ProSettings.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Utils\\MapListCurrent' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Utils/MapListCurrent.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Utils\\MapListDropdown' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Utils/MapListDropdown.php',
        'Saltus\\WP\\Plugin\\Saltus\\InteractiveMaps\\Plugin\\Utils\\MapListOutput' => __DIR__ . '/../..'.'/build' . '/../src/Plugin/Utils/MapListOutput.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit010e8813bde93bc751acf862531bc8b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit010e8813bde93bc751acf862531bc8b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit010e8813bde93bc751acf862531bc8b7::$classMap;

        }, null, ClassLoader::class);
    }
}
