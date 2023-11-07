<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetGlobalEventsStorageRegionResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0474CD9D-DF37-55D4-8383-D978CFBE13A4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The region where global events are stored.
     *
     * Valid values:
     *
     *   ap-southeast-1
     *
     * <!-- -->
     *
     *   cn-hangzhou
     *
     * <!-- -->
     * @example cn-hangzhou
     *
     * @var string
     */
    public $storageRegion;
    protected $_name = [
        'requestId'     => 'RequestId',
        'storageRegion' => 'StorageRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageRegion) {
            $res['StorageRegion'] = $this->storageRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGlobalEventsStorageRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageRegion'])) {
            $model->storageRegion = $map['StorageRegion'];
        }

        return $model;
    }
}
