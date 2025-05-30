<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;

class DeliveryItemDetailSynResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var bool
     */
    public $data;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'message' => 'message',
        'success' => 'success',
        'traceId' => 'traceId',
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

        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
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
            $model->data = $map['data'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
