<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetImageDetectionTaskResultResponseBody\data;

class GetImageDetectionTaskResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $retryAble;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'message' => 'message',
        'retryAble' => 'retryAble',
        'success' => 'success',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->retryAble) {
            $res['retryAble'] = $this->retryAble;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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

        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['retryAble'])) {
            $model->retryAble = $map['retryAble'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
