<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOssBucketResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the bucket.
     *
     * @example iboxpublic****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The reason why the bucket cannot be checked.
     *
     * @example Unsupported Region。
     *
     * @var string
     */
    public $message;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The storage class of the bucket. Valid values:
     *
     *   Standard (default)
     *   IA
     *   Archive
     *   ColdArchive
     *
     * @example Standard
     *
     * @var string
     */
    public $storageClass;

    /**
     * @description Indicates whether the bucket can be checked. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $support;

    /**
     * @var string
     */
    public $supportConfig;
    protected $_name = [
        'bucketName'    => 'BucketName',
        'message'       => 'Message',
        'regionId'      => 'RegionId',
        'storageClass'  => 'StorageClass',
        'support'       => 'Support',
        'supportConfig' => 'SupportConfig',
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
        if (null !== $this->supportConfig) {
            $res['SupportConfig'] = $this->supportConfig;
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
        if (isset($map['SupportConfig'])) {
            $model->supportConfig = $map['SupportConfig'];
        }

        return $model;
    }
}
