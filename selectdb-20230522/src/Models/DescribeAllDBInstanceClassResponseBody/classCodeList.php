<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeAllDBInstanceClassResponseBody;

use AlibabaCloud\Dara\Model;

class classCodeList extends Model
{
    /**
     * @var string
     */
    public $classCode;
    /**
     * @var int
     */
    public $cpuCores;
    /**
     * @var int
     */
    public $defaultStorageInGB;
    /**
     * @var int
     */
    public $maxStorageInGB;
    /**
     * @var int
     */
    public $memoryInGB;
    /**
     * @var int
     */
    public $minStorageInGB;
    /**
     * @var int
     */
    public $stepStorageInGB;
    protected $_name = [
        'classCode'          => 'ClassCode',
        'cpuCores'           => 'CpuCores',
        'defaultStorageInGB' => 'DefaultStorageInGB',
        'maxStorageInGB'     => 'MaxStorageInGB',
        'memoryInGB'         => 'MemoryInGB',
        'minStorageInGB'     => 'MinStorageInGB',
        'stepStorageInGB'    => 'StepStorageInGB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }

        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }

        if (null !== $this->defaultStorageInGB) {
            $res['DefaultStorageInGB'] = $this->defaultStorageInGB;
        }

        if (null !== $this->maxStorageInGB) {
            $res['MaxStorageInGB'] = $this->maxStorageInGB;
        }

        if (null !== $this->memoryInGB) {
            $res['MemoryInGB'] = $this->memoryInGB;
        }

        if (null !== $this->minStorageInGB) {
            $res['MinStorageInGB'] = $this->minStorageInGB;
        }

        if (null !== $this->stepStorageInGB) {
            $res['StepStorageInGB'] = $this->stepStorageInGB;
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
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }

        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }

        if (isset($map['DefaultStorageInGB'])) {
            $model->defaultStorageInGB = $map['DefaultStorageInGB'];
        }

        if (isset($map['MaxStorageInGB'])) {
            $model->maxStorageInGB = $map['MaxStorageInGB'];
        }

        if (isset($map['MemoryInGB'])) {
            $model->memoryInGB = $map['MemoryInGB'];
        }

        if (isset($map['MinStorageInGB'])) {
            $model->minStorageInGB = $map['MinStorageInGB'];
        }

        if (isset($map['StepStorageInGB'])) {
            $model->stepStorageInGB = $map['StepStorageInGB'];
        }

        return $model;
    }
}
