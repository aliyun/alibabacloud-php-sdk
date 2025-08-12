<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponseBody\describeUpPeakPublishStreamDatas;

class DescribeUpPeakPublishStreamDataResponseBody extends Model
{
    /**
     * @var describeUpPeakPublishStreamDatas
     */
    public $describeUpPeakPublishStreamDatas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describeUpPeakPublishStreamDatas' => 'DescribeUpPeakPublishStreamDatas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->describeUpPeakPublishStreamDatas) {
            $this->describeUpPeakPublishStreamDatas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->describeUpPeakPublishStreamDatas) {
            $res['DescribeUpPeakPublishStreamDatas'] = null !== $this->describeUpPeakPublishStreamDatas ? $this->describeUpPeakPublishStreamDatas->toArray($noStream) : $this->describeUpPeakPublishStreamDatas;
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
        if (isset($map['DescribeUpPeakPublishStreamDatas'])) {
            $model->describeUpPeakPublishStreamDatas = describeUpPeakPublishStreamDatas::fromMap($map['DescribeUpPeakPublishStreamDatas']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
