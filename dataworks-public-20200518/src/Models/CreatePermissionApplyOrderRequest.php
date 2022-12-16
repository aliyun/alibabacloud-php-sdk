<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest\applyObject;
use AlibabaCloud\Tea\Model;

class CreatePermissionApplyOrderRequest extends Model
{
    /**
     * @var applyObject[]
     */
    public $applyObject;

    /**
     * @example I need to use this table
     *
     * @var string
     */
    public $applyReason;

    /**
     * @example 267842600408993176,267842600408993177
     *
     * @var string
     */
    public $applyUserIds;

    /**
     * @example 1617115071885
     *
     * @var int
     */
    public $deadline;

    /**
     * @example odps
     *
     * @var string
     */
    public $engineType;

    /**
     * @example aMaxcomputeProjectName
     *
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderType;

    /**
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
