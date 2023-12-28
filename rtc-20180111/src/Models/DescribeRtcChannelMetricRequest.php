<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeRtcChannelMetricRequest extends Model
{
    /**
     * @example aoe****
     *
     * @var string
     */
    public $appId;

    /**
     * @example testId
     *
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 2018-01-29T00:00:00Z
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'appId'     => 'AppId',
        'channelId' => 'ChannelId',
        'ownerId'   => 'OwnerId',
        'timePoint' => 'TimePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcChannelMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
