<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CountTodosResponseBody extends Model
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
     * @var int
     */
    public $pendingCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $unreadCount;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'pendingCount' => 'pendingCount',
        'requestId' => 'requestId',
        'unreadCount' => 'unreadCount',
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

        if (null !== $this->pendingCount) {
            $res['pendingCount'] = $this->pendingCount;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->unreadCount) {
            $res['unreadCount'] = $this->unreadCount;
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

        if (isset($map['pendingCount'])) {
            $model->pendingCount = $map['pendingCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['unreadCount'])) {
            $model->unreadCount = $map['unreadCount'];
        }

        return $model;
    }
}
