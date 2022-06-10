<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages;
use AlibabaCloud\Tea\Model;

class ChatResponseBody extends Model
{
    /**
     * @description 本条会话应答消息的ID
     *
     * @var string
     */
    public $messageId;

    /**
     * @description 消息的列表
     *
     * @var messages[]
     */
    public $messages;

    /**
     * @description query的分词结果，可能为空
     *
     * @var string[]
     */
    public $querySegList;

    /**
     * @description 请求id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 本次会话的ID
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'messageId'    => 'MessageId',
        'messages'     => 'Messages',
        'querySegList' => 'QuerySegList',
        'requestId'    => 'RequestId',
        'sessionId'    => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->messages) {
            $res['Messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['Messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->querySegList) {
            $res['QuerySegList'] = $this->querySegList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChatResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n               = 0;
                foreach ($map['Messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QuerySegList'])) {
            if (!empty($map['QuerySegList'])) {
                $model->querySegList = $map['QuerySegList'];
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
