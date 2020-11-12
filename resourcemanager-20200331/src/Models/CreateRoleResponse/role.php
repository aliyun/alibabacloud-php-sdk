<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateRoleResponse;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @var string
     */
    public $arn;

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
    public $createDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var int
     */
    public $maxSessionDuration;
    protected $_name = [
        'arn'                      => 'Arn',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'rolePrincipalName'        => 'RolePrincipalName',
        'createDate'               => 'CreateDate',
        'description'              => 'Description',
        'roleId'                   => 'RoleId',
        'roleName'                 => 'RoleName',
        'maxSessionDuration'       => 'MaxSessionDuration',
    ];

    public function validate()
    {
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('assumeRolePolicyDocument', $this->assumeRolePolicyDocument, true);
        Model::validateRequired('rolePrincipalName', $this->rolePrincipalName, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('roleId', $this->roleId, true);
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('maxSessionDuration', $this->maxSessionDuration, true);
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
        if (null !== $this->rolePrincipalName) {
            $res['RolePrincipalName'] = $this->rolePrincipalName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->maxSessionDuration) {
            $res['MaxSessionDuration'] = $this->maxSessionDuration;
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
        if (isset($map['RolePrincipalName'])) {
            $model->rolePrincipalName = $map['RolePrincipalName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['MaxSessionDuration'])) {
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }

        return $model;
    }
}
