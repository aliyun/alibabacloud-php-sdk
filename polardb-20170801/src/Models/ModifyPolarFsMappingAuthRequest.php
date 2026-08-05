<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyPolarFsMappingAuthRequest extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $bucketAccessKeyId;

    /**
     * @var string
     */
    public $bucketAccessKeySecret;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $polarFsInstanceId;
    protected $_name = [
        'bucket' => 'Bucket',
        'bucketAccessKeyId' => 'BucketAccessKeyId',
        'bucketAccessKeySecret' => 'BucketAccessKeySecret',
        'DBClusterId' => 'DBClusterId',
        'path' => 'Path',
        'polarFsInstanceId' => 'PolarFsInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        if (null !== $this->bucketAccessKeyId) {
            $res['BucketAccessKeyId'] = $this->bucketAccessKeyId;
        }

        if (null !== $this->bucketAccessKeySecret) {
            $res['BucketAccessKeySecret'] = $this->bucketAccessKeySecret;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
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
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        if (isset($map['BucketAccessKeyId'])) {
            $model->bucketAccessKeyId = $map['BucketAccessKeyId'];
        }

        if (isset($map['BucketAccessKeySecret'])) {
            $model->bucketAccessKeySecret = $map['BucketAccessKeySecret'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        return $model;
    }
}
