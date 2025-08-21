<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages;

class ChatResponseBody extends Model
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string[]
     */
    public $querySegList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'messageId' => 'MessageId',
        'messages' => 'Messages',
        'querySegList' => 'QuerySegList',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->querySegList)) {
            Model::validateArray($this->querySegList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
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

        if (null !== $this->querySegList) {
            if (\is_array($this->querySegList)) {
                $res['QuerySegList'] = [];
                $n1 = 0;
                foreach ($this->querySegList as $item1) {
                    $res['QuerySegList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
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

        if (isset($map['QuerySegList'])) {
            if (!empty($map['QuerySegList'])) {
                $model->querySegList = [];
                $n1 = 0;
                foreach ($map['QuerySegList'] as $item1) {
                    $model->querySegList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
