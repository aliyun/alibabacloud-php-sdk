<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $modifyAction;

    /**
     * @var bool
     */
    public $skipWaitSwitch;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'instanceId' => 'InstanceId',
        'instanceSpec' => 'InstanceSpec',
        'modifyAction' => 'ModifyAction',
        'skipWaitSwitch' => 'SkipWaitSwitch',
        'token' => 'Token',
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
