<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateRatePlanSpecRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $targetPlanCode;

    /**
     * @var string
     */
    public $targetPlanName;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'chargeType' => 'ChargeType',
        'instanceId' => 'InstanceId',
        'orderType' => 'OrderType',
        'targetPlanCode' => 'TargetPlanCode',
        'targetPlanName' => 'TargetPlanName',
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

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->targetPlanCode) {
            $res['TargetPlanCode'] = $this->targetPlanCode;
        }

        if (null !== $this->targetPlanName) {
            $res['TargetPlanName'] = $this->targetPlanName;
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

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['TargetPlanCode'])) {
            $model->targetPlanCode = $map['TargetPlanCode'];
        }

        if (isset($map['TargetPlanName'])) {
            $model->targetPlanName = $map['TargetPlanName'];
        }

        return $model;
    }
}
