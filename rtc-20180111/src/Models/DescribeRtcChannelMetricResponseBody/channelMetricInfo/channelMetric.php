<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo;

use AlibabaCloud\Tea\Model;

class channelMetric extends Model
{
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
    public $subUserCount;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var int
     */
    public $pubUserCount;
    protected $_name = [
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'subUserCount' => 'SubUserCount',
        'channelId'    => 'ChannelId',
        'userCount'    => 'UserCount',
        'pubUserCount' => 'PubUserCount',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subUserCount) {
            $res['SubUserCount'] = $this->subUserCount;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->pubUserCount) {
            $res['PubUserCount'] = $this->pubUserCount;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubUserCount'])) {
            $model->subUserCount = $map['SubUserCount'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['PubUserCount'])) {
            $model->pubUserCount = $map['PubUserCount'];
        }

        return $model;
    }
}
