<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class CreatePhotoStoreRequest extends Model
{
    /**
     * @var string
     */
    public $storeName;

    /**
     * @var int
     */
    public $defaultQuota;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'storeName'    => 'StoreName',
        'defaultQuota' => 'DefaultQuota',
        'bucketName'   => 'BucketName',
        'remark'       => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->defaultQuota) {
            $res['DefaultQuota'] = $this->defaultQuota;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhotoStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['DefaultQuota'])) {
            $model->defaultQuota = $map['DefaultQuota'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
