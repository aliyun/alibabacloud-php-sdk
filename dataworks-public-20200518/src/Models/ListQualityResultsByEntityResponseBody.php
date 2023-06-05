<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListQualityResultsByEntityResponseBody extends Model
{
    /**
     * @description The total number of entries returned.
     *
     * @var data
     */
    public $data;

    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * @example 401
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error code returned.
     *
     * @example You have no permission.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The data structure of the monitoring results returned.
     *
     * @example CBA58543-00D4-41****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The page number of the returned page.
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
     * @return ListQualityResultsByEntityResponseBody
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
