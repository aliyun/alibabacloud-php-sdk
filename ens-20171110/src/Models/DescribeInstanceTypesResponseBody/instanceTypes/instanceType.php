<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesResponseBody\instanceTypes;

use AlibabaCloud\Dara\Model;

class instanceType extends Model
{
    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var string
     */
    public $instanceTypeName;

    /**
     * @var int
     */
    public $memorySize;
    protected $_name = [
        'cpuCoreCount' => 'CpuCoreCount',
        'instanceBandwidthRx' => 'InstanceBandwidthRx',
        'instanceBandwidthTx' => 'InstanceBandwidthTx',
        'instanceType' => 'InstanceType',
        'instanceTypeId' => 'InstanceTypeId',
        'instanceTypeName' => 'InstanceTypeName',
        'memorySize' => 'MemorySize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }

        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }

        if (null !== $this->instanceBandwidthTx) {
            $res['InstanceBandwidthTx'] = $this->instanceBandwidthTx;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }

        if (null !== $this->instanceTypeName) {
            $res['InstanceTypeName'] = $this->instanceTypeName;
        }

        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
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
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }

        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }

        if (isset($map['InstanceBandwidthTx'])) {
            $model->instanceBandwidthTx = $map['InstanceBandwidthTx'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }

        if (isset($map['InstanceTypeName'])) {
            $model->instanceTypeName = $map['InstanceTypeName'];
        }

        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        return $model;
    }
}
