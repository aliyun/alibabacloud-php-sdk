<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableOutputResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetMetaTableOutputResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @var data
     */
    public $data;

    /**
     * @description The page number of the returned page.
     *
     * @example 0
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The error code returned.
     *
     * @example 0000-0000-0000-000
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The output node and instance.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'           => 'Data',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return GetMetaTableOutputResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
