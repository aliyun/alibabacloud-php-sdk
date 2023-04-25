<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStateLogsResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListAgentStateLogsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 943D8EF3-3321-471F-A104-51C96FCA94D6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'           => 'Code',
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
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
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return ListAgentStateLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
