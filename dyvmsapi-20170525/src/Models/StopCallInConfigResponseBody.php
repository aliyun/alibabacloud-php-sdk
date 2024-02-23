<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class StopCallInConfigResponseBody extends Model
{
    /**
     * @description The response code.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the inbound call was stopped. Valid values:
     *
     *   true: The inbound call was stopped.
     *   false: The inbound call failed to be stopped.
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example test
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example a78278ff-26bb-48ec-805c-26a0f4c102***
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
            $res['Data'] = $this->data;
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
     * @return StopCallInConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
