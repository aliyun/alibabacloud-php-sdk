<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class WorkloadInfo extends Model
{
    /**
     * @var string
     */
    public $isScheduled;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var QueueMeta[]
     */
    public $queueMetas;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $workloadCreatedTime;

    /**
     * @var string
     */
    public $workloadId;

    /**
     * @var string
     */
    public $workloadName;

    /**
     * @var string
     */
    public $workloadStatus;

    /**
     * @var string
     */
    public $workloadType;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'isScheduled' => 'IsScheduled',
        'priority' => 'Priority',
        'queueMetas' => 'QueueMetas',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'workloadCreatedTime' => 'WorkloadCreatedTime',
        'workloadId' => 'WorkloadId',
        'workloadName' => 'WorkloadName',
        'workloadStatus' => 'WorkloadStatus',
        'workloadType' => 'WorkloadType',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        if (\is_array($this->queueMetas)) {
            Model::validateArray($this->queueMetas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isScheduled) {
            $res['IsScheduled'] = $this->isScheduled;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->queueMetas) {
            if (\is_array($this->queueMetas)) {
                $res['QueueMetas'] = [];
                $n1 = 0;
                foreach ($this->queueMetas as $item1) {
                    $res['QueueMetas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->workloadCreatedTime) {
            $res['WorkloadCreatedTime'] = $this->workloadCreatedTime;
        }

        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }

        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }

        if (null !== $this->workloadStatus) {
            $res['WorkloadStatus'] = $this->workloadStatus;
        }

        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
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
        if (isset($map['IsScheduled'])) {
            $model->isScheduled = $map['IsScheduled'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['QueueMetas'])) {
            if (!empty($map['QueueMetas'])) {
                $model->queueMetas = [];
                $n1 = 0;
                foreach ($map['QueueMetas'] as $item1) {
                    $model->queueMetas[$n1] = QueueMeta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['WorkloadCreatedTime'])) {
            $model->workloadCreatedTime = $map['WorkloadCreatedTime'];
        }

        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }

        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        if (isset($map['WorkloadStatus'])) {
            $model->workloadStatus = $map['WorkloadStatus'];
        }

        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
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
