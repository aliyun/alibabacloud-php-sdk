<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCurrentModifyOrderResponseBody;

use AlibabaCloud\Tea\Model;

class modifyOrder extends Model
{
    /**
     * @description The instance family of the instance.
     *
     * @example x
     *
     * @var string
     */
    public $classGroup;

    /**
     * @description The number of CPU cores that are supported by the instance type. Unit: cores.
     *
     * @example 8
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The instance ID.
     *
     * @example rm-cn-nwy39qeys0003r
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The effective time. Valid values:
     *
     *   **Immediate**: This is the default value.
     *   **MaintainTime**: The effective time is within the maintenance window. For more information, see [ModifyDBInstanceMaintainTime](~~610402~~).
     *
     * @example MaintainTime
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The description of the instance.
     *
     * @example eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6MTg2MjEwOTkwLCJzdGFydCI6InNob3BpZnktdXNlci1jb3JlXHUwMDAwIn0
     *
     * @var string
     */
    public $mark;

    /**
     * @description The memory capacity that is supported by the instance type. Unit: GB.
     *
     * @example 1024
     *
     * @var string
     */
    public $memoryClass;

    /**
     * @description The status of the task.
     *
     * @example Succeed,Scheduled,Running,Cancelling,Canceled,Waiting
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage capacity of the instance.
     *
     * @example 20
     *
     * @var string
     */
    public $storage;

    /**
     * @description The new instance type of the instance. Valid values:
     *
     * @example mysql.x2.medium.2c
     *
     * @var string
     */
    public $targetDBInstanceClass;
    protected $_name = [
        'classGroup'            => 'ClassGroup',
        'cpu'                   => 'Cpu',
        'dbInstanceId'          => 'DbInstanceId',
        'effectiveTime'         => 'EffectiveTime',
        'mark'                  => 'Mark',
        'memoryClass'           => 'MemoryClass',
        'status'                => 'Status',
        'storage'               => 'Storage',
        'targetDBInstanceClass' => 'TargetDBInstanceClass',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return modifyOrder
     */
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
