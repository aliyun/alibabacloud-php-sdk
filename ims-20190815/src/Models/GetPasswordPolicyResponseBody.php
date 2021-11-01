<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetPasswordPolicyResponseBody\passwordPolicy;
use AlibabaCloud\Tea\Model;

class GetPasswordPolicyResponseBody extends Model
{
    /**
     * @var passwordPolicy
     */
    public $passwordPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passwordPolicy' => 'PasswordPolicy',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passwordPolicy) {
            $res['PasswordPolicy'] = null !== $this->passwordPolicy ? $this->passwordPolicy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPasswordPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasswordPolicy'])) {
            $model->passwordPolicy = passwordPolicy::fromMap($map['PasswordPolicy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
