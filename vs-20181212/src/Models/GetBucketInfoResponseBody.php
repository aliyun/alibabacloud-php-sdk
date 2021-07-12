<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\GetBucketInfoResponseBody\bucketInfo;
use AlibabaCloud\Tea\Model;

class GetBucketInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bucketInfo
     */
    public $bucketInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'bucketInfo' => 'BucketInfo',
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
        if (null !== $this->bucketInfo) {
            $res['BucketInfo'] = null !== $this->bucketInfo ? $this->bucketInfo->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BucketInfo'])) {
            $model->bucketInfo = bucketInfo::fromMap($map['BucketInfo']);
        }

        return $model;
    }
}
