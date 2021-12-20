<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketLoggingRequest extends Model
{
    /**
     * @var BucketLoggingStatus
     */
    public $bucketLoggingStatus;
    protected $_name = [
        'bucketLoggingStatus' => 'BucketLoggingStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketLoggingStatus) {
            $res['BucketLoggingStatus'] = null !== $this->bucketLoggingStatus ? $this->bucketLoggingStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketLoggingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketLoggingStatus'])) {
            $model->bucketLoggingStatus = BucketLoggingStatus::fromMap($map['BucketLoggingStatus']);
        }

        return $model;
    }
}
