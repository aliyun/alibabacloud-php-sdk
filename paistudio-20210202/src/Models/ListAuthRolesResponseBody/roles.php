<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListAuthRolesResponseBody;

use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListAuthRolesResponseBody\roles\token;
use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $isEnabled;

    /**
     * @example acs:ram::1557********904:role/aliyunodpspaidefaultrole
     *
     * @var string
     */
    public $roleARN;

    /**
     * @example AliyunODPSPAIDefaultRole
     *
     * @var string
     */
    public $roleName;

    /**
     * @example PaiStudio。
     *
     * @var string
     */
    public $roleType;

    /**
     * @var token
     */
    public $token;
    protected $_name = [
        'isEnabled' => 'IsEnabled',
        'roleARN'   => 'RoleARN',
        'roleName'  => 'RoleName',
        'roleType'  => 'RoleType',
        'token'     => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Token'] = null !== $this->token ? $this->token->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
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
