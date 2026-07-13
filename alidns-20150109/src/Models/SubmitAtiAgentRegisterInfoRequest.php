<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class SubmitAtiAgentRegisterInfoRequest extends Model
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
    public $identityCsr;

    /**
     * @var string
     */
    public $serverCertPem;
    protected $_name = [
        'agentRegisterInfoId' => 'AgentRegisterInfoId',
        'clientToken' => 'ClientToken',
        'identityCsr' => 'IdentityCsr',
        'serverCertPem' => 'ServerCertPem',
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

        if (null !== $this->identityCsr) {
            $res['IdentityCsr'] = $this->identityCsr;
        }

        if (null !== $this->serverCertPem) {
            $res['ServerCertPem'] = $this->serverCertPem;
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

        if (isset($map['IdentityCsr'])) {
            $model->identityCsr = $map['IdentityCsr'];
        }

        if (isset($map['ServerCertPem'])) {
            $model->serverCertPem = $map['ServerCertPem'];
        }

        return $model;
    }
}
