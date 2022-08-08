<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListEcsSpecsResponseBody;

use AlibabaCloud\Tea\Model;

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
        'acceleratorType'     => 'AcceleratorType',
        'CPU'                 => 'CPU',
        'currency'            => 'Currency',
        'GPU'                 => 'GPU',
        'GPUType'             => 'GPUType',
        'instanceBandwidthRx' => 'InstanceBandwidthRx',
        'instanceType'        => 'InstanceType',
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
