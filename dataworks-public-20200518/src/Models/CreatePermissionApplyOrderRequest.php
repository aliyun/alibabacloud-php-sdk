<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreatePermissionApplyOrderRequest\applyObject;

class CreatePermissionApplyOrderRequest extends Model
{
    /**
     * @var applyObject[]
     */
    public $applyObject;
    /**
     * @var string
     */
    public $applyReason;
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
    public $engineType;
    /**
     * @var string
     */
    public $maxComputeProjectName;
    /**
     * @var int
     */
    public $orderType;
    /**
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
        if (\is_array($this->applyObject)) {
            Model::validateArray($this->applyObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyObject) {
            if (\is_array($this->applyObject)) {
                $res['ApplyObject'] = [];
                $n1                 = 0;
                foreach ($this->applyObject as $item1) {
                    $res['ApplyObject'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyObject'])) {
            if (!empty($map['ApplyObject'])) {
                $model->applyObject = [];
                $n1                 = 0;
                foreach ($map['ApplyObject'] as $item1) {
                    $model->applyObject[$n1++] = applyObject::fromMap($item1);
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
