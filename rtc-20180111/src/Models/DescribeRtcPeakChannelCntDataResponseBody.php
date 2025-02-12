<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody\peakChannelCntDataPerInterval;

class DescribeRtcPeakChannelCntDataResponseBody extends Model
{
    /**
     * @var peakChannelCntDataPerInterval
     */
    public $peakChannelCntDataPerInterval;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'peakChannelCntDataPerInterval' => 'PeakChannelCntDataPerInterval',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->peakChannelCntDataPerInterval) {
            $this->peakChannelCntDataPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->peakChannelCntDataPerInterval) {
            $res['PeakChannelCntDataPerInterval'] = null !== $this->peakChannelCntDataPerInterval ? $this->peakChannelCntDataPerInterval->toArray($noStream) : $this->peakChannelCntDataPerInterval;
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
        if (isset($map['PeakChannelCntDataPerInterval'])) {
            $model->peakChannelCntDataPerInterval = peakChannelCntDataPerInterval::fromMap($map['PeakChannelCntDataPerInterval']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
