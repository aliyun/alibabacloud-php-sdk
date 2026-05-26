<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreatePolicySetResponseBody\policySet;

class CreatePolicySetResponseBody extends Model
{
    /**
     * @var policySet
     */
    public $policySet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policySet' => 'PolicySet',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->policySet) {
            $this->policySet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policySet) {
            $res['PolicySet'] = null !== $this->policySet ? $this->policySet->toArray($noStream) : $this->policySet;
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
        if (isset($map['PolicySet'])) {
            $model->policySet = policySet::fromMap($map['PolicySet']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
