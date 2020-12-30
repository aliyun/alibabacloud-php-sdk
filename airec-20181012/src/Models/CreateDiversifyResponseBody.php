<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\SDK\Airec\V20181012\Models\CreateDiversifyResponseBody\result;
use AlibabaCloud\Tea\Model;

class CreateDiversifyResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var result
     */
    public $result;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'result'    => 'Result',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiversifyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
