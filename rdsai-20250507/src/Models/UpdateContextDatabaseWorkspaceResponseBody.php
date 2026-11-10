<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseWorkspaceResponseBody\capabilities;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateContextDatabaseWorkspaceResponseBody\viewer;

class UpdateContextDatabaseWorkspaceResponseBody extends Model
{
    /**
     * @var capabilities
     */
    public $capabilities;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $consolePermissionMode;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $permissionMode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var viewer
     */
    public $viewer;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'capabilities' => 'Capabilities',
        'clusterId' => 'ClusterId',
        'consolePermissionMode' => 'ConsolePermissionMode',
        'createdAt' => 'CreatedAt',
        'permissionMode' => 'PermissionMode',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'type' => 'Type',
        'viewer' => 'Viewer',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        if (null !== $this->capabilities) {
            $this->capabilities->validate();
        }
        if (null !== $this->viewer) {
            $this->viewer->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            $res['Capabilities'] = null !== $this->capabilities ? $this->capabilities->toArray($noStream) : $this->capabilities;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->consolePermissionMode) {
            $res['ConsolePermissionMode'] = $this->consolePermissionMode;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->permissionMode) {
            $res['PermissionMode'] = $this->permissionMode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->viewer) {
            $res['Viewer'] = null !== $this->viewer ? $this->viewer->toArray($noStream) : $this->viewer;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['Capabilities'])) {
            $model->capabilities = capabilities::fromMap($map['Capabilities']);
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ConsolePermissionMode'])) {
            $model->consolePermissionMode = $map['ConsolePermissionMode'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['PermissionMode'])) {
            $model->permissionMode = $map['PermissionMode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Viewer'])) {
            $model->viewer = viewer::fromMap($map['Viewer']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
