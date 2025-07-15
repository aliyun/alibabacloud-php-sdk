<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponseBody\describeUpPeakPublishStreamDatas;
use AlibabaCloud\Tea\Model;

class DescribeUpPeakPublishStreamDataResponseBody extends Model
{
    /**
     * @description The information about the peak number of concurrently ingested streams on each day.
     *
     * @var describeUpPeakPublishStreamDatas
     */
    public $describeUpPeakPublishStreamDatas;

    /**
     * @description The request ID.
     *
     * @example 6CFDE7AB-571A-14EA-B072-989FF753****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeUpPeakPublishStreamDatas' => 'DescribeUpPeakPublishStreamDatas',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeUpPeakPublishStreamDatas) {
            $res['DescribeUpPeakPublishStreamDatas'] = null !== $this->describeUpPeakPublishStreamDatas ? $this->describeUpPeakPublishStreamDatas->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpPeakPublishStreamDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeUpPeakPublishStreamDatas'])) {
            $model->describeUpPeakPublishStreamDatas = describeUpPeakPublishStreamDatas::fromMap($map['DescribeUpPeakPublishStreamDatas']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
