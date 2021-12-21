<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeRtcChannelListResponseBody;

use AlibabaCloud\Tea\Model;

class channels extends Model
{
    /**
     * @description 频道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 频道结束时间，UTC时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 是否已经结束
     *
     * @var bool
     */
    public $finished;

    /**
     * @description 频道开始时间，UTC格式
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'channelId' => 'ChannelId',
        'endTime'   => 'EndTime',
        'finished'  => 'Finished',
        'startTime' => 'StartTime',
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
        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channels
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
        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
