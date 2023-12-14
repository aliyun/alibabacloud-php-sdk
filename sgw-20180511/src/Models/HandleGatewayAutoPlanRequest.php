<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class HandleGatewayAutoPlanRequest extends Model
{
    /**
     * @var bool
     */
    public $cancel;

    /**
     * @var int
     */
    public $delayHours;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'cancel'        => 'Cancel',
        'delayHours'    => 'DelayHours',
        'gatewayId'     => 'GatewayId',
        'planId'        => 'PlanId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancel) {
            $res['Cancel'] = $this->cancel;
        }
        if (null !== $this->delayHours) {
            $res['DelayHours'] = $this->delayHours;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HandleGatewayAutoPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cancel'])) {
            $model->cancel = $map['Cancel'];
        }
        if (isset($map['DelayHours'])) {
            $model->delayHours = $map['DelayHours'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
