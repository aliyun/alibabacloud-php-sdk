<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserPoolResponseBody\userPool;

class CreateUserPoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userPool
     */
    public $userPool;
    protected $_name = [
        'requestId' => 'RequestId',
        'userPool' => 'UserPool',
    ];

    public function validate()
    {
        if (null !== $this->userPool) {
            $this->userPool->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userPool) {
            $res['UserPool'] = null !== $this->userPool ? $this->userPool->toArray($noStream) : $this->userPool;
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

        if (isset($map['UserPool'])) {
            $model->userPool = userPool::fromMap($map['UserPool']);
        }

        return $model;
    }
}
