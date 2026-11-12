<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateOrderRequest;

use AlibabaCloud\Dara\Model;

class commodity extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $commodityType;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $payType;

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
    public $planId;
    protected $_name = [
        'amount' => 'Amount',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'commodityType' => 'CommodityType',
        'dataDiskSize' => 'DataDiskSize',
        'imageId' => 'ImageId',
        'instanceIds' => 'InstanceIds',
        'payType' => 'PayType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'planId' => 'PlanId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
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

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }

        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }

        return $model;
    }
}
