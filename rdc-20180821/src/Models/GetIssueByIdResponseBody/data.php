<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models\GetIssueByIdResponseBody;

use AlibabaCloud\SDK\Rdc\V20180821\Models\GetIssueByIdResponseBody\data\cfsList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $skipCollab;

    /**
     * @var bool
     */
    public $sendWangwang;

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
    public $userId;

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
     * @var int
     */
    public $updateStatusAt;

    /**
     * @var string
     */
    public $trackers;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $userStaffId;

    /**
     * @var string
     */
    public $attachmentList;

    /**
     * @var int
     */
    public $verifierId;

    /**
     * @var bool
     */
    public $ignoreCheck;

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
    public $priorityId;

    /**
     * @var bool
     */
    public $recordChangeLog;

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
    public $relatedAKProjectIds;

    /**
     * @var string
     */
    public $relatedAKProjectGuids;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $assignedToIdList;

    /**
     * @var cfsList[]
     */
    public $cfsList;

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
    public $description;

    /**
     * @var string
     */
    public $logicalStatus;

    /**
     * @var string
     */
    public $versionIds;

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
    public $trackerIds;

    /**
     * @var int
     */
    public $assignedToId;

    /**
     * @var string
     */
    public $changeLogList;

    /**
     * @var int
     */
    public $issueTypeId;

    /**
     * @var int
     */
    public $regionId;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $assignedToMaps;

    /**
     * @var string
     */
    public $blackListNotice;

    /**
     * @var bool
     */
    public $moduleUpdated;

    /**
     * @var string
     */
    public $projectIds;

    /**
     * @var string
     */
    public $commentList;

    /**
     * @var string
     */
    public $verifierStaffId;

    /**
     * @var string
     */
    public $moduleIds;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'skipCollab'            => 'SkipCollab',
        'sendWangwang'          => 'SendWangwang',
        'versionList'           => 'VersionList',
        'akProjectId'           => 'AkProjectId',
        'userId'                => 'UserId',
        'idPath'                => 'IdPath',
        'ignoreIntegrate'       => 'IgnoreIntegrate',
        'attachmentIds'         => 'AttachmentIds',
        'commitDate'            => 'CommitDate',
        'updateStatusAt'        => 'UpdateStatusAt',
        'trackers'              => 'Trackers',
        'subject'               => 'Subject',
        'userStaffId'           => 'UserStaffId',
        'attachmentList'        => 'AttachmentList',
        'verifierId'            => 'VerifierId',
        'ignoreCheck'           => 'IgnoreCheck',
        'moduleList'            => 'ModuleList',
        'attachmented'          => 'Attachmented',
        'seriousLevelId'        => 'SeriousLevelId',
        'tagIdList'             => 'TagIdList',
        'watched'               => 'Watched',
        'assignedTo'            => 'AssignedTo',
        'assignedToIds'         => 'AssignedToIds',
        'priorityId'            => 'PriorityId',
        'recordChangeLog'       => 'RecordChangeLog',
        'updatedAt'             => 'UpdatedAt',
        'templateId'            => 'TemplateId',
        'verifier'              => 'Verifier',
        'status'                => 'Status',
        'relatedUserIds'        => 'RelatedUserIds',
        'relatedAKProjectIds'   => 'RelatedAKProjectIds',
        'relatedAKProjectGuids' => 'RelatedAKProjectGuids',
        'createdAt'             => 'CreatedAt',
        'assignedToIdList'      => 'AssignedToIdList',
        'cfsList'               => 'CfsList',
        'priority'              => 'Priority',
        'statusStage'           => 'StatusStage',
        'assignedToStaffId'     => 'AssignedToStaffId',
        'parentId'              => 'ParentId',
        'description'           => 'Description',
        'logicalStatus'         => 'LogicalStatus',
        'versionIds'            => 'VersionIds',
        'seriousLevel'          => 'SeriousLevel',
        'statusId'              => 'StatusId',
        'stamp'                 => 'Stamp',
        'user'                  => 'User',
        'trackerIds'            => 'TrackerIds',
        'assignedToId'          => 'AssignedToId',
        'changeLogList'         => 'ChangeLogList',
        'issueTypeId'           => 'IssueTypeId',
        'regionId'              => 'RegionId',
        'guid'                  => 'Guid',
        'assignedToMaps'        => 'AssignedToMaps',
        'blackListNotice'       => 'BlackListNotice',
        'moduleUpdated'         => 'ModuleUpdated',
        'projectIds'            => 'ProjectIds',
        'commentList'           => 'CommentList',
        'verifierStaffId'       => 'VerifierStaffId',
        'moduleIds'             => 'ModuleIds',
        'id'                    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skipCollab) {
            $res['SkipCollab'] = $this->skipCollab;
        }
        if (null !== $this->sendWangwang) {
            $res['SendWangwang'] = $this->sendWangwang;
        }
        if (null !== $this->versionList) {
            $res['VersionList'] = $this->versionList;
        }
        if (null !== $this->akProjectId) {
            $res['AkProjectId'] = $this->akProjectId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (null !== $this->updateStatusAt) {
            $res['UpdateStatusAt'] = $this->updateStatusAt;
        }
        if (null !== $this->trackers) {
            $res['Trackers'] = $this->trackers;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->userStaffId) {
            $res['UserStaffId'] = $this->userStaffId;
        }
        if (null !== $this->attachmentList) {
            $res['AttachmentList'] = $this->attachmentList;
        }
        if (null !== $this->verifierId) {
            $res['VerifierId'] = $this->verifierId;
        }
        if (null !== $this->ignoreCheck) {
            $res['IgnoreCheck'] = $this->ignoreCheck;
        }
        if (null !== $this->moduleList) {
            $res['ModuleList'] = $this->moduleList;
        }
        if (null !== $this->attachmented) {
            $res['Attachmented'] = $this->attachmented;
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
        if (null !== $this->priorityId) {
            $res['PriorityId'] = $this->priorityId;
        }
        if (null !== $this->recordChangeLog) {
            $res['RecordChangeLog'] = $this->recordChangeLog;
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
        if (null !== $this->relatedAKProjectIds) {
            $res['RelatedAKProjectIds'] = $this->relatedAKProjectIds;
        }
        if (null !== $this->relatedAKProjectGuids) {
            $res['RelatedAKProjectGuids'] = $this->relatedAKProjectGuids;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->assignedToIdList) {
            $res['AssignedToIdList'] = $this->assignedToIdList;
        }
        if (null !== $this->cfsList) {
            $res['CfsList'] = [];
            if (null !== $this->cfsList && \is_array($this->cfsList)) {
                $n = 0;
                foreach ($this->cfsList as $item) {
                    $res['CfsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->logicalStatus) {
            $res['LogicalStatus'] = $this->logicalStatus;
        }
        if (null !== $this->versionIds) {
            $res['VersionIds'] = $this->versionIds;
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
        if (null !== $this->trackerIds) {
            $res['TrackerIds'] = $this->trackerIds;
        }
        if (null !== $this->assignedToId) {
            $res['AssignedToId'] = $this->assignedToId;
        }
        if (null !== $this->changeLogList) {
            $res['ChangeLogList'] = $this->changeLogList;
        }
        if (null !== $this->issueTypeId) {
            $res['IssueTypeId'] = $this->issueTypeId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }
        if (null !== $this->assignedToMaps) {
            $res['AssignedToMaps'] = $this->assignedToMaps;
        }
        if (null !== $this->blackListNotice) {
            $res['BlackListNotice'] = $this->blackListNotice;
        }
        if (null !== $this->moduleUpdated) {
            $res['ModuleUpdated'] = $this->moduleUpdated;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }
        if (null !== $this->commentList) {
            $res['CommentList'] = $this->commentList;
        }
        if (null !== $this->verifierStaffId) {
            $res['VerifierStaffId'] = $this->verifierStaffId;
        }
        if (null !== $this->moduleIds) {
            $res['ModuleIds'] = $this->moduleIds;
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
        if (isset($map['SkipCollab'])) {
            $model->skipCollab = $map['SkipCollab'];
        }
        if (isset($map['SendWangwang'])) {
            $model->sendWangwang = $map['SendWangwang'];
        }
        if (isset($map['VersionList'])) {
            $model->versionList = $map['VersionList'];
        }
        if (isset($map['AkProjectId'])) {
            $model->akProjectId = $map['AkProjectId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
        if (isset($map['UpdateStatusAt'])) {
            $model->updateStatusAt = $map['UpdateStatusAt'];
        }
        if (isset($map['Trackers'])) {
            $model->trackers = $map['Trackers'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['UserStaffId'])) {
            $model->userStaffId = $map['UserStaffId'];
        }
        if (isset($map['AttachmentList'])) {
            $model->attachmentList = $map['AttachmentList'];
        }
        if (isset($map['VerifierId'])) {
            $model->verifierId = $map['VerifierId'];
        }
        if (isset($map['IgnoreCheck'])) {
            $model->ignoreCheck = $map['IgnoreCheck'];
        }
        if (isset($map['ModuleList'])) {
            $model->moduleList = $map['ModuleList'];
        }
        if (isset($map['Attachmented'])) {
            $model->attachmented = $map['Attachmented'];
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
        if (isset($map['PriorityId'])) {
            $model->priorityId = $map['PriorityId'];
        }
        if (isset($map['RecordChangeLog'])) {
            $model->recordChangeLog = $map['RecordChangeLog'];
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
        if (isset($map['RelatedAKProjectIds'])) {
            $model->relatedAKProjectIds = $map['RelatedAKProjectIds'];
        }
        if (isset($map['RelatedAKProjectGuids'])) {
            $model->relatedAKProjectGuids = $map['RelatedAKProjectGuids'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['AssignedToIdList'])) {
            $model->assignedToIdList = $map['AssignedToIdList'];
        }
        if (isset($map['CfsList'])) {
            if (!empty($map['CfsList'])) {
                $model->cfsList = [];
                $n              = 0;
                foreach ($map['CfsList'] as $item) {
                    $model->cfsList[$n++] = null !== $item ? cfsList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LogicalStatus'])) {
            $model->logicalStatus = $map['LogicalStatus'];
        }
        if (isset($map['VersionIds'])) {
            $model->versionIds = $map['VersionIds'];
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
        if (isset($map['TrackerIds'])) {
            $model->trackerIds = $map['TrackerIds'];
        }
        if (isset($map['AssignedToId'])) {
            $model->assignedToId = $map['AssignedToId'];
        }
        if (isset($map['ChangeLogList'])) {
            $model->changeLogList = $map['ChangeLogList'];
        }
        if (isset($map['IssueTypeId'])) {
            $model->issueTypeId = $map['IssueTypeId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }
        if (isset($map['AssignedToMaps'])) {
            $model->assignedToMaps = $map['AssignedToMaps'];
        }
        if (isset($map['BlackListNotice'])) {
            $model->blackListNotice = $map['BlackListNotice'];
        }
        if (isset($map['ModuleUpdated'])) {
            $model->moduleUpdated = $map['ModuleUpdated'];
        }
        if (isset($map['ProjectIds'])) {
            $model->projectIds = $map['ProjectIds'];
        }
        if (isset($map['CommentList'])) {
            $model->commentList = $map['CommentList'];
        }
        if (isset($map['VerifierStaffId'])) {
            $model->verifierStaffId = $map['VerifierStaffId'];
        }
        if (isset($map['ModuleIds'])) {
            $model->moduleIds = $map['ModuleIds'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
