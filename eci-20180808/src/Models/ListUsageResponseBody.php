<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class ListUsageResponseBody extends Model
{
    /**
     * @description The information about the used amounts and upper limits of privileges and quotas that you have in the specified region. The information contains the following items:
     *
     *   UsedCpu: the number of existing vCPUs.
     *   MaxCpu: the upper limit of vCPUs.
     *   MaxImageCacheCount: the upper limit of manually created image caches.
     *   UsedImageCacheCount: the number of existing image caches that are manually created.
     *   MaxAutoImageCacheCount: the upper limit of automatically created image caches.
     *   UsedAutoImageCacheCount: the number of existing image caches that are automatically created.
     *   MaxDataCacheCount: the upper limit of DataCaches.
     *   UsedDataCacheCount: the number of existing DataCaches.
     *
     * @example {"UsedCpu": 11,"MaxCpu": 1000,"MaxImageCacheCount": 50,"UsedImageCacheCount": 0}
     *
     * @var mixed[]
     */
    public $attributes;

    /**
     * @description The request ID.
     *
     * @example 89164E78-FC82-4684-BE97-DCDD85D26546
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attributes' => 'Attributes',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
