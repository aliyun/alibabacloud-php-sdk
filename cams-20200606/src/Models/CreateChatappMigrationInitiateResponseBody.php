<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappMigrationInitiateResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateChatappMigrationInitiateResponseBody extends Model
{
    /**
     * @description The information about the request denial..
     *
     * @example None
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description The response code.
     *
     *   A value of OK indicates that the request was successful.
     *   For more information about other response codes, see [API error codes](https://help.aliyun.com/document_detail/196974.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The response data.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error message returned.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 90E63D28-E31D-1EB2-8939-A9486641****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChatappMigrationInitiateResponseBody
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

        return $model;
    }
}
