<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\SearchWorkitemResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $fixedUserId;

    /**
     * @var bool
     */
    public $sendWangwang;

    /**
     * @var bool
     */
    public $skipCollab;

    /**
     * @var string
     */
    public $versionList;

    /**
     * @var int
     */
    public $akProjectId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $idPath;

    /**
     * @var bool
     */
    public $ignoreIntegrate;

    /**
     * @var string
     */
    public $attachmentIds;

    /**
     * @var int
     */
    public $commitDate;

    /**
     * @var string
     */
    public $akVersionIds;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $trackers;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var int
     */
    public $solution;

    /**
     * @var string
     */
    public $attachmentList;

    /**
     * @var string
     */
    public $userStaffId;

    /**
     * @var bool
     */
    public $ignoreCheck;

    /**
     * @var string
     */
    public $akPaths;

    /**
     * @var int
     */
    public $verifierId;

    /**
     * @var string
     */
    public $moduleList;

    /**
     * @var bool
     */
    public $attachmented;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var int
     */
    public $seriousLevelId;

    /**
     * @var string
     */
    public $tagIdList;

    /**
     * @var bool
     */
    public $watched;

    /**
     * @var string
     */
    public $assignedTo;

    /**
     * @var string
     */
    public $assignedToIds;

    /**
     * @var int
     */
    public $closedDuration;

    /**
     * @var int
     */
    public $priorityId;

    /**
     * @var bool
     */
    public $recordChangeLog;

    /**
     * @var string
     */
    public $issueRelations;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $verifier;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $relatedUserIds;

    /**
     * @var string
     */
    public $relatedAKProjectGuids;

    /**
     * @var string
     */
    public $relatedAKProjectIds;

    /**
     * @var string
     */
    public $watcherIdList;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $assignedToIdList;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var int
     */
    public $statusStage;

    /**
     * @var string
     */
    public $assignedToStaffId;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $logicalStatus;

    /**
     * @var string
     */
    public $versionIds;

    /**
     * @var int
     */
    public $scope;

    /**
     * @var string
     */
    public $seriousLevel;

    /**
     * @var int
     */
    public $statusId;

    /**
     * @var string
     */
    public $stamp;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $assignedToId;

    /**
     * @var string
     */
    public $trackerIds;

    /**
     * @var int
     */
    public $issueTypeId;

    /**
     * @var string
     */
    public $changeLogList;

    /**
     * @var int
     */
    public $fixedDuration;

    /**
     * @var string
     */
    public $scopeUserIds;

    /**
     * @var int
     */
    public $devDuration;

    /**
     * @var string
     */
    public $linePath;

    /**
     * @var string
     */
    public $blackListNotice;

    /**
     * @var string
     */
    public $projectIds;

    /**
     * @var int
     */
    public $testsuiteId;

    /**
     * @var bool
     */
    public $moduleUpdated;

    /**
     * @var string
     */
    public $commentList;

    /**
     * @var int
     */
    public $sprintId;

    /**
     * @var int
     */
    public $respondDuration;

    /**
     * @var string
     */
    public $moduleIds;

    /**
     * @var string
     */
    public $verifierStaffId;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'fixedUserId'           => 'FixedUserId',
        'sendWangwang'          => 'SendWangwang',
        'skipCollab'            => 'SkipCollab',
        'versionList'           => 'VersionList',
        'akProjectId'           => 'AkProjectId',
        'projectId'             => 'ProjectId',
        'userId'                => 'UserId',
        'versionId'             => 'VersionId',
        'idPath'                => 'IdPath',
        'ignoreIntegrate'       => 'IgnoreIntegrate',
        'attachmentIds'         => 'AttachmentIds',
        'commitDate'            => 'CommitDate',
        'akVersionIds'          => 'AkVersionIds',
        'region'                => 'Region',
        'trackers'              => 'Trackers',
        'subject'               => 'Subject',
        'solution'              => 'Solution',
        'attachmentList'        => 'AttachmentList',
        'userStaffId'           => 'UserStaffId',
        'ignoreCheck'           => 'IgnoreCheck',
        'akPaths'               => 'AkPaths',
        'verifierId'            => 'VerifierId',
        'moduleList'            => 'ModuleList',
        'attachmented'          => 'Attachmented',
        'sourceId'              => 'SourceId',
        'seriousLevelId'        => 'SeriousLevelId',
        'tagIdList'             => 'TagIdList',
        'watched'               => 'Watched',
        'assignedTo'            => 'AssignedTo',
        'assignedToIds'         => 'AssignedToIds',
        'closedDuration'        => 'ClosedDuration',
        'priorityId'            => 'PriorityId',
        'recordChangeLog'       => 'RecordChangeLog',
        'issueRelations'        => 'IssueRelations',
        'updatedAt'             => 'UpdatedAt',
        'templateId'            => 'TemplateId',
        'verifier'              => 'Verifier',
        'status'                => 'Status',
        'relatedUserIds'        => 'RelatedUserIds',
        'relatedAKProjectGuids' => 'RelatedAKProjectGuids',
        'relatedAKProjectIds'   => 'RelatedAKProjectIds',
        'watcherIdList'         => 'WatcherIdList',
        'createdAt'             => 'CreatedAt',
        'assignedToIdList'      => 'AssignedToIdList',
        'priority'              => 'Priority',
        'statusStage'           => 'StatusStage',
        'assignedToStaffId'     => 'AssignedToStaffId',
        'parentId'              => 'ParentId',
        'logicalStatus'         => 'LogicalStatus',
        'versionIds'            => 'VersionIds',
        'scope'                 => 'Scope',
        'seriousLevel'          => 'SeriousLevel',
        'statusId'              => 'StatusId',
        'stamp'                 => 'Stamp',
        'user'                  => 'User',
        'source'                => 'Source',
        'assignedToId'          => 'AssignedToId',
        'trackerIds'            => 'TrackerIds',
        'issueTypeId'           => 'IssueTypeId',
        'changeLogList'         => 'ChangeLogList',
        'fixedDuration'         => 'FixedDuration',
        'scopeUserIds'          => 'ScopeUserIds',
        'devDuration'           => 'DevDuration',
        'linePath'              => 'LinePath',
        'blackListNotice'       => 'BlackListNotice',
        'projectIds'            => 'ProjectIds',
        'testsuiteId'           => 'TestsuiteId',
        'moduleUpdated'         => 'ModuleUpdated',
        'commentList'           => 'CommentList',
        'sprintId'              => 'SprintId',
        'respondDuration'       => 'RespondDuration',
        'moduleIds'             => 'ModuleIds',
        'verifierStaffId'       => 'VerifierStaffId',
        'id'                    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fixedUserId) {
            $res['FixedUserId'] = $this->fixedUserId;
        }
        if (null !== $this->sendWangwang) {
            $res['SendWangwang'] = $this->sendWangwang;
        }
        if (null !== $this->skipCollab) {
            $res['SkipCollab'] = $this->skipCollab;
        }
        if (null !== $this->versionList) {
            $res['VersionList'] = $this->versionList;
        }
        if (null !== $this->akProjectId) {
            $res['AkProjectId'] = $this->akProjectId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->idPath) {
            $res['IdPath'] = $this->idPath;
        }
        if (null !== $this->ignoreIntegrate) {
            $res['IgnoreIntegrate'] = $this->ignoreIntegrate;
        }
        if (null !== $this->attachmentIds) {
            $res['AttachmentIds'] = $this->attachmentIds;
        }
        if (null !== $this->commitDate) {
            $res['CommitDate'] = $this->commitDate;
        }
        if (null !== $this->akVersionIds) {
            $res['AkVersionIds'] = $this->akVersionIds;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->trackers) {
            $res['Trackers'] = $this->trackers;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->attachmentList) {
            $res['AttachmentList'] = $this->attachmentList;
        }
        if (null !== $this->userStaffId) {
            $res['UserStaffId'] = $this->userStaffId;
        }
        if (null !== $this->ignoreCheck) {
            $res['IgnoreCheck'] = $this->ignoreCheck;
        }
        if (null !== $this->akPaths) {
            $res['AkPaths'] = $this->akPaths;
        }
        if (null !== $this->verifierId) {
            $res['VerifierId'] = $this->verifierId;
        }
        if (null !== $this->moduleList) {
            $res['ModuleList'] = $this->moduleList;
        }
        if (null !== $this->attachmented) {
            $res['Attachmented'] = $this->attachmented;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->seriousLevelId) {
            $res['SeriousLevelId'] = $this->seriousLevelId;
        }
        if (null !== $this->tagIdList) {
            $res['TagIdList'] = $this->tagIdList;
        }
        if (null !== $this->watched) {
            $res['Watched'] = $this->watched;
        }
        if (null !== $this->assignedTo) {
            $res['AssignedTo'] = $this->assignedTo;
        }
        if (null !== $this->assignedToIds) {
            $res['AssignedToIds'] = $this->assignedToIds;
        }
        if (null !== $this->closedDuration) {
            $res['ClosedDuration'] = $this->closedDuration;
        }
        if (null !== $this->priorityId) {
            $res['PriorityId'] = $this->priorityId;
        }
        if (null !== $this->recordChangeLog) {
            $res['RecordChangeLog'] = $this->recordChangeLog;
        }
        if (null !== $this->issueRelations) {
            $res['IssueRelations'] = $this->issueRelations;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->verifier) {
            $res['Verifier'] = $this->verifier;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->relatedUserIds) {
            $res['RelatedUserIds'] = $this->relatedUserIds;
        }
        if (null !== $this->relatedAKProjectGuids) {
            $res['RelatedAKProjectGuids'] = $this->relatedAKProjectGuids;
        }
        if (null !== $this->relatedAKProjectIds) {
            $res['RelatedAKProjectIds'] = $this->relatedAKProjectIds;
        }
        if (null !== $this->watcherIdList) {
            $res['WatcherIdList'] = $this->watcherIdList;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->assignedToIdList) {
            $res['AssignedToIdList'] = $this->assignedToIdList;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->statusStage) {
            $res['StatusStage'] = $this->statusStage;
        }
        if (null !== $this->assignedToStaffId) {
            $res['AssignedToStaffId'] = $this->assignedToStaffId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->logicalStatus) {
            $res['LogicalStatus'] = $this->logicalStatus;
        }
        if (null !== $this->versionIds) {
            $res['VersionIds'] = $this->versionIds;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->seriousLevel) {
            $res['SeriousLevel'] = $this->seriousLevel;
        }
        if (null !== $this->statusId) {
            $res['StatusId'] = $this->statusId;
        }
        if (null !== $this->stamp) {
            $res['Stamp'] = $this->stamp;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->assignedToId) {
            $res['AssignedToId'] = $this->assignedToId;
        }
        if (null !== $this->trackerIds) {
            $res['TrackerIds'] = $this->trackerIds;
        }
        if (null !== $this->issueTypeId) {
            $res['IssueTypeId'] = $this->issueTypeId;
        }
        if (null !== $this->changeLogList) {
            $res['ChangeLogList'] = $this->changeLogList;
        }
        if (null !== $this->fixedDuration) {
            $res['FixedDuration'] = $this->fixedDuration;
        }
        if (null !== $this->scopeUserIds) {
            $res['ScopeUserIds'] = $this->scopeUserIds;
        }
        if (null !== $this->devDuration) {
            $res['DevDuration'] = $this->devDuration;
        }
        if (null !== $this->linePath) {
            $res['LinePath'] = $this->linePath;
        }
        if (null !== $this->blackListNotice) {
            $res['BlackListNotice'] = $this->blackListNotice;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }
        if (null !== $this->testsuiteId) {
            $res['TestsuiteId'] = $this->testsuiteId;
        }
        if (null !== $this->moduleUpdated) {
            $res['ModuleUpdated'] = $this->moduleUpdated;
        }
        if (null !== $this->commentList) {
            $res['CommentList'] = $this->commentList;
        }
        if (null !== $this->sprintId) {
            $res['SprintId'] = $this->sprintId;
        }
        if (null !== $this->respondDuration) {
            $res['RespondDuration'] = $this->respondDuration;
        }
        if (null !== $this->moduleIds) {
            $res['ModuleIds'] = $this->moduleIds;
        }
        if (null !== $this->verifierStaffId) {
            $res['VerifierStaffId'] = $this->verifierStaffId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FixedUserId'])) {
            $model->fixedUserId = $map['FixedUserId'];
        }
        if (isset($map['SendWangwang'])) {
            $model->sendWangwang = $map['SendWangwang'];
        }
        if (isset($map['SkipCollab'])) {
            $model->skipCollab = $map['SkipCollab'];
        }
        if (isset($map['VersionList'])) {
            $model->versionList = $map['VersionList'];
        }
        if (isset($map['AkProjectId'])) {
            $model->akProjectId = $map['AkProjectId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['IdPath'])) {
            $model->idPath = $map['IdPath'];
        }
        if (isset($map['IgnoreIntegrate'])) {
            $model->ignoreIntegrate = $map['IgnoreIntegrate'];
        }
        if (isset($map['AttachmentIds'])) {
            $model->attachmentIds = $map['AttachmentIds'];
        }
        if (isset($map['CommitDate'])) {
            $model->commitDate = $map['CommitDate'];
        }
        if (isset($map['AkVersionIds'])) {
            $model->akVersionIds = $map['AkVersionIds'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Trackers'])) {
            $model->trackers = $map['Trackers'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['AttachmentList'])) {
            $model->attachmentList = $map['AttachmentList'];
        }
        if (isset($map['UserStaffId'])) {
            $model->userStaffId = $map['UserStaffId'];
        }
        if (isset($map['IgnoreCheck'])) {
            $model->ignoreCheck = $map['IgnoreCheck'];
        }
        if (isset($map['AkPaths'])) {
            $model->akPaths = $map['AkPaths'];
        }
        if (isset($map['VerifierId'])) {
            $model->verifierId = $map['VerifierId'];
        }
        if (isset($map['ModuleList'])) {
            $model->moduleList = $map['ModuleList'];
        }
        if (isset($map['Attachmented'])) {
            $model->attachmented = $map['Attachmented'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SeriousLevelId'])) {
            $model->seriousLevelId = $map['SeriousLevelId'];
        }
        if (isset($map['TagIdList'])) {
            $model->tagIdList = $map['TagIdList'];
        }
        if (isset($map['Watched'])) {
            $model->watched = $map['Watched'];
        }
        if (isset($map['AssignedTo'])) {
            $model->assignedTo = $map['AssignedTo'];
        }
        if (isset($map['AssignedToIds'])) {
            $model->assignedToIds = $map['AssignedToIds'];
        }
        if (isset($map['ClosedDuration'])) {
            $model->closedDuration = $map['ClosedDuration'];
        }
        if (isset($map['PriorityId'])) {
            $model->priorityId = $map['PriorityId'];
        }
        if (isset($map['RecordChangeLog'])) {
            $model->recordChangeLog = $map['RecordChangeLog'];
        }
        if (isset($map['IssueRelations'])) {
            $model->issueRelations = $map['IssueRelations'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Verifier'])) {
            $model->verifier = $map['Verifier'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RelatedUserIds'])) {
            $model->relatedUserIds = $map['RelatedUserIds'];
        }
        if (isset($map['RelatedAKProjectGuids'])) {
            $model->relatedAKProjectGuids = $map['RelatedAKProjectGuids'];
        }
        if (isset($map['RelatedAKProjectIds'])) {
            $model->relatedAKProjectIds = $map['RelatedAKProjectIds'];
        }
        if (isset($map['WatcherIdList'])) {
            $model->watcherIdList = $map['WatcherIdList'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['AssignedToIdList'])) {
            $model->assignedToIdList = $map['AssignedToIdList'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['StatusStage'])) {
            $model->statusStage = $map['StatusStage'];
        }
        if (isset($map['AssignedToStaffId'])) {
            $model->assignedToStaffId = $map['AssignedToStaffId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['LogicalStatus'])) {
            $model->logicalStatus = $map['LogicalStatus'];
        }
        if (isset($map['VersionIds'])) {
            $model->versionIds = $map['VersionIds'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SeriousLevel'])) {
            $model->seriousLevel = $map['SeriousLevel'];
        }
        if (isset($map['StatusId'])) {
            $model->statusId = $map['StatusId'];
        }
        if (isset($map['Stamp'])) {
            $model->stamp = $map['Stamp'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['AssignedToId'])) {
            $model->assignedToId = $map['AssignedToId'];
        }
        if (isset($map['TrackerIds'])) {
            $model->trackerIds = $map['TrackerIds'];
        }
        if (isset($map['IssueTypeId'])) {
            $model->issueTypeId = $map['IssueTypeId'];
        }
        if (isset($map['ChangeLogList'])) {
            $model->changeLogList = $map['ChangeLogList'];
        }
        if (isset($map['FixedDuration'])) {
            $model->fixedDuration = $map['FixedDuration'];
        }
        if (isset($map['ScopeUserIds'])) {
            $model->scopeUserIds = $map['ScopeUserIds'];
        }
        if (isset($map['DevDuration'])) {
            $model->devDuration = $map['DevDuration'];
        }
        if (isset($map['LinePath'])) {
            $model->linePath = $map['LinePath'];
        }
        if (isset($map['BlackListNotice'])) {
            $model->blackListNotice = $map['BlackListNotice'];
        }
        if (isset($map['ProjectIds'])) {
            $model->projectIds = $map['ProjectIds'];
        }
        if (isset($map['TestsuiteId'])) {
            $model->testsuiteId = $map['TestsuiteId'];
        }
        if (isset($map['ModuleUpdated'])) {
            $model->moduleUpdated = $map['ModuleUpdated'];
        }
        if (isset($map['CommentList'])) {
            $model->commentList = $map['CommentList'];
        }
        if (isset($map['SprintId'])) {
            $model->sprintId = $map['SprintId'];
        }
        if (isset($map['RespondDuration'])) {
            $model->respondDuration = $map['RespondDuration'];
        }
        if (isset($map['ModuleIds'])) {
            $model->moduleIds = $map['ModuleIds'];
        }
        if (isset($map['VerifierStaffId'])) {
            $model->verifierStaffId = $map['VerifierStaffId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
