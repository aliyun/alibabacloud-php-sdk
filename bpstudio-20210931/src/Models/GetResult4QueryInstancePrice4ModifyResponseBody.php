<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetResult4QueryInstancePrice4ModifyResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetResult4QueryInstancePrice4ModifyResponseBody extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example A07FFDF2-78FA-1B48-9E38-88E833A93187
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code'               => 'Code',
        'data'               => 'Data',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return GetResult4QueryInstancePrice4ModifyResponseBody
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
