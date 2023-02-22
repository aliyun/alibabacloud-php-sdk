<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateRoleResponseBody;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @example acs:ram::123456789012****:role/ECSAdmin
     *
     * @var string
     */
    public $arn;

    /**
     * @example { \"Statement\": [ { \"Action\": \"sts:AssumeRole\", \"Effect\": \"Allow\", \"Principal\": { \"RAM\": \"acs:ram::12345678901234****:root\" } } ], \"Version\": \"1\" }
     *
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 3600
     *
     * @var int
     */
    public $maxSessionDuration;

    /**
     * @example 90123456789****
     *
     * @var string
     */
    public $roleId;

    /**
     * @example ECSAdmin
     *
     * @var string
     */
    public $roleName;

    /**
     * @example ECSAdmin@role.123456.onaliyunservice.com
     *
     * @var string
     */
    public $rolePrincipalName;
    protected $_name = [
        'arn'                      => 'Arn',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'createDate'               => 'CreateDate',
        'description'              => 'Description',
        'maxSessionDuration'       => 'MaxSessionDuration',
        'roleId'                   => 'RoleId',
        'roleName'                 => 'RoleName',
        'rolePrincipalName'        => 'RolePrincipalName',
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
        if (null !== $this->rolePrincipalName) {
            $res['RolePrincipalName'] = $this->rolePrincipalName;
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
        if (isset($map['RolePrincipalName'])) {
            $model->rolePrincipalName = $map['RolePrincipalName'];
        }

        return $model;
    }
}
