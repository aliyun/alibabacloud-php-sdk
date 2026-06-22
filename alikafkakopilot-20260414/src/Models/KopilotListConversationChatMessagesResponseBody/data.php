<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data\messages;

class data extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var int
     */
    public $nextBeforeTurnId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $totalTurns;
    protected $_name = [
        'hasMore' => 'HasMore',
        'messages' => 'Messages',
        'nextBeforeTurnId' => 'NextBeforeTurnId',
        'sessionId' => 'SessionId',
        'totalTurns' => 'TotalTurns',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextBeforeTurnId) {
            $res['NextBeforeTurnId'] = $this->nextBeforeTurnId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->totalTurns) {
            $res['TotalTurns'] = $this->totalTurns;
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
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextBeforeTurnId'])) {
            $model->nextBeforeTurnId = $map['NextBeforeTurnId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TotalTurns'])) {
            $model->totalTurns = $map['TotalTurns'];
        }

        return $model;
    }
}
