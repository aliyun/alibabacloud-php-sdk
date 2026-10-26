<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentConversationResponseBody extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $currentRunStatus;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'conversationId' => 'conversationId',
        'createdAt' => 'createdAt',
        'currentRunStatus' => 'currentRunStatus',
        'id' => 'id',
        'runId' => 'runId',
        'scenarioId' => 'scenarioId',
        'title' => 'title',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['conversationId'] = $this->conversationId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->currentRunStatus) {
            $res['currentRunStatus'] = $this->currentRunStatus;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->scenarioId) {
            $res['scenarioId'] = $this->scenarioId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['conversationId'])) {
            $model->conversationId = $map['conversationId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['currentRunStatus'])) {
            $model->currentRunStatus = $map['currentRunStatus'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['scenarioId'])) {
            $model->scenarioId = $map['scenarioId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
