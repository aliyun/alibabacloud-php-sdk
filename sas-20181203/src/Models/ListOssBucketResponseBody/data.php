<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOssBucketResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example iboxpublic****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example Unsupported Region。
     *
     * @var string
     */
    public $message;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Standard
     *
     * @var string
     */
    public $storageClass;

    /**
     * @example true
     *
     * @var bool
     */
    public $support;
    protected $_name = [
        'bucketName'   => 'BucketName',
        'message'      => 'Message',
        'regionId'     => 'RegionId',
        'storageClass' => 'StorageClass',
        'support'      => 'Support',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }

        return $model;
    }
}
