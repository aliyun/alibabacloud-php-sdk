<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemStatusResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $assignedToId;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var int
     */
    public $expectedWorkTime;

    /**
     * @var int
     */
    public $gmtClosed;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtDue;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $gmtStart;

    /**
     * @var int
     */
    public $gmtTodo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $isArchived;

    /**
     * @var string
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $isDone;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $participantIds;

    /**
     * @var int
     */
    public $phase;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sprintId;

    /**
     * @var int
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusId;

    /**
     * @var float
     */
    public $storyPoint;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $versions;

    /**
     * @var int
     */
    public $workTime;

    /**
     * @var string
     */
    public $workitemId;
    protected $_name = [
        'assignedToId' => 'assignedToId',
        'creatorId' => 'creatorId',
        'expectedWorkTime' => 'expectedWorkTime',
        'gmtClosed' => 'gmtClosed',
        'gmtCreate' => 'gmtCreate',
        'gmtDue' => 'gmtDue',
        'gmtModified' => 'gmtModified',
        'gmtStart' => 'gmtStart',
        'gmtTodo' => 'gmtTodo',
        'id' => 'id',
        'isArchived' => 'isArchived',
        'isDeleted' => 'isDeleted',
        'isDone' => 'isDone',
        'organizationId' => 'organizationId',
        'parentId' => 'parentId',
        'participantIds' => 'participantIds',
        'phase' => 'phase',
        'priority' => 'priority',
        'productId' => 'productId',
        'projectId' => 'projectId',
        'serialNumber' => 'serialNumber',
        'source' => 'source',
        'sprintId' => 'sprintId',
        'stage' => 'stage',
        'status' => 'status',
        'statusId' => 'statusId',
        'storyPoint' => 'storyPoint',
        'subType' => 'subType',
        'subject' => 'subject',
        'type' => 'type',
        'versionId' => 'versionId',
        'versions' => 'versions',
        'workTime' => 'workTime',
        'workitemId' => 'workitemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedToId) {
            $res['assignedToId'] = $this->assignedToId;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->expectedWorkTime) {
            $res['expectedWorkTime'] = $this->expectedWorkTime;
        }

        if (null !== $this->gmtClosed) {
            $res['gmtClosed'] = $this->gmtClosed;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtDue) {
            $res['gmtDue'] = $this->gmtDue;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }

        if (null !== $this->gmtTodo) {
            $res['gmtTodo'] = $this->gmtTodo;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isArchived) {
            $res['isArchived'] = $this->isArchived;
        }

        if (null !== $this->isDeleted) {
            $res['isDeleted'] = $this->isDeleted;
        }

        if (null !== $this->isDone) {
            $res['isDone'] = $this->isDone;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->participantIds) {
            $res['participantIds'] = $this->participantIds;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->serialNumber) {
            $res['serialNumber'] = $this->serialNumber;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sprintId) {
            $res['sprintId'] = $this->sprintId;
        }

        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusId) {
            $res['statusId'] = $this->statusId;
        }

        if (null !== $this->storyPoint) {
            $res['storyPoint'] = $this->storyPoint;
        }

        if (null !== $this->subType) {
            $res['subType'] = $this->subType;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        if (null !== $this->versions) {
            $res['versions'] = $this->versions;
        }

        if (null !== $this->workTime) {
            $res['workTime'] = $this->workTime;
        }

        if (null !== $this->workitemId) {
            $res['workitemId'] = $this->workitemId;
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
        if (isset($map['assignedToId'])) {
            $model->assignedToId = $map['assignedToId'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['expectedWorkTime'])) {
            $model->expectedWorkTime = $map['expectedWorkTime'];
        }

        if (isset($map['gmtClosed'])) {
            $model->gmtClosed = $map['gmtClosed'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtDue'])) {
            $model->gmtDue = $map['gmtDue'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }

        if (isset($map['gmtTodo'])) {
            $model->gmtTodo = $map['gmtTodo'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isArchived'])) {
            $model->isArchived = $map['isArchived'];
        }

        if (isset($map['isDeleted'])) {
            $model->isDeleted = $map['isDeleted'];
        }

        if (isset($map['isDone'])) {
            $model->isDone = $map['isDone'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['participantIds'])) {
            $model->participantIds = $map['participantIds'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['serialNumber'])) {
            $model->serialNumber = $map['serialNumber'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sprintId'])) {
            $model->sprintId = $map['sprintId'];
        }

        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusId'])) {
            $model->statusId = $map['statusId'];
        }

        if (isset($map['storyPoint'])) {
            $model->storyPoint = $map['storyPoint'];
        }

        if (isset($map['subType'])) {
            $model->subType = $map['subType'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        if (isset($map['versions'])) {
            $model->versions = $map['versions'];
        }

        if (isset($map['workTime'])) {
            $model->workTime = $map['workTime'];
        }

        if (isset($map['workitemId'])) {
            $model->workitemId = $map['workitemId'];
        }

        return $model;
    }
}
