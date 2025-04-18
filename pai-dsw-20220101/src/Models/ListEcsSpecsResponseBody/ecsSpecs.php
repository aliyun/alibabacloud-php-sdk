<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsResponseBody\ecsSpecs\labels;

class ecsSpecs extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var int
     */
    public $CPU;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var int
     */
    public $GPU;

    /**
     * @var string
     */
    public $GPUType;

    /**
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isAvailable;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var float
     */
    public $price;

    /**
     * @var int
     */
    public $systemDiskCapacity;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'CPU' => 'CPU',
        'currency' => 'Currency',
        'GPU' => 'GPU',
        'GPUType' => 'GPUType',
        'instanceBandwidthRx' => 'InstanceBandwidthRx',
        'instanceType' => 'InstanceType',
        'isAvailable' => 'IsAvailable',
        'labels' => 'Labels',
        'memory' => 'Memory',
        'price' => 'Price',
        'systemDiskCapacity' => 'SystemDiskCapacity',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
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
