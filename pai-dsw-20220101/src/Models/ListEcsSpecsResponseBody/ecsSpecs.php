<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsResponseBody;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsResponseBody\ecsSpecs\labels;
use AlibabaCloud\Tea\Model;

class ecsSpecs extends Model
{
    /**
     * @description The accelerator type.
     *
     * @example CPU
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description The number of vCPUs.
     *
     * @example 32
     *
     * @var int
     */
    public $CPU;

    /**
     * @description The currency unit.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The number of GPUs.
     *
     * @example 4
     *
     * @var int
     */
    public $GPU;

    /**
     * @var float
     */
    public $GPUMemorySize;

    /**
     * @description The GPU type. Valid values:
     *
     *   V100
     *   A100
     *   A10
     *   T4
     *   P100
     *
     * @example v100
     *
     * @var string
     */
    public $GPUType;

    /**
     * @description The inbound bandwidth of the instance.
     *
     * @example 5120000
     *
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @description The instance type.
     *
     * @example ecs.gn5-c28g1.7xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Indicates whether the resource was available.
     *
     * @example True
     *
     * @var bool
     */
    public $isAvailable;

    /**
     * @description The labels of the ECS specification.
     *
     * @example {\\"foo\\": \\"bar\\"}
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 32
     *
     * @var float
     */
    public $memory;

    /**
     * @description The price.
     *
     * @example 22.8
     *
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $spotStockStatus;

    /**
     * @description The size of the system disk. Unit: GB.
     *
     * @example 500
     *
     * @var int
     */
    public $systemDiskCapacity;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'CPU' => 'CPU',
        'currency' => 'Currency',
        'GPU' => 'GPU',
        'GPUMemorySize' => 'GPUMemorySize',
        'GPUType' => 'GPUType',
        'instanceBandwidthRx' => 'InstanceBandwidthRx',
        'instanceType' => 'InstanceType',
        'isAvailable' => 'IsAvailable',
        'labels' => 'Labels',
        'memory' => 'Memory',
        'price' => 'Price',
        'spotStockStatus' => 'SpotStockStatus',
        'systemDiskCapacity' => 'SystemDiskCapacity',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }
        if (null !== $this->GPUMemorySize) {
            $res['GPUMemorySize'] = $this->GPUMemorySize;
        }
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->spotStockStatus) {
            $res['SpotStockStatus'] = $this->spotStockStatus;
        }
        if (null !== $this->systemDiskCapacity) {
            $res['SystemDiskCapacity'] = $this->systemDiskCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }
        if (isset($map['GPUMemorySize'])) {
            $model->GPUMemorySize = $map['GPUMemorySize'];
        }
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['SpotStockStatus'])) {
            $model->spotStockStatus = $map['SpotStockStatus'];
        }
        if (isset($map['SystemDiskCapacity'])) {
            $model->systemDiskCapacity = $map['SystemDiskCapacity'];
        }

        return $model;
    }
}
