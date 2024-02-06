<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketInfoResponseBody\bucketInfo;
use AlibabaCloud\Tea\Model;

class GetBucketInfoResponseBody extends Model
{
    /**
     * @description The list of bucket information.
     *
     * @var bucketInfo
     */
    public $bucketInfo;

    /**
     * @description The ID of the request.
     *
     * @example C5831388-2D4B-46F4-A96B-D4E6BD06E7521
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bucketInfo' => 'BucketInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketInfo) {
            $res['BucketInfo'] = null !== $this->bucketInfo ? $this->bucketInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketInfo'])) {
            $model->bucketInfo = bucketInfo::fromMap($map['BucketInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
