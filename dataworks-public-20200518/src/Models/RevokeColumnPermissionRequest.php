<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RevokeColumnPermissionRequest extends Model
{
    /**
     * @example id,name
     *
     * @var string
     */
    public $columns;

    /**
     * @example aMaxcomputeProjectName
     *
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @example 267842600408993176
     *
     * @var string
     */
    public $revokeUserId;

    /**
     * @example RAM$dataworks_3h1_1:stsramuser
     *
     * @var string
     */
    public $revokeUserName;

    /**
     * @example aTableName
     *
     * @var string
     */
    public $tableName;

    /**
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
