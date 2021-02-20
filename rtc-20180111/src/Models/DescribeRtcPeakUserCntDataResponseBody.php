<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakUserCntDataResponseBody\peakUserCntDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeRtcPeakUserCntDataResponseBody extends Model
{
    /**
     * @var peakUserCntDataPerInterval
     */
    public $peakUserCntDataPerInterval;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'peakUserCntDataPerInterval' => 'PeakUserCntDataPerInterval',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakUserCntDataPerInterval) {
            $res['PeakUserCntDataPerInterval'] = null !== $this->peakUserCntDataPerInterval ? $this->peakUserCntDataPerInterval->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcPeakUserCntDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakUserCntDataPerInterval'])) {
            $model->peakUserCntDataPerInterval = peakUserCntDataPerInterval::fromMap($map['PeakUserCntDataPerInterval']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
