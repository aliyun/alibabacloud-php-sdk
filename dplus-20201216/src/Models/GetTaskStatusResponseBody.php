<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\SDK\Dplus\V20201216\Models\GetTaskStatusResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetTaskStatusResponseBody extends Model
{
    /**
     * @var int
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
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $successResponse;
    protected $_name = [
        'code'            => 'Code',
        'data'            => 'Data',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'successResponse' => 'SuccessResponse',
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successResponse) {
            $res['SuccessResponse'] = $this->successResponse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessResponse'])) {
            $model->successResponse = $map['SuccessResponse'];
        }

        return $model;
    }
}
