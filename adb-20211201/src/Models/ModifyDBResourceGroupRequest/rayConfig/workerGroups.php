<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest\rayConfig;

use AlibabaCloud\Dara\Model;

class workerGroups extends Model
{
    /**
     * @var string
     */
    public $allocateUnit;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $maxWorkerQuantity;

    /**
     * @var int
     */
    public $minWorkerQuantity;

    /**
     * @var string
     */
    public $workerDiskCapacity;

    /**
     * @var string
     */
    public $workerSpecName;

    /**
     * @var string
     */
    public $workerSpecType;
    protected $_name = [
        'allocateUnit' => 'AllocateUnit',
        'groupName' => 'GroupName',
        'maxWorkerQuantity' => 'MaxWorkerQuantity',
        'minWorkerQuantity' => 'MinWorkerQuantity',
        'workerDiskCapacity' => 'WorkerDiskCapacity',
        'workerSpecName' => 'WorkerSpecName',
        'workerSpecType' => 'WorkerSpecType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocateUnit) {
            $res['AllocateUnit'] = $this->allocateUnit;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->maxWorkerQuantity) {
            $res['MaxWorkerQuantity'] = $this->maxWorkerQuantity;
        }

        if (null !== $this->minWorkerQuantity) {
            $res['MinWorkerQuantity'] = $this->minWorkerQuantity;
        }

        if (null !== $this->workerDiskCapacity) {
            $res['WorkerDiskCapacity'] = $this->workerDiskCapacity;
        }

        if (null !== $this->workerSpecName) {
            $res['WorkerSpecName'] = $this->workerSpecName;
        }

        if (null !== $this->workerSpecType) {
            $res['WorkerSpecType'] = $this->workerSpecType;
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
        if (isset($map['AllocateUnit'])) {
            $model->allocateUnit = $map['AllocateUnit'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['MaxWorkerQuantity'])) {
            $model->maxWorkerQuantity = $map['MaxWorkerQuantity'];
        }

        if (isset($map['MinWorkerQuantity'])) {
            $model->minWorkerQuantity = $map['MinWorkerQuantity'];
        }

        if (isset($map['WorkerDiskCapacity'])) {
            $model->workerDiskCapacity = $map['WorkerDiskCapacity'];
        }

        if (isset($map['WorkerSpecName'])) {
            $model->workerSpecName = $map['WorkerSpecName'];
        }

        if (isset($map['WorkerSpecType'])) {
            $model->workerSpecType = $map['WorkerSpecType'];
        }

        return $model;
    }
}
