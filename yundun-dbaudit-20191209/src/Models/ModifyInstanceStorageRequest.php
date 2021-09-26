<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceStorageRequest extends Model
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

    /**
     * @var int
     */
    public $storageTime;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'regionId'        => 'RegionId',
        'storageSpace'    => 'StorageSpace',
        'storageCategory' => 'StorageCategory',
        'storageTime'     => 'StorageTime',
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
        if (null !== $this->storageTime) {
            $res['StorageTime'] = $this->storageTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceStorageRequest
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
        if (isset($map['StorageTime'])) {
            $model->storageTime = $map['StorageTime'];
        }

        return $model;
    }
}
