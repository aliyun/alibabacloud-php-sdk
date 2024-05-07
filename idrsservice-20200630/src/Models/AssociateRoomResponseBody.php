<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\AssociateRoomResponseBody\errors;
use AlibabaCloud\Tea\Model;

class AssociateRoomResponseBody extends Model
{
    /**
     * @description code
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example {\"Name\": u\"\u4ee3\u7406\u4eba\", \"CreatedAt\": \"2021-11-11T15:27:39.449+08:00\", \"Channel\": \"063756\", \"Id\": \"5ead2d7f-9e2c-4521-bac4-e37bd44b6a56\"}
     *
     * @var string
     */
    public $data;

    /**
     * @var errors[]
     */
    public $errors;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @example -
     *
     * @var string
     */
    public $message;

    /**
     * @description requestId
     *
     * @example 84118BF0-56F7-54D2-8C1A-35BBBBD5016B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'errors'    => 'Errors',
        'httpCode'  => 'HttpCode',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errors) {
            $res['Errors'] = [];
            if (null !== $this->errors && \is_array($this->errors)) {
                $n = 0;
                foreach ($this->errors as $item) {
                    $res['Errors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateRoomResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Errors'])) {
            if (!empty($map['Errors'])) {
                $model->errors = [];
                $n             = 0;
                foreach ($map['Errors'] as $item) {
                    $model->errors[$n++] = null !== $item ? errors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
