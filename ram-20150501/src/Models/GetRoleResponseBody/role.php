<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetRoleResponseBody;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role.
     *
     * @example acs:ram::123456789012****:role/ECSAdmin
     *
     * @var string
     */
    public $arn;

    /**
     * @description The content of the policy that specifies one or more entities entrusted to assume the RAM role.
     *
     * @example { "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::123456789012****:root" } } ], "Version": "1" }
     *
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @description The time when the RAM role was created.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the RAM role.
     *
     * @example ECS administrator
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum session duration of the RAM role.
     *
     * @example 3600
     *
     * @var int
     */
    public $maxSessionDuration;

    /**
     * @description The ID of the RAM role.
     *
     * @example 901234567890****
     *
     * @var string
     */
    public $roleId;

    /**
     * @description The name of the RAM role.
     *
     * @example ECSAdmin
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The time when the RAM role was modified.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'arn'                      => 'Arn',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'createDate'               => 'CreateDate',
        'description'              => 'Description',
        'maxSessionDuration'       => 'MaxSessionDuration',
        'roleId'                   => 'RoleId',
        'roleName'                 => 'RoleName',
        'updateDate'               => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->assumeRolePolicyDocument) {
            $res['AssumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxSessionDuration) {
            $res['MaxSessionDuration'] = $this->maxSessionDuration;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return role
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['AssumeRolePolicyDocument'])) {
            $model->assumeRolePolicyDocument = $map['AssumeRolePolicyDocument'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxSessionDuration'])) {
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
