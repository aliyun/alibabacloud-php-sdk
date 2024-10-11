<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class RunInstanceResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example InternalServerError
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example An internal server error occurred
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 8F81A922-6C81-46D6-B78C-CC35E16B1691
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether a dataset was created.
     *
     * @example false
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'code'      => 'code',
        'message'   => 'message',
        'requestId' => 'requestId',
        'result'    => 'result',
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
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunInstanceResponseBody
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
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
