<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstanceGroupPriceRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceGroupSpec;

    /**
     * @var string
     */
    public $instanceVersion;

    /**
     * @var int
     */
    public $numberOfInstances;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $saleMode;
    protected $_name = [
        'amount' => 'Amount',
        'bandwidth' => 'Bandwidth',
        'bizRegionId' => 'BizRegionId',
        'imageId' => 'ImageId',
        'instanceGroupSpec' => 'InstanceGroupSpec',
        'instanceVersion' => 'InstanceVersion',
        'numberOfInstances' => 'NumberOfInstances',
        'orderType' => 'OrderType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'promotionId' => 'PromotionId',
        'saleMode' => 'SaleMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceGroupSpec) {
            $res['InstanceGroupSpec'] = $this->instanceGroupSpec;
        }

        if (null !== $this->instanceVersion) {
            $res['InstanceVersion'] = $this->instanceVersion;
        }

        if (null !== $this->numberOfInstances) {
            $res['NumberOfInstances'] = $this->numberOfInstances;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceGroupSpec'])) {
            $model->instanceGroupSpec = $map['InstanceGroupSpec'];
        }

        if (isset($map['InstanceVersion'])) {
            $model->instanceVersion = $map['InstanceVersion'];
        }

        if (isset($map['NumberOfInstances'])) {
            $model->numberOfInstances = $map['NumberOfInstances'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }

        return $model;
    }
}
