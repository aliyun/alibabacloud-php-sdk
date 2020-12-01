<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\SetPasswordPolicyResponse\passwordPolicy;
use AlibabaCloud\Tea\Model;

class SetPasswordPolicyResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var passwordPolicy
     */
    public $passwordPolicy;
    protected $_name = [
        'requestId'      => 'RequestId',
        'passwordPolicy' => 'PasswordPolicy',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('passwordPolicy', $this->passwordPolicy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->passwordPolicy) {
            $res['PasswordPolicy'] = null !== $this->passwordPolicy ? $this->passwordPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPasswordPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PasswordPolicy'])) {
            $model->passwordPolicy = passwordPolicy::fromMap($map['PasswordPolicy']);
        }

        return $model;
    }
}
