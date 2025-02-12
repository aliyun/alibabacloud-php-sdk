<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
