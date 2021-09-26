<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingConfig\instanceTypeList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingConfig\spotPriceLimits;
use AlibabaCloud\Tea\Model;

class scalingConfig extends Model
{
    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var int
     */
    public $dataDiskCount;

    /**
     * @var string
     */
    public $sysDiskCategory;

    /**
     * @var int
     */
    public $sysDiskSize;

    /**
     * @var instanceTypeList
     */
    public $instanceTypeList;

    /**
     * @var spotPriceLimits
     */
    public $spotPriceLimits;
    protected $_name = [
        'spotStrategy'     => 'SpotStrategy',
        'payType'          => 'PayType',
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskSize'     => 'DataDiskSize',
        'dataDiskCount'    => 'DataDiskCount',
        'sysDiskCategory'  => 'SysDiskCategory',
        'sysDiskSize'      => 'SysDiskSize',
        'instanceTypeList' => 'InstanceTypeList',
        'spotPriceLimits'  => 'SpotPriceLimits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->dataDiskCount) {
            $res['DataDiskCount'] = $this->dataDiskCount;
        }
        if (null !== $this->sysDiskCategory) {
            $res['SysDiskCategory'] = $this->sysDiskCategory;
        }
        if (null !== $this->sysDiskSize) {
            $res['SysDiskSize'] = $this->sysDiskSize;
        }
        if (null !== $this->instanceTypeList) {
            $res['InstanceTypeList'] = null !== $this->instanceTypeList ? $this->instanceTypeList->toMap() : null;
        }
        if (null !== $this->spotPriceLimits) {
            $res['SpotPriceLimits'] = null !== $this->spotPriceLimits ? $this->spotPriceLimits->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DataDiskCount'])) {
            $model->dataDiskCount = $map['DataDiskCount'];
        }
        if (isset($map['SysDiskCategory'])) {
            $model->sysDiskCategory = $map['SysDiskCategory'];
        }
        if (isset($map['SysDiskSize'])) {
            $model->sysDiskSize = $map['SysDiskSize'];
        }
        if (isset($map['InstanceTypeList'])) {
            $model->instanceTypeList = instanceTypeList::fromMap($map['InstanceTypeList']);
        }
        if (isset($map['SpotPriceLimits'])) {
            $model->spotPriceLimits = spotPriceLimits::fromMap($map['SpotPriceLimits']);
        }

        return $model;
    }
}
