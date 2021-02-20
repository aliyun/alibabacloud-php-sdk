<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody\peakChannelCntDataPerInterval;

use AlibabaCloud\Tea\Model;

class peakChannelCntModule extends Model
{
    /**
     * @var string
     */
    public $activeChannelPeakTime;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $activeChannelPeak;
    protected $_name = [
        'activeChannelPeakTime' => 'ActiveChannelPeakTime',
        'timeStamp'             => 'TimeStamp',
        'activeChannelPeak'     => 'ActiveChannelPeak',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeChannelPeakTime) {
            $res['ActiveChannelPeakTime'] = $this->activeChannelPeakTime;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->activeChannelPeak) {
            $res['ActiveChannelPeak'] = $this->activeChannelPeak;
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
        if (isset($map['ActiveChannelPeakTime'])) {
            $model->activeChannelPeakTime = $map['ActiveChannelPeakTime'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['ActiveChannelPeak'])) {
            $model->activeChannelPeak = $map['ActiveChannelPeak'];
        }

        return $model;
    }
}
