<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class AttachPolicySetToGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $enforcementMode;

    /**
     * @var string
     */
    public $gatewayArn;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var string
     */
    public $policySetName;
    protected $_name = [
        'enforcementMode' => 'EnforcementMode',
        'gatewayArn' => 'GatewayArn',
        'gatewayType' => 'GatewayType',
        'policySetName' => 'PolicySetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enforcementMode) {
            $res['EnforcementMode'] = $this->enforcementMode;
        }

        if (null !== $this->gatewayArn) {
            $res['GatewayArn'] = $this->gatewayArn;
        }

        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }

        if (null !== $this->policySetName) {
            $res['PolicySetName'] = $this->policySetName;
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
        if (isset($map['EnforcementMode'])) {
            $model->enforcementMode = $map['EnforcementMode'];
        }

        if (isset($map['GatewayArn'])) {
            $model->gatewayArn = $map['GatewayArn'];
        }

        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }

        if (isset($map['PolicySetName'])) {
            $model->policySetName = $map['PolicySetName'];
        }

        return $model;
    }
}
