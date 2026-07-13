<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class VerifyAtiAgentRegisterInfoAcmeChallengeRecordRequest extends Model
{
    /**
     * @var string
     */
    public $agentRegisterInfoId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'agentRegisterInfoId' => 'AgentRegisterInfoId',
        'clientToken' => 'ClientToken',
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

        return $model;
    }
}
