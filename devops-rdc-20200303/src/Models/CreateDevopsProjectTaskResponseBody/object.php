<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\CreateDevopsProjectTaskResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $scenarioFieldConfigId;

    /**
     * @var string
     */
    public $ancestorIds;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $tasklistId;

    /**
     * @var string
     */
    public $taskflowstatusId;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var int
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $rating;

    /**
     * @var int
     */
    public $pos;

    /**
     * @var string
     */
    public $storyPoint;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $visible;

    /**
     * @var bool
     */
    public $isDone;

    /**
     * @var string
     */
    public $sprintId;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'executorId'            => 'ExecutorId',
        'projectId'             => 'ProjectId',
        'priority'              => 'Priority',
        'scenarioFieldConfigId' => 'ScenarioFieldConfigId',
        'ancestorIds'           => 'AncestorIds',
        'taskType'              => 'TaskType',
        'tasklistId'            => 'TasklistId',
        'taskflowstatusId'      => 'TaskflowstatusId',
        'note'                  => 'Note',
        'updated'               => 'Updated',
        'uniqueId'              => 'UniqueId',
        'content'               => 'Content',
        'rating'                => 'Rating',
        'pos'                   => 'Pos',
        'storyPoint'            => 'StoryPoint',
        'startDate'             => 'StartDate',
        'creatorId'             => 'CreatorId',
        'source'                => 'Source',
        'organizationId'        => 'OrganizationId',
        'visible'               => 'Visible',
        'isDone'                => 'IsDone',
        'sprintId'              => 'SprintId',
        'dueDate'               => 'DueDate',
        'created'               => 'Created',
        'id'                    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->scenarioFieldConfigId) {
            $res['ScenarioFieldConfigId'] = $this->scenarioFieldConfigId;
        }
        if (null !== $this->ancestorIds) {
            $res['AncestorIds'] = $this->ancestorIds;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->tasklistId) {
            $res['TasklistId'] = $this->tasklistId;
        }
        if (null !== $this->taskflowstatusId) {
            $res['TaskflowstatusId'] = $this->taskflowstatusId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
        }
        if (null !== $this->pos) {
            $res['Pos'] = $this->pos;
        }
        if (null !== $this->storyPoint) {
            $res['StoryPoint'] = $this->storyPoint;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->isDone) {
            $res['IsDone'] = $this->isDone;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->dueDate) {
            $res['DueDate'] = $this->dueDate;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ScenarioFieldConfigId'])) {
            $model->scenarioFieldConfigId = $map['ScenarioFieldConfigId'];
        }
        if (isset($map['AncestorIds'])) {
            $model->ancestorIds = $map['AncestorIds'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TasklistId'])) {
            $model->tasklistId = $map['TasklistId'];
        }
        if (isset($map['TaskflowstatusId'])) {
            $model->taskflowstatusId = $map['TaskflowstatusId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
        }
        if (isset($map['Pos'])) {
            $model->pos = $map['Pos'];
        }
        if (isset($map['StoryPoint'])) {
            $model->storyPoint = $map['StoryPoint'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['IsDone'])) {
            $model->isDone = $map['IsDone'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['DueDate'])) {
            $model->dueDate = $map['DueDate'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
