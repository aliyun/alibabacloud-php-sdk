<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateServiceLinkedRoleResponseBody;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the role.
     *
     * @example acs:ram::177242285274****:role/aliyunserviceroleforpolardb
     *
     * @var string
     */
    public $arn;

    /**
     * @description The document of the trust policy for the role.
     *
     * @example {\"Statement\":[{\"Action\":\"sts:AssumeRole\",\"Effect\":\"Allow\",\"Principal\":{\"Service\":[\"polardb.aliyuncs.com\"]}}],\"Version\":\"1\"}
     *
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @description The time when the role was created. The time is displayed in UTC.
     *
     * @example 2020-06-30T08:14:16Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the role.
     *
     * @example Service Linked Role for PolarDB. PolarDB will use this role to access your resources in other services.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the role is a service-linked role. Valid values:
     *
     *   true: The role is a service-linked role.
     *   false: The role is not a service-linked role.
     *
     * @example true
     *
     * @var bool
     */
    public $isServiceLinkedRole;

    /**
     * @description The ID of the role.
     *
     * @example 32833240981067****
     *
     * @var string
     */
    public $roleId;

    /**
     * @description The name of the role.
     *
     * @example AliyunServiceRoleForPolarDB
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The role name that uses a domain name as the suffix.
     *
     * @example AliyunServiceRoleForPolarDB@role.test.onaliyunservice.com
     *
     * @var string
     */
    public $rolePrincipalName;
    protected $_name = [
        'arn'                      => 'Arn',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'createDate'               => 'CreateDate',
        'description'              => 'Description',
        'isServiceLinkedRole'      => 'IsServiceLinkedRole',
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
        if (null !== $this->isServiceLinkedRole) {
            $res['IsServiceLinkedRole'] = $this->isServiceLinkedRole;
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
        if (isset($map['IsServiceLinkedRole'])) {
            $model->isServiceLinkedRole = $map['IsServiceLinkedRole'];
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
