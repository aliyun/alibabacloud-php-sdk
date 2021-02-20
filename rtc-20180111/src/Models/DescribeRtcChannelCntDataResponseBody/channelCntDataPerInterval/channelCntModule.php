<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelCntDataResponseBody\channelCntDataPerInterval;

use AlibabaCloud\Tea\Model;

class channelCntModule extends Model
{
    /**
     * @var int
     */
    public $activeChannelCnt;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'activeChannelCnt' => 'ActiveChannelCnt',
        'timeStamp'        => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeChannelCnt) {
            $res['ActiveChannelCnt'] = $this->activeChannelCnt;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelCntModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveChannelCnt'])) {
            $model->activeChannelCnt = $map['ActiveChannelCnt'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
