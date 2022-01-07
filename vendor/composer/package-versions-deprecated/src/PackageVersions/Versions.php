<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.0@6d970a11479275300b5144e9373ce5feacfa9b91',
  'doctrine/data-fixtures' => '1.5.1@f18adf13f6c81c67a88360dca359ad474523f8e3',
  'doctrine/dbal' => '3.1.4@821b4f01a36ce63ed36c090ea74767b72db367e9',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.0@4a75cead0bb01cadc57c81cfa7c905e3151ed119',
  'doctrine/doctrine-fixtures-bundle' => '3.4.1@31ba202bebce0b66fe830f49f96228dcdc1503e7',
  'doctrine/doctrine-migrations-bundle' => '3.2.1@c1b10bc1466e08bba82640e49c7bbcce0c9853c2',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.3.2@b6e43bb5815f4dbb88c79a0fef1c669dfba52d58',
  'doctrine/orm' => '2.10.2@81d472f6f96b8b571cafefe8d2fef89ed9446a62',
  'doctrine/persistence' => '2.2.3@5e7bdbbfe9811c06e1f745d1c166647d5c47d6ee',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'fzaninotto/faker' => 'v1.5.0@d0190b156bcca848d401fb80f31f504f37141c8d',
  'laminas/laminas-code' => '4.4.3@bb324850d09dd437b6acb142c13e64fdc725b0e1',
  'monolog/monolog' => '1.26.1@c6b00f05152ae2c9b04a448f99c7590beb6042f5',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.5.1@a12f7e301eb7258bb68acd89d4aefa05c2906cae',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v4.4.27@1910a978dbe03503d9ee72408e2fef7c4041d97d',
  'symfony/cache' => 'v4.4.35@8518b6a06183ef41e5d5b4a7e9a61ec4ab308398',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v4.4.34@e99b65a18faa34fde57078095c39a1bc91a22492',
  'symfony/console' => 'v4.4.34@329b3a75cc6b16d435ba1b1a41df54a53382a3f0',
  'symfony/debug' => 'v4.4.31@43ede438d4cb52cd589ae5dc070e9323866ba8e0',
  'symfony/dependency-injection' => 'v4.4.34@117d7f132ed7efbd535ec947709d49bec1b9d24b',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v4.4.34@2b980711b5b9de0ad7487aeabf277e5c8301cf56',
  'symfony/dotenv' => 'v4.4.33@de87d7b873c40394aed7aa5b426e8ea5bfdc7ece',
  'symfony/error-handler' => 'v4.4.34@17785c374645def1e884d8ec49976c156c61db4d',
  'symfony/event-dispatcher' => 'v4.4.34@1a024b45369c9d55d76b6b8a241bd20c9ea1cbd8',
  'symfony/event-dispatcher-contracts' => 'v1.1.11@01e9a4efac0ee33a05dfdf93b346f62e7d0e998c',
  'symfony/expression-language' => 'v4.4.34@6331d834d364cce857e5a83368ce19141d5147bd',
  'symfony/filesystem' => 'v4.4.27@517fb795794faf29086a77d99eb8f35e457837a7',
  'symfony/finder' => 'v4.4.30@70362f1e112280d75b30087c7598b837c1b468b6',
  'symfony/flex' => 'v1.17.5@3f0dc66dcddff035a2ab98ed7e666dfd478b2712',
  'symfony/form' => 'v4.4.34@762f9c74d720e3c78249d67f2ee98bf198489de2',
  'symfony/framework-bundle' => 'v4.4.34@a7797cf87c5835bd1fe28bc12d7bdd7e29f56726',
  'symfony/http-client' => 'v4.4.35@6ed0c02fdc21a76966f19b9000de18e688d9ca68',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v4.4.34@f4cbbb6fc428588ce8373802461e7fe84e6809ab',
  'symfony/http-kernel' => 'v4.4.35@fb793f1381c34b79a43596a532a6a49bd729c9db',
  'symfony/inflector' => 'v4.4.34@cbbde60aa3aa2e7ea51830fd590b6151615c57bc',
  'symfony/intl' => 'v4.4.34@35e5824920aa1774f484560e0e1d77fcc078ca39',
  'symfony/mailer' => 'v4.4.27@edcd1e89670d6b939a8222110ad5e13ab135bd22',
  'symfony/mime' => 'v4.4.34@dd269a4da0b7c227b8fa910940588fd1bae08493',
  'symfony/monolog-bridge' => 'v4.4.27@9882c03d4c237d77ba5b2845639700653dcd9a84',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/options-resolver' => 'v4.4.30@fa0b12a3a47ed25749d47d6b4f61412fd5ca1554',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v4.4.35@c2098705326addae6e6742151dfade47ac71da1b',
  'symfony/property-access' => 'v4.4.30@727edd3a5fd2feca1562e0f2520ed6888805c0fa',
  'symfony/property-info' => 'v4.4.31@b9955daf3605753c6054ef1dc3ddee993c7ccb5b',
  'symfony/proxy-manager-bridge' => 'v4.4.34@3731d099b95bc3e8ab8db0c19b662131515cdf34',
  'symfony/routing' => 'v4.4.34@fc9dda0c8496f8ef0a89805c2eabfc43b8cef366',
  'symfony/security-bundle' => 'v4.4.34@18d4a6695b7daec4e62c31cede8cadc17499919b',
  'symfony/security-core' => 'v4.4.34@a7f51f1e72f5f47c4ff8849b253ff270ac0db01c',
  'symfony/security-csrf' => 'v4.4.27@e5bba6497d2f1178e23615d5ca01933a29b65a45',
  'symfony/security-guard' => 'v4.4.27@68d4be4fe90f4eccbbf379d478f2067550a25469',
  'symfony/security-http' => 'v4.4.34@7661d7d1dafdd67e48af2d80d4bd75a70dd912df',
  'symfony/serializer' => 'v4.4.35@1b2ae02cb1b923987947e013688c51954a80b751',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v4.4.27@c85d997af06a58ba83e2d2538e335b894c24523d',
  'symfony/translation' => 'v4.4.34@26d330720627b234803595ecfc0191eeabc65190',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v4.4.34@55a4045e1fb0431dbc158c3c071bb175f1c598fa',
  'symfony/twig-bundle' => 'v4.4.30@ebbfcb6977c0fc7fa6def39e48fde66a38125f80',
  'symfony/validator' => 'v4.4.35@629f420d8350634fd8ed686d4472c1f10044b265',
  'symfony/var-dumper' => 'v4.4.34@2d0c056b2faaa3d785bdbd5adecc593a5be9c16e',
  'symfony/var-exporter' => 'v4.4.34@75a297f25a87ce9343d39241679578886f3fd458',
  'symfony/web-link' => 'v4.4.27@a55c3a0a5da44965f39cf5f770a2e5a4a95c2c68',
  'symfony/yaml' => 'v4.4.34@2c309e258adeb9970229042be39b360d34986fad',
  'twig/extra-bundle' => 'v3.3.4@1fe52d84aa22b7891c7717ef904b1551c8d70100',
  'twig/twig' => 'v3.3.4@65cb6f0b956485e1664f13d023c55298a4bb59ca',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.13.1@63a79e8daa781cac14e5195e63ed8ae231dd10fd',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => '1.14.0@d86dfc2e2a3cd366cee475e52c6bb3bbc371aa0e',
  'phpunit/php-code-coverage' => '9.2.9@f301eb1453c9e7a1bc912ee8b0ea9db22c60223b',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.10@c814a05837f2edb0d1471d6e3f4ab3501ca3899a',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v4.4.27@9629d1524d8ced5a4ec3e94abdbd638b4ec8319b',
  'symfony/css-selector' => 'v4.4.27@5194f18bd80d106f11efa8f7cd0fbdcc3af96ce6',
  'symfony/debug-bundle' => 'v4.4.27@858748e3c2fef73187757cb58a62fe7dda61b541',
  'symfony/dom-crawler' => 'v4.4.30@4632ae3567746c7e915c33c67a2fb6ab746090c4',
  'symfony/maker-bundle' => 'v1.36.3@0f40c826c0725208c254ddcd3481690e6c7e5047',
  'symfony/phpunit-bridge' => 'v5.3.11@7b3637f0ce55c510a0fbe6e4d49b223103b7bf7b',
  'symfony/web-profiler-bundle' => 'v4.4.31@24227617a4ddbdf78f8ab12ce2b76dfb54a7d851',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'paragonie/random_compat' => '2.*@dc9645a55744a5b819798d54491abe3058575de4',
  'symfony/polyfill-ctype' => '*@dc9645a55744a5b819798d54491abe3058575de4',
  'symfony/polyfill-iconv' => '*@dc9645a55744a5b819798d54491abe3058575de4',
  'symfony/polyfill-php71' => '*@dc9645a55744a5b819798d54491abe3058575de4',
  'symfony/polyfill-php70' => '*@dc9645a55744a5b819798d54491abe3058575de4',
  'symfony/polyfill-php56' => '*@dc9645a55744a5b819798d54491abe3058575de4',
  '__root__' => 'dev-master@dc9645a55744a5b819798d54491abe3058575de4',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
