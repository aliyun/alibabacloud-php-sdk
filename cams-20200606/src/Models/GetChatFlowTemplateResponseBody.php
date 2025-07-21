<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatFlowTemplateResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetChatFlowTemplateResponseBody extends Model
{
    /**
     * @description Access denied details, this field is returned only when RAM verification fails.
     *
     * @example 无
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description System returned error code. For more details on error codes, please refer to the error code documentation.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description Returned data.
     *
     * @var data
     */
    public $data;

    /**
     * @description Error message.
     *
     * @example 无
     *
     * @var string
     */
    public $message;

    /**
     * @description Unique request ID.
     *
     * @example 90E63D28-E31D-1EB2-8939-A9486641****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation was successful. Values: true: success; false: failure.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return GetChatFlowTemplateResponseBody
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
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
