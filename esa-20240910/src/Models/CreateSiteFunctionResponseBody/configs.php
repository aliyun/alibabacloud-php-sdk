<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\cacheReserve;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\cacheRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\cacheTags;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\cnameFlattening;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\compressionRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\crossBorderOptimization;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\developmentMode;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\httpRequestHeaderModificationRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\httpResponseHeaderModificationRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\httpsApplicationConfiguration;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\httpsBasicConfiguration;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\imageTransform;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\ipv6;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\managedTransforms;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\networkOptimization;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\originRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\redirectRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\rewriteUrlRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\seoBypass;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\siteNameExclusive;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\sitePause;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs\tieredCache;
use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @var cacheReserve[]
     */
    public $cacheReserve;

    /**
     * @description The cache rules.
     *
     * @var cacheRules[]
     */
    public $cacheRules;

    /**
     * @description The cache tags.
     *
     * @var cacheTags[]
     */
    public $cacheTags;

    /**
     * @var cnameFlattening[]
     */
    public $cnameFlattening;

    /**
     * @description The configuration of a compression rule.
     *
     * @var compressionRules[]
     */
    public $compressionRules;

    /**
     * @var crossBorderOptimization[]
     */
    public $crossBorderOptimization;

    /**
     * @description The configuration of development mode.
     *
     * @var developmentMode[]
     */
    public $developmentMode;

    /**
     * @description The configuration of a request header modification rule.
     *
     * @var httpRequestHeaderModificationRules[]
     */
    public $httpRequestHeaderModificationRules;

    /**
     * @description The configuration of a response header modification rule.
     *
     * @var httpResponseHeaderModificationRules[]
     */
    public $httpResponseHeaderModificationRules;

    /**
     * @var httpsApplicationConfiguration[]
     */
    public $httpsApplicationConfiguration;

    /**
     * @var httpsBasicConfiguration[]
     */
    public $httpsBasicConfiguration;

    /**
     * @description The configuration of image transformations.
     *
     * @var imageTransform[]
     */
    public $imageTransform;

    /**
     * @description The IPv6 configuration.
     *
     * @var ipv6[]
     */
    public $ipv6;

    /**
     * @description The configuration of managed transforms.
     *
     * @var managedTransforms[]
     */
    public $managedTransforms;

    /**
     * @var networkOptimization[]
     */
    public $networkOptimization;

    /**
     * @description The configuration of an origin rule.
     *
     * @var originRules[]
     */
    public $originRules;

    /**
     * @description The configuration of a redirect rule.
     *
     * @var redirectRules[]
     */
    public $redirectRules;

    /**
     * @description The configuration of a URL rewrite rule.
     *
     * @var rewriteUrlRules[]
     */
    public $rewriteUrlRules;

    /**
     * @description The configuration of SEO crawler bypassing.
     *
     * @var seoBypass[]
     */
    public $seoBypass;

    /**
     * @var siteNameExclusive[]
     */
    public $siteNameExclusive;

    /**
     * @description The configuration of temporarily pausing ESA proxy on the website. If you pause ESA proxy, all requests to the domains in your DNS records go directly to your origin server.
     *
     * @var sitePause[]
     */
    public $sitePause;

    /**
     * @var tieredCache[]
     */
    public $tieredCache;
    protected $_name = [
        'cacheReserve'                        => 'CacheReserve',
        'cacheRules'                          => 'CacheRules',
        'cacheTags'                           => 'CacheTags',
        'cnameFlattening'                     => 'CnameFlattening',
        'compressionRules'                    => 'CompressionRules',
        'crossBorderOptimization'             => 'CrossBorderOptimization',
        'developmentMode'                     => 'DevelopmentMode',
        'httpRequestHeaderModificationRules'  => 'HttpRequestHeaderModificationRules',
        'httpResponseHeaderModificationRules' => 'HttpResponseHeaderModificationRules',
        'httpsApplicationConfiguration'       => 'HttpsApplicationConfiguration',
        'httpsBasicConfiguration'             => 'HttpsBasicConfiguration',
        'imageTransform'                      => 'ImageTransform',
        'ipv6'                                => 'Ipv6',
        'managedTransforms'                   => 'ManagedTransforms',
        'networkOptimization'                 => 'NetworkOptimization',
        'originRules'                         => 'OriginRules',
        'redirectRules'                       => 'RedirectRules',
        'rewriteUrlRules'                     => 'RewriteUrlRules',
        'seoBypass'                           => 'SeoBypass',
        'siteNameExclusive'                   => 'SiteNameExclusive',
        'sitePause'                           => 'SitePause',
        'tieredCache'                         => 'TieredCache',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheReserve) {
            $res['CacheReserve'] = [];
            if (null !== $this->cacheReserve && \is_array($this->cacheReserve)) {
                $n = 0;
                foreach ($this->cacheReserve as $item) {
                    $res['CacheReserve'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cacheRules) {
            $res['CacheRules'] = [];
            if (null !== $this->cacheRules && \is_array($this->cacheRules)) {
                $n = 0;
                foreach ($this->cacheRules as $item) {
                    $res['CacheRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cacheTags) {
            $res['CacheTags'] = [];
            if (null !== $this->cacheTags && \is_array($this->cacheTags)) {
                $n = 0;
                foreach ($this->cacheTags as $item) {
                    $res['CacheTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cnameFlattening) {
            $res['CnameFlattening'] = [];
            if (null !== $this->cnameFlattening && \is_array($this->cnameFlattening)) {
                $n = 0;
                foreach ($this->cnameFlattening as $item) {
                    $res['CnameFlattening'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->compressionRules) {
            $res['CompressionRules'] = [];
            if (null !== $this->compressionRules && \is_array($this->compressionRules)) {
                $n = 0;
                foreach ($this->compressionRules as $item) {
                    $res['CompressionRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->crossBorderOptimization) {
            $res['CrossBorderOptimization'] = [];
            if (null !== $this->crossBorderOptimization && \is_array($this->crossBorderOptimization)) {
                $n = 0;
                foreach ($this->crossBorderOptimization as $item) {
                    $res['CrossBorderOptimization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->developmentMode) {
            $res['DevelopmentMode'] = [];
            if (null !== $this->developmentMode && \is_array($this->developmentMode)) {
                $n = 0;
                foreach ($this->developmentMode as $item) {
                    $res['DevelopmentMode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpRequestHeaderModificationRules) {
            $res['HttpRequestHeaderModificationRules'] = [];
            if (null !== $this->httpRequestHeaderModificationRules && \is_array($this->httpRequestHeaderModificationRules)) {
                $n = 0;
                foreach ($this->httpRequestHeaderModificationRules as $item) {
                    $res['HttpRequestHeaderModificationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpResponseHeaderModificationRules) {
            $res['HttpResponseHeaderModificationRules'] = [];
            if (null !== $this->httpResponseHeaderModificationRules && \is_array($this->httpResponseHeaderModificationRules)) {
                $n = 0;
                foreach ($this->httpResponseHeaderModificationRules as $item) {
                    $res['HttpResponseHeaderModificationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpsApplicationConfiguration) {
            $res['HttpsApplicationConfiguration'] = [];
            if (null !== $this->httpsApplicationConfiguration && \is_array($this->httpsApplicationConfiguration)) {
                $n = 0;
                foreach ($this->httpsApplicationConfiguration as $item) {
                    $res['HttpsApplicationConfiguration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpsBasicConfiguration) {
            $res['HttpsBasicConfiguration'] = [];
            if (null !== $this->httpsBasicConfiguration && \is_array($this->httpsBasicConfiguration)) {
                $n = 0;
                foreach ($this->httpsBasicConfiguration as $item) {
                    $res['HttpsBasicConfiguration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageTransform) {
            $res['ImageTransform'] = [];
            if (null !== $this->imageTransform && \is_array($this->imageTransform)) {
                $n = 0;
                foreach ($this->imageTransform as $item) {
                    $res['ImageTransform'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipv6) {
            $res['Ipv6'] = [];
            if (null !== $this->ipv6 && \is_array($this->ipv6)) {
                $n = 0;
                foreach ($this->ipv6 as $item) {
                    $res['Ipv6'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->managedTransforms) {
            $res['ManagedTransforms'] = [];
            if (null !== $this->managedTransforms && \is_array($this->managedTransforms)) {
                $n = 0;
                foreach ($this->managedTransforms as $item) {
                    $res['ManagedTransforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkOptimization) {
            $res['NetworkOptimization'] = [];
            if (null !== $this->networkOptimization && \is_array($this->networkOptimization)) {
                $n = 0;
                foreach ($this->networkOptimization as $item) {
                    $res['NetworkOptimization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->originRules) {
            $res['OriginRules'] = [];
            if (null !== $this->originRules && \is_array($this->originRules)) {
                $n = 0;
                foreach ($this->originRules as $item) {
                    $res['OriginRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->redirectRules) {
            $res['RedirectRules'] = [];
            if (null !== $this->redirectRules && \is_array($this->redirectRules)) {
                $n = 0;
                foreach ($this->redirectRules as $item) {
                    $res['RedirectRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rewriteUrlRules) {
            $res['RewriteUrlRules'] = [];
            if (null !== $this->rewriteUrlRules && \is_array($this->rewriteUrlRules)) {
                $n = 0;
                foreach ($this->rewriteUrlRules as $item) {
                    $res['RewriteUrlRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->seoBypass) {
            $res['SeoBypass'] = [];
            if (null !== $this->seoBypass && \is_array($this->seoBypass)) {
                $n = 0;
                foreach ($this->seoBypass as $item) {
                    $res['SeoBypass'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->siteNameExclusive) {
            $res['SiteNameExclusive'] = [];
            if (null !== $this->siteNameExclusive && \is_array($this->siteNameExclusive)) {
                $n = 0;
                foreach ($this->siteNameExclusive as $item) {
                    $res['SiteNameExclusive'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sitePause) {
            $res['SitePause'] = [];
            if (null !== $this->sitePause && \is_array($this->sitePause)) {
                $n = 0;
                foreach ($this->sitePause as $item) {
                    $res['SitePause'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tieredCache) {
            $res['TieredCache'] = [];
            if (null !== $this->tieredCache && \is_array($this->tieredCache)) {
                $n = 0;
                foreach ($this->tieredCache as $item) {
                    $res['TieredCache'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheReserve'])) {
            if (!empty($map['CacheReserve'])) {
                $model->cacheReserve = [];
                $n                   = 0;
                foreach ($map['CacheReserve'] as $item) {
                    $model->cacheReserve[$n++] = null !== $item ? cacheReserve::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CacheRules'])) {
            if (!empty($map['CacheRules'])) {
                $model->cacheRules = [];
                $n                 = 0;
                foreach ($map['CacheRules'] as $item) {
                    $model->cacheRules[$n++] = null !== $item ? cacheRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CacheTags'])) {
            if (!empty($map['CacheTags'])) {
                $model->cacheTags = [];
                $n                = 0;
                foreach ($map['CacheTags'] as $item) {
                    $model->cacheTags[$n++] = null !== $item ? cacheTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CnameFlattening'])) {
            if (!empty($map['CnameFlattening'])) {
                $model->cnameFlattening = [];
                $n                      = 0;
                foreach ($map['CnameFlattening'] as $item) {
                    $model->cnameFlattening[$n++] = null !== $item ? cnameFlattening::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CompressionRules'])) {
            if (!empty($map['CompressionRules'])) {
                $model->compressionRules = [];
                $n                       = 0;
                foreach ($map['CompressionRules'] as $item) {
                    $model->compressionRules[$n++] = null !== $item ? compressionRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CrossBorderOptimization'])) {
            if (!empty($map['CrossBorderOptimization'])) {
                $model->crossBorderOptimization = [];
                $n                              = 0;
                foreach ($map['CrossBorderOptimization'] as $item) {
                    $model->crossBorderOptimization[$n++] = null !== $item ? crossBorderOptimization::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DevelopmentMode'])) {
            if (!empty($map['DevelopmentMode'])) {
                $model->developmentMode = [];
                $n                      = 0;
                foreach ($map['DevelopmentMode'] as $item) {
                    $model->developmentMode[$n++] = null !== $item ? developmentMode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpRequestHeaderModificationRules'])) {
            if (!empty($map['HttpRequestHeaderModificationRules'])) {
                $model->httpRequestHeaderModificationRules = [];
                $n                                         = 0;
                foreach ($map['HttpRequestHeaderModificationRules'] as $item) {
                    $model->httpRequestHeaderModificationRules[$n++] = null !== $item ? httpRequestHeaderModificationRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpResponseHeaderModificationRules'])) {
            if (!empty($map['HttpResponseHeaderModificationRules'])) {
                $model->httpResponseHeaderModificationRules = [];
                $n                                          = 0;
                foreach ($map['HttpResponseHeaderModificationRules'] as $item) {
                    $model->httpResponseHeaderModificationRules[$n++] = null !== $item ? httpResponseHeaderModificationRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpsApplicationConfiguration'])) {
            if (!empty($map['HttpsApplicationConfiguration'])) {
                $model->httpsApplicationConfiguration = [];
                $n                                    = 0;
                foreach ($map['HttpsApplicationConfiguration'] as $item) {
                    $model->httpsApplicationConfiguration[$n++] = null !== $item ? httpsApplicationConfiguration::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpsBasicConfiguration'])) {
            if (!empty($map['HttpsBasicConfiguration'])) {
                $model->httpsBasicConfiguration = [];
                $n                              = 0;
                foreach ($map['HttpsBasicConfiguration'] as $item) {
                    $model->httpsBasicConfiguration[$n++] = null !== $item ? httpsBasicConfiguration::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageTransform'])) {
            if (!empty($map['ImageTransform'])) {
                $model->imageTransform = [];
                $n                     = 0;
                foreach ($map['ImageTransform'] as $item) {
                    $model->imageTransform[$n++] = null !== $item ? imageTransform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Ipv6'])) {
            if (!empty($map['Ipv6'])) {
                $model->ipv6 = [];
                $n           = 0;
                foreach ($map['Ipv6'] as $item) {
                    $model->ipv6[$n++] = null !== $item ? ipv6::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ManagedTransforms'])) {
            if (!empty($map['ManagedTransforms'])) {
                $model->managedTransforms = [];
                $n                        = 0;
                foreach ($map['ManagedTransforms'] as $item) {
                    $model->managedTransforms[$n++] = null !== $item ? managedTransforms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkOptimization'])) {
            if (!empty($map['NetworkOptimization'])) {
                $model->networkOptimization = [];
                $n                          = 0;
                foreach ($map['NetworkOptimization'] as $item) {
                    $model->networkOptimization[$n++] = null !== $item ? networkOptimization::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OriginRules'])) {
            if (!empty($map['OriginRules'])) {
                $model->originRules = [];
                $n                  = 0;
                foreach ($map['OriginRules'] as $item) {
                    $model->originRules[$n++] = null !== $item ? originRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RedirectRules'])) {
            if (!empty($map['RedirectRules'])) {
                $model->redirectRules = [];
                $n                    = 0;
                foreach ($map['RedirectRules'] as $item) {
                    $model->redirectRules[$n++] = null !== $item ? redirectRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RewriteUrlRules'])) {
            if (!empty($map['RewriteUrlRules'])) {
                $model->rewriteUrlRules = [];
                $n                      = 0;
                foreach ($map['RewriteUrlRules'] as $item) {
                    $model->rewriteUrlRules[$n++] = null !== $item ? rewriteUrlRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SeoBypass'])) {
            if (!empty($map['SeoBypass'])) {
                $model->seoBypass = [];
                $n                = 0;
                foreach ($map['SeoBypass'] as $item) {
                    $model->seoBypass[$n++] = null !== $item ? seoBypass::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SiteNameExclusive'])) {
            if (!empty($map['SiteNameExclusive'])) {
                $model->siteNameExclusive = [];
                $n                        = 0;
                foreach ($map['SiteNameExclusive'] as $item) {
                    $model->siteNameExclusive[$n++] = null !== $item ? siteNameExclusive::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SitePause'])) {
            if (!empty($map['SitePause'])) {
                $model->sitePause = [];
                $n                = 0;
                foreach ($map['SitePause'] as $item) {
                    $model->sitePause[$n++] = null !== $item ? sitePause::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TieredCache'])) {
            if (!empty($map['TieredCache'])) {
                $model->tieredCache = [];
                $n                  = 0;
                foreach ($map['TieredCache'] as $item) {
                    $model->tieredCache[$n++] = null !== $item ? tieredCache::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
