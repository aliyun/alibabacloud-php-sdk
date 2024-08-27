<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class UpdateCustomAuthIdentityResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 3F00084A-7F07-4B15-BADA-8903A4FB****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values: true and false.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
     * @return UpdateCustomAuthIdentityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
