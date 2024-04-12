<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyUserScopeResponseBody\userScope;
use AlibabaCloud\Tea\Model;

class GetPolicyUserScopeResponseBody extends Model
{
    /**
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userScope) {
            $res['UserScope'] = null !== $this->userScope ? $this->userScope->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyUserScopeResponseBody
     */
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
