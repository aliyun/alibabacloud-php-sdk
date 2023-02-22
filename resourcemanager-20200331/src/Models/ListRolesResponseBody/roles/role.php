<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListRolesResponseBody\roles;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListRolesResponseBody\roles\role\latestDeletionTask;
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
     * @example true
     *
     * @var bool
     */
    public $isServiceLinkedRole;

    /**
     * @var latestDeletionTask
     */
    public $latestDeletionTask;

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

    /**
     * @example 2016-01-23T12:33:18Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'arn'                 => 'Arn',
        'createDate'          => 'CreateDate',
        'description'         => 'Description',
        'isServiceLinkedRole' => 'IsServiceLinkedRole',
        'latestDeletionTask'  => 'LatestDeletionTask',
        'maxSessionDuration'  => 'MaxSessionDuration',
        'roleId'              => 'RoleId',
        'roleName'            => 'RoleName',
        'rolePrincipalName'   => 'RolePrincipalName',
        'updateDate'          => 'UpdateDate',
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
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isServiceLinkedRole) {
            $res['IsServiceLinkedRole'] = $this->isServiceLinkedRole;
        }
        if (null !== $this->latestDeletionTask) {
            $res['LatestDeletionTask'] = null !== $this->latestDeletionTask ? $this->latestDeletionTask->toMap() : null;
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
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsServiceLinkedRole'])) {
            $model->isServiceLinkedRole = $map['IsServiceLinkedRole'];
        }
        if (isset($map['LatestDeletionTask'])) {
            $model->latestDeletionTask = latestDeletionTask::fromMap($map['LatestDeletionTask']);
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
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
