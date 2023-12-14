<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeStorageBundlesResponseBody\storageBundles;

use AlibabaCloud\Tea\Model;

class storageBundle extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $backendBucketRegionId;

    /**
     * @example 1565750633
     *
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example zy-test***
     *
     * @var string
     */
    public $name;

    /**
     * @example sb-000ibk4xrlr03qrjr***
     *
     * @var string
     */
    public $storageBundleId;
    protected $_name = [
        'backendBucketRegionId' => 'BackendBucketRegionId',
        'createdTime'           => 'CreatedTime',
        'description'           => 'Description',
        'name'                  => 'Name',
        'storageBundleId'       => 'StorageBundleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendBucketRegionId) {
            $res['BackendBucketRegionId'] = $this->backendBucketRegionId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->storageBundleId) {
            $res['StorageBundleId'] = $this->storageBundleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageBundle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendBucketRegionId'])) {
            $model->backendBucketRegionId = $map['BackendBucketRegionId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StorageBundleId'])) {
            $model->storageBundleId = $map['StorageBundleId'];
        }

        return $model;
    }
}
