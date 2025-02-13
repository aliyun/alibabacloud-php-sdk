<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateTodoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $contentFieldListShrink;
    /**
     * @var string
     */
    public $creatorId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $detailUrlShrink;
    /**
     * @var int
     */
    public $dueTime;
    /**
     * @var string
     */
    public $executorIdsShrink;
    /**
     * @var bool
     */
    public $isOnlyShowExecutor;
    /**
     * @var string
     */
    public $notifyConfigsShrink;
    /**
     * @var string
     */
    public $operatorId;
    /**
     * @var string
     */
    public $participantIdsShrink;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $sourceId;
    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'tenantContextShrink'    => 'TenantContext',
        'contentFieldListShrink' => 'contentFieldList',
        'creatorId'              => 'creatorId',
        'description'            => 'description',
        'detailUrlShrink'        => 'detailUrl',
        'dueTime'                => 'dueTime',
        'executorIdsShrink'      => 'executorIds',
        'isOnlyShowExecutor'     => 'isOnlyShowExecutor',
        'notifyConfigsShrink'    => 'notifyConfigs',
        'operatorId'             => 'operatorId',
        'participantIdsShrink'   => 'participantIds',
        'priority'               => 'priority',
        'sourceId'               => 'sourceId',
        'subject'                => 'subject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->contentFieldListShrink) {
            $res['contentFieldList'] = $this->contentFieldListShrink;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->detailUrlShrink) {
            $res['detailUrl'] = $this->detailUrlShrink;
        }

        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }

        if (null !== $this->executorIdsShrink) {
            $res['executorIds'] = $this->executorIdsShrink;
        }

        if (null !== $this->isOnlyShowExecutor) {
            $res['isOnlyShowExecutor'] = $this->isOnlyShowExecutor;
        }

        if (null !== $this->notifyConfigsShrink) {
            $res['notifyConfigs'] = $this->notifyConfigsShrink;
        }

        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }

        if (null !== $this->participantIdsShrink) {
            $res['participantIds'] = $this->participantIdsShrink;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
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
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['contentFieldList'])) {
            $model->contentFieldListShrink = $map['contentFieldList'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['detailUrl'])) {
            $model->detailUrlShrink = $map['detailUrl'];
        }

        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }

        if (isset($map['executorIds'])) {
            $model->executorIdsShrink = $map['executorIds'];
        }

        if (isset($map['isOnlyShowExecutor'])) {
            $model->isOnlyShowExecutor = $map['isOnlyShowExecutor'];
        }

        if (isset($map['notifyConfigs'])) {
            $model->notifyConfigsShrink = $map['notifyConfigs'];
        }

        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }

        if (isset($map['participantIds'])) {
            $model->participantIdsShrink = $map['participantIds'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
