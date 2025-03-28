<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20191209\Models\DescribeInstanceStorageResponseBody;

use AlibabaCloud\Dara\Model;

class instanceStorages extends Model
{
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
    public $storageTime;

    /**
     * @var int
     */
    public $storageUsed;
    protected $_name = [
        'storageCapacity' => 'StorageCapacity',
        'storageCategory' => 'StorageCategory',
        'storageSpace' => 'StorageSpace',
        'storageTime' => 'StorageTime',
        'storageUsed' => 'StorageUsed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageCapacity) {
            $res['StorageCapacity'] = $this->storageCapacity;
        }

        if (null !== $this->storageCategory) {
            $res['StorageCategory'] = $this->storageCategory;
        }

        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }

        if (null !== $this->storageTime) {
            $res['StorageTime'] = $this->storageTime;
        }

        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
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
        if (isset($map['StorageCapacity'])) {
            $model->storageCapacity = $map['StorageCapacity'];
        }

        if (isset($map['StorageCategory'])) {
            $model->storageCategory = $map['StorageCategory'];
        }

        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }

        if (isset($map['StorageTime'])) {
            $model->storageTime = $map['StorageTime'];
        }

        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }

        return $model;
    }
}
