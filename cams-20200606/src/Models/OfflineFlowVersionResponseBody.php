<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class OfflineFlowVersionResponseBody extends Model
{
    /**
     * @description Access denied details; this field is only returned when RAM verification fails.
     *
     * @example 无
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description Status code.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $code;

    /**
     * @description Error message.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Content of the returned data.
     *
     * @example 无
     *
     * @var mixed[]
     */
    public $response;

    /**
     * @description Indicates whether the operation was successful. true means success, false means failure.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'response' => 'Response',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OfflineFlowVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
