<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskDetailRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var string
     */
    public $taskFlowStatusId;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $sprintId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $workTimes;

    /**
     * @var string
     */
    public $customFieldId;

    /**
     * @var string
     */
    public $customFieldValues;

    /**
     * @var string
     */
    public $storyPoint;

    /**
     * @var string
     */
    public $tagIds;

    /**
     * @var string
     */
    public $delInvolvers;

    /**
     * @var string
     */
    public $addInvolvers;
    protected $_name = [
        'orgId'             => 'OrgId',
        'content'           => 'Content',
        'projectId'         => 'ProjectId',
        'executorId'        => 'ExecutorId',
        'startDate'         => 'StartDate',
        'dueDate'           => 'DueDate',
        'taskFlowStatusId'  => 'TaskFlowStatusId',
        'note'              => 'Note',
        'priority'          => 'Priority',
        'sprintId'          => 'SprintId',
        'taskId'            => 'TaskId',
        'workTimes'         => 'WorkTimes',
        'customFieldId'     => 'CustomFieldId',
        'customFieldValues' => 'CustomFieldValues',
        'storyPoint'        => 'StoryPoint',
        'tagIds'            => 'TagIds',
        'delInvolvers'      => 'DelInvolvers',
        'addInvolvers'      => 'AddInvolvers',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->dueDate) {
            $res['DueDate'] = $this->dueDate;
        }
        if (null !== $this->taskFlowStatusId) {
            $res['TaskFlowStatusId'] = $this->taskFlowStatusId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->workTimes) {
            $res['WorkTimes'] = $this->workTimes;
        }
        if (null !== $this->customFieldId) {
            $res['CustomFieldId'] = $this->customFieldId;
        }
        if (null !== $this->customFieldValues) {
            $res['CustomFieldValues'] = $this->customFieldValues;
        }
        if (null !== $this->storyPoint) {
            $res['StoryPoint'] = $this->storyPoint;
        }
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }
        if (null !== $this->delInvolvers) {
            $res['DelInvolvers'] = $this->delInvolvers;
        }
        if (null !== $this->addInvolvers) {
            $res['AddInvolvers'] = $this->addInvolvers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['DueDate'])) {
            $model->dueDate = $map['DueDate'];
        }
        if (isset($map['TaskFlowStatusId'])) {
            $model->taskFlowStatusId = $map['TaskFlowStatusId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WorkTimes'])) {
            $model->workTimes = $map['WorkTimes'];
        }
        if (isset($map['CustomFieldId'])) {
            $model->customFieldId = $map['CustomFieldId'];
        }
        if (isset($map['CustomFieldValues'])) {
            $model->customFieldValues = $map['CustomFieldValues'];
        }
        if (isset($map['StoryPoint'])) {
            $model->storyPoint = $map['StoryPoint'];
        }
        if (isset($map['TagIds'])) {
            $model->tagIds = $map['TagIds'];
        }
        if (isset($map['DelInvolvers'])) {
            $model->delInvolvers = $map['DelInvolvers'];
        }
        if (isset($map['AddInvolvers'])) {
            $model->addInvolvers = $map['AddInvolvers'];
        }

        return $model;
    }
}
