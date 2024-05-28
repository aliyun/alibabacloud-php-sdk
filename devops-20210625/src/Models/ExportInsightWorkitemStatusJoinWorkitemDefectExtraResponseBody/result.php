<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightWorkitemStatusJoinWorkitemDefectExtraResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 65e836b981d758be7a25xxxx
     *
     * @var string
     */
    public $assignedToId;

    /**
     * @example 65e836b981d758be7a25xxxx
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example 10
     *
     * @var int
     */
    public $expectedWorkTime;

    /**
     * @example 123
     *
     * @var int
     */
    public $extraId;

    /**
     * @example N
     *
     * @var string
     */
    public $extraIsDeleted;

    /**
     * @example 10
     *
     * @var int
     */
    public $foundPhase;

    /**
     * @example 33166339200000
     *
     * @var int
     */
    public $gmtClosed;

    /**
     * @example 1713430241000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 33166339200000
     *
     * @var int
     */
    public $gmtDue;

    /**
     * @var string
     */
    public $gmtFixed;

    /**
     * @example 1714755985000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 33166339200000
     *
     * @var int
     */
    public $gmtStart;

    /**
     * @example 33166339200000
     *
     * @var int
     */
    public $gmtTodo;

    /**
     * @example 701615370
     *
     * @var int
     */
    public $id;

    /**
     * @example N
     *
     * @var string
     */
    public $isArchived;

    /**
     * @example N
     *
     * @var string
     */
    public $isDeleted;

    /**
     * @example Y
     *
     * @var string
     */
    public $isDone;

    /**
     * @var string
     */
    public $isStupid;

    /**
     * @example 61db9af2148974246bexxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example a80a203a9078a7a1b1f2c6xxxx
     *
     * @var string
     */
    public $parentId;

    /**
     * @example 6135b21fb383ef39551cf02e,63466a385dc8531eebd764e9
     *
     * @var string
     */
    public $participantIds;

    /**
     * @example 10
     *
     * @var int
     */
    public $phase;

    /**
     * @example 2
     *
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $productId;

    /**
     * @example 6732a29d846bf998dc09e7xxxx
     *
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $reopenNum;

    /**
     * @var int
     */
    public $seriousLevel;

    /**
     * @var string
     */
    public $solution;

    /**
     * @example projex
     *
     * @var string
     */
    public $source;

    /**
     * @example 731c83a40bbf3c2f080e07xxxx
     *
     * @var string
     */
    public $sprintId;

    /**
     * @example 10
     *
     * @var int
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @example 100005
     *
     * @var string
     */
    public $statusId;

    /**
     * @example 10.0
     *
     * @var float
     */
    public $storyPoint;

    /**
     * @example 9uy29901re573f561d69xxxx
     *
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $subject;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @example 65e836b981d758be7a25xxxx
     *
     * @var string
     */
    public $verifierId;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @example {6a8cdda167415bea1506c7262c}
     *
     * @var string
     */
    public $versions;

    /**
     * @example 10
     *
     * @var int
     */
    public $workTime;

    /**
     * @example 636f661a612a945bbcdb4cxxxx
     *
     * @var string
     */
    public $workitemId;
    protected $_name = [
        'assignedToId'     => 'assignedToId',
        'creatorId'        => 'creatorId',
        'expectedWorkTime' => 'expectedWorkTime',
        'extraId'          => 'extraId',
        'extraIsDeleted'   => 'extraIsDeleted',
        'foundPhase'       => 'foundPhase',
        'gmtClosed'        => 'gmtClosed',
        'gmtCreate'        => 'gmtCreate',
        'gmtDue'           => 'gmtDue',
        'gmtFixed'         => 'gmtFixed',
        'gmtModified'      => 'gmtModified',
        'gmtStart'         => 'gmtStart',
        'gmtTodo'          => 'gmtTodo',
        'id'               => 'id',
        'isArchived'       => 'isArchived',
        'isDeleted'        => 'isDeleted',
        'isDone'           => 'isDone',
        'isStupid'         => 'isStupid',
        'organizationId'   => 'organizationId',
        'parentId'         => 'parentId',
        'participantIds'   => 'participantIds',
        'phase'            => 'phase',
        'priority'         => 'priority',
        'productId'        => 'productId',
        'projectId'        => 'projectId',
        'reopenNum'        => 'reopenNum',
        'seriousLevel'     => 'seriousLevel',
        'solution'         => 'solution',
        'source'           => 'source',
        'sprintId'         => 'sprintId',
        'stage'            => 'stage',
        'status'           => 'status',
        'statusId'         => 'statusId',
        'storyPoint'       => 'storyPoint',
        'subType'          => 'subType',
        'subject'          => 'subject',
        'type'             => 'type',
        'verifierId'       => 'verifierId',
        'versionId'        => 'versionId',
        'versions'         => 'versions',
        'workTime'         => 'workTime',
        'workitemId'       => 'workitemId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->extraId) {
            $res['extraId'] = $this->extraId;
        }
        if (null !== $this->extraIsDeleted) {
            $res['extraIsDeleted'] = $this->extraIsDeleted;
        }
        if (null !== $this->foundPhase) {
            $res['foundPhase'] = $this->foundPhase;
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
        if (null !== $this->gmtFixed) {
            $res['gmtFixed'] = $this->gmtFixed;
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
        if (null !== $this->isStupid) {
            $res['isStupid'] = $this->isStupid;
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
        if (null !== $this->reopenNum) {
            $res['reopenNum'] = $this->reopenNum;
        }
        if (null !== $this->seriousLevel) {
            $res['seriousLevel'] = $this->seriousLevel;
        }
        if (null !== $this->solution) {
            $res['solution'] = $this->solution;
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
        if (null !== $this->verifierId) {
            $res['verifierId'] = $this->verifierId;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
        if (isset($map['extraId'])) {
            $model->extraId = $map['extraId'];
        }
        if (isset($map['extraIsDeleted'])) {
            $model->extraIsDeleted = $map['extraIsDeleted'];
        }
        if (isset($map['foundPhase'])) {
            $model->foundPhase = $map['foundPhase'];
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
        if (isset($map['gmtFixed'])) {
            $model->gmtFixed = $map['gmtFixed'];
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
        if (isset($map['isStupid'])) {
            $model->isStupid = $map['isStupid'];
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
        if (isset($map['reopenNum'])) {
            $model->reopenNum = $map['reopenNum'];
        }
        if (isset($map['seriousLevel'])) {
            $model->seriousLevel = $map['seriousLevel'];
        }
        if (isset($map['solution'])) {
            $model->solution = $map['solution'];
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
        if (isset($map['verifierId'])) {
            $model->verifierId = $map['verifierId'];
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
