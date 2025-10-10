<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakChannelCntDataResponseBody\peakChannelCntDataPerInterval;

use AlibabaCloud\Dara\Model;

class peakChannelCntModule extends Model
{
    /**
     * @var int
     */
    public $activeChannelPeak;

    /**
     * @var string
     */
    public $activeChannelPeakTime;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'activeChannelPeak' => 'ActiveChannelPeak',
        'activeChannelPeakTime' => 'ActiveChannelPeakTime',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
