<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo;

use AlibabaCloud\Tea\Model;

class channelMetric extends Model
{
    /**
     * @example example_channel
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 2019-06-06T18:57:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $pubUserCount;

    /**
     * @example 2019-06-06T17:57:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 25
     *
     * @var int
     */
    public $subUserCount;

    /**
     * @example 30
     *
     * @var int
     */
    public $userCount;
    protected $_name = [
        'channelId'    => 'ChannelId',
        'endTime'      => 'EndTime',
        'pubUserCount' => 'PubUserCount',
        'startTime'    => 'StartTime',
        'subUserCount' => 'SubUserCount',
        'userCount'    => 'UserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pubUserCount) {
            $res['PubUserCount'] = $this->pubUserCount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subUserCount) {
            $res['SubUserCount'] = $this->subUserCount;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelMetric
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PubUserCount'])) {
            $model->pubUserCount = $map['PubUserCount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubUserCount'])) {
            $model->subUserCount = $map['SubUserCount'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
