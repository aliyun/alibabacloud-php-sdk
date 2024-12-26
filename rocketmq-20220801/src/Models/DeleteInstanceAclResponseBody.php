<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceAclResponseBody extends Model
{
    /**
     * @description The details about the access denial. This parameter is returned only if the access is denied due to the reason that the Resource Access Management (RAM) user does not have the required permissions.
     *
     * @example xxx
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description The error code.
     *
     * @example MissingInstanceId
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned data.
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The dynamic error code.
     *
     * @example InstanceId
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic error message.
     *
     * @example instanceId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The error message.
     *
     * @example The instance cannot be found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 7358418D-83BD-507A-8079-611C63E05674
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'accessDeniedDetail',
        'code'               => 'code',
        'data'               => 'data',
        'dynamicCode'        => 'dynamicCode',
        'dynamicMessage'     => 'dynamicMessage',
        'httpStatusCode'     => 'httpStatusCode',
        'message'            => 'message',
        'requestId'          => 'requestId',
        'success'            => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['accessDeniedDetail'] = $this->accessDeniedDetail;
        }
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
     * @return DeleteInstanceAclResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['accessDeniedDetail'];
        }
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
