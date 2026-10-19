<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class MarkTodosReadResponseBody extends Model
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
    public $requestId;

    /**
     * @var int
     */
    public $unreadCount;

    /**
     * @var int
     */
    public $updatedCount;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
        'unreadCount' => 'unreadCount',
        'updatedCount' => 'updatedCount',
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

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->unreadCount) {
            $res['unreadCount'] = $this->unreadCount;
        }

        if (null !== $this->updatedCount) {
            $res['updatedCount'] = $this->updatedCount;
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

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['unreadCount'])) {
            $model->unreadCount = $map['unreadCount'];
        }

        if (isset($map['updatedCount'])) {
            $model->updatedCount = $map['updatedCount'];
        }

        return $model;
    }
}
