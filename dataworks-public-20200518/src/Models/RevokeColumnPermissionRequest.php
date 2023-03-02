<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RevokeColumnPermissionRequest extends Model
{
    /**
     * @description The fields for which you want to revoke permissions from a user. Separate multiple fields with commas (,).
     *
     * You can revoke the permissions on the fields only in MaxCompute tables.
     * @example id,name
     *
     * @var string
     */
    public $columns;

    /**
     * @description The name of the MaxCompute project to which the destination fields belong. You can log on to the DataWorks console and go to the Workspace Management page to obtain the name of the MaxCompute project that is associated with the workspace.
     *
     * @example aMaxcomputeProjectName
     *
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @description The ID of the Alibaba Cloud account of the user from whom you want to revoke permissions. You can log on to the DataWorks console and go to the Security Settings page to obtain the ID.
     *
     * You must specify either this parameter or RevokeUserName. If you specify both this parameter and RevokeUserName, the value of this parameter prevails.
     * @example 267842600408993176
     *
     * @var string
     */
    public $revokeUserId;

    /**
     * @description The Alibaba Cloud account of the user from whom you want to revoke permissions. Specify this parameter in the format that is the same as the format of the account used to access the MaxCompute project.
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
     * @description The name of the MaxCompute table to which the destination fields belong. You can call the [SearchMetaTables](~~173919~~) operation to query the name.
     *
     * @example aTableName
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the DataWorks workspace with which the MaxCompute project is associated. You can log on to the DataWorks console and go to the Workspace Management page to obtain the ID.
     *
     * @example 12345
     *
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'columns'               => 'Columns',
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
        if (null !== $this->columns) {
            $res['Columns'] = $this->columns;
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
     * @return RevokeColumnPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            $model->columns = $map['Columns'];
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
