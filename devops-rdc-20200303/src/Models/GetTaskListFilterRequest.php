<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class GetTaskListFilterRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $scenarioFieldConfigId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderCondition;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $tagId;

    /**
     * @var string
     */
    public $dueDateStart;

    /**
     * @var string
     */
    public $dueDateEnd;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $involveMembers;

    /**
     * @var bool
     */
    public $isDone;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageToken;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $taskFlowStatusId;

    /**
     * @var string
     */
    public $sprintId;

    /**
     * @var string
     */
    public $extra;
    protected $_name = [
        'orgId'                 => 'OrgId',
        'projectId'             => 'ProjectId',
        'scenarioFieldConfigId' => 'ScenarioFieldConfigId',
        'name'                  => 'Name',
        'orderCondition'        => 'OrderCondition',
        'order'                 => 'Order',
        'executorId'            => 'ExecutorId',
        'tagId'                 => 'TagId',
        'dueDateStart'          => 'DueDateStart',
        'dueDateEnd'            => 'DueDateEnd',
        'creatorId'             => 'CreatorId',
        'involveMembers'        => 'InvolveMembers',
        'isDone'                => 'IsDone',
        'priority'              => 'Priority',
        'pageSize'              => 'PageSize',
        'pageToken'             => 'PageToken',
        'objectType'            => 'ObjectType',
        'taskFlowStatusId'      => 'TaskFlowStatusId',
        'sprintId'              => 'SprintId',
        'extra'                 => 'Extra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->scenarioFieldConfigId) {
            $res['ScenarioFieldConfigId'] = $this->scenarioFieldConfigId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderCondition) {
            $res['OrderCondition'] = $this->orderCondition;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->dueDateStart) {
            $res['DueDateStart'] = $this->dueDateStart;
        }
        if (null !== $this->dueDateEnd) {
            $res['DueDateEnd'] = $this->dueDateEnd;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->involveMembers) {
            $res['InvolveMembers'] = $this->involveMembers;
        }
        if (null !== $this->isDone) {
            $res['IsDone'] = $this->isDone;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageToken) {
            $res['PageToken'] = $this->pageToken;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->taskFlowStatusId) {
            $res['TaskFlowStatusId'] = $this->taskFlowStatusId;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskListFilterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ScenarioFieldConfigId'])) {
            $model->scenarioFieldConfigId = $map['ScenarioFieldConfigId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderCondition'])) {
            $model->orderCondition = $map['OrderCondition'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['DueDateStart'])) {
            $model->dueDateStart = $map['DueDateStart'];
        }
        if (isset($map['DueDateEnd'])) {
            $model->dueDateEnd = $map['DueDateEnd'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['InvolveMembers'])) {
            $model->involveMembers = $map['InvolveMembers'];
        }
        if (isset($map['IsDone'])) {
            $model->isDone = $map['IsDone'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageToken'])) {
            $model->pageToken = $map['PageToken'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['TaskFlowStatusId'])) {
            $model->taskFlowStatusId = $map['TaskFlowStatusId'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        return $model;
    }
}
