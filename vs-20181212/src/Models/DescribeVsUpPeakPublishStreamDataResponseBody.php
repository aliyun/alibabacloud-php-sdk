<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponseBody\describeVsUpPeakPublishStreamDatas;

class DescribeVsUpPeakPublishStreamDataResponseBody extends Model
{
    /**
     * @var describeVsUpPeakPublishStreamDatas
     */
    public $describeVsUpPeakPublishStreamDatas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeVsUpPeakPublishStreamDatas' => 'DescribeVsUpPeakPublishStreamDatas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->describeVsUpPeakPublishStreamDatas) {
            $this->describeVsUpPeakPublishStreamDatas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeVsUpPeakPublishStreamDatas) {
            $res['DescribeVsUpPeakPublishStreamDatas'] = null !== $this->describeVsUpPeakPublishStreamDatas ? $this->describeVsUpPeakPublishStreamDatas->toArray($noStream) : $this->describeVsUpPeakPublishStreamDatas;
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
        if (isset($map['DescribeVsUpPeakPublishStreamDatas'])) {
            $model->describeVsUpPeakPublishStreamDatas = describeVsUpPeakPublishStreamDatas::fromMap($map['DescribeVsUpPeakPublishStreamDatas']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
