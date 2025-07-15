<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponseBody\describeUpPeakTraffics;
use AlibabaCloud\Tea\Model;

class DescribeUpBpsPeakDataResponseBody extends Model
{
    /**
     * @description The information about peak inbound bandwidth on each day.
     *
     * @var describeUpPeakTraffics
     */
    public $describeUpPeakTraffics;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeUpPeakTraffics' => 'DescribeUpPeakTraffics',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->describeUpPeakTraffics) {
            $res['DescribeUpPeakTraffics'] = null !== $this->describeUpPeakTraffics ? $this->describeUpPeakTraffics->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpBpsPeakDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribeUpPeakTraffics'])) {
            $model->describeUpPeakTraffics = describeUpPeakTraffics::fromMap($map['DescribeUpPeakTraffics']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
