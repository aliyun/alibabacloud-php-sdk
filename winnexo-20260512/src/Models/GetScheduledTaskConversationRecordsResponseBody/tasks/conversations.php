<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskConversationRecordsResponseBody\tasks;

use AlibabaCloud\Dara\Model;

class conversations extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $hasUnread;

    /**
     * @var string
     */
    public $latestExecutionId;

    /**
     * @var string
     */
    public $latestStatus;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'conversationId' => 'conversationId',
        'displayName' => 'displayName',
        'hasUnread' => 'hasUnread',
        'latestExecutionId' => 'latestExecutionId',
        'latestStatus' => 'latestStatus',
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

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->hasUnread) {
            $res['hasUnread'] = $this->hasUnread;
        }

        if (null !== $this->latestExecutionId) {
            $res['latestExecutionId'] = $this->latestExecutionId;
        }

        if (null !== $this->latestStatus) {
            $res['latestStatus'] = $this->latestStatus;
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

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['hasUnread'])) {
            $model->hasUnread = $map['hasUnread'];
        }

        if (isset($map['latestExecutionId'])) {
            $model->latestExecutionId = $map['latestExecutionId'];
        }

        if (isset($map['latestStatus'])) {
            $model->latestStatus = $map['latestStatus'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
