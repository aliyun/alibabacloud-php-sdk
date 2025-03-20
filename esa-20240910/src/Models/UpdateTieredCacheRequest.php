<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateTieredCacheRequest extends Model
{
    /**
     * @description The tiered cache architecture mode. Valid values:
     *
     *   edge: edge tiered cache.
     *   edge_smart: edge tiered cache + smart tiered cache.
     *   edge_regional: edge tiered cache + regional tiered cache.
     *   edge_regional_smart: edge tiered cache + regional tiered cache + smart tiered cache.
     *
     * This parameter is required.
     *
     * @example edge_smart
     *
     * @var string
     */
    public $cacheArchitectureMode;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'cacheArchitectureMode' => 'CacheArchitectureMode',
        'siteId' => 'SiteId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheArchitectureMode) {
            $res['CacheArchitectureMode'] = $this->cacheArchitectureMode;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTieredCacheRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheArchitectureMode'])) {
            $model->cacheArchitectureMode = $map['CacheArchitectureMode'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
