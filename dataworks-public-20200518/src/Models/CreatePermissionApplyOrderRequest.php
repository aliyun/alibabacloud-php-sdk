<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest\applyObject;
use AlibabaCloud\Tea\Model;

class CreatePermissionApplyOrderRequest extends Model
{
    /**
     * @description The objects on which you want to request permissions.
     *
     * This parameter is required.
     * @var applyObject[]
     */
    public $applyObject;

    /**
     * @description The reason for your request. The administrator determines whether to approve the request based on the reason.
     *
     * This parameter is required.
     * @example I need to use this table
     *
     * @var string
     */
    public $applyReason;

    /**
     * @description The ID of the Alibaba Cloud account for which you want to request permissions. If you want to request permissions for multiple Alibaba Cloud accounts, separate the IDs of the accounts with commas (,).
     *
     * This parameter is required.
     * @example 267842600408993176,267842600408993177
     *
     * @var string
     */
    public $applyUserIds;

    /**
     * @description The expiration time of the permissions that you request. This value is a UNIX timestamp. The default value is January 1, 2065. If LabelSecurity is disabled for the MaxCompute project in which you want to request permissions on the fields of a table, or the security level of the fields is 0 or is lower than or equal to the security level of the Alibaba Cloud account for which you want to request permissions, you can request only permanent permissions. You can go to the Workspace Management page in the DataWorks console, click MaxCompute Management in the left-side navigation pane, and then check whether column-level access control is enabled. You can go to your DataWorks workspace, view the security level of the fields in Data Map, and then view the security level of the Alibaba Cloud account on the User Management page.
     *
     * @example 1617115071885
     *
     * @var int
     */
    public $deadline;

    /**
     * @description The type of the compute engine in which you want to request permissions on the fields of a table. The parameter value is odps and cannot be changed. This value indicates that you can request permissions only on fields of tables in the MaxCompute compute engine.
     *
     * @example odps
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The name of the MaxCompute project in which you request permissions on the fields of a table.
     *
     * This parameter is required.
     * @example aMaxcomputeProjectName
     *
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @description The type of the permission request order. The parameter value is 1 and cannot be changed. This value indicates ACL-based authorization.
     *
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
     * @description The ID of the DataWorks workspace that is associated with the MaxCompute project in which you want to request permissions on the fields of a table. You can go to the SettingCenter page in the DataWorks console to view the workspace ID.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'applyObject'           => 'ApplyObject',
        'applyReason'           => 'ApplyReason',
        'applyUserIds'          => 'ApplyUserIds',
        'deadline'              => 'Deadline',
        'engineType'            => 'EngineType',
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'orderType'             => 'OrderType',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyObject) {
            $res['ApplyObject'] = [];
            if (null !== $this->applyObject && \is_array($this->applyObject)) {
                $n = 0;
                foreach ($this->applyObject as $item) {
                    $res['ApplyObject'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
        }
        if (null !== $this->applyUserIds) {
            $res['ApplyUserIds'] = $this->applyUserIds;
        }
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->maxComputeProjectName) {
            $res['MaxComputeProjectName'] = $this->maxComputeProjectName;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePermissionApplyOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyObject'])) {
            if (!empty($map['ApplyObject'])) {
                $model->applyObject = [];
                $n                  = 0;
                foreach ($map['ApplyObject'] as $item) {
                    $model->applyObject[$n++] = null !== $item ? applyObject::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ApplyReason'])) {
            $model->applyReason = $map['ApplyReason'];
        }
        if (isset($map['ApplyUserIds'])) {
            $model->applyUserIds = $map['ApplyUserIds'];
        }
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['MaxComputeProjectName'])) {
            $model->maxComputeProjectName = $map['MaxComputeProjectName'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
