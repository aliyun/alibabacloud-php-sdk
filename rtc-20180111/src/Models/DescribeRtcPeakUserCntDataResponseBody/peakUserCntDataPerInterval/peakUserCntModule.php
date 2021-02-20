<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcPeakUserCntDataResponseBody\peakUserCntDataPerInterval;

use AlibabaCloud\Tea\Model;

class peakUserCntModule extends Model
{
    /**
     * @var string
     */
    public $activeUserPeakTime;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $activeUserPeak;
    protected $_name = [
        'activeUserPeakTime' => 'ActiveUserPeakTime',
        'timeStamp'          => 'TimeStamp',
        'activeUserPeak'     => 'ActiveUserPeak',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeUserPeakTime) {
            $res['ActiveUserPeakTime'] = $this->activeUserPeakTime;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->activeUserPeak) {
            $res['ActiveUserPeak'] = $this->activeUserPeak;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return peakUserCntModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveUserPeakTime'])) {
            $model->activeUserPeakTime = $map['ActiveUserPeakTime'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['ActiveUserPeak'])) {
            $model->activeUserPeak = $map['ActiveUserPeak'];
        }

        return $model;
    }
}
