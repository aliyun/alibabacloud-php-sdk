<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketInfoResponseBody\bucketInfo;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->bucketInfo) {
            $this->bucketInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketInfo) {
            $res['BucketInfo'] = null !== $this->bucketInfo ? $this->bucketInfo->toArray($noStream) : $this->bucketInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BucketInfo'])) {
            $model->bucketInfo = bucketInfo::fromMap($map['BucketInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
