<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class DisableHiveAccessResponseBody extends Model
{
    /**
     * @description The returned result.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The error code returned if the request failed.
     *
     * @example 404
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example Internal server error.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

    /**
     * @description The request ID.
     *
     * @example 82B7A554-4D00-50DF-95D9-B59E7B4D5489
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data' => 'Data',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
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
     * @return DisableHiveAccessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
