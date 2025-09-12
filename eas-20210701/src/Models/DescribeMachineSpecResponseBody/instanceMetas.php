<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeMachineSpecResponseBody;

use AlibabaCloud\Dara\Model;

class instanceMetas extends Model
{
    /**
     * @var int
     */
    public $CPU;

    /**
     * @var string
     */
    public $GPU;

    /**
     * @var int
     */
    public $GPUAmount;

    /**
     * @var float
     */
    public $GPUMemory;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isAvailable;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var float
     */
    public $nonProtectSpotDiscount;

    /**
     * @var float
     */
    public $spotDiscount;

    /**
     * @var string
     */
    public $stockStatus;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
