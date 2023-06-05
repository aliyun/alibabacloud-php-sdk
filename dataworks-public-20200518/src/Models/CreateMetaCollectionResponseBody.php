<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateMetaCollectionResponseBody extends Model
{
    /**
     * @description The error message returned.
     *
     * @example NoPermission
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The HTTP status code returned.
     *
     * @example The specified parameters are invalid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example album.11111
     *
     * @var string
     */
    public $qualifiedName;

    /**
     * @description The unique identifier of the collection.
     *
     * @example E6F0DBDD-5AD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The error code returned.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'qualifiedName'  => 'QualifiedName',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
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
     * @return CreateMetaCollectionResponseBody
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
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
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
