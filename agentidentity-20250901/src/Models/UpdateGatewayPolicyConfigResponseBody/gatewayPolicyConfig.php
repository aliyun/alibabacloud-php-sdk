<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateGatewayPolicyConfigResponseBody;

use AlibabaCloud\Dara\Model;

class gatewayPolicyConfig extends Model
{
    /**
     * @var string
     */
    public $enforcementMode;

    /**
     * @var string
     */
    public $policySetArn;
    protected $_name = [
        'enforcementMode' => 'EnforcementMode',
        'policySetArn' => 'PolicySetArn',
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

        if (null !== $this->policySetArn) {
            $res['PolicySetArn'] = $this->policySetArn;
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

        if (isset($map['PolicySetArn'])) {
            $model->policySetArn = $map['PolicySetArn'];
        }

        return $model;
    }
}
