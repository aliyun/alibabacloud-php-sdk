<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantResponseBody\citation;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ShoppingAssistantResponseBody\result;

class ShoppingAssistantResponseBody extends Model
{
    /**
     * @var citation
     */
    public $citation;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $stopReason;
    protected $_name = [
        'citation' => 'Citation',
        'content' => 'Content',
        'conversationId' => 'ConversationId',
        'errorCode' => 'ErrorCode',
        'event' => 'Event',
        'requestId' => 'RequestId',
        'result' => 'Result',
        'sessionId' => 'SessionId',
        'stopReason' => 'StopReason',
    ];

    public function validate()
    {
        if (null !== $this->citation) {
            $this->citation->validate();
        }
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->citation) {
            $res['Citation'] = null !== $this->citation ? $this->citation->toArray($noStream) : $this->citation;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->stopReason) {
            $res['StopReason'] = $this->stopReason;
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
        if (isset($map['Citation'])) {
            $model->citation = citation::fromMap($map['Citation']);
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['StopReason'])) {
            $model->stopReason = $map['StopReason'];
        }

        return $model;
    }
}
