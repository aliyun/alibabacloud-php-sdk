<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationRuleResponseBody\authorizationRule;

class GetAuthorizationRuleResponseBody extends Model
{
    /**
     * @var authorizationRule
     */
    public $authorizationRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizationRule' => 'AuthorizationRule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->authorizationRule) {
            $this->authorizationRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationRule) {
            $res['AuthorizationRule'] = null !== $this->authorizationRule ? $this->authorizationRule->toArray($noStream) : $this->authorizationRule;
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
        if (isset($map['AuthorizationRule'])) {
            $model->authorizationRule = authorizationRule::fromMap($map['AuthorizationRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
