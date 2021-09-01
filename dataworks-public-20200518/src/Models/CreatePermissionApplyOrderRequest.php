<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest\applyObject;
use AlibabaCloud\Tea\Model;

class CreatePermissionApplyOrderRequest extends Model
{
    /**
     * @var string
     */
    public $applyUserIds;

    /**
     * @var int
     */
    public $deadline;

    /**
     * @var string
     */
    public $applyReason;

    /**
     * @var string
     */
    public $maxComputeProjectName;

    /**
     * @var int
     */
    public $workspaceId;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var applyObject[]
     */
    public $applyObject;
    protected $_name = [
        'applyUserIds'          => 'ApplyUserIds',
        'deadline'              => 'Deadline',
        'applyReason'           => 'ApplyReason',
        'maxComputeProjectName' => 'MaxComputeProjectName',
        'workspaceId'           => 'WorkspaceId',
        'orderType'             => 'OrderType',
        'engineType'            => 'EngineType',
        'applyObject'           => 'ApplyObject',
    ];

    public function validate()
    {
        Model::validateRequired('applyUserIds', $this->applyUserIds, true);
        Model::validateRequired('applyReason', $this->applyReason, true);
        Model::validateRequired('maxComputeProjectName', $this->maxComputeProjectName, true);
        Model::validateRequired('workspaceId', $this->workspaceId, true);
        Model::validateRequired('applyObject', $this->applyObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyUserIds) {
            $res['ApplyUserIds'] = $this->applyUserIds;
        }
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->applyReason) {
            $res['ApplyReason'] = $this->applyReason;
        }
        if (null !== $this->maxComputeProjectName) {
            $res['MaxComputeProjectName'] = $this->maxComputeProjectName;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->applyObject) {
            $res['ApplyObject'] = [];
            if (null !== $this->applyObject && \is_array($this->applyObject)) {
                $n = 0;
                foreach ($this->applyObject as $item) {
                    $res['ApplyObject'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ApplyUserIds'])) {
            $model->applyUserIds = $map['ApplyUserIds'];
        }
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['ApplyReason'])) {
            $model->applyReason = $map['ApplyReason'];
        }
        if (isset($map['MaxComputeProjectName'])) {
            $model->maxComputeProjectName = $map['MaxComputeProjectName'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['ApplyObject'])) {
            if (!empty($map['ApplyObject'])) {
                $model->applyObject = [];
                $n                  = 0;
                foreach ($map['ApplyObject'] as $item) {
                    $model->applyObject[$n++] = null !== $item ? applyObject::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
