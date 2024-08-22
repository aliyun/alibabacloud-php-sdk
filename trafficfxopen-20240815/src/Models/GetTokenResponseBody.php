<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models;

use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\GetTokenResponseBody\data;
use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\GetTokenResponseBody\errorData;
use AlibabaCloud\Tea\Model;

class GetTokenResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @var errorData
     */
    public $errorData;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @description Id of the request
     *
     * @example 6BD708D6-1A8C-5CF9-85B8-D620F314F1F0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example confirmed
     *
     * @var int
     */
    public $status;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'data',
        'errorCode' => 'errorCode',
        'errorData' => 'errorData',
        'errorMsg'  => 'errorMsg',
        'requestId' => 'requestId',
        'status'    => 'status',
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorData) {
            $res['errorData'] = null !== $this->errorData ? $this->errorData->toMap() : null;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorData'])) {
            $model->errorData = errorData::fromMap($map['errorData']);
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
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

        return $model;
    }
}
