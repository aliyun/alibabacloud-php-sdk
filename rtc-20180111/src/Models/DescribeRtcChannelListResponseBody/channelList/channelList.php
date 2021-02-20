<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList\channelList\callArea;
use AlibabaCloud\Tea\Model;

class channelList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $totalUserCnt;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var callArea
     */
    public $callArea;

    /**
     * @var string
     */
    public $channelId;
    protected $_name = [
        'endTime'      => 'EndTime',
        'totalUserCnt' => 'TotalUserCnt',
        'startTime'    => 'StartTime',
        'callArea'     => 'CallArea',
        'channelId'    => 'ChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->totalUserCnt) {
            $res['TotalUserCnt'] = $this->totalUserCnt;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->callArea) {
            $res['CallArea'] = null !== $this->callArea ? $this->callArea->toMap() : null;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TotalUserCnt'])) {
            $model->totalUserCnt = $map['TotalUserCnt'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['CallArea'])) {
            $model->callArea = callArea::fromMap($map['CallArea']);
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}
