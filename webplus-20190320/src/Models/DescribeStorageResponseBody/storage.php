<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeStorageResponseBody;

use AlibabaCloud\Tea\Model;

class storage extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $keyPrefix;

    /**
     * @var string
     */
    public $pkgKeyPrefix;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $bucketName;
    protected $_name = [
        'updateTime'   => 'UpdateTime',
        'keyPrefix'    => 'KeyPrefix',
        'pkgKeyPrefix' => 'PkgKeyPrefix',
        'createTime'   => 'CreateTime',
        'bucketName'   => 'BucketName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->keyPrefix) {
            $res['KeyPrefix'] = $this->keyPrefix;
        }
        if (null !== $this->pkgKeyPrefix) {
            $res['PkgKeyPrefix'] = $this->pkgKeyPrefix;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['KeyPrefix'])) {
            $model->keyPrefix = $map['KeyPrefix'];
        }
        if (isset($map['PkgKeyPrefix'])) {
            $model->pkgKeyPrefix = $map['PkgKeyPrefix'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        return $model;
    }
}
