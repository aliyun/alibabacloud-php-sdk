<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class ossConfig extends Model
{
    /**
     * @description The operation options on OSS. Valid values:
     *
     *   GetObject
     *   PostObject
     *   DeleteObject
     *   PutObject
     *   HeadObject
     *   GetObjectMeta
     *   AppendObject
     *
     * @example GetObject
     *
     * @var string
     */
    public $action;

    /**
     * @description The OSS bucket.
     *
     * @example phototest02
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The stored object or folder path.
     *
     * @example ENV
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the region where the OSS instance is located.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ossRegionId;
    protected $_name = [
        'action'      => 'Action',
        'bucketName'  => 'BucketName',
        'key'         => 'Key',
        'ossRegionId' => 'OssRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ossConfig
     */
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
