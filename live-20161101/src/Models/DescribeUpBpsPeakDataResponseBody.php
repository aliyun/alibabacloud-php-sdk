<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakDataResponseBody\describeUpPeakTraffics;

class DescribeUpBpsPeakDataResponseBody extends Model
{
    /**
     * @var describeUpPeakTraffics
     */
    public $describeUpPeakTraffics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeUpPeakTraffics' => 'DescribeUpPeakTraffics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->describeUpPeakTraffics) {
            $this->describeUpPeakTraffics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeUpPeakTraffics) {
            $res['DescribeUpPeakTraffics'] = null !== $this->describeUpPeakTraffics ? $this->describeUpPeakTraffics->toArray($noStream) : $this->describeUpPeakTraffics;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DescribeUpPeakTraffics'])) {
            $model->describeUpPeakTraffics = describeUpPeakTraffics::fromMap($map['DescribeUpPeakTraffics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
