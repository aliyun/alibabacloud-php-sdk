<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponse\describeUpPeakPublishStreamDatas;
use AlibabaCloud\Tea\Model;

class DescribeUpPeakPublishStreamDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var describeUpPeakPublishStreamDatas
     */
    public $describeUpPeakPublishStreamDatas;
    protected $_name = [
        'requestId'                        => 'RequestId',
        'describeUpPeakPublishStreamDatas' => 'DescribeUpPeakPublishStreamDatas',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('describeUpPeakPublishStreamDatas', $this->describeUpPeakPublishStreamDatas, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->describeUpPeakPublishStreamDatas) {
            $res['DescribeUpPeakPublishStreamDatas'] = null !== $this->describeUpPeakPublishStreamDatas ? $this->describeUpPeakPublishStreamDatas->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpPeakPublishStreamDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DescribeUpPeakPublishStreamDatas'])) {
            $model->describeUpPeakPublishStreamDatas = describeUpPeakPublishStreamDatas::fromMap($map['DescribeUpPeakPublishStreamDatas']);
        }

        return $model;
    }
}
