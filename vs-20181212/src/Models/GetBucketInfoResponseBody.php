<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\GetBucketInfoResponseBody\bucketInfo;
use AlibabaCloud\Tea\Model;

class GetBucketInfoResponseBody extends Model
{
    /**
     * @var bucketInfo
     */
    public $bucketInfo;

    /**
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
