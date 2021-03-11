<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponseBody\describeVsUpPeakPublishStreamDatas;
use AlibabaCloud\Tea\Model;

class DescribeVsUpPeakPublishStreamDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var describeVsUpPeakPublishStreamDatas
     */
    public $describeVsUpPeakPublishStreamDatas;
    protected $_name = [
        'requestId'                          => 'RequestId',
        'describeVsUpPeakPublishStreamDatas' => 'DescribeVsUpPeakPublishStreamDatas',
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
        if (null !== $this->describeVsUpPeakPublishStreamDatas) {
            $res['DescribeVsUpPeakPublishStreamDatas'] = null !== $this->describeVsUpPeakPublishStreamDatas ? $this->describeVsUpPeakPublishStreamDatas->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsUpPeakPublishStreamDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DescribeVsUpPeakPublishStreamDatas'])) {
            $model->describeVsUpPeakPublishStreamDatas = describeVsUpPeakPublishStreamDatas::fromMap($map['DescribeVsUpPeakPublishStreamDatas']);
        }

        return $model;
    }
}
