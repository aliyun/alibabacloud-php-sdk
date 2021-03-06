<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig\instanceTypeList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig\spotPriceLimits;
use AlibabaCloud\Tea\Model;

class scalingConfig extends Model
{
    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var int
     */
    public $dataDiskCount;

    /**
     * @var instanceTypeList
     */
    public $instanceTypeList;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $sysDiskCategory;

    /**
     * @var spotPriceLimits
     */
    public $spotPriceLimits;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var int
     */
    public $sysDiskSize;
    protected $_name = [
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskCount'    => 'DataDiskCount',
        'instanceTypeList' => 'InstanceTypeList',
        'payType'          => 'PayType',
        'dataDiskSize'     => 'DataDiskSize',
        'sysDiskCategory'  => 'SysDiskCategory',
        'spotPriceLimits'  => 'SpotPriceLimits',
        'spotStrategy'     => 'SpotStrategy',
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
        if (null !== $this->instanceTypeList) {
            $res['InstanceTypeList'] = null !== $this->instanceTypeList ? $this->instanceTypeList->toMap() : null;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->sysDiskCategory) {
            $res['SysDiskCategory'] = $this->sysDiskCategory;
        }
        if (null !== $this->spotPriceLimits) {
            $res['SpotPriceLimits'] = null !== $this->spotPriceLimits ? $this->spotPriceLimits->toMap() : null;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
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
        if (isset($map['InstanceTypeList'])) {
            $model->instanceTypeList = instanceTypeList::fromMap($map['InstanceTypeList']);
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['SysDiskCategory'])) {
            $model->sysDiskCategory = $map['SysDiskCategory'];
        }
        if (isset($map['SpotPriceLimits'])) {
            $model->spotPriceLimits = spotPriceLimits::fromMap($map['SpotPriceLimits']);
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SysDiskSize'])) {
            $model->sysDiskSize = $map['SysDiskSize'];
        }

        return $model;
    }
}
