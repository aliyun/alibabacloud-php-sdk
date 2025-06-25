<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyUserScopeResponseBody\userScope;

class GetPolicyUserScopeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userScope
     */
    public $userScope;
    protected $_name = [
        'requestId' => 'RequestId',
        'userScope' => 'UserScope',
    ];

    public function validate()
    {
        if (null !== $this->userScope) {
            $this->userScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userScope) {
            $res['UserScope'] = null !== $this->userScope ? $this->userScope->toArray($noStream) : $this->userScope;
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

        if (isset($map['UserScope'])) {
            $model->userScope = userScope::fromMap($map['UserScope']);
        }

        return $model;
    }
}
