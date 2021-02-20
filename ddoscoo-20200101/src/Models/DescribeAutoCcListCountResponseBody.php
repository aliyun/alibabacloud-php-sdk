<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoCcListCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $blackCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $whiteCount;
    protected $_name = [
        'blackCount' => 'BlackCount',
        'requestId'  => 'RequestId',
        'whiteCount' => 'WhiteCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackCount) {
            $res['BlackCount'] = $this->blackCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->whiteCount) {
            $res['WhiteCount'] = $this->whiteCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoCcListCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackCount'])) {
            $model->blackCount = $map['BlackCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WhiteCount'])) {
            $model->whiteCount = $map['WhiteCount'];
        }

        return $model;
    }
}
