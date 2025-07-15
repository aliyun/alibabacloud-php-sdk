<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamBitRateDataResponseBody\frameRateAndBitRateInfos;

use AlibabaCloud\Tea\Model;

class frameRateAndBitRateInfo extends Model
{
    /**
     * @description The audio frame rate of the live stream. Unit: FPS.
     *
     * @example 100
     *
     * @var float
     */
    public $audioFrameRate;

    /**
     * @description The bitrate of the live stream. Unit: bit/s.
     *
     * @example 600
     *
     * @var float
     */
    public $bitRate;

    /**
     * @description The URL of the live stream.
     *
     * @var string
     */
    public $streamUrl;

    /**
     * @description The time when the data was collected. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-09-13T16:04:00Z
     *
     * @var string
     */
    public $time;

    /**
     * @description The video frame rate of the live stream. Unit: frames per second (FPS).
     *
     * @example 30
     *
     * @var float
     */
    public $videoFrameRate;
    protected $_name = [
        'audioFrameRate' => 'AudioFrameRate',
        'bitRate' => 'BitRate',
        'streamUrl' => 'StreamUrl',
        'time' => 'Time',
        'videoFrameRate' => 'VideoFrameRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFrameRate) {
            $res['AudioFrameRate'] = $this->audioFrameRate;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->videoFrameRate) {
            $res['VideoFrameRate'] = $this->videoFrameRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameRateAndBitRateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFrameRate'])) {
            $model->audioFrameRate = $map['AudioFrameRate'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['VideoFrameRate'])) {
            $model->videoFrameRate = $map['VideoFrameRate'];
        }

        return $model;
    }
}
