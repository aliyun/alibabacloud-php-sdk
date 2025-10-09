<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RerunWorkflowInstancesRequest\filter;

class RerunWorkflowInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var int
     */
    public $endTriggerTime;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var int[]
     */
    public $ids;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $startTriggerTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'bizdate' => 'Bizdate',
        'endTriggerTime' => 'EndTriggerTime',
        'envType' => 'EnvType',
        'filter' => 'Filter',
        'ids' => 'Ids',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'startTriggerTime' => 'StartTriggerTime',
        'status' => 'Status',
        'type' => 'Type',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }

        if (null !== $this->endTriggerTime) {
            $res['EndTriggerTime'] = $this->endTriggerTime;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['Ids'] = [];
                $n1 = 0;
                foreach ($this->ids as $item1) {
                    $res['Ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->startTriggerTime) {
            $res['StartTriggerTime'] = $this->startTriggerTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }

        if (isset($map['EndTriggerTime'])) {
            $model->endTriggerTime = $map['EndTriggerTime'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }

        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = [];
                $n1 = 0;
                foreach ($map['Ids'] as $item1) {
                    $model->ids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['StartTriggerTime'])) {
            $model->startTriggerTime = $map['StartTriggerTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
