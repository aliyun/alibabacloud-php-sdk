<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\OpenServiceResponseBody\error;

class OpenServiceResponseBody extends Model
{
    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $spInstanceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'error' => 'error',
        'orderId' => 'orderId',
        'spInstanceId' => 'spInstanceId',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->spInstanceId) {
            $res['spInstanceId'] = $this->spInstanceId;
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
        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['spInstanceId'])) {
            $model->spInstanceId = $map['spInstanceId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
