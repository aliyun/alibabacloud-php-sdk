<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateRatePlanSpecRequest extends Model
{
    /**
     * @description Specifies whether to enable auto payment.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example xcdn-91fknmb80f0g
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The specification update type. Valid values:
     *
     *   DOWNGRADE
     *   UPGRADE
     *
     * @example UPGRADE
     *
     * @var string
     */
    public $orderType;

    /**
     * @example entranceplan
     *
     * @var string
     */
    public $targetPlanCode;

    /**
     * @example basic
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateRatePlanSpecRequest
     */
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
