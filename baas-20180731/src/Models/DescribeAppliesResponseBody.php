<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAppliesResponseBody\result;
use AlibabaCloud\Tea\Model;

class DescribeAppliesResponseBody extends Model
{
    /**
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
     * @return DescribeAppliesResponseBody
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
