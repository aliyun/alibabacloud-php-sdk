<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ReconnectAppChatRequest extends Model
{
    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var int
     */
    public $lastEventId;

    /**
     * @var string
     */
    public $latestMessageCreateTime;
    protected $_name = [
        'chatId' => 'ChatId',
        'conversationId' => 'ConversationId',
        'lastEventId' => 'LastEventId',
        'latestMessageCreateTime' => 'LatestMessageCreateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->lastEventId) {
            $res['LastEventId'] = $this->lastEventId;
        }

        if (null !== $this->latestMessageCreateTime) {
            $res['LatestMessageCreateTime'] = $this->latestMessageCreateTime;
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
        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['LastEventId'])) {
            $model->lastEventId = $map['LastEventId'];
        }

        if (isset($map['LatestMessageCreateTime'])) {
            $model->latestMessageCreateTime = $map['LatestMessageCreateTime'];
        }

        return $model;
    }
}
