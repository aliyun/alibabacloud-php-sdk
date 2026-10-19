<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateWorkItemShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptanceCriteria;

    /**
     * @var string
     */
    public $attachmentsShrink;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $collaboratorUserIdsShrink;

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
     * @var string
     */
    public $workflowTemplateIdsShrink;
    protected $_name = [
        'acceptanceCriteria' => 'acceptanceCriteria',
        'attachmentsShrink' => 'attachments',
        'collaborationGroupId' => 'collaborationGroupId',
        'collaboratorUserIdsShrink' => 'collaboratorUserIds',
        'conversationId' => 'conversationId',
        'description' => 'description',
        'expectedVersion' => 'expectedVersion',
        'ownerUserId' => 'ownerUserId',
        'priority' => 'priority',
        'tenantId' => 'tenantId',
        'title' => 'title',
        'workItemId' => 'workItemId',
        'workflowTemplateIdsShrink' => 'workflowTemplateIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptanceCriteria) {
            $res['acceptanceCriteria'] = $this->acceptanceCriteria;
        }

        if (null !== $this->attachmentsShrink) {
            $res['attachments'] = $this->attachmentsShrink;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->collaboratorUserIdsShrink) {
            $res['collaboratorUserIds'] = $this->collaboratorUserIdsShrink;
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

        if (null !== $this->workflowTemplateIdsShrink) {
            $res['workflowTemplateIds'] = $this->workflowTemplateIdsShrink;
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
            $model->attachmentsShrink = $map['attachments'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['collaboratorUserIds'])) {
            $model->collaboratorUserIdsShrink = $map['collaboratorUserIds'];
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
            $model->workflowTemplateIdsShrink = $map['workflowTemplateIds'];
        }

        return $model;
    }
}
