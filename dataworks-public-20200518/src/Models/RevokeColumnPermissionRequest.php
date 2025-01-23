<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class RevokeColumnPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $columns;
    /**
     * @var string
     */
    public $maxComputeProjectName;
    /**
     * @var string
     */
    public $revokeUserId;
    /**
     * @var string
     */
    public $revokeUserName;
    /**
     * @var string
     */
    public $tableName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
