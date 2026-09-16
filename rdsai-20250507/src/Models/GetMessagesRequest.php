<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class GetMessagesRequest extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $eventMode;

    /**
     * @var string
     */
    public $firstId;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'conversationId' => 'ConversationId',
        'eventMode' => 'EventMode',
        'firstId' => 'FirstId',
        'limit' => 'Limit',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->eventMode) {
            $res['EventMode'] = $this->eventMode;
        }

        if (null !== $this->firstId) {
            $res['FirstId'] = $this->firstId;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['EventMode'])) {
            $model->eventMode = $map['EventMode'];
        }

        if (isset($map['FirstId'])) {
            $model->firstId = $map['FirstId'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
