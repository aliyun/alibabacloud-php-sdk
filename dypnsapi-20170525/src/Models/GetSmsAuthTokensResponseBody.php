<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetSmsAuthTokensResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetSmsAuthTokensResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   If OK is returned, the request is successful.
     *   For more information about other error codes, see [API response codes](https://help.aliyun.com/document_detail/85198.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The response parameters.
     *
     * @var data
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 8906582E-6722
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return GetSmsAuthTokensResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
