<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RevokeTablePermissionRequest extends Model
{
    /**
     * @description The permissions that you want to revoke. Separate multiple permissions with commas (,).
     *
     * This parameter is required.
     * @example Select,Describe
     *
     * @var string
     */
    public $actions;

    /**
     * @description The name of the MaxCompute project to which the table belongs. You can log on to the DataWorks console and go to the Workspace Management page to obtain the MaxCompute project name.
     *
     * This parameter is required.
     * @example aMaxcomputeProjectName
     *
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @description The ID of the Alibaba Cloud account from which you want to revoke permissions. You can log on to the DataWorks console and go to the Security Settings page to obtain the ID.
     *
     * You must specify either this parameter or RevokeUserName. If you specify both this parameter and RevokeUserName, the value of this parameter prevails.
     * @example 267842600408993176
     *
     * @var string
     */
    public $revokeUserId;

    /**
     * @description The Alibaba Cloud account from which you want to revoke permissions. Specify this parameter in the format that is the same as the format of the account used to access the MaxCompute project.
     *
     *   If you want to revoke permissions from an Alibaba Cloud account, specify this parameter in the ALIYUN$+Alibaba Cloud account format.
     *   If you want to revoke permissions from a Resource Access Management (RAM) user, specify this parameter in the RAM$+RAM user format.
     *
     * You must specify either this parameter or RevokeUserId. If you specify both this parameter and RevokeUserId, the value of RevokeUserId prevails.
     * @example RAM$dataworks_3h1_1:stsramuser
     *
     * @var string
     */
    public $revokeUserName;

    /**
     * @description The name of the MaxCompute table. You can call the [SearchMetaTables](https://help.aliyun.com/document_detail/173919.html) operation to query the table name.
     *
     * This parameter is required.
     * @example aTableName
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the DataWorks workspace with which the MaxCompute project is associated. You can log on to the DataWorks console and go to the Workspace Management page to obtain the ID.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'actions'               => 'Actions',
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'revokeUserId'          => 'RevokeUserId',
        'revokeUserName'        => 'RevokeUserName',
        'tableName'             => 'TableName',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
        }
        if (null !== $this->maxComputeProjectName) {
            $res['MaxComputeProjectName'] = $this->maxComputeProjectName;
        }
        if (null !== $this->revokeUserId) {
            $res['RevokeUserId'] = $this->revokeUserId;
        }
        if (null !== $this->revokeUserName) {
            $res['RevokeUserName'] = $this->revokeUserName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeTablePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            $model->actions = $map['Actions'];
        }
        if (isset($map['MaxComputeProjectName'])) {
            $model->maxComputeProjectName = $map['MaxComputeProjectName'];
        }
        if (isset($map['RevokeUserId'])) {
            $model->revokeUserId = $map['RevokeUserId'];
        }
        if (isset($map['RevokeUserName'])) {
            $model->revokeUserName = $map['RevokeUserName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
