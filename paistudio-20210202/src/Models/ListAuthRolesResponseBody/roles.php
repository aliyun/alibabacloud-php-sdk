<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListAuthRolesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListAuthRolesResponseBody\roles\token;

class roles extends Model
{
    /**
     * @var string
     */
    public $isEnabled;

    /**
     * @var string
     */
    public $roleARN;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleType;

    /**
     * @var token
     */
    public $token;
    protected $_name = [
        'isEnabled' => 'IsEnabled',
        'roleARN' => 'RoleARN',
        'roleName' => 'RoleName',
        'roleType' => 'RoleType',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (null !== $this->token) {
            $this->token->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }

        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->token) {
            $res['Token'] = null !== $this->token ? $this->token->toArray($noStream) : $this->token;
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
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['Token'])) {
            $model->token = token::fromMap($map['Token']);
        }

        return $model;
    }
}
