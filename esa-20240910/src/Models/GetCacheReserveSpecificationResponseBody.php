<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetCacheReserveSpecificationResponseBody extends Model
{
    /**
     * @description List of cache retention capacity specifications.
     *
     * @var string[]
     */
    public $cacheReserveCapacity;

    /**
     * @description List of cache retention region specifications.
     *
     * @var string[]
     */
    public $cacheReserveRegion;

    /**
     * @description Request ID.
     *
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cacheReserveCapacity' => 'CacheReserveCapacity',
        'cacheReserveRegion' => 'CacheReserveRegion',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheReserveCapacity) {
            $res['CacheReserveCapacity'] = $this->cacheReserveCapacity;
        }
        if (null !== $this->cacheReserveRegion) {
            $res['CacheReserveRegion'] = $this->cacheReserveRegion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCacheReserveSpecificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheReserveCapacity'])) {
            if (!empty($map['CacheReserveCapacity'])) {
                $model->cacheReserveCapacity = $map['CacheReserveCapacity'];
            }
        }
        if (isset($map['CacheReserveRegion'])) {
            if (!empty($map['CacheReserveRegion'])) {
                $model->cacheReserveRegion = $map['CacheReserveRegion'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
