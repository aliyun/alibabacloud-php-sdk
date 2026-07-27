<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\AddPolarFsPathMappingRequest;

use AlibabaCloud\Dara\Model;

class customBucketPathList extends Model
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
    public $path;
    protected $_name = [
        'bucket' => 'Bucket',
        'bucketAccessKeyId' => 'BucketAccessKeyId',
        'bucketAccessKeySecret' => 'BucketAccessKeySecret',
        'path' => 'Path',
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

        if (null !== $this->path) {
            $res['Path'] = $this->path;
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

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
