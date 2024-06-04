<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsResponseBody;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsResponseBody\ecsSpecs\labels;
use AlibabaCloud\Tea\Model;

class ecsSpecs extends Model
{
    /**
     * @example CPU
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @example 32
     *
     * @var int
     */
    public $CPU;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 4
     *
     * @var int
     */
    public $GPU;

    /**
     * @example v100
     *
     * @var string
     */
    public $GPUType;

    /**
     * @example 5120000
     *
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @example ecs.gn5-c28g1.7xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example True
     *
     * @var bool
     */
    public $isAvailable;

    /**
     * @example {\\"foo\\": \\"bar\\"}
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @example 32
     *
     * @var float
     */
    public $memory;

    /**
     * @example 22.8
     *
     * @var float
     */
    public $price;

    /**
     * @example 500
     *
     * @var int
     */
    public $systemDiskCapacity;
    protected $_name = [
        'acceleratorType'     => 'AcceleratorType',
        'CPU'                 => 'CPU',
        'currency'            => 'Currency',
        'GPU'                 => 'GPU',
        'GPUType'             => 'GPUType',
        'instanceBandwidthRx' => 'InstanceBandwidthRx',
        'instanceType'        => 'InstanceType',
        'isAvailable'         => 'IsAvailable',
        'labels'              => 'Labels',
        'memory'              => 'Memory',
        'price'               => 'Price',
        'systemDiskCapacity'  => 'SystemDiskCapacity',
    ];

    public function validate()
    {
    }

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
                $n             = 0;
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
        if (isset($map['SystemDiskCapacity'])) {
            $model->systemDiskCapacity = $map['SystemDiskCapacity'];
        }

        return $model;
    }
}
