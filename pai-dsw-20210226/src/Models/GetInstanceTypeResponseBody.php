<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceTypeResponseBody extends Model
{
    /**
     * @description cpu核数
     *
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @description 折扣
     *
     * @var float
     */
    public $discount;

    /**
     * @description 国内价格
     *
     * @var float
     */
    public $domesticPrice;

    /**
     * @description GPU卡数
     *
     * @var int
     */
    public $GPUAmount;

    /**
     * @description GPU卡型
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @description 实例接收带宽
     *
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @description 实例发送带宽
     *
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @description 实例每秒发包数
     *
     * @var int
     */
    public $instancePpsRx;

    /**
     * @description 实例每秒收包数
     *
     * @var int
     */
    public $instancePpsTx;

    /**
     * @description 规格族
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description 实例类型id
     *
     * @var string
     */
    public $instanceTypeId;

    /**
     * @description 是否国际站用户
     *
     * @var bool
     */
    public $international;

    /**
     * @description 存储盘容量
     *
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @description 内存容量
     *
     * @var float
     */
    public $memorySize;

    /**
     * @description 价格
     *
     * @var float
     */
    public $price;

    /**
     * @description 价格（人民币）
     *
     * @var float
     */
    public $priceCNY;

    /**
     * @description 价格（美元）
     *
     * @var float
     */
    public $priceUSD;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 资源类型
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 系统盘存储类型
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description 系统盘容量
     *
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'cpuCoreCount'         => 'CpuCoreCount',
        'discount'             => 'Discount',
        'domesticPrice'        => 'DomesticPrice',
        'GPUAmount'            => 'GPUAmount',
        'GPUSpec'              => 'GPUSpec',
        'instanceBandwidthRx'  => 'InstanceBandwidthRx',
        'instanceBandwidthTx'  => 'InstanceBandwidthTx',
        'instancePpsRx'        => 'InstancePpsRx',
        'instancePpsTx'        => 'InstancePpsTx',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'instanceTypeId'       => 'InstanceTypeId',
        'international'        => 'International',
        'localStorageCapacity' => 'LocalStorageCapacity',
        'memorySize'           => 'MemorySize',
        'price'                => 'Price',
        'priceCNY'             => 'PriceCNY',
        'priceUSD'             => 'PriceUSD',
        'requestId'            => 'RequestId',
        'resourceType'         => 'ResourceType',
        'systemDiskCategory'   => 'SystemDiskCategory',
        'systemDiskSize'       => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->discount) {
            $res['Discount'] = $this->discount;
        }
        if (null !== $this->domesticPrice) {
            $res['DomesticPrice'] = $this->domesticPrice;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }
        if (null !== $this->instanceBandwidthTx) {
            $res['InstanceBandwidthTx'] = $this->instanceBandwidthTx;
        }
        if (null !== $this->instancePpsRx) {
            $res['InstancePpsRx'] = $this->instancePpsRx;
        }
        if (null !== $this->instancePpsTx) {
            $res['InstancePpsTx'] = $this->instancePpsTx;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->international) {
            $res['International'] = $this->international;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->priceCNY) {
            $res['PriceCNY'] = $this->priceCNY;
        }
        if (null !== $this->priceUSD) {
            $res['PriceUSD'] = $this->priceUSD;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['Discount'])) {
            $model->discount = $map['Discount'];
        }
        if (isset($map['DomesticPrice'])) {
            $model->domesticPrice = $map['DomesticPrice'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }
        if (isset($map['InstanceBandwidthTx'])) {
            $model->instanceBandwidthTx = $map['InstanceBandwidthTx'];
        }
        if (isset($map['InstancePpsRx'])) {
            $model->instancePpsRx = $map['InstancePpsRx'];
        }
        if (isset($map['InstancePpsTx'])) {
            $model->instancePpsTx = $map['InstancePpsTx'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['International'])) {
            $model->international = $map['International'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['PriceCNY'])) {
            $model->priceCNY = $map['PriceCNY'];
        }
        if (isset($map['PriceUSD'])) {
            $model->priceUSD = $map['PriceUSD'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
