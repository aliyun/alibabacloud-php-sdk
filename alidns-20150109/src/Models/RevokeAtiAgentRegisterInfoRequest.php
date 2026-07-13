<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class RevokeAtiAgentRegisterInfoRequest extends Model
{
    /**
     * @var string
     */
    public $agentRegisterInfoId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $reasonCode;
    protected $_name = [
        'agentRegisterInfoId' => 'AgentRegisterInfoId',
        'clientToken' => 'ClientToken',
        'reason' => 'Reason',
        'reasonCode' => 'ReasonCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRegisterInfoId) {
            $res['AgentRegisterInfoId'] = $this->agentRegisterInfoId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
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
        if (isset($map['AgentRegisterInfoId'])) {
            $model->agentRegisterInfoId = $map['AgentRegisterInfoId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        return $model;
    }
}
