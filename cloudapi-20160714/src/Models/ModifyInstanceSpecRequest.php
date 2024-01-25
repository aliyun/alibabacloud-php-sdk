<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @description Specifies whether payment is automatically made during renewal. Valid values:
     *
     *   **True**: Automatic payment is enabled. Make sure that your Alibaba Cloud account has adequate balance.
     *   **False**: Automatic payment is disabled. You have to manually pay in the console. Log on to the console. In the upper-right corner, choose **Expenses > User Center**. In the left-side navigation pane, click **Orders**. On the page that appears, find your order and complete the payment.
     *
     * Default value: **False**.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the instance.
     *
     * @example apigateway-cn-v6419k43xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The specifications of the instance.
     *
     * @example api.s1.small
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description Specifies whether to upgrade or downgrade the instance. Valid values:
     *
     *   **UPGRADE**
     *   **DOWNGRADE**
     *
     * Default value: **UPGRADE**.
     * @example UPGRADE
     *
     * @var string
     */
    public $modifyAction;

    /**
     * @description Specifies whether to skip the Waiting for Traffic Switchover state. During the upgrade or downgrade, a new outbound IP address may be added to the API Gateway instance. The Waiting for Traffic Switchover state is used to remind users of adding the new outbound IP address to the whitelist. If you set the SkipWaitSwitch parameter to true, the instance does not enter the Waiting for Traffic Switchover state when a new outbound IP address is available. Instead, the system sends internal messages to the user.
     *
     * @example false
     *
     * @var bool
     */
    public $skipWaitSwitch;

    /**
     * @description The password.
     *
     * @example b5845042-2f2f-4e96-bd5c-36c6e5c2a68c
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'autoPay'        => 'AutoPay',
        'instanceId'     => 'InstanceId',
        'instanceSpec'   => 'InstanceSpec',
        'modifyAction'   => 'ModifyAction',
        'skipWaitSwitch' => 'SkipWaitSwitch',
        'token'          => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->modifyAction) {
            $res['ModifyAction'] = $this->modifyAction;
        }
        if (null !== $this->skipWaitSwitch) {
            $res['SkipWaitSwitch'] = $this->skipWaitSwitch;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['ModifyAction'])) {
            $model->modifyAction = $map['ModifyAction'];
        }
        if (isset($map['SkipWaitSwitch'])) {
            $model->skipWaitSwitch = $map['SkipWaitSwitch'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
