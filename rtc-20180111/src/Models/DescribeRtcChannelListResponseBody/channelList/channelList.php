<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelListResponseBody\channelList\channelList\callArea;
use AlibabaCloud\Tea\Model;

class channelList extends Model
{
    /**
     * @var callArea
     */
    public $callArea;

    /**
     * @example testChannel
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 2018-01-29T02:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2018-01-29T01:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callArea) {
            $res['CallArea'] = null !== $this->callArea ? $this->callArea->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return channelList
     */
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
