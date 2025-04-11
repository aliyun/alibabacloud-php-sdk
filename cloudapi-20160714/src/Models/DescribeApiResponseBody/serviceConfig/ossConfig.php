<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig;

use AlibabaCloud\Dara\Model;

class ossConfig extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $ossRegionId;
    protected $_name = [
        'action' => 'Action',
        'bucketName' => 'BucketName',
        'key' => 'Key',
        'ossRegionId' => 'OssRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->ossRegionId) {
            $res['OssRegionId'] = $this->ossRegionId;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['OssRegionId'])) {
            $model->ossRegionId = $map['OssRegionId'];
        }

        return $model;
    }
}
