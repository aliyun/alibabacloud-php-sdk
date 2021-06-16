<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\badges;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\creator;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\customfields;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\executor;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\involvers;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\reminder;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\scenariofieldconfig;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\stage;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\subtaskCount;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\subtasks;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\taskflowstatus;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\tasklist;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\workTime;
use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var bool
     */
    public $isFavorite;

    /**
     * @var string
     */
    public $organization;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $scenariofieldconfigId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var bool
     */
    public $isTopInProject;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $shareStatus;

    /**
     * @var string
     */
    public $accomplished;

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
     * @var bool
     */
    public $isArchived;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $commentsCount;

    /**
     * @var int
     */
    public $rating;

    /**
     * @var string
     */
    public $recurrence;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $untilDate;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $storyPoint;

    /**
     * @var int
     */
    public $objectlinksCount;

    /**
     * @var string
     */
    public $sprint;

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
    public $sourceId;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $sourceDate;

    /**
     * @var int
     */
    public $likesCount;

    /**
     * @var string
     */
    public $stageId;

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
    public $parent;

    /**
     * @var string
     */
    public $sprintId;

    /**
     * @var int
     */
    public $attachmentsCount;

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
    public $taskId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var customfields[]
     */
    public $customfields;

    /**
     * @var subtasks[]
     */
    public $subtasks;

    /**
     * @var involvers[]
     */
    public $involvers;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string[]
     */
    public $divisions;

    /**
     * @var string[]
     */
    public $ancestors;

    /**
     * @var string[]
     */
    public $involveMembers;

    /**
     * @var string[]
     */
    public $tagIds;

    /**
     * @var string[]
     */
    public $ancestorIds;

    /**
     * @var scenariofieldconfig
     */
    public $scenariofieldconfig;

    /**
     * @var executor
     */
    public $executor;

    /**
     * @var tasklist
     */
    public $tasklist;

    /**
     * @var taskflowstatus
     */
    public $taskflowstatus;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var reminder
     */
    public $reminder;

    /**
     * @var subtaskCount
     */
    public $subtaskCount;

    /**
     * @var workTime
     */
    public $workTime;

    /**
     * @var badges
     */
    public $badges;

    /**
     * @var stage
     */
    public $stage;
    protected $_name = [
        'isFavorite'            => 'IsFavorite',
        'organization'          => 'Organization',
        'executorId'            => 'ExecutorId',
        'scenariofieldconfigId' => 'ScenariofieldconfigId',
        'projectId'             => 'ProjectId',
        'isTopInProject'        => 'IsTopInProject',
        'priority'              => 'Priority',
        'shareStatus'           => 'ShareStatus',
        'accomplished'          => 'Accomplished',
        'taskflowstatusId'      => 'TaskflowstatusId',
        'note'                  => 'Note',
        'updated'               => 'Updated',
        'uniqueId'              => 'UniqueId',
        'isArchived'            => 'IsArchived',
        'content'               => 'Content',
        'commentsCount'         => 'CommentsCount',
        'rating'                => 'Rating',
        'recurrence'            => 'Recurrence',
        'objectType'            => 'ObjectType',
        'progress'              => 'Progress',
        'untilDate'             => 'UntilDate',
        'startDate'             => 'StartDate',
        'storyPoint'            => 'StoryPoint',
        'objectlinksCount'      => 'ObjectlinksCount',
        'sprint'                => 'Sprint',
        'creatorId'             => 'CreatorId',
        'source'                => 'Source',
        'sourceId'              => 'SourceId',
        'organizationId'        => 'OrganizationId',
        'sourceDate'            => 'SourceDate',
        'likesCount'            => 'LikesCount',
        'stageId'               => 'StageId',
        'visible'               => 'Visible',
        'isDone'                => 'IsDone',
        'parent'                => 'Parent',
        'sprintId'              => 'SprintId',
        'attachmentsCount'      => 'AttachmentsCount',
        'dueDate'               => 'DueDate',
        'created'               => 'Created',
        'taskId'                => 'TaskId',
        'id'                    => 'Id',
        'customfields'          => 'Customfields',
        'subtasks'              => 'Subtasks',
        'involvers'             => 'Involvers',
        'labels'                => 'Labels',
        'divisions'             => 'Divisions',
        'ancestors'             => 'Ancestors',
        'involveMembers'        => 'InvolveMembers',
        'tagIds'                => 'TagIds',
        'ancestorIds'           => 'AncestorIds',
        'scenariofieldconfig'   => 'Scenariofieldconfig',
        'executor'              => 'Executor',
        'tasklist'              => 'Tasklist',
        'taskflowstatus'        => 'Taskflowstatus',
        'creator'               => 'Creator',
        'reminder'              => 'Reminder',
        'subtaskCount'          => 'SubtaskCount',
        'workTime'              => 'WorkTime',
        'badges'                => 'Badges',
        'stage'                 => 'Stage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isFavorite) {
            $res['IsFavorite'] = $this->isFavorite;
        }
        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->scenariofieldconfigId) {
            $res['ScenariofieldconfigId'] = $this->scenariofieldconfigId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->isTopInProject) {
            $res['IsTopInProject'] = $this->isTopInProject;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->shareStatus) {
            $res['ShareStatus'] = $this->shareStatus;
        }
        if (null !== $this->accomplished) {
            $res['Accomplished'] = $this->accomplished;
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
        if (null !== $this->isArchived) {
            $res['IsArchived'] = $this->isArchived;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->commentsCount) {
            $res['CommentsCount'] = $this->commentsCount;
        }
        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
        }
        if (null !== $this->recurrence) {
            $res['Recurrence'] = $this->recurrence;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->untilDate) {
            $res['UntilDate'] = $this->untilDate;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->storyPoint) {
            $res['StoryPoint'] = $this->storyPoint;
        }
        if (null !== $this->objectlinksCount) {
            $res['ObjectlinksCount'] = $this->objectlinksCount;
        }
        if (null !== $this->sprint) {
            $res['Sprint'] = $this->sprint;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->sourceDate) {
            $res['SourceDate'] = $this->sourceDate;
        }
        if (null !== $this->likesCount) {
            $res['LikesCount'] = $this->likesCount;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->isDone) {
            $res['IsDone'] = $this->isDone;
        }
        if (null !== $this->parent) {
            $res['Parent'] = $this->parent;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->attachmentsCount) {
            $res['AttachmentsCount'] = $this->attachmentsCount;
        }
        if (null !== $this->dueDate) {
            $res['DueDate'] = $this->dueDate;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->customfields) {
            $res['Customfields'] = [];
            if (null !== $this->customfields && \is_array($this->customfields)) {
                $n = 0;
                foreach ($this->customfields as $item) {
                    $res['Customfields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subtasks) {
            $res['Subtasks'] = [];
            if (null !== $this->subtasks && \is_array($this->subtasks)) {
                $n = 0;
                foreach ($this->subtasks as $item) {
                    $res['Subtasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->involvers) {
            $res['Involvers'] = [];
            if (null !== $this->involvers && \is_array($this->involvers)) {
                $n = 0;
                foreach ($this->involvers as $item) {
                    $res['Involvers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->divisions) {
            $res['Divisions'] = $this->divisions;
        }
        if (null !== $this->ancestors) {
            $res['Ancestors'] = $this->ancestors;
        }
        if (null !== $this->involveMembers) {
            $res['InvolveMembers'] = $this->involveMembers;
        }
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }
        if (null !== $this->ancestorIds) {
            $res['AncestorIds'] = $this->ancestorIds;
        }
        if (null !== $this->scenariofieldconfig) {
            $res['Scenariofieldconfig'] = null !== $this->scenariofieldconfig ? $this->scenariofieldconfig->toMap() : null;
        }
        if (null !== $this->executor) {
            $res['Executor'] = null !== $this->executor ? $this->executor->toMap() : null;
        }
        if (null !== $this->tasklist) {
            $res['Tasklist'] = null !== $this->tasklist ? $this->tasklist->toMap() : null;
        }
        if (null !== $this->taskflowstatus) {
            $res['Taskflowstatus'] = null !== $this->taskflowstatus ? $this->taskflowstatus->toMap() : null;
        }
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->reminder) {
            $res['Reminder'] = null !== $this->reminder ? $this->reminder->toMap() : null;
        }
        if (null !== $this->subtaskCount) {
            $res['SubtaskCount'] = null !== $this->subtaskCount ? $this->subtaskCount->toMap() : null;
        }
        if (null !== $this->workTime) {
            $res['WorkTime'] = null !== $this->workTime ? $this->workTime->toMap() : null;
        }
        if (null !== $this->badges) {
            $res['Badges'] = null !== $this->badges ? $this->badges->toMap() : null;
        }
        if (null !== $this->stage) {
            $res['Stage'] = null !== $this->stage ? $this->stage->toMap() : null;
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
        if (isset($map['IsFavorite'])) {
            $model->isFavorite = $map['IsFavorite'];
        }
        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['ScenariofieldconfigId'])) {
            $model->scenariofieldconfigId = $map['ScenariofieldconfigId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['IsTopInProject'])) {
            $model->isTopInProject = $map['IsTopInProject'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ShareStatus'])) {
            $model->shareStatus = $map['ShareStatus'];
        }
        if (isset($map['Accomplished'])) {
            $model->accomplished = $map['Accomplished'];
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
        if (isset($map['IsArchived'])) {
            $model->isArchived = $map['IsArchived'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CommentsCount'])) {
            $model->commentsCount = $map['CommentsCount'];
        }
        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
        }
        if (isset($map['Recurrence'])) {
            $model->recurrence = $map['Recurrence'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['UntilDate'])) {
            $model->untilDate = $map['UntilDate'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['StoryPoint'])) {
            $model->storyPoint = $map['StoryPoint'];
        }
        if (isset($map['ObjectlinksCount'])) {
            $model->objectlinksCount = $map['ObjectlinksCount'];
        }
        if (isset($map['Sprint'])) {
            $model->sprint = $map['Sprint'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['SourceDate'])) {
            $model->sourceDate = $map['SourceDate'];
        }
        if (isset($map['LikesCount'])) {
            $model->likesCount = $map['LikesCount'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['IsDone'])) {
            $model->isDone = $map['IsDone'];
        }
        if (isset($map['Parent'])) {
            $model->parent = $map['Parent'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['AttachmentsCount'])) {
            $model->attachmentsCount = $map['AttachmentsCount'];
        }
        if (isset($map['DueDate'])) {
            $model->dueDate = $map['DueDate'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Customfields'])) {
            if (!empty($map['Customfields'])) {
                $model->customfields = [];
                $n                   = 0;
                foreach ($map['Customfields'] as $item) {
                    $model->customfields[$n++] = null !== $item ? customfields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Subtasks'])) {
            if (!empty($map['Subtasks'])) {
                $model->subtasks = [];
                $n               = 0;
                foreach ($map['Subtasks'] as $item) {
                    $model->subtasks[$n++] = null !== $item ? subtasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Involvers'])) {
            if (!empty($map['Involvers'])) {
                $model->involvers = [];
                $n                = 0;
                foreach ($map['Involvers'] as $item) {
                    $model->involvers[$n++] = null !== $item ? involvers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }
        if (isset($map['Divisions'])) {
            if (!empty($map['Divisions'])) {
                $model->divisions = $map['Divisions'];
            }
        }
        if (isset($map['Ancestors'])) {
            if (!empty($map['Ancestors'])) {
                $model->ancestors = $map['Ancestors'];
            }
        }
        if (isset($map['InvolveMembers'])) {
            if (!empty($map['InvolveMembers'])) {
                $model->involveMembers = $map['InvolveMembers'];
            }
        }
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }
        if (isset($map['AncestorIds'])) {
            if (!empty($map['AncestorIds'])) {
                $model->ancestorIds = $map['AncestorIds'];
            }
        }
        if (isset($map['Scenariofieldconfig'])) {
            $model->scenariofieldconfig = scenariofieldconfig::fromMap($map['Scenariofieldconfig']);
        }
        if (isset($map['Executor'])) {
            $model->executor = executor::fromMap($map['Executor']);
        }
        if (isset($map['Tasklist'])) {
            $model->tasklist = tasklist::fromMap($map['Tasklist']);
        }
        if (isset($map['Taskflowstatus'])) {
            $model->taskflowstatus = taskflowstatus::fromMap($map['Taskflowstatus']);
        }
        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }
        if (isset($map['Reminder'])) {
            $model->reminder = reminder::fromMap($map['Reminder']);
        }
        if (isset($map['SubtaskCount'])) {
            $model->subtaskCount = subtaskCount::fromMap($map['SubtaskCount']);
        }
        if (isset($map['WorkTime'])) {
            $model->workTime = workTime::fromMap($map['WorkTime']);
        }
        if (isset($map['Badges'])) {
            $model->badges = badges::fromMap($map['Badges']);
        }
        if (isset($map['Stage'])) {
            $model->stage = stage::fromMap($map['Stage']);
        }

        return $model;
    }
}
