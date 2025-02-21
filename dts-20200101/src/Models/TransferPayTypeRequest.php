<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class TransferPayTypeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $buyCount;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $dtsJobId;
    /**
     * @var string
     */
    public $instanceClass;
    /**
     * @var int
     */
    public $maxDu;
    /**
     * @var int
     */
    public $minDu;
    /**
     * @var string
     */
    public $period;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'autoPay'         => 'AutoPay',
        'buyCount'        => 'BuyCount',
        'chargeType'      => 'ChargeType',
        'dtsJobId'        => 'DtsJobId',
        'instanceClass'   => 'InstanceClass',
        'maxDu'           => 'MaxDu',
        'minDu'           => 'MinDu',
        'period'          => 'Period',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->buyCount) {
            $res['BuyCount'] = $this->buyCount;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->maxDu) {
            $res['MaxDu'] = $this->maxDu;
        }

        if (null !== $this->minDu) {
            $res['MinDu'] = $this->minDu;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['BuyCount'])) {
            $model->buyCount = $map['BuyCount'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['MaxDu'])) {
            $model->maxDu = $map['MaxDu'];
        }

        if (isset($map['MinDu'])) {
            $model->minDu = $map['MinDu'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
