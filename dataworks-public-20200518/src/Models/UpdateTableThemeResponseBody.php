<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateTableThemeResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example 1031203110005
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example The specified parameters are invalid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the request.
     *
     * @example abcd
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request is successful.
     *   false: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Indicates whether the update result is returned. Valid values:
     *
     *   true: The update result is returned.
     *   false: The update result is not returned.
     *
     * @example true
     *
     * @var bool
     */
    public $updateResult;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'updateResult'   => 'UpdateResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->updateResult) {
            $res['UpdateResult'] = $this->updateResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableThemeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['UpdateResult'])) {
            $model->updateResult = $map['UpdateResult'];
        }

        return $model;
    }
}
