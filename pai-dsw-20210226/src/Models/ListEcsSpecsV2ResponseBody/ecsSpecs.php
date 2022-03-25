<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsV2ResponseBody;

use AlibabaCloud\Tea\Model;

class ecsSpecs extends Model
{
    /**
     * @description 资源类型
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description CPU核数
     *
     * @var int
     */
    public $CPU;

    /**
     * @description 货币单位
     *
     * @var string
     */
    public $currency;

    /**
     * @description GPU卡数
     *
     * @var int
     */
    public $GPU;

    /**
     * @description 显卡类型
     *
     * @var string
     */
    public $GPUType;

    /**
     * @description 实例接收带宽
     *
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @description 实例规格
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 内存大小(GB)
     *
     * @var float
     */
    public $memory;

    /**
     * @description 价格
     *
     * @var float
     */
    public $price;

    /**
     * @description 系统盘大小(GB)
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
