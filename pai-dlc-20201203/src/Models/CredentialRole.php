<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

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
        'assumeRoleFor' => 'AssumeRoleFor',
        'assumeUserInfo' => 'AssumeUserInfo',
        'policy' => 'Policy',
        'roleArn' => 'RoleArn',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
        if (null !== $this->assumeUserInfo) {
            $this->assumeUserInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeRoleFor) {
            $res['AssumeRoleFor'] = $this->assumeRoleFor;
        }

        if (null !== $this->assumeUserInfo) {
            $res['AssumeUserInfo'] = null !== $this->assumeUserInfo ? $this->assumeUserInfo->toArray($noStream) : $this->assumeUserInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
