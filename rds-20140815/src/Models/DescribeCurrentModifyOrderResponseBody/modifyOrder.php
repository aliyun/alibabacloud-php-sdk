<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCurrentModifyOrderResponseBody;

use AlibabaCloud\Dara\Model;

class modifyOrder extends Model
{
    /**
     * @var string
     */
    public $classGroup;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $mark;

    /**
     * @var string
     */
    public $memoryClass;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storage;

    /**
     * @var string
     */
    public $targetDBInstanceClass;
    protected $_name = [
        'classGroup' => 'ClassGroup',
        'cpu' => 'Cpu',
        'dbInstanceId' => 'DbInstanceId',
        'effectiveTime' => 'EffectiveTime',
        'mark' => 'Mark',
        'memoryClass' => 'MemoryClass',
        'status' => 'Status',
        'storage' => 'Storage',
        'targetDBInstanceClass' => 'TargetDBInstanceClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classGroup) {
            $res['ClassGroup'] = $this->classGroup;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }

        if (null !== $this->memoryClass) {
            $res['MemoryClass'] = $this->memoryClass;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        if (null !== $this->targetDBInstanceClass) {
            $res['TargetDBInstanceClass'] = $this->targetDBInstanceClass;
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
        if (isset($map['ClassGroup'])) {
            $model->classGroup = $map['ClassGroup'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }

        if (isset($map['MemoryClass'])) {
            $model->memoryClass = $map['MemoryClass'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        if (isset($map['TargetDBInstanceClass'])) {
            $model->targetDBInstanceClass = $map['TargetDBInstanceClass'];
        }

        return $model;
    }
}
