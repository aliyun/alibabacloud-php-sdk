<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcScaleResponseBody;

use AlibabaCloud\Tea\Model;

class scale extends Model
{
    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $channelCount;

    /**
     * @var int
     */
    public $audioDuration;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var int
     */
    public $videoDuration;
    protected $_name = [
        'sessionCount'  => 'SessionCount',
        'time'          => 'Time',
        'channelCount'  => 'ChannelCount',
        'audioDuration' => 'AudioDuration',
        'userCount'     => 'UserCount',
        'videoDuration' => 'VideoDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->channelCount) {
            $res['ChannelCount'] = $this->channelCount;
        }
        if (null !== $this->audioDuration) {
            $res['AudioDuration'] = $this->audioDuration;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->videoDuration) {
            $res['VideoDuration'] = $this->videoDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scale
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['ChannelCount'])) {
            $model->channelCount = $map['ChannelCount'];
        }
        if (isset($map['AudioDuration'])) {
            $model->audioDuration = $map['AudioDuration'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['VideoDuration'])) {
            $model->videoDuration = $map['VideoDuration'];
        }

        return $model;
    }
}
