<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DeleteConsumerGroupResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example InvalidConsumerGroupId
     *
     * @var string
     */
    public $code;

    /**
     * @description The result data that is returned.
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The dynamic error code.
     *
     * @example ConsumerGroupId
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic error message.
     *
     * @example consumerGroupId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 400
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The error message.
     *
     * @example Parameter consumerGroupId is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request. The system generates a unique ID for each request. You can troubleshoot issues based on the request ID.
     *
     * @example C7F94090-3358-506A-97DC-34BC803C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'code',
        'data'           => 'data',
        'dynamicCode'    => 'dynamicCode',
        'dynamicMessage' => 'dynamicMessage',
        'httpStatusCode' => 'httpStatusCode',
        'message'        => 'message',
        'requestId'      => 'requestId',
        'success'        => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->dynamicCode) {
            $res['dynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['dynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
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
     * @return DeleteConsumerGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['dynamicCode'])) {
            $model->dynamicCode = $map['dynamicCode'];
        }
        if (isset($map['dynamicMessage'])) {
            $model->dynamicMessage = $map['dynamicMessage'];
        }
        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
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
