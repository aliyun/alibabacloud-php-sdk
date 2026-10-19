<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ResumeWorkItemResponseBody\attachments;

class ResumeWorkItemResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceptanceCriteria;

    /**
     * @var int
     */
    public $appliedStatusVersion;

    /**
     * @var attachments[]
     */
    public $attachments;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var bool
     */
    public $canManage;

    /**
     * @var bool
     */
    public $canManageVisibility;

    /**
     * @var bool
     */
    public $canRename;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var int[]
     */
    public $collaboratorUserIds;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $createdByUserId;

    /**
     * @var string
     */
    public $creationType;

    /**
     * @var string
     */
    public $currentPlanId;

    /**
     * @var int
     */
    public $currentRevision;

    /**
     * @var string
     */
    public $currentRunId;

    /**
     * @var int
     */
    public $currentRunSeq;

    /**
     * @var string
     */
    public $currentStepName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $inputVersion;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $lastProcessingAt;

    /**
     * @var bool
     */
    public $legacyTopic;

    /**
     * @var int[]
     */
    public $memberUserIds;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $modifiedAt;

    /**
     * @var int
     */
    public $ownerUserId;

    /**
     * @var bool
     */
    public $pinned;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var int
     */
    public $progressCompleted;

    /**
     * @var int
     */
    public $progressTotal;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceExecutionId;

    /**
     * @var string
     */
    public $sourceTaskId;

    /**
     * @var string
     */
    public $sourceTaskName;

    /**
     * @var string
     */
    public $sourceTriggerKey;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $triggerTimezone;

    /**
     * @var string
     */
    public $triggeredAt;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $visibilitySource;

    /**
     * @var string
     */
    public $workItemId;

    /**
     * @var string
     */
    public $workflowStatus;

    /**
     * @var string[]
     */
    public $workflowTemplateIds;
    protected $_name = [
        'acceptanceCriteria' => 'acceptanceCriteria',
        'appliedStatusVersion' => 'appliedStatusVersion',
        'attachments' => 'attachments',
        'businessStatus' => 'businessStatus',
        'canDelete' => 'canDelete',
        'canManage' => 'canManage',
        'canManageVisibility' => 'canManageVisibility',
        'canRename' => 'canRename',
        'code' => 'code',
        'collaborationGroupId' => 'collaborationGroupId',
        'collaboratorUserIds' => 'collaboratorUserIds',
        'conversationId' => 'conversationId',
        'createdAt' => 'createdAt',
        'createdByUserId' => 'createdByUserId',
        'creationType' => 'creationType',
        'currentPlanId' => 'currentPlanId',
        'currentRevision' => 'currentRevision',
        'currentRunId' => 'currentRunId',
        'currentRunSeq' => 'currentRunSeq',
        'currentStepName' => 'currentStepName',
        'description' => 'description',
        'inputVersion' => 'inputVersion',
        'itemType' => 'itemType',
        'lastProcessingAt' => 'lastProcessingAt',
        'legacyTopic' => 'legacyTopic',
        'memberUserIds' => 'memberUserIds',
        'message' => 'message',
        'modifiedAt' => 'modifiedAt',
        'ownerUserId' => 'ownerUserId',
        'pinned' => 'pinned',
        'priority' => 'priority',
        'progressCompleted' => 'progressCompleted',
        'progressTotal' => 'progressTotal',
        'requestId' => 'requestId',
        'sourceExecutionId' => 'sourceExecutionId',
        'sourceTaskId' => 'sourceTaskId',
        'sourceTaskName' => 'sourceTaskName',
        'sourceTriggerKey' => 'sourceTriggerKey',
        'sourceType' => 'sourceType',
        'title' => 'title',
        'triggerTimezone' => 'triggerTimezone',
        'triggeredAt' => 'triggeredAt',
        'version' => 'version',
        'visibility' => 'visibility',
        'visibilitySource' => 'visibilitySource',
        'workItemId' => 'workItemId',
        'workflowStatus' => 'workflowStatus',
        'workflowTemplateIds' => 'workflowTemplateIds',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        if (\is_array($this->collaboratorUserIds)) {
            Model::validateArray($this->collaboratorUserIds);
        }
        if (\is_array($this->memberUserIds)) {
            Model::validateArray($this->memberUserIds);
        }
        if (\is_array($this->workflowTemplateIds)) {
            Model::validateArray($this->workflowTemplateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptanceCriteria) {
            $res['acceptanceCriteria'] = $this->acceptanceCriteria;
        }

        if (null !== $this->appliedStatusVersion) {
            $res['appliedStatusVersion'] = $this->appliedStatusVersion;
        }

        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['attachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->businessStatus) {
            $res['businessStatus'] = $this->businessStatus;
        }

        if (null !== $this->canDelete) {
            $res['canDelete'] = $this->canDelete;
        }

        if (null !== $this->canManage) {
            $res['canManage'] = $this->canManage;
        }

        if (null !== $this->canManageVisibility) {
            $res['canManageVisibility'] = $this->canManageVisibility;
        }

        if (null !== $this->canRename) {
            $res['canRename'] = $this->canRename;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->collaboratorUserIds) {
            if (\is_array($this->collaboratorUserIds)) {
                $res['collaboratorUserIds'] = [];
                $n1 = 0;
                foreach ($this->collaboratorUserIds as $item1) {
                    $res['collaboratorUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->conversationId) {
            $res['conversationId'] = $this->conversationId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->createdByUserId) {
            $res['createdByUserId'] = $this->createdByUserId;
        }

        if (null !== $this->creationType) {
            $res['creationType'] = $this->creationType;
        }

        if (null !== $this->currentPlanId) {
            $res['currentPlanId'] = $this->currentPlanId;
        }

        if (null !== $this->currentRevision) {
            $res['currentRevision'] = $this->currentRevision;
        }

        if (null !== $this->currentRunId) {
            $res['currentRunId'] = $this->currentRunId;
        }

        if (null !== $this->currentRunSeq) {
            $res['currentRunSeq'] = $this->currentRunSeq;
        }

        if (null !== $this->currentStepName) {
            $res['currentStepName'] = $this->currentStepName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->inputVersion) {
            $res['inputVersion'] = $this->inputVersion;
        }

        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }

        if (null !== $this->lastProcessingAt) {
            $res['lastProcessingAt'] = $this->lastProcessingAt;
        }

        if (null !== $this->legacyTopic) {
            $res['legacyTopic'] = $this->legacyTopic;
        }

        if (null !== $this->memberUserIds) {
            if (\is_array($this->memberUserIds)) {
                $res['memberUserIds'] = [];
                $n1 = 0;
                foreach ($this->memberUserIds as $item1) {
                    $res['memberUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->modifiedAt) {
            $res['modifiedAt'] = $this->modifiedAt;
        }

        if (null !== $this->ownerUserId) {
            $res['ownerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->pinned) {
            $res['pinned'] = $this->pinned;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->progressCompleted) {
            $res['progressCompleted'] = $this->progressCompleted;
        }

        if (null !== $this->progressTotal) {
            $res['progressTotal'] = $this->progressTotal;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sourceExecutionId) {
            $res['sourceExecutionId'] = $this->sourceExecutionId;
        }

        if (null !== $this->sourceTaskId) {
            $res['sourceTaskId'] = $this->sourceTaskId;
        }

        if (null !== $this->sourceTaskName) {
            $res['sourceTaskName'] = $this->sourceTaskName;
        }

        if (null !== $this->sourceTriggerKey) {
            $res['sourceTriggerKey'] = $this->sourceTriggerKey;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->triggerTimezone) {
            $res['triggerTimezone'] = $this->triggerTimezone;
        }

        if (null !== $this->triggeredAt) {
            $res['triggeredAt'] = $this->triggeredAt;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
        }

        if (null !== $this->visibilitySource) {
            $res['visibilitySource'] = $this->visibilitySource;
        }

        if (null !== $this->workItemId) {
            $res['workItemId'] = $this->workItemId;
        }

        if (null !== $this->workflowStatus) {
            $res['workflowStatus'] = $this->workflowStatus;
        }

        if (null !== $this->workflowTemplateIds) {
            if (\is_array($this->workflowTemplateIds)) {
                $res['workflowTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->workflowTemplateIds as $item1) {
                    $res['workflowTemplateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['acceptanceCriteria'])) {
            $model->acceptanceCriteria = $map['acceptanceCriteria'];
        }

        if (isset($map['appliedStatusVersion'])) {
            $model->appliedStatusVersion = $map['appliedStatusVersion'];
        }

        if (isset($map['attachments'])) {
            if (!empty($map['attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['attachments'] as $item1) {
                    $model->attachments[$n1] = attachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['businessStatus'])) {
            $model->businessStatus = $map['businessStatus'];
        }

        if (isset($map['canDelete'])) {
            $model->canDelete = $map['canDelete'];
        }

        if (isset($map['canManage'])) {
            $model->canManage = $map['canManage'];
        }

        if (isset($map['canManageVisibility'])) {
            $model->canManageVisibility = $map['canManageVisibility'];
        }

        if (isset($map['canRename'])) {
            $model->canRename = $map['canRename'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['collaboratorUserIds'])) {
            if (!empty($map['collaboratorUserIds'])) {
                $model->collaboratorUserIds = [];
                $n1 = 0;
                foreach ($map['collaboratorUserIds'] as $item1) {
                    $model->collaboratorUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['conversationId'])) {
            $model->conversationId = $map['conversationId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['createdByUserId'])) {
            $model->createdByUserId = $map['createdByUserId'];
        }

        if (isset($map['creationType'])) {
            $model->creationType = $map['creationType'];
        }

        if (isset($map['currentPlanId'])) {
            $model->currentPlanId = $map['currentPlanId'];
        }

        if (isset($map['currentRevision'])) {
            $model->currentRevision = $map['currentRevision'];
        }

        if (isset($map['currentRunId'])) {
            $model->currentRunId = $map['currentRunId'];
        }

        if (isset($map['currentRunSeq'])) {
            $model->currentRunSeq = $map['currentRunSeq'];
        }

        if (isset($map['currentStepName'])) {
            $model->currentStepName = $map['currentStepName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['inputVersion'])) {
            $model->inputVersion = $map['inputVersion'];
        }

        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }

        if (isset($map['lastProcessingAt'])) {
            $model->lastProcessingAt = $map['lastProcessingAt'];
        }

        if (isset($map['legacyTopic'])) {
            $model->legacyTopic = $map['legacyTopic'];
        }

        if (isset($map['memberUserIds'])) {
            if (!empty($map['memberUserIds'])) {
                $model->memberUserIds = [];
                $n1 = 0;
                foreach ($map['memberUserIds'] as $item1) {
                    $model->memberUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['modifiedAt'])) {
            $model->modifiedAt = $map['modifiedAt'];
        }

        if (isset($map['ownerUserId'])) {
            $model->ownerUserId = $map['ownerUserId'];
        }

        if (isset($map['pinned'])) {
            $model->pinned = $map['pinned'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['progressCompleted'])) {
            $model->progressCompleted = $map['progressCompleted'];
        }

        if (isset($map['progressTotal'])) {
            $model->progressTotal = $map['progressTotal'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sourceExecutionId'])) {
            $model->sourceExecutionId = $map['sourceExecutionId'];
        }

        if (isset($map['sourceTaskId'])) {
            $model->sourceTaskId = $map['sourceTaskId'];
        }

        if (isset($map['sourceTaskName'])) {
            $model->sourceTaskName = $map['sourceTaskName'];
        }

        if (isset($map['sourceTriggerKey'])) {
            $model->sourceTriggerKey = $map['sourceTriggerKey'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['triggerTimezone'])) {
            $model->triggerTimezone = $map['triggerTimezone'];
        }

        if (isset($map['triggeredAt'])) {
            $model->triggeredAt = $map['triggeredAt'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['visibility'])) {
            $model->visibility = $map['visibility'];
        }

        if (isset($map['visibilitySource'])) {
            $model->visibilitySource = $map['visibilitySource'];
        }

        if (isset($map['workItemId'])) {
            $model->workItemId = $map['workItemId'];
        }

        if (isset($map['workflowStatus'])) {
            $model->workflowStatus = $map['workflowStatus'];
        }

        if (isset($map['workflowTemplateIds'])) {
            if (!empty($map['workflowTemplateIds'])) {
                $model->workflowTemplateIds = [];
                $n1 = 0;
                foreach ($map['workflowTemplateIds'] as $item1) {
                    $model->workflowTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
