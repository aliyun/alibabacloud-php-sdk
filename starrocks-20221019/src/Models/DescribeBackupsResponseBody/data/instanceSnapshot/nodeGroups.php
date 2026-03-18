<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponseBody\data\instanceSnapshot;

use AlibabaCloud\Dara\Model;

class nodeGroups extends Model
{
    /**
     * @var string
     */
    public $componentType;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var string
     */
    public $diskNumber;

    /**
     * @var string
     */
    public $localStorageInstanceType;

    /**
     * @var string
     */
    public $residentNodeNumber;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $storagePerformanceLevel;

    /**
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'componentType' => 'ComponentType',
        'cu' => 'Cu',
        'diskNumber' => 'DiskNumber',
        'localStorageInstanceType' => 'LocalStorageInstanceType',
        'residentNodeNumber' => 'ResidentNodeNumber',
        'specType' => 'SpecType',
        'storagePerformanceLevel' => 'StoragePerformanceLevel',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->diskNumber) {
            $res['DiskNumber'] = $this->diskNumber;
        }

        if (null !== $this->localStorageInstanceType) {
            $res['LocalStorageInstanceType'] = $this->localStorageInstanceType;
        }

        if (null !== $this->residentNodeNumber) {
            $res['ResidentNodeNumber'] = $this->residentNodeNumber;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->storagePerformanceLevel) {
            $res['StoragePerformanceLevel'] = $this->storagePerformanceLevel;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['DiskNumber'])) {
            $model->diskNumber = $map['DiskNumber'];
        }

        if (isset($map['LocalStorageInstanceType'])) {
            $model->localStorageInstanceType = $map['LocalStorageInstanceType'];
        }

        if (isset($map['ResidentNodeNumber'])) {
            $model->residentNodeNumber = $map['ResidentNodeNumber'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['StoragePerformanceLevel'])) {
            $model->storagePerformanceLevel = $map['StoragePerformanceLevel'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
