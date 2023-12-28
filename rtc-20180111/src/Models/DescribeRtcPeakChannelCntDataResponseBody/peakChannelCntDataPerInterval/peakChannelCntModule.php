<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody\peakChannelCntDataPerInterval;

use AlibabaCloud\Tea\Model;

class peakChannelCntModule extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $activeChannelPeak;

    /**
     * @example 2018-01-29T00:01:00Z
     *
     * @var string
     */
    public $activeChannelPeakTime;

    /**
     * @example 2018-01-29T00:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'activeChannelPeak'     => 'ActiveChannelPeak',
        'activeChannelPeakTime' => 'ActiveChannelPeakTime',
        'timeStamp'             => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeChannelPeak) {
            $res['ActiveChannelPeak'] = $this->activeChannelPeak;
        }
        if (null !== $this->activeChannelPeakTime) {
            $res['ActiveChannelPeakTime'] = $this->activeChannelPeakTime;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return peakChannelCntModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveChannelPeak'])) {
            $model->activeChannelPeak = $map['ActiveChannelPeak'];
        }
        if (isset($map['ActiveChannelPeakTime'])) {
            $model->activeChannelPeakTime = $map['ActiveChannelPeakTime'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
