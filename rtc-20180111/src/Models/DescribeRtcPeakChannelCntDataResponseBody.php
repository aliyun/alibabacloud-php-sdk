<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody\peakChannelCntDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeRtcPeakChannelCntDataResponseBody extends Model
{
    /**
     * @var peakChannelCntDataPerInterval
     */
    public $peakChannelCntDataPerInterval;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'peakChannelCntDataPerInterval' => 'PeakChannelCntDataPerInterval',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakChannelCntDataPerInterval) {
            $res['PeakChannelCntDataPerInterval'] = null !== $this->peakChannelCntDataPerInterval ? $this->peakChannelCntDataPerInterval->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcPeakChannelCntDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakChannelCntDataPerInterval'])) {
            $model->peakChannelCntDataPerInterval = peakChannelCntDataPerInterval::fromMap($map['PeakChannelCntDataPerInterval']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
