<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class ossConfig extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $ossRegionId;

    /**
     * @var string
     */
    public $bucketName;
    protected $_name = [
        'key'         => 'Key',
        'action'      => 'Action',
        'ossRegionId' => 'OssRegionId',
        'bucketName'  => 'BucketName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->ossRegionId) {
            $res['OssRegionId'] = $this->ossRegionId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['OssRegionId'])) {
            $model->ossRegionId = $map['OssRegionId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        return $model;
    }
}
