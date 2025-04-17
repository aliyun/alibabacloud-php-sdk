<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class QueryImageToVideoTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $originUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'message' => 'message',
        'originUrl' => 'originUrl',
        'requestId' => 'requestId',
        'status' => 'status',
        'success' => 'success',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->originUrl) {
            $res['originUrl'] = $this->originUrl;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['originUrl'])) {
            $model->originUrl = $map['originUrl'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
