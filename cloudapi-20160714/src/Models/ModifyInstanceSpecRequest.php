<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example apigateway-cn-v6419k43xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example api.s1.small
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @example UPGRADE
     *
     * @var string
     */
    public $modifyAction;

    /**
     * @example false
     *
     * @var bool
     */
    public $skipWaitSwitch;

    /**
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
