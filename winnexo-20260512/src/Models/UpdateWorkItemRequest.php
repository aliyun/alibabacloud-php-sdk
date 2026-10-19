<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateWorkItemRequest\attachments;

class UpdateWorkItemRequest extends Model
{
    /**
     * @var string
     */
    public $acceptanceCriteria;

    /**
     * @var attachments[]
     */
    public $attachments;

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
    public $description;

    /**
     * @var int
     */
    public $expectedVersion;

    /**
     * @var int
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $workItemId;

    /**
     * @var string[]
     */
    public $workflowTemplateIds;
    protected $_name = [
        'acceptanceCriteria' => 'acceptanceCriteria',
        'attachments' => 'attachments',
        'collaborationGroupId' => 'collaborationGroupId',
        'collaboratorUserIds' => 'collaboratorUserIds',
        'conversationId' => 'conversationId',
        'description' => 'description',
        'expectedVersion' => 'expectedVersion',
        'ownerUserId' => 'ownerUserId',
        'priority' => 'priority',
        'tenantId' => 'tenantId',
        'title' => 'title',
        'workItemId' => 'workItemId',
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->expectedVersion) {
            $res['expectedVersion'] = $this->expectedVersion;
        }

        if (null !== $this->ownerUserId) {
            $res['ownerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->workItemId) {
            $res['workItemId'] = $this->workItemId;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['expectedVersion'])) {
            $model->expectedVersion = $map['expectedVersion'];
        }

        if (isset($map['ownerUserId'])) {
            $model->ownerUserId = $map['ownerUserId'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['workItemId'])) {
            $model->workItemId = $map['workItemId'];
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
