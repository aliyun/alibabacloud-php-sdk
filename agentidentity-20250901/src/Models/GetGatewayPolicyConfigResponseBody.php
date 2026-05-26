<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetGatewayPolicyConfigResponseBody\gatewayPolicyConfig;

class GetGatewayPolicyConfigResponseBody extends Model
{
    /**
     * @var gatewayPolicyConfig
     */
    public $gatewayPolicyConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gatewayPolicyConfig' => 'GatewayPolicyConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->gatewayPolicyConfig) {
            $this->gatewayPolicyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayPolicyConfig) {
            $res['GatewayPolicyConfig'] = null !== $this->gatewayPolicyConfig ? $this->gatewayPolicyConfig->toArray($noStream) : $this->gatewayPolicyConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GatewayPolicyConfig'])) {
            $model->gatewayPolicyConfig = gatewayPolicyConfig::fromMap($map['GatewayPolicyConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
