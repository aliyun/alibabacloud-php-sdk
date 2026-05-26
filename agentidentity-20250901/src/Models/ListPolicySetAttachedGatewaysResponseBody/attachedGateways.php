<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListPolicySetAttachedGatewaysResponseBody;

use AlibabaCloud\Dara\Model;

class attachedGateways extends Model
{
    /**
     * @var string
     */
    public $attachedPolicySetName;

    /**
     * @var string
     */
    public $attachedTime;

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
    protected $_name = [
        'attachedPolicySetName' => 'AttachedPolicySetName',
        'attachedTime' => 'AttachedTime',
        'enforcementMode' => 'EnforcementMode',
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
        if (null !== $this->attachedPolicySetName) {
            $res['AttachedPolicySetName'] = $this->attachedPolicySetName;
        }

        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }

        if (null !== $this->enforcementMode) {
            $res['EnforcementMode'] = $this->enforcementMode;
        }

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
        if (isset($map['AttachedPolicySetName'])) {
            $model->attachedPolicySetName = $map['AttachedPolicySetName'];
        }

        if (isset($map['AttachedTime'])) {
            $model->attachedTime = $map['AttachedTime'];
        }

        if (isset($map['EnforcementMode'])) {
            $model->enforcementMode = $map['EnforcementMode'];
        }

        if (isset($map['GatewayArn'])) {
            $model->gatewayArn = $map['GatewayArn'];
        }

        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }

        return $model;
    }
}
