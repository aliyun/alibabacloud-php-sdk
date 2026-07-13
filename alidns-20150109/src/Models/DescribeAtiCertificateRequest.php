<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeAtiCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $agentCertificateId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'agentCertificateId' => 'AgentCertificateId',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCertificateId) {
            $res['AgentCertificateId'] = $this->agentCertificateId;
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
        if (isset($map['AgentCertificateId'])) {
            $model->agentCertificateId = $map['AgentCertificateId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
