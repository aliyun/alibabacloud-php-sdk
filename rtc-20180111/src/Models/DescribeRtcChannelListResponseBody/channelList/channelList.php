<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList\channelList\callArea;

class channelList extends Model
{
    /**
     * @var callArea
     */
    public $callArea;
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var int
     */
    public $totalUserCnt;
    protected $_name = [
        'callArea'     => 'CallArea',
        'channelId'    => 'ChannelId',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'totalUserCnt' => 'TotalUserCnt',
    ];

    public function validate()
    {
        if (null !== $this->callArea) {
            $this->callArea->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callArea) {
            $res['CallArea'] = null !== $this->callArea ? $this->callArea->toArray($noStream) : $this->callArea;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->totalUserCnt) {
            $res['TotalUserCnt'] = $this->totalUserCnt;
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
        if (isset($map['CallArea'])) {
            $model->callArea = callArea::fromMap($map['CallArea']);
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TotalUserCnt'])) {
            $model->totalUserCnt = $map['TotalUserCnt'];
        }

        return $model;
    }
}
