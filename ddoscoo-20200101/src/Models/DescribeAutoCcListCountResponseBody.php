<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoCcListCountResponseBody extends Model
{
    /**
     * @description The total number of IP addresses in the blacklist.
     *
     * @example 0
     *
     * @var int
     */
    public $blackCount;

    /**
     * @description The ID of the request.
     *
     * @example 5AC3785F-C789-4622-87A4-F58BE7F6B184
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of IP addresses in the whitelist.
     *
     * @example 2
     *
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
