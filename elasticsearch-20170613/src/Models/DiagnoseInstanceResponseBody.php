<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponseBody\result;
use AlibabaCloud\Tea\Model;

class DiagnoseInstanceResponseBody extends Model
{
    /**
     * @example 5FFD9ED4-C2EC-4E89-B22B-1ACB6FE1D***
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result
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
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiagnoseInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
