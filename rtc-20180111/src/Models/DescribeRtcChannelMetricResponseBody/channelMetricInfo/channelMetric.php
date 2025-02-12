<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcChannelMetricResponseBody\channelMetricInfo;

use AlibabaCloud\Dara\Model;

class channelMetric extends Model
{
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $pubUserCount;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var int
     */
    public $subUserCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
