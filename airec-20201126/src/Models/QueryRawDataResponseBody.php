<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class QueryRawDataResponseBody extends Model
{
    /**
     * @example An internal server error occurred
     *
     * @var string
     */
    public $message;

    /**
     * @example InternalServerError
     *
     * @var string
     */
    public $code;

    /**
     * @example 8F81A922-6C81-46D6-B78C-CC35E16B1691
     *
     * @var string
     */
    public $requestId;

    /**
     * @example xxx
     *
     * @var mixed[]
     */
    public $result;
    protected $_name = [
        'message'   => 'Message',
        'code'      => 'code',
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
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
     * @return QueryRawDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
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
