<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponseBody\describeVsUpPeakPublishStreamDatas;
use AlibabaCloud\Tea\Model;

class DescribeVsUpPeakPublishStreamDataResponseBody extends Model
{
    /**
     * @var describeVsUpPeakPublishStreamDatas
     */
    public $describeVsUpPeakPublishStreamDatas;

    /**
     * @example 27A3C548-A699-48F9-97CD-F35D81075AF3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeVsUpPeakPublishStreamDatas' => 'DescribeVsUpPeakPublishStreamDatas',
        'requestId'                          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeVsUpPeakPublishStreamDatas) {
            $res['DescribeVsUpPeakPublishStreamDatas'] = null !== $this->describeVsUpPeakPublishStreamDatas ? $this->describeVsUpPeakPublishStreamDatas->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DescribeVsUpPeakPublishStreamDatas'])) {
            $model->describeVsUpPeakPublishStreamDatas = describeVsUpPeakPublishStreamDatas::fromMap($map['DescribeVsUpPeakPublishStreamDatas']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
