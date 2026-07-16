<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\cacheReserve;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\cacheRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\cacheTags;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\cnameFlattening;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\compressionRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\crossBorderOptimization;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\customResponseCode;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\developmentMode;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\errorPagesRedirects;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\httpIncomingRequestHeaderModificationRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\httpIncomingResponseHeaderModificationRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\httpRequestHeaderModificationRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\httpResponseHeaderModificationRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\httpsApplicationConfiguration;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\httpsBasicConfiguration;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\imageTransform;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\ipv6;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\managedTransforms;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\networkOptimization;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\originRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\redirectRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\rewriteUrlRules;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\seoBypass;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\siteNameExclusive;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\sitePause;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\tieredCache;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs\videoProcessing;

class configs extends Model
{
    /**
     * @var cacheReserve[]
     */
    public $cacheReserve;

    /**
     * @var cacheRules[]
     */
    public $cacheRules;

    /**
     * @var cacheTags[]
     */
    public $cacheTags;

    /**
     * @var cnameFlattening[]
     */
    public $cnameFlattening;

    /**
     * @var compressionRules[]
     */
    public $compressionRules;

    /**
     * @var crossBorderOptimization[]
     */
    public $crossBorderOptimization;

    /**
     * @var customResponseCode[]
     */
    public $customResponseCode;

    /**
     * @var developmentMode[]
     */
    public $developmentMode;

    /**
     * @var errorPagesRedirects[]
     */
    public $errorPagesRedirects;

    /**
     * @var httpIncomingRequestHeaderModificationRules[]
     */
    public $httpIncomingRequestHeaderModificationRules;

    /**
     * @var httpIncomingResponseHeaderModificationRules[]
     */
    public $httpIncomingResponseHeaderModificationRules;

    /**
     * @var httpRequestHeaderModificationRules[]
     */
    public $httpRequestHeaderModificationRules;

    /**
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
     * @var imageTransform[]
     */
    public $imageTransform;

    /**
     * @var ipv6[]
     */
    public $ipv6;

    /**
     * @var managedTransforms[]
     */
    public $managedTransforms;

    /**
     * @var networkOptimization[]
     */
    public $networkOptimization;

    /**
     * @var originRules[]
     */
    public $originRules;

    /**
     * @var redirectRules[]
     */
    public $redirectRules;

    /**
     * @var rewriteUrlRules[]
     */
    public $rewriteUrlRules;

    /**
     * @var seoBypass[]
     */
    public $seoBypass;

    /**
     * @var siteNameExclusive[]
     */
    public $siteNameExclusive;

    /**
     * @var sitePause[]
     */
    public $sitePause;

    /**
     * @var tieredCache[]
     */
    public $tieredCache;

    /**
     * @var videoProcessing[]
     */
    public $videoProcessing;
    protected $_name = [
        'cacheReserve' => 'CacheReserve',
        'cacheRules' => 'CacheRules',
        'cacheTags' => 'CacheTags',
        'cnameFlattening' => 'CnameFlattening',
        'compressionRules' => 'CompressionRules',
        'crossBorderOptimization' => 'CrossBorderOptimization',
        'customResponseCode' => 'CustomResponseCode',
        'developmentMode' => 'DevelopmentMode',
        'errorPagesRedirects' => 'ErrorPagesRedirects',
        'httpIncomingRequestHeaderModificationRules' => 'HttpIncomingRequestHeaderModificationRules',
        'httpIncomingResponseHeaderModificationRules' => 'HttpIncomingResponseHeaderModificationRules',
        'httpRequestHeaderModificationRules' => 'HttpRequestHeaderModificationRules',
        'httpResponseHeaderModificationRules' => 'HttpResponseHeaderModificationRules',
        'httpsApplicationConfiguration' => 'HttpsApplicationConfiguration',
        'httpsBasicConfiguration' => 'HttpsBasicConfiguration',
        'imageTransform' => 'ImageTransform',
        'ipv6' => 'Ipv6',
        'managedTransforms' => 'ManagedTransforms',
        'networkOptimization' => 'NetworkOptimization',
        'originRules' => 'OriginRules',
        'redirectRules' => 'RedirectRules',
        'rewriteUrlRules' => 'RewriteUrlRules',
        'seoBypass' => 'SeoBypass',
        'siteNameExclusive' => 'SiteNameExclusive',
        'sitePause' => 'SitePause',
        'tieredCache' => 'TieredCache',
        'videoProcessing' => 'VideoProcessing',
    ];

    public function validate()
    {
        if (\is_array($this->cacheReserve)) {
            Model::validateArray($this->cacheReserve);
        }
        if (\is_array($this->cacheRules)) {
            Model::validateArray($this->cacheRules);
        }
        if (\is_array($this->cacheTags)) {
            Model::validateArray($this->cacheTags);
        }
        if (\is_array($this->cnameFlattening)) {
            Model::validateArray($this->cnameFlattening);
        }
        if (\is_array($this->compressionRules)) {
            Model::validateArray($this->compressionRules);
        }
        if (\is_array($this->crossBorderOptimization)) {
            Model::validateArray($this->crossBorderOptimization);
        }
        if (\is_array($this->customResponseCode)) {
            Model::validateArray($this->customResponseCode);
        }
        if (\is_array($this->developmentMode)) {
            Model::validateArray($this->developmentMode);
        }
        if (\is_array($this->errorPagesRedirects)) {
            Model::validateArray($this->errorPagesRedirects);
        }
        if (\is_array($this->httpIncomingRequestHeaderModificationRules)) {
            Model::validateArray($this->httpIncomingRequestHeaderModificationRules);
        }
        if (\is_array($this->httpIncomingResponseHeaderModificationRules)) {
            Model::validateArray($this->httpIncomingResponseHeaderModificationRules);
        }
        if (\is_array($this->httpRequestHeaderModificationRules)) {
            Model::validateArray($this->httpRequestHeaderModificationRules);
        }
        if (\is_array($this->httpResponseHeaderModificationRules)) {
            Model::validateArray($this->httpResponseHeaderModificationRules);
        }
        if (\is_array($this->httpsApplicationConfiguration)) {
            Model::validateArray($this->httpsApplicationConfiguration);
        }
        if (\is_array($this->httpsBasicConfiguration)) {
            Model::validateArray($this->httpsBasicConfiguration);
        }
        if (\is_array($this->imageTransform)) {
            Model::validateArray($this->imageTransform);
        }
        if (\is_array($this->ipv6)) {
            Model::validateArray($this->ipv6);
        }
        if (\is_array($this->managedTransforms)) {
            Model::validateArray($this->managedTransforms);
        }
        if (\is_array($this->networkOptimization)) {
            Model::validateArray($this->networkOptimization);
        }
        if (\is_array($this->originRules)) {
            Model::validateArray($this->originRules);
        }
        if (\is_array($this->redirectRules)) {
            Model::validateArray($this->redirectRules);
        }
        if (\is_array($this->rewriteUrlRules)) {
            Model::validateArray($this->rewriteUrlRules);
        }
        if (\is_array($this->seoBypass)) {
            Model::validateArray($this->seoBypass);
        }
        if (\is_array($this->siteNameExclusive)) {
            Model::validateArray($this->siteNameExclusive);
        }
        if (\is_array($this->sitePause)) {
            Model::validateArray($this->sitePause);
        }
        if (\is_array($this->tieredCache)) {
            Model::validateArray($this->tieredCache);
        }
        if (\is_array($this->videoProcessing)) {
            Model::validateArray($this->videoProcessing);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheReserve) {
            if (\is_array($this->cacheReserve)) {
                $res['CacheReserve'] = [];
                $n1 = 0;
                foreach ($this->cacheReserve as $item1) {
                    $res['CacheReserve'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cacheRules) {
            if (\is_array($this->cacheRules)) {
                $res['CacheRules'] = [];
                $n1 = 0;
                foreach ($this->cacheRules as $item1) {
                    $res['CacheRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cacheTags) {
            if (\is_array($this->cacheTags)) {
                $res['CacheTags'] = [];
                $n1 = 0;
                foreach ($this->cacheTags as $item1) {
                    $res['CacheTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cnameFlattening) {
            if (\is_array($this->cnameFlattening)) {
                $res['CnameFlattening'] = [];
                $n1 = 0;
                foreach ($this->cnameFlattening as $item1) {
                    $res['CnameFlattening'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->compressionRules) {
            if (\is_array($this->compressionRules)) {
                $res['CompressionRules'] = [];
                $n1 = 0;
                foreach ($this->compressionRules as $item1) {
                    $res['CompressionRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->crossBorderOptimization) {
            if (\is_array($this->crossBorderOptimization)) {
                $res['CrossBorderOptimization'] = [];
                $n1 = 0;
                foreach ($this->crossBorderOptimization as $item1) {
                    $res['CrossBorderOptimization'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customResponseCode) {
            if (\is_array($this->customResponseCode)) {
                $res['CustomResponseCode'] = [];
                $n1 = 0;
                foreach ($this->customResponseCode as $item1) {
                    $res['CustomResponseCode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->developmentMode) {
            if (\is_array($this->developmentMode)) {
                $res['DevelopmentMode'] = [];
                $n1 = 0;
                foreach ($this->developmentMode as $item1) {
                    $res['DevelopmentMode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorPagesRedirects) {
            if (\is_array($this->errorPagesRedirects)) {
                $res['ErrorPagesRedirects'] = [];
                $n1 = 0;
                foreach ($this->errorPagesRedirects as $item1) {
                    $res['ErrorPagesRedirects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpIncomingRequestHeaderModificationRules) {
            if (\is_array($this->httpIncomingRequestHeaderModificationRules)) {
                $res['HttpIncomingRequestHeaderModificationRules'] = [];
                $n1 = 0;
                foreach ($this->httpIncomingRequestHeaderModificationRules as $item1) {
                    $res['HttpIncomingRequestHeaderModificationRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpIncomingResponseHeaderModificationRules) {
            if (\is_array($this->httpIncomingResponseHeaderModificationRules)) {
                $res['HttpIncomingResponseHeaderModificationRules'] = [];
                $n1 = 0;
                foreach ($this->httpIncomingResponseHeaderModificationRules as $item1) {
                    $res['HttpIncomingResponseHeaderModificationRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpRequestHeaderModificationRules) {
            if (\is_array($this->httpRequestHeaderModificationRules)) {
                $res['HttpRequestHeaderModificationRules'] = [];
                $n1 = 0;
                foreach ($this->httpRequestHeaderModificationRules as $item1) {
                    $res['HttpRequestHeaderModificationRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpResponseHeaderModificationRules) {
            if (\is_array($this->httpResponseHeaderModificationRules)) {
                $res['HttpResponseHeaderModificationRules'] = [];
                $n1 = 0;
                foreach ($this->httpResponseHeaderModificationRules as $item1) {
                    $res['HttpResponseHeaderModificationRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpsApplicationConfiguration) {
            if (\is_array($this->httpsApplicationConfiguration)) {
                $res['HttpsApplicationConfiguration'] = [];
                $n1 = 0;
                foreach ($this->httpsApplicationConfiguration as $item1) {
                    $res['HttpsApplicationConfiguration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpsBasicConfiguration) {
            if (\is_array($this->httpsBasicConfiguration)) {
                $res['HttpsBasicConfiguration'] = [];
                $n1 = 0;
                foreach ($this->httpsBasicConfiguration as $item1) {
                    $res['HttpsBasicConfiguration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageTransform) {
            if (\is_array($this->imageTransform)) {
                $res['ImageTransform'] = [];
                $n1 = 0;
                foreach ($this->imageTransform as $item1) {
                    $res['ImageTransform'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipv6) {
            if (\is_array($this->ipv6)) {
                $res['Ipv6'] = [];
                $n1 = 0;
                foreach ($this->ipv6 as $item1) {
                    $res['Ipv6'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->managedTransforms) {
            if (\is_array($this->managedTransforms)) {
                $res['ManagedTransforms'] = [];
                $n1 = 0;
                foreach ($this->managedTransforms as $item1) {
                    $res['ManagedTransforms'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkOptimization) {
            if (\is_array($this->networkOptimization)) {
                $res['NetworkOptimization'] = [];
                $n1 = 0;
                foreach ($this->networkOptimization as $item1) {
                    $res['NetworkOptimization'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originRules) {
            if (\is_array($this->originRules)) {
                $res['OriginRules'] = [];
                $n1 = 0;
                foreach ($this->originRules as $item1) {
                    $res['OriginRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->redirectRules) {
            if (\is_array($this->redirectRules)) {
                $res['RedirectRules'] = [];
                $n1 = 0;
                foreach ($this->redirectRules as $item1) {
                    $res['RedirectRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rewriteUrlRules) {
            if (\is_array($this->rewriteUrlRules)) {
                $res['RewriteUrlRules'] = [];
                $n1 = 0;
                foreach ($this->rewriteUrlRules as $item1) {
                    $res['RewriteUrlRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->seoBypass) {
            if (\is_array($this->seoBypass)) {
                $res['SeoBypass'] = [];
                $n1 = 0;
                foreach ($this->seoBypass as $item1) {
                    $res['SeoBypass'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->siteNameExclusive) {
            if (\is_array($this->siteNameExclusive)) {
                $res['SiteNameExclusive'] = [];
                $n1 = 0;
                foreach ($this->siteNameExclusive as $item1) {
                    $res['SiteNameExclusive'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sitePause) {
            if (\is_array($this->sitePause)) {
                $res['SitePause'] = [];
                $n1 = 0;
                foreach ($this->sitePause as $item1) {
                    $res['SitePause'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tieredCache) {
            if (\is_array($this->tieredCache)) {
                $res['TieredCache'] = [];
                $n1 = 0;
                foreach ($this->tieredCache as $item1) {
                    $res['TieredCache'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->videoProcessing) {
            if (\is_array($this->videoProcessing)) {
                $res['VideoProcessing'] = [];
                $n1 = 0;
                foreach ($this->videoProcessing as $item1) {
                    $res['VideoProcessing'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheReserve'])) {
            if (!empty($map['CacheReserve'])) {
                $model->cacheReserve = [];
                $n1 = 0;
                foreach ($map['CacheReserve'] as $item1) {
                    $model->cacheReserve[$n1] = cacheReserve::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CacheRules'])) {
            if (!empty($map['CacheRules'])) {
                $model->cacheRules = [];
                $n1 = 0;
                foreach ($map['CacheRules'] as $item1) {
                    $model->cacheRules[$n1] = cacheRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CacheTags'])) {
            if (!empty($map['CacheTags'])) {
                $model->cacheTags = [];
                $n1 = 0;
                foreach ($map['CacheTags'] as $item1) {
                    $model->cacheTags[$n1] = cacheTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CnameFlattening'])) {
            if (!empty($map['CnameFlattening'])) {
                $model->cnameFlattening = [];
                $n1 = 0;
                foreach ($map['CnameFlattening'] as $item1) {
                    $model->cnameFlattening[$n1] = cnameFlattening::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CompressionRules'])) {
            if (!empty($map['CompressionRules'])) {
                $model->compressionRules = [];
                $n1 = 0;
                foreach ($map['CompressionRules'] as $item1) {
                    $model->compressionRules[$n1] = compressionRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CrossBorderOptimization'])) {
            if (!empty($map['CrossBorderOptimization'])) {
                $model->crossBorderOptimization = [];
                $n1 = 0;
                foreach ($map['CrossBorderOptimization'] as $item1) {
                    $model->crossBorderOptimization[$n1] = crossBorderOptimization::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomResponseCode'])) {
            if (!empty($map['CustomResponseCode'])) {
                $model->customResponseCode = [];
                $n1 = 0;
                foreach ($map['CustomResponseCode'] as $item1) {
                    $model->customResponseCode[$n1] = customResponseCode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DevelopmentMode'])) {
            if (!empty($map['DevelopmentMode'])) {
                $model->developmentMode = [];
                $n1 = 0;
                foreach ($map['DevelopmentMode'] as $item1) {
                    $model->developmentMode[$n1] = developmentMode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorPagesRedirects'])) {
            if (!empty($map['ErrorPagesRedirects'])) {
                $model->errorPagesRedirects = [];
                $n1 = 0;
                foreach ($map['ErrorPagesRedirects'] as $item1) {
                    $model->errorPagesRedirects[$n1] = errorPagesRedirects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpIncomingRequestHeaderModificationRules'])) {
            if (!empty($map['HttpIncomingRequestHeaderModificationRules'])) {
                $model->httpIncomingRequestHeaderModificationRules = [];
                $n1 = 0;
                foreach ($map['HttpIncomingRequestHeaderModificationRules'] as $item1) {
                    $model->httpIncomingRequestHeaderModificationRules[$n1] = httpIncomingRequestHeaderModificationRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpIncomingResponseHeaderModificationRules'])) {
            if (!empty($map['HttpIncomingResponseHeaderModificationRules'])) {
                $model->httpIncomingResponseHeaderModificationRules = [];
                $n1 = 0;
                foreach ($map['HttpIncomingResponseHeaderModificationRules'] as $item1) {
                    $model->httpIncomingResponseHeaderModificationRules[$n1] = httpIncomingResponseHeaderModificationRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpRequestHeaderModificationRules'])) {
            if (!empty($map['HttpRequestHeaderModificationRules'])) {
                $model->httpRequestHeaderModificationRules = [];
                $n1 = 0;
                foreach ($map['HttpRequestHeaderModificationRules'] as $item1) {
                    $model->httpRequestHeaderModificationRules[$n1] = httpRequestHeaderModificationRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpResponseHeaderModificationRules'])) {
            if (!empty($map['HttpResponseHeaderModificationRules'])) {
                $model->httpResponseHeaderModificationRules = [];
                $n1 = 0;
                foreach ($map['HttpResponseHeaderModificationRules'] as $item1) {
                    $model->httpResponseHeaderModificationRules[$n1] = httpResponseHeaderModificationRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpsApplicationConfiguration'])) {
            if (!empty($map['HttpsApplicationConfiguration'])) {
                $model->httpsApplicationConfiguration = [];
                $n1 = 0;
                foreach ($map['HttpsApplicationConfiguration'] as $item1) {
                    $model->httpsApplicationConfiguration[$n1] = httpsApplicationConfiguration::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpsBasicConfiguration'])) {
            if (!empty($map['HttpsBasicConfiguration'])) {
                $model->httpsBasicConfiguration = [];
                $n1 = 0;
                foreach ($map['HttpsBasicConfiguration'] as $item1) {
                    $model->httpsBasicConfiguration[$n1] = httpsBasicConfiguration::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageTransform'])) {
            if (!empty($map['ImageTransform'])) {
                $model->imageTransform = [];
                $n1 = 0;
                foreach ($map['ImageTransform'] as $item1) {
                    $model->imageTransform[$n1] = imageTransform::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Ipv6'])) {
            if (!empty($map['Ipv6'])) {
                $model->ipv6 = [];
                $n1 = 0;
                foreach ($map['Ipv6'] as $item1) {
                    $model->ipv6[$n1] = ipv6::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ManagedTransforms'])) {
            if (!empty($map['ManagedTransforms'])) {
                $model->managedTransforms = [];
                $n1 = 0;
                foreach ($map['ManagedTransforms'] as $item1) {
                    $model->managedTransforms[$n1] = managedTransforms::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkOptimization'])) {
            if (!empty($map['NetworkOptimization'])) {
                $model->networkOptimization = [];
                $n1 = 0;
                foreach ($map['NetworkOptimization'] as $item1) {
                    $model->networkOptimization[$n1] = networkOptimization::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OriginRules'])) {
            if (!empty($map['OriginRules'])) {
                $model->originRules = [];
                $n1 = 0;
                foreach ($map['OriginRules'] as $item1) {
                    $model->originRules[$n1] = originRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RedirectRules'])) {
            if (!empty($map['RedirectRules'])) {
                $model->redirectRules = [];
                $n1 = 0;
                foreach ($map['RedirectRules'] as $item1) {
                    $model->redirectRules[$n1] = redirectRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RewriteUrlRules'])) {
            if (!empty($map['RewriteUrlRules'])) {
                $model->rewriteUrlRules = [];
                $n1 = 0;
                foreach ($map['RewriteUrlRules'] as $item1) {
                    $model->rewriteUrlRules[$n1] = rewriteUrlRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SeoBypass'])) {
            if (!empty($map['SeoBypass'])) {
                $model->seoBypass = [];
                $n1 = 0;
                foreach ($map['SeoBypass'] as $item1) {
                    $model->seoBypass[$n1] = seoBypass::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SiteNameExclusive'])) {
            if (!empty($map['SiteNameExclusive'])) {
                $model->siteNameExclusive = [];
                $n1 = 0;
                foreach ($map['SiteNameExclusive'] as $item1) {
                    $model->siteNameExclusive[$n1] = siteNameExclusive::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SitePause'])) {
            if (!empty($map['SitePause'])) {
                $model->sitePause = [];
                $n1 = 0;
                foreach ($map['SitePause'] as $item1) {
                    $model->sitePause[$n1] = sitePause::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TieredCache'])) {
            if (!empty($map['TieredCache'])) {
                $model->tieredCache = [];
                $n1 = 0;
                foreach ($map['TieredCache'] as $item1) {
                    $model->tieredCache[$n1] = tieredCache::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VideoProcessing'])) {
            if (!empty($map['VideoProcessing'])) {
                $model->videoProcessing = [];
                $n1 = 0;
                foreach ($map['VideoProcessing'] as $item1) {
                    $model->videoProcessing[$n1] = videoProcessing::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
