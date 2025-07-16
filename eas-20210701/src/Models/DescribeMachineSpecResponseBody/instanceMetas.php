<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponseBody;

use AlibabaCloud\Tea\Model;

class instanceMetas extends Model
{
    /**
     * @description The number of CPU cores in the instance type.
     *
     * @example 32
     *
     * @var int
     */
    public $CPU;

    /**
     * @description The GPU type in the instance type. If the instance type is not a GPU-based instance type, this parameter does not exist.
     *
     * @example GU30
     *
     * @var string
     */
    public $GPU;

    /**
     * @description The number of GPUs in the instance type.
     *
     * @example 1
     *
     * @var int
     */
    public $GPUAmount;

    /**
     * @description The GPU memory in the instance type. Unit: GB.
     *
     * @example 24
     *
     * @var float
     */
    public $GPUMemory;

    /**
     * @description The name of the instance type.
     *
     * @example ml.gu7i.c32m188.1-gu30
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Indicates whether the instance type is available.
     *
     * @example true
     *
     * @var bool
     */
    public $isAvailable;

    /**
     * @description The memory size in the instance type. Unit: GB.
     *
     * @example 188
     *
     * @var float
     */
    public $memory;

    /**
     * @description The minimum discount that can be accepted when the preemptible instance type does not include a usage duration. 0.1 indicates one fold. If this parameter is not returned, the bidding feature is not supported.
     *
     * @example 0.1
     *
     * @var float
     */
    public $nonProtectSpotDiscount;

    /**
     * @description The minimum discount that can be accepted when the preemptible instance type has the 1-hour protection duration. 0.1 indicates one fold. If this parameter is not returned, the bidding feature is not supported.
     *
     * @example 0.12
     *
     * @var float
     */
    public $spotDiscount;

    /**
     * @description The inventory status of the instance type.
     *
     * Valid values:
     *
     *   WithStock
     *   ClosedWithStock
     *   NoStock
     *
     * @example WithStock
     *
     * @var string
     */
    public $stockStatus;

    /**
     * @description The source of the instance type.
     *
     * Valid values:
     *
     *   ECS
     *   BareMetal
     *   Lingjun
     *
     * @example ECS
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'CPU' => 'CPU',
        'GPU' => 'GPU',
        'GPUAmount' => 'GPUAmount',
        'GPUMemory' => 'GPUMemory',
        'instanceType' => 'InstanceType',
        'isAvailable' => 'IsAvailable',
        'memory' => 'Memory',
        'nonProtectSpotDiscount' => 'NonProtectSpotDiscount',
        'spotDiscount' => 'SpotDiscount',
        'stockStatus' => 'StockStatus',
        'vendor' => 'Vendor',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->GPUMemory) {
            $res['GPUMemory'] = $this->GPUMemory;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->nonProtectSpotDiscount) {
            $res['NonProtectSpotDiscount'] = $this->nonProtectSpotDiscount;
        }
        if (null !== $this->spotDiscount) {
            $res['SpotDiscount'] = $this->spotDiscount;
        }
        if (null !== $this->stockStatus) {
            $res['StockStatus'] = $this->stockStatus;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceMetas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['GPUMemory'])) {
            $model->GPUMemory = $map['GPUMemory'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NonProtectSpotDiscount'])) {
            $model->nonProtectSpotDiscount = $map['NonProtectSpotDiscount'];
        }
        if (isset($map['SpotDiscount'])) {
            $model->spotDiscount = $map['SpotDiscount'];
        }
        if (isset($map['StockStatus'])) {
            $model->stockStatus = $map['StockStatus'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
