<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class DeleteChatSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var bool
     */
    public $hardDelete;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'code' => 'code',
        'deleted' => 'deleted',
        'hardDelete' => 'hardDelete',
        'message' => 'message',
        'requestId' => 'requestId',
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

        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }

        if (null !== $this->hardDelete) {
            $res['hardDelete'] = $this->hardDelete;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['deleted'])) {
            $model->deleted = $map['deleted'];
        }

        if (isset($map['hardDelete'])) {
            $model->hardDelete = $map['hardDelete'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
