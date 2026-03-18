<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data;

use AlibabaCloud\Dara\Model;

class bigDataInstanceTypeConstraints extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $diskNumber;

    /**
     * @var string
     */
    public $display;

    /**
     * @var string
     */
    public $ecsInstanceType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $storageSize;
    protected $_name = [
        'cpu' => 'Cpu',
        'diskNumber' => 'DiskNumber',
        'display' => 'Display',
        'ecsInstanceType' => 'EcsInstanceType',
        'instanceType' => 'InstanceType',
        'isDefault' => 'IsDefault',
        'memory' => 'Memory',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->diskNumber) {
            $res['DiskNumber'] = $this->diskNumber;
        }

        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }

        if (null !== $this->ecsInstanceType) {
            $res['EcsInstanceType'] = $this->ecsInstanceType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DiskNumber'])) {
            $model->diskNumber = $map['DiskNumber'];
        }

        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }

        if (isset($map['EcsInstanceType'])) {
            $model->ecsInstanceType = $map['EcsInstanceType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
