<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\RefundApplyResponseBody\data;
use AlibabaCloud\Tea\Model;

class RefundApplyResponseBody extends Model
{
    /**
     * @description request ID
     *
     * @example 51593418-8C73-5E47-8BA8-3F1D4A00CC0B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var data
     */
    public $data;

    /**
     * @description error code
     *
     * @example null
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description error data
     *
     * @example null
     *
     * @var mixed
     */
    public $errorData;

    /**
     * @description error message
     *
     * @example null
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description http reqeust has been processed successfully，status code is 200
     *
     * @example 200
     *
     * @var int
     */
    public $status;

    /**
     * @description true represents success, false represents failure
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'data'      => 'data',
        'errorCode' => 'error_code',
        'errorData' => 'error_data',
        'errorMsg'  => 'error_msg',
        'status'    => 'status',
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }
        if (null !== $this->errorData) {
            $res['error_data'] = $this->errorData;
        }
        if (null !== $this->errorMsg) {
            $res['error_msg'] = $this->errorMsg;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundApplyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }
        if (isset($map['error_data'])) {
            $model->errorData = $map['error_data'];
        }
        if (isset($map['error_msg'])) {
            $model->errorMsg = $map['error_msg'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
