<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class storages extends Model
{
    /**
     * @var string
     */
    public $storageCapacity;

    /**
     * @var string
     */
    public $storageInstanceId;

    /**
     * @var string
     */
    public $storagePerformanceLevel;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'storageCapacity' => 'StorageCapacity',
        'storageInstanceId' => 'StorageInstanceId',
        'storagePerformanceLevel' => 'StoragePerformanceLevel',
        'storageType' => 'StorageType',
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

        if (null !== $this->storageInstanceId) {
            $res['StorageInstanceId'] = $this->storageInstanceId;
        }

        if (null !== $this->storagePerformanceLevel) {
            $res['StoragePerformanceLevel'] = $this->storagePerformanceLevel;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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

        if (isset($map['StorageInstanceId'])) {
            $model->storageInstanceId = $map['StorageInstanceId'];
        }

        if (isset($map['StoragePerformanceLevel'])) {
            $model->storagePerformanceLevel = $map['StoragePerformanceLevel'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
