<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\CredentialConfig\configs;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CredentialConfig\configs\roles\userInfo;
use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @example 123******
     *
     * @var string
     */
    public $assumeRoleFor;

    /**
     * @example {}
     *
     * @var string
     */
    public $policy;

    /**
     * @description This parameter is required.
     *
     * @example acs:ram::123******:role/****
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description This parameter is required.
     *
     * @example service
     *
     * @var string
     */
    public $roleType;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'assumeRoleFor' => 'AssumeRoleFor',
        'policy' => 'Policy',
        'roleArn' => 'RoleArn',
        'roleType' => 'RoleType',
        'userInfo' => 'UserInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRoleFor) {
            $res['AssumeRoleFor'] = $this->assumeRoleFor;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
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
        if (isset($map['AssumeRoleFor'])) {
            $model->assumeRoleFor = $map['AssumeRoleFor'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
