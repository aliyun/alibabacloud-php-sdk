<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteFunctionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $cacheReserveShrink;

    /**
     * @description The cache rules.
     *
     * @var string
     */
    public $cacheRulesShrink;

    /**
     * @description The cache tags.
     *
     * @var string
     */
    public $cacheTagsShrink;

    /**
     * @description The configuration of CNAME flattening.
     *
     * @var string
     */
    public $cnameFlatteningShrink;

    /**
     * @description The configuration of a compression rule.
     *
     * @var string
     */
    public $compressionRulesShrink;

    /**
     * @var string
     */
    public $crossBorderOptimizationShrink;

    /**
     * @description The configuration of development mode.
     *
     * @var string
     */
    public $developmentModeShrink;

    /**
     * @description The configuration of a request header modification rule.
     *
     * @var string
     */
    public $httpRequestHeaderModificationRulesShrink;

    /**
     * @description The configuration of a response header modification rule.
     *
     * @var string
     */
    public $httpResponseHeaderModificationRulesShrink;

    /**
     * @var string
     */
    public $httpsApplicationConfigurationShrink;

    /**
     * @var string
     */
    public $httpsBasicConfigurationShrink;

    /**
     * @description The configuration of image transformations.
     *
     * @var string
     */
    public $imageTransformShrink;

    /**
     * @description The IPv6 configuration.
     *
     * @var string
     */
    public $ipv6Shrink;

    /**
     * @description The configuration of managed transforms.
     *
     * @var string
     */
    public $managedTransformsShrink;

    /**
     * @var string
     */
    public $networkOptimizationShrink;

    /**
     * @description The configuration of origin protection.
     *
     * @var string
     */
    public $originProtectionShrink;

    /**
     * @description The configuration of an origin rule.
     *
     * @var string
     */
    public $originRulesShrink;

    /**
     * @description The configuration of a redirect rule.
     *
     * @var string
     */
    public $redirectRulesShrink;

    /**
     * @description The configuration of a URL rewrite rule.
     *
     * @var string
     */
    public $rewriteUrlRulesShrink;

    /**
     * @description The configuration of SEO crawler bypassing.
     *
     * @var string
     */
    public $seoBypassShrink;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](~~ListSites~~) operation.
     *
     * This parameter is required.
     * @example CreateSiteFunction
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The configuration of site hold. After this feature is enabled, other accounts cannot add your website domain or its subdomains to ESA.
     *
     * @var string
     */
    public $siteNameExclusiveShrink;

    /**
     * @description The configuration of temporarily pausing ESA proxy on the website. If you pause ESA proxy, all requests to the domains in your DNS records go directly to your origin server.
     *
     * @var string
     */
    public $sitePauseShrink;

    /**
     * @description The version number of the website. You can use this parameter to specify a version of your website to apply the new feature settings. By default, version 0 is used.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $tieredCacheShrink;
    protected $_name = [
        'cacheReserveShrink'                        => 'CacheReserve',
        'cacheRulesShrink'                          => 'CacheRules',
        'cacheTagsShrink'                           => 'CacheTags',
        'cnameFlatteningShrink'                     => 'CnameFlattening',
        'compressionRulesShrink'                    => 'CompressionRules',
        'crossBorderOptimizationShrink'             => 'CrossBorderOptimization',
        'developmentModeShrink'                     => 'DevelopmentMode',
        'httpRequestHeaderModificationRulesShrink'  => 'HttpRequestHeaderModificationRules',
        'httpResponseHeaderModificationRulesShrink' => 'HttpResponseHeaderModificationRules',
        'httpsApplicationConfigurationShrink'       => 'HttpsApplicationConfiguration',
        'httpsBasicConfigurationShrink'             => 'HttpsBasicConfiguration',
        'imageTransformShrink'                      => 'ImageTransform',
        'ipv6Shrink'                                => 'Ipv6',
        'managedTransformsShrink'                   => 'ManagedTransforms',
        'networkOptimizationShrink'                 => 'NetworkOptimization',
        'originProtectionShrink'                    => 'OriginProtection',
        'originRulesShrink'                         => 'OriginRules',
        'redirectRulesShrink'                       => 'RedirectRules',
        'rewriteUrlRulesShrink'                     => 'RewriteUrlRules',
        'seoBypassShrink'                           => 'SeoBypass',
        'siteId'                                    => 'SiteId',
        'siteNameExclusiveShrink'                   => 'SiteNameExclusive',
        'sitePauseShrink'                           => 'SitePause',
        'siteVersion'                               => 'SiteVersion',
        'tieredCacheShrink'                         => 'TieredCache',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheReserveShrink) {
            $res['CacheReserve'] = $this->cacheReserveShrink;
        }
        if (null !== $this->cacheRulesShrink) {
            $res['CacheRules'] = $this->cacheRulesShrink;
        }
        if (null !== $this->cacheTagsShrink) {
            $res['CacheTags'] = $this->cacheTagsShrink;
        }
        if (null !== $this->cnameFlatteningShrink) {
            $res['CnameFlattening'] = $this->cnameFlatteningShrink;
        }
        if (null !== $this->compressionRulesShrink) {
            $res['CompressionRules'] = $this->compressionRulesShrink;
        }
        if (null !== $this->crossBorderOptimizationShrink) {
            $res['CrossBorderOptimization'] = $this->crossBorderOptimizationShrink;
        }
        if (null !== $this->developmentModeShrink) {
            $res['DevelopmentMode'] = $this->developmentModeShrink;
        }
        if (null !== $this->httpRequestHeaderModificationRulesShrink) {
            $res['HttpRequestHeaderModificationRules'] = $this->httpRequestHeaderModificationRulesShrink;
        }
        if (null !== $this->httpResponseHeaderModificationRulesShrink) {
            $res['HttpResponseHeaderModificationRules'] = $this->httpResponseHeaderModificationRulesShrink;
        }
        if (null !== $this->httpsApplicationConfigurationShrink) {
            $res['HttpsApplicationConfiguration'] = $this->httpsApplicationConfigurationShrink;
        }
        if (null !== $this->httpsBasicConfigurationShrink) {
            $res['HttpsBasicConfiguration'] = $this->httpsBasicConfigurationShrink;
        }
        if (null !== $this->imageTransformShrink) {
            $res['ImageTransform'] = $this->imageTransformShrink;
        }
        if (null !== $this->ipv6Shrink) {
            $res['Ipv6'] = $this->ipv6Shrink;
        }
        if (null !== $this->managedTransformsShrink) {
            $res['ManagedTransforms'] = $this->managedTransformsShrink;
        }
        if (null !== $this->networkOptimizationShrink) {
            $res['NetworkOptimization'] = $this->networkOptimizationShrink;
        }
        if (null !== $this->originProtectionShrink) {
            $res['OriginProtection'] = $this->originProtectionShrink;
        }
        if (null !== $this->originRulesShrink) {
            $res['OriginRules'] = $this->originRulesShrink;
        }
        if (null !== $this->redirectRulesShrink) {
            $res['RedirectRules'] = $this->redirectRulesShrink;
        }
        if (null !== $this->rewriteUrlRulesShrink) {
            $res['RewriteUrlRules'] = $this->rewriteUrlRulesShrink;
        }
        if (null !== $this->seoBypassShrink) {
            $res['SeoBypass'] = $this->seoBypassShrink;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteNameExclusiveShrink) {
            $res['SiteNameExclusive'] = $this->siteNameExclusiveShrink;
        }
        if (null !== $this->sitePauseShrink) {
            $res['SitePause'] = $this->sitePauseShrink;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }
        if (null !== $this->tieredCacheShrink) {
            $res['TieredCache'] = $this->tieredCacheShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteFunctionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheReserve'])) {
            $model->cacheReserveShrink = $map['CacheReserve'];
        }
        if (isset($map['CacheRules'])) {
            $model->cacheRulesShrink = $map['CacheRules'];
        }
        if (isset($map['CacheTags'])) {
            $model->cacheTagsShrink = $map['CacheTags'];
        }
        if (isset($map['CnameFlattening'])) {
            $model->cnameFlatteningShrink = $map['CnameFlattening'];
        }
        if (isset($map['CompressionRules'])) {
            $model->compressionRulesShrink = $map['CompressionRules'];
        }
        if (isset($map['CrossBorderOptimization'])) {
            $model->crossBorderOptimizationShrink = $map['CrossBorderOptimization'];
        }
        if (isset($map['DevelopmentMode'])) {
            $model->developmentModeShrink = $map['DevelopmentMode'];
        }
        if (isset($map['HttpRequestHeaderModificationRules'])) {
            $model->httpRequestHeaderModificationRulesShrink = $map['HttpRequestHeaderModificationRules'];
        }
        if (isset($map['HttpResponseHeaderModificationRules'])) {
            $model->httpResponseHeaderModificationRulesShrink = $map['HttpResponseHeaderModificationRules'];
        }
        if (isset($map['HttpsApplicationConfiguration'])) {
            $model->httpsApplicationConfigurationShrink = $map['HttpsApplicationConfiguration'];
        }
        if (isset($map['HttpsBasicConfiguration'])) {
            $model->httpsBasicConfigurationShrink = $map['HttpsBasicConfiguration'];
        }
        if (isset($map['ImageTransform'])) {
            $model->imageTransformShrink = $map['ImageTransform'];
        }
        if (isset($map['Ipv6'])) {
            $model->ipv6Shrink = $map['Ipv6'];
        }
        if (isset($map['ManagedTransforms'])) {
            $model->managedTransformsShrink = $map['ManagedTransforms'];
        }
        if (isset($map['NetworkOptimization'])) {
            $model->networkOptimizationShrink = $map['NetworkOptimization'];
        }
        if (isset($map['OriginProtection'])) {
            $model->originProtectionShrink = $map['OriginProtection'];
        }
        if (isset($map['OriginRules'])) {
            $model->originRulesShrink = $map['OriginRules'];
        }
        if (isset($map['RedirectRules'])) {
            $model->redirectRulesShrink = $map['RedirectRules'];
        }
        if (isset($map['RewriteUrlRules'])) {
            $model->rewriteUrlRulesShrink = $map['RewriteUrlRules'];
        }
        if (isset($map['SeoBypass'])) {
            $model->seoBypassShrink = $map['SeoBypass'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteNameExclusive'])) {
            $model->siteNameExclusiveShrink = $map['SiteNameExclusive'];
        }
        if (isset($map['SitePause'])) {
            $model->sitePauseShrink = $map['SitePause'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }
        if (isset($map['TieredCache'])) {
            $model->tieredCacheShrink = $map['TieredCache'];
        }

        return $model;
    }
}
