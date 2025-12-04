<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMessageRequest\extLoginUser;

class ListMessageRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;

    /**
     * @var extLoginUser
     */
    public $extLoginUser;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $originalAssistantId;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $sourceIdOfOriginalAssistantId;

    /**
     * @var string
     */
    public $sourceTypeOfOriginalAssistantId;

    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'assistantId' => 'assistantId',
        'extLoginUser' => 'extLoginUser',
        'limit' => 'limit',
        'order' => 'order',
        'originalAssistantId' => 'originalAssistantId',
        'runId' => 'runId',
        'sourceIdOfOriginalAssistantId' => 'sourceIdOfOriginalAssistantId',
        'sourceTypeOfOriginalAssistantId' => 'sourceTypeOfOriginalAssistantId',
        'threadId' => 'threadId',
    ];

    public function validate()
    {
        if (null !== $this->extLoginUser) {
            $this->extLoginUser->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }

        if (null !== $this->extLoginUser) {
            $res['extLoginUser'] = null !== $this->extLoginUser ? $this->extLoginUser->toArray($noStream) : $this->extLoginUser;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->originalAssistantId) {
            $res['originalAssistantId'] = $this->originalAssistantId;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->sourceIdOfOriginalAssistantId) {
            $res['sourceIdOfOriginalAssistantId'] = $this->sourceIdOfOriginalAssistantId;
        }

        if (null !== $this->sourceTypeOfOriginalAssistantId) {
            $res['sourceTypeOfOriginalAssistantId'] = $this->sourceTypeOfOriginalAssistantId;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
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
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }

        if (isset($map['extLoginUser'])) {
            $model->extLoginUser = extLoginUser::fromMap($map['extLoginUser']);
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['originalAssistantId'])) {
            $model->originalAssistantId = $map['originalAssistantId'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['sourceIdOfOriginalAssistantId'])) {
            $model->sourceIdOfOriginalAssistantId = $map['sourceIdOfOriginalAssistantId'];
        }

        if (isset($map['sourceTypeOfOriginalAssistantId'])) {
            $model->sourceTypeOfOriginalAssistantId = $map['sourceTypeOfOriginalAssistantId'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
