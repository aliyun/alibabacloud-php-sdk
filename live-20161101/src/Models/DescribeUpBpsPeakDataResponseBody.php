<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponseBody\describeUpPeakTraffics;
use AlibabaCloud\Tea\Model;

class DescribeUpBpsPeakDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var describeUpPeakTraffics
     */
    public $describeUpPeakTraffics;
    protected $_name = [
        'requestId'              => 'RequestId',
        'describeUpPeakTraffics' => 'DescribeUpPeakTraffics',
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
        if (null !== $this->describeUpPeakTraffics) {
            $res['DescribeUpPeakTraffics'] = null !== $this->describeUpPeakTraffics ? $this->describeUpPeakTraffics->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DescribeUpPeakTraffics'])) {
            $model->describeUpPeakTraffics = describeUpPeakTraffics::fromMap($map['DescribeUpPeakTraffics']);
        }

        return $model;
    }
}
