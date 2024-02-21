<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig\instanceTypeList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig\spotPriceLimits;
use AlibabaCloud\Tea\Model;

class scalingConfig extends Model
{
    /**
     * @example ssd
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @example 4
     *
     * @var int
     */
    public $dataDiskCount;

    /**
     * @example 40
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var instanceTypeList
     */
    public $instanceTypeList;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @var spotPriceLimits
     */
    public $spotPriceLimits;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example ssd
     *
     * @var string
     */
    public $sysDiskCategory;

    /**
     * @example 40
     *
     * @var int
     */
    public $sysDiskSize;
    protected $_name = [
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskCount'    => 'DataDiskCount',
        'dataDiskSize'     => 'DataDiskSize',
        'instanceTypeList' => 'InstanceTypeList',
        'payType'          => 'PayType',
        'spotPriceLimits'  => 'SpotPriceLimits',
        'spotStrategy'     => 'SpotStrategy',
        'sysDiskCategory'  => 'SysDiskCategory',
        'sysDiskSize'      => 'SysDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskCount) {
            $res['DataDiskCount'] = $this->dataDiskCount;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->instanceTypeList) {
            $res['InstanceTypeList'] = null !== $this->instanceTypeList ? $this->instanceTypeList->toMap() : null;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->spotPriceLimits) {
            $res['SpotPriceLimits'] = null !== $this->spotPriceLimits ? $this->spotPriceLimits->toMap() : null;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->sysDiskCategory) {
            $res['SysDiskCategory'] = $this->sysDiskCategory;
        }
        if (null !== $this->sysDiskSize) {
            $res['SysDiskSize'] = $this->sysDiskSize;
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
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskCount'])) {
            $model->dataDiskCount = $map['DataDiskCount'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['InstanceTypeList'])) {
            $model->instanceTypeList = instanceTypeList::fromMap($map['InstanceTypeList']);
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['SpotPriceLimits'])) {
            $model->spotPriceLimits = spotPriceLimits::fromMap($map['SpotPriceLimits']);
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SysDiskCategory'])) {
            $model->sysDiskCategory = $map['SysDiskCategory'];
        }
        if (isset($map['SysDiskSize'])) {
            $model->sysDiskSize = $map['SysDiskSize'];
        }

        return $model;
    }
}
