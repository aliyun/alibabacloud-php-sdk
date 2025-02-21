<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class InstanceType extends Model
{
    /**
     * @var string
     */
    public $cpuArchitecture;
    /**
     * @var int
     */
    public $cpuCore;
    /**
     * @var string
     */
    public $instanceCategory;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var string
     */
    public $instanceTypeFamily;
    /**
     * @var int
     */
    public $localStorageAmount;
    /**
     * @var int
     */
    public $localStorageCapacity;
    /**
     * @var bool
     */
    public $optimized;
    protected $_name = [
        'cpuArchitecture'      => 'CpuArchitecture',
        'cpuCore'              => 'CpuCore',
        'instanceCategory'     => 'InstanceCategory',
        'instanceType'         => 'InstanceType',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'localStorageAmount'   => 'LocalStorageAmount',
        'localStorageCapacity' => 'LocalStorageCapacity',
        'optimized'            => 'Optimized',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuArchitecture) {
            $res['CpuArchitecture'] = $this->cpuArchitecture;
        }

        if (null !== $this->cpuCore) {
            $res['CpuCore'] = $this->cpuCore;
        }

        if (null !== $this->instanceCategory) {
            $res['InstanceCategory'] = $this->instanceCategory;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }

        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }

        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }

        if (null !== $this->optimized) {
            $res['Optimized'] = $this->optimized;
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
        if (isset($map['CpuArchitecture'])) {
            $model->cpuArchitecture = $map['CpuArchitecture'];
        }

        if (isset($map['CpuCore'])) {
            $model->cpuCore = $map['CpuCore'];
        }

        if (isset($map['InstanceCategory'])) {
            $model->instanceCategory = $map['InstanceCategory'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }

        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }

        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }

        if (isset($map['Optimized'])) {
            $model->optimized = $map['Optimized'];
        }

        return $model;
    }
}
