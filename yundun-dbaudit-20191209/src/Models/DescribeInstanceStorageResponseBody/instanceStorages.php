<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20191209\Models\DescribeInstanceStorageResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStorages extends Model
{
    /**
     * @var int
     */
    public $storageTime;

    /**
     * @var int
     */
    public $storageCapacity;

    /**
     * @var string
     */
    public $storageCategory;

    /**
     * @var string
     */
    public $storageSpace;

    /**
     * @var int
     */
    public $storageUsed;
    protected $_name = [
        'storageTime'     => 'StorageTime',
        'storageCapacity' => 'StorageCapacity',
        'storageCategory' => 'StorageCategory',
        'storageSpace'    => 'StorageSpace',
        'storageUsed'     => 'StorageUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageTime) {
            $res['StorageTime'] = $this->storageTime;
        }
        if (null !== $this->storageCapacity) {
            $res['StorageCapacity'] = $this->storageCapacity;
        }
        if (null !== $this->storageCategory) {
            $res['StorageCategory'] = $this->storageCategory;
        }
        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStorages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageTime'])) {
            $model->storageTime = $map['StorageTime'];
        }
        if (isset($map['StorageCapacity'])) {
            $model->storageCapacity = $map['StorageCapacity'];
        }
        if (isset($map['StorageCategory'])) {
            $model->storageCategory = $map['StorageCategory'];
        }
        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }

        return $model;
    }
}
