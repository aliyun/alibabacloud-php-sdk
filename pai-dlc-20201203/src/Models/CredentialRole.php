<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class CredentialRole extends Model
{
    /**
     * @var string
     */
    public $assumeRoleFor;

    /**
     * @var AssumeUserInfo
     */
    public $assumeUserInfo;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'assumeRoleFor'  => 'AssumeRoleFor',
        'assumeUserInfo' => 'AssumeUserInfo',
        'policy'         => 'Policy',
        'roleArn'        => 'RoleArn',
        'roleType'       => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRoleFor) {
            $res['AssumeRoleFor'] = $this->assumeRoleFor;
        }
        if (null !== $this->assumeUserInfo) {
            $res['AssumeUserInfo'] = null !== $this->assumeUserInfo ? $this->assumeUserInfo->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CredentialRole
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssumeRoleFor'])) {
            $model->assumeRoleFor = $map['AssumeRoleFor'];
        }
        if (isset($map['AssumeUserInfo'])) {
            $model->assumeUserInfo = AssumeUserInfo::fromMap($map['AssumeUserInfo']);
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

        return $model;
    }
}
