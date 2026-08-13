<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SendAsyncChatMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

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
    public $requestId;

    /**
     * @var bool
     */
    public $sessionCreated;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'messageId' => 'messageId',
        'requestId' => 'requestId',
        'sessionCreated' => 'sessionCreated',
        'sessionId' => 'sessionId',
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

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionCreated) {
            $res['sessionCreated'] = $this->sessionCreated;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionCreated'])) {
            $model->sessionCreated = $map['sessionCreated'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
