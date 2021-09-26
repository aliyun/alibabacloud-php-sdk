<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20210416\Models;

use AlibabaCloud\Tea\Model;

class ClearInstanceStorageRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $storageCategory;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'regionId'        => 'RegionId',
        'storageSpace'    => 'StorageSpace',
        'storageCategory' => 'StorageCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }
        if (null !== $this->storageCategory) {
            $res['StorageCategory'] = $this->storageCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClearInstanceStorageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }
        if (isset($map['StorageCategory'])) {
            $model->storageCategory = $map['StorageCategory'];
        }

        return $model;
    }
}
