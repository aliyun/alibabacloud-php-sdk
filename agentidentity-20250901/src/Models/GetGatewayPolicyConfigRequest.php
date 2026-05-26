<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class GetGatewayPolicyConfigRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayArn;

    /**
     * @var string
     */
    public $gatewayType;
    protected $_name = [
        'gatewayArn' => 'GatewayArn',
        'gatewayType' => 'GatewayType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayArn) {
            $res['GatewayArn'] = $this->gatewayArn;
        }

        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
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
        if (isset($map['GatewayArn'])) {
            $model->gatewayArn = $map['GatewayArn'];
        }

        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }

        return $model;
    }
}
