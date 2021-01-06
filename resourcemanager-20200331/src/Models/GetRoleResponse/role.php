<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponse;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponse\role\latestDeletionTask;
use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @var int
     */
    public $maxSessionDuration;

    /**
     * @var string
     */
    public $updateDate;

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

    /**
     * @var latestDeletionTask
     */
    public $latestDeletionTask;
    protected $_name = [
        'maxSessionDuration'       => 'MaxSessionDuration',
        'updateDate'               => 'UpdateDate',
        'roleName'                 => 'RoleName',
        'description'              => 'Description',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'isServiceLinkedRole'      => 'IsServiceLinkedRole',
        'arn'                      => 'Arn',
        'roleId'                   => 'RoleId',
        'createDate'               => 'CreateDate',
        'rolePrincipalName'        => 'RolePrincipalName',
        'latestDeletionTask'       => 'LatestDeletionTask',
    ];

    public function validate()
    {
        Model::validateRequired('maxSessionDuration', $this->maxSessionDuration, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('assumeRolePolicyDocument', $this->assumeRolePolicyDocument, true);
        Model::validateRequired('isServiceLinkedRole', $this->isServiceLinkedRole, true);
        Model::validateRequired('arn', $this->arn, true);
        Model::validateRequired('roleId', $this->roleId, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('rolePrincipalName', $this->rolePrincipalName, true);
        Model::validateRequired('latestDeletionTask', $this->latestDeletionTask, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxSessionDuration) {
            $res['MaxSessionDuration'] = $this->maxSessionDuration;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
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
        if (null !== $this->latestDeletionTask) {
            $res['LatestDeletionTask'] = null !== $this->latestDeletionTask ? $this->latestDeletionTask->toMap() : null;
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
        if (isset($map['MaxSessionDuration'])) {
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
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
        if (isset($map['LatestDeletionTask'])) {
            $model->latestDeletionTask = latestDeletionTask::fromMap($map['LatestDeletionTask']);
        }

        return $model;
    }
}
