<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdateHttpApiOperationResponseBody extends Model
{
    /**
     * @description Response status code.
     *
     * @example Ok
     *
     * @var string
     */
    public $code;

    /**
     * @description Response message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID.
     *
     * @example 043360DA-ED3B-5386-9B7A-D94DECF99A30
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'code',
        'message'   => 'message',
        'requestId' => 'requestId',
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
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHttpApiOperationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
