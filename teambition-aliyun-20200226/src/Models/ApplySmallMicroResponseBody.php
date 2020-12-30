<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class ApplySmallMicroResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $result;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $raw;

    /**
     * @var bool
     */
    public $message;
    protected $_name = [
        'result'    => 'result',
        'code'      => 'code',
        'requestId' => 'RequestId',
        'raw'       => 'raw',
        'message'   => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->raw) {
            $res['raw'] = $this->raw;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplySmallMicroResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['raw'])) {
            $model->raw = $map['raw'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
