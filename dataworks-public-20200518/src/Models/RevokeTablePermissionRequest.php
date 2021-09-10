<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RevokeTablePermissionRequest extends Model
{
    /**
     * @var int
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $actions;

    /**
     * @var string
     */
    public $revokeUserName;

    /**
     * @var string
     */
    public $revokeUserId;
    protected $_name = [
        'workspaceId'           => 'WorkspaceId',
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'tableName'             => 'TableName',
        'actions'               => 'Actions',
        'revokeUserName'        => 'RevokeUserName',
        'revokeUserId'          => 'RevokeUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->maxComputeProjectName) {
            $res['MaxComputeProjectName'] = $this->maxComputeProjectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
        }
        if (null !== $this->revokeUserName) {
            $res['RevokeUserName'] = $this->revokeUserName;
        }
        if (null !== $this->revokeUserId) {
            $res['RevokeUserId'] = $this->revokeUserId;
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['MaxComputeProjectName'])) {
            $model->maxComputeProjectName = $map['MaxComputeProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Actions'])) {
            $model->actions = $map['Actions'];
        }
        if (isset($map['RevokeUserName'])) {
            $model->revokeUserName = $map['RevokeUserName'];
        }
        if (isset($map['RevokeUserId'])) {
            $model->revokeUserId = $map['RevokeUserId'];
        }

        return $model;
    }
}
