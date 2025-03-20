<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetTieredCacheResponseBody extends Model
{
    /**
     * @description Multi-level cache architecture mode. Possible values:
     * - edge: Edge cache layer.
     * - edge_smart: Edge cache layer + intelligent cache layer.
     * - edge_regional: Edge cache layer + regional cache layer.
     * - edge_regional_smart: Edge cache layer + regional cache layer + intelligent cache layer.
     *
     * @example edge
     *
     * @var string
     */
    public $cacheArchitectureMode;

    /**
     * @description Request ID.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cacheArchitectureMode' => 'CacheArchitectureMode',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheArchitectureMode) {
            $res['CacheArchitectureMode'] = $this->cacheArchitectureMode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTieredCacheResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheArchitectureMode'])) {
            $model->cacheArchitectureMode = $map['CacheArchitectureMode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
