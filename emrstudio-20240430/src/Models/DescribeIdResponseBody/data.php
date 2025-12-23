<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $inputId;

    /**
     * @var string
     */
    public $inputIdType;

    /**
     * @var string
     */
    public $manualTaskId;

    /**
     * @var string
     */
    public $manualTaskInstanceId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskInstanceId;

    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var string
     */
    public $workflowInstanceId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'inputId' => 'inputId',
        'inputIdType' => 'inputIdType',
        'manualTaskId' => 'manualTaskId',
        'manualTaskInstanceId' => 'manualTaskInstanceId',
        'projectId' => 'projectId',
        'taskId' => 'taskId',
        'taskInstanceId' => 'taskInstanceId',
        'workflowId' => 'workflowId',
        'workflowInstanceId' => 'workflowInstanceId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputId) {
            $res['inputId'] = $this->inputId;
        }

        if (null !== $this->inputIdType) {
            $res['inputIdType'] = $this->inputIdType;
        }

        if (null !== $this->manualTaskId) {
            $res['manualTaskId'] = $this->manualTaskId;
        }

        if (null !== $this->manualTaskInstanceId) {
            $res['manualTaskInstanceId'] = $this->manualTaskInstanceId;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskInstanceId) {
            $res['taskInstanceId'] = $this->taskInstanceId;
        }

        if (null !== $this->workflowId) {
            $res['workflowId'] = $this->workflowId;
        }

        if (null !== $this->workflowInstanceId) {
            $res['workflowInstanceId'] = $this->workflowInstanceId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['inputId'])) {
            $model->inputId = $map['inputId'];
        }

        if (isset($map['inputIdType'])) {
            $model->inputIdType = $map['inputIdType'];
        }

        if (isset($map['manualTaskId'])) {
            $model->manualTaskId = $map['manualTaskId'];
        }

        if (isset($map['manualTaskInstanceId'])) {
            $model->manualTaskInstanceId = $map['manualTaskInstanceId'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskInstanceId'])) {
            $model->taskInstanceId = $map['taskInstanceId'];
        }

        if (isset($map['workflowId'])) {
            $model->workflowId = $map['workflowId'];
        }

        if (isset($map['workflowInstanceId'])) {
            $model->workflowInstanceId = $map['workflowInstanceId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
