<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetRoleResponseBody\role\latestDeletionTask;
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
    public $updateDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $maxSessionDuration;

    /**
     * @var latestDeletionTask
     */
    public $latestDeletionTask;

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
    public $roleId;

    /**
     * @var string
     */
    public $arn;

    /**
     * @var bool
     */
    public $isServiceLinkedRole;
    protected $_name = [
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'rolePrincipalName'        => 'RolePrincipalName',
        'updateDate'               => 'UpdateDate',
        'description'              => 'Description',
        'maxSessionDuration'       => 'MaxSessionDuration',
        'latestDeletionTask'       => 'LatestDeletionTask',
        'roleName'                 => 'RoleName',
        'createDate'               => 'CreateDate',
        'roleId'                   => 'RoleId',
        'arn'                      => 'Arn',
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
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxSessionDuration) {
            $res['MaxSessionDuration'] = $this->maxSessionDuration;
        }
        if (null !== $this->latestDeletionTask) {
            $res['LatestDeletionTask'] = null !== $this->latestDeletionTask ? $this->latestDeletionTask->toMap() : null;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
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
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxSessionDuration'])) {
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }
        if (isset($map['LatestDeletionTask'])) {
            $model->latestDeletionTask = latestDeletionTask::fromMap($map['LatestDeletionTask']);
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['IsServiceLinkedRole'])) {
            $model->isServiceLinkedRole = $map['IsServiceLinkedRole'];
        }

        return $model;
    }
}
