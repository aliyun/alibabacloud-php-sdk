<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models;

use AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models\SearchResponseBody\errorData;
use AlibabaCloud\Tea\Model;

class SearchResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
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
     * @example 71ad3e90-53f8-445b-be9d-df91039cba47
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
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
        'success'   => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
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
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
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
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
