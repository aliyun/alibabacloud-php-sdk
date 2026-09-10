<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetBwmMigrationTaskWriterWorkflowListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cron;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $submitDetail;

    /**
     * @var string
     */
    public $submitStatus;

    /**
     * @var string
     */
    public $targetWorkflowId;

    /**
     * @var string
     */
    public $targetWorkflowName;

    /**
     * @var int
     */
    public $taskNodeCount;

    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var string
     */
    public $workflowName;
    protected $_name = [
        'cron' => 'cron',
        'id' => 'id',
        'submitDetail' => 'submitDetail',
        'submitStatus' => 'submitStatus',
        'targetWorkflowId' => 'targetWorkflowId',
        'targetWorkflowName' => 'targetWorkflowName',
        'taskNodeCount' => 'taskNodeCount',
        'workflowId' => 'workflowId',
        'workflowName' => 'workflowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->submitDetail) {
            $res['submitDetail'] = $this->submitDetail;
        }

        if (null !== $this->submitStatus) {
            $res['submitStatus'] = $this->submitStatus;
        }

        if (null !== $this->targetWorkflowId) {
            $res['targetWorkflowId'] = $this->targetWorkflowId;
        }

        if (null !== $this->targetWorkflowName) {
            $res['targetWorkflowName'] = $this->targetWorkflowName;
        }

        if (null !== $this->taskNodeCount) {
            $res['taskNodeCount'] = $this->taskNodeCount;
        }

        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }

        if (null !== $this->workflowName) {
            $res['workflowName'] = $this->workflowName;
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
        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['submitDetail'])) {
            $model->submitDetail = $map['submitDetail'];
        }

        if (isset($map['submitStatus'])) {
            $model->submitStatus = $map['submitStatus'];
        }

        if (isset($map['targetWorkflowId'])) {
            $model->targetWorkflowId = $map['targetWorkflowId'];
        }

        if (isset($map['targetWorkflowName'])) {
            $model->targetWorkflowName = $map['targetWorkflowName'];
        }

        if (isset($map['taskNodeCount'])) {
            $model->taskNodeCount = $map['taskNodeCount'];
        }

        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }

        if (isset($map['workflowName'])) {
            $model->workflowName = $map['workflowName'];
        }

        return $model;
    }
}
