<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class StopChatMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $finishReason;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $partialContent;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'code' => 'code',
        'finishReason' => 'finishReason',
        'message' => 'message',
        'messageId' => 'messageId',
        'partialContent' => 'partialContent',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->finishReason) {
            $res['finishReason'] = $this->finishReason;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->partialContent) {
            $res['partialContent'] = $this->partialContent;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['finishReason'])) {
            $model->finishReason = $map['finishReason'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['partialContent'])) {
            $model->partialContent = $map['partialContent'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
