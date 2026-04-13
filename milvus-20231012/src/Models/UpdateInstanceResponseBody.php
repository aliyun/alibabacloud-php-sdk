<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $data;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'data' => 'data',
        'orderId' => 'orderId',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
