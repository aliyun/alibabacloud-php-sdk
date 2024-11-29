<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSiteFunctionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $cacheReserveShrink;

    /**
     * @var string
     */
    public $cacheRulesShrink;

    /**
     * @var string
     */
    public $cacheTagsShrink;

    /**
     * @var string
     */
    public $cnameFlatteningShrink;

    /**
     * @var string
     */
    public $compressionRulesShrink;

    /**
     * @var string
     */
    public $crossBorderOptimizationShrink;

    /**
     * @var string
     */
    public $developmentModeShrink;

    /**
     * @var string
     */
    public $httpRequestHeaderModificationRulesShrink;

    /**
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
     * @var string
     */
    public $imageTransformShrink;

    /**
     * @var string
     */
    public $ipv6Shrink;

    /**
     * @var string
     */
    public $managedTransformsShrink;

    /**
     * @var string
     */
    public $networkOptimizationShrink;

    /**
     * @var string
     */
    public $originRulesShrink;

    /**
     * @var string
     */
    public $redirectRulesShrink;

    /**
     * @var string
     */
    public $rewriteUrlRulesShrink;

    /**
     * @var string
     */
    public $seoBypassShrink;

    /**
     * @description This parameter is required.
     *
     * @example UpdateSiteFunction
     *
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteNameExclusiveShrink;

    /**
     * @var string
     */
    public $sitePauseShrink;

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
        'originRulesShrink'                         => 'OriginRules',
        'redirectRulesShrink'                       => 'RedirectRules',
        'rewriteUrlRulesShrink'                     => 'RewriteUrlRules',
        'seoBypassShrink'                           => 'SeoBypass',
        'siteId'                                    => 'SiteId',
        'siteNameExclusiveShrink'                   => 'SiteNameExclusive',
        'sitePauseShrink'                           => 'SitePause',
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
        if (null !== $this->tieredCacheShrink) {
            $res['TieredCache'] = $this->tieredCacheShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSiteFunctionShrinkRequest
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
        if (isset($map['TieredCache'])) {
            $model->tieredCacheShrink = $map['TieredCache'];
        }

        return $model;
    }
}
