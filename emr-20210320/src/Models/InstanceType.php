<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class InstanceType extends Model
{
    /**
     * @description cpu架构。
     *
     * @example X86
     *
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @description vCPU内核数目。
     *
     * @example 4
     *
     * @var int
     */
    public $cpuCore;

    /**
     * @description 实例规格分类。取值范围：
     * - Super Computing Cluster：超级计算集群。
     * @example Compute-optimized
     *
     * @var string
     */
    public $instanceCategory;

    /**
     * @description 实例规格。
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 实例规格所属的实例规格族。取值请参见DescribeInstanceTypeFamilies。
     *
     * @example ecs.g6
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description 实例挂载的本地盘的数量。
     *
     * @example 8
     *
     * @var int
     */
    public $localStorageAmount;

    /**
     * @description 实例挂载的本地盘的单盘容量。单位：GiB
     *
     * @example 40
     *
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @description 是否IO优化类型。
     *
     * @example true
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return InstanceType
     */
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
