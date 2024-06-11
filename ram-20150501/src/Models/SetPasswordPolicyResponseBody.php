<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\SetPasswordPolicyResponseBody\passwordPolicy;
use AlibabaCloud\Tea\Model;

class SetPasswordPolicyResponseBody extends Model
{
    /**
     * @description The password policy.
     *
     * @var passwordPolicy
     */
    public $passwordPolicy;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
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
     * @return SetPasswordPolicyResponseBody
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
