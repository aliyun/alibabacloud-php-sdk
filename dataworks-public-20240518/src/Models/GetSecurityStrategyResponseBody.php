<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetSecurityStrategyResponseBody\securityStrategy;

class GetSecurityStrategyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityStrategy
     */
    public $securityStrategy;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityStrategy' => 'SecurityStrategy',
    ];

    public function validate()
    {
        if (null !== $this->securityStrategy) {
            $this->securityStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityStrategy) {
            $res['SecurityStrategy'] = null !== $this->securityStrategy ? $this->securityStrategy->toArray($noStream) : $this->securityStrategy;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityStrategy'])) {
            $model->securityStrategy = securityStrategy::fromMap($map['SecurityStrategy']);
        }

        return $model;
    }
}
