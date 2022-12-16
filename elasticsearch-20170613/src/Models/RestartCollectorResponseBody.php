<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class RestartCollectorResponseBody extends Model
{
    /**
     * @example 84B4038A-AF38-4BF4-9FAD-EA92A4FFF00A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartCollectorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
