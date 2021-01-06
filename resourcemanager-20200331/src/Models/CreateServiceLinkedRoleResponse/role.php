<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateServiceLinkedRoleResponse;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @var bool
     */
    public $isServiceLinkedRole;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $rolePrincipalName;
    protected $_name = [
        'roleName'                 => 'RoleName',
        'description'              => 'Description',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'isServiceLinkedRole'      => 'IsServiceLinkedRole',
        'arn'                      => 'Arn',
        'roleId'                   => 'RoleId',
        'createDate'               => 'CreateDate',
        'rolePrincipalName'        => 'RolePrincipalName',
    ];

    public function validate()
    {
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('assumeRolePolicyDocument', $this->assumeRolePolicyDocument, true);
        Model::validateRequired('isServiceLinkedRole', $this->isServiceLinkedRole, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('roleId', $this->roleId, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('rolePrincipalName', $this->rolePrincipalName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->assumeRolePolicyDocument) {
            $res['AssumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        }
        if (null !== $this->isServiceLinkedRole) {
            $res['IsServiceLinkedRole'] = $this->isServiceLinkedRole;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AssumeRolePolicyDocument'])) {
            $model->assumeRolePolicyDocument = $map['AssumeRolePolicyDocument'];
        }
        if (isset($map['IsServiceLinkedRole'])) {
            $model->isServiceLinkedRole = $map['IsServiceLinkedRole'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['RolePrincipalName'])) {
            $model->rolePrincipalName = $map['RolePrincipalName'];
        }

        return $model;
    }
}
