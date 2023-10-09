<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerGroupSubscriptionsResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListConsumerGroupSubscriptionsResponseBody extends Model
{
    /**
     * @description The returned error code.
     *
     * @example MissingInstanceId
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned data.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The returned dynamic error code.
     *
     * @example InstanceId
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The returned dynamic error message.
     *
     * @example InstanceId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The returned HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The returned error message.
     *
     * @example Parameter instanceId is mandatory for this action .
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 5F4D9D5F-625B-59FF-BD4F-DA8284575DB4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
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
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListConsumerGroupSubscriptionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
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
