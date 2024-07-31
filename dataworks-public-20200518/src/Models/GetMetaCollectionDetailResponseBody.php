<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaCollectionDetailResponseBody extends Model
{
    /**
     * @description The information about the collection.
     *
     * @var Collection
     */
    public $collection;

    /**
     * @description The error code.
     *
     * @example 9999
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example album.xxxx does not exist.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The request ID. You can locate logs and troubleshoot issues based on the ID.
     *
     * @example 0000-ABCD-E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     * false
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'collection'     => 'Collection',
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
        if (null !== $this->collection) {
            $res['Collection'] = null !== $this->collection ? $this->collection->toMap() : null;
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
     * @return GetMetaCollectionDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = Collection::fromMap($map['Collection']);
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
