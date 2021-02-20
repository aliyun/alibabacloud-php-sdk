<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateServiceLinkedRoleResponseBody;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @var string
     */
    public $rolePrincipalName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var bool
     */
    public $isServiceLinkedRole;
    protected $_name = [
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'rolePrincipalName'        => 'RolePrincipalName',
        'description'              => 'Description',
        'roleName'                 => 'RoleName',
        'createDate'               => 'CreateDate',
        'arn'                      => 'Arn',
        'roleId'                   => 'RoleId',
        'isServiceLinkedRole'      => 'IsServiceLinkedRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRolePolicyDocument) {
            $res['AssumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        }
        if (null !== $this->rolePrincipalName) {
            $res['RolePrincipalName'] = $this->rolePrincipalName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->isServiceLinkedRole) {
            $res['IsServiceLinkedRole'] = $this->isServiceLinkedRole;
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
        if (isset($map['AssumeRolePolicyDocument'])) {
            $model->assumeRolePolicyDocument = $map['AssumeRolePolicyDocument'];
        }
        if (isset($map['RolePrincipalName'])) {
            $model->rolePrincipalName = $map['RolePrincipalName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['IsServiceLinkedRole'])) {
            $model->isServiceLinkedRole = $map['IsServiceLinkedRole'];
        }

        return $model;
    }
}
