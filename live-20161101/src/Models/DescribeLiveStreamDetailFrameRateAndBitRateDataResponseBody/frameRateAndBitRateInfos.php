<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamDetailFrameRateAndBitRateDataResponseBody;

use AlibabaCloud\Tea\Model;

class frameRateAndBitRateInfos extends Model
{
    /**
     * @description The audio bitrate of the live stream. Unit: bit/s.
     *
     * @example 200
     *
     * @var float
     */
    public $audioBitRate;

    /**
     * @description The audio frame rate of the live stream. Unit: FPS.
     *
     * @example 60
     *
     * @var float
     */
    public $audioFrameRate;

    /**
     * @description The bitrate of the live stream. Unit: bit/s.
     *
     * @example 1420
     *
     * @var float
     */
    public $bitRate;

    /**
     * @description The URL of the live stream.
     *
     * @example rtmp://example.com/AppName/exampleStreamName
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
     * @description The video bitrate of the live stream. Unit: bit/s.
     *
     * @example 1200
     *
     * @var float
     */
    public $videoBitRate;

    /**
     * @description The video frame rate of the live stream. Unit: frames per second (FPS).
     *
     * @example 30
     *
     * @var float
     */
    public $videoFrameRate;
    protected $_name = [
        'audioBitRate' => 'AudioBitRate',
        'audioFrameRate' => 'AudioFrameRate',
        'bitRate' => 'BitRate',
        'streamUrl' => 'StreamUrl',
        'time' => 'Time',
        'videoBitRate' => 'VideoBitRate',
        'videoFrameRate' => 'VideoFrameRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioBitRate) {
            $res['AudioBitRate'] = $this->audioBitRate;
        }
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
        if (null !== $this->videoBitRate) {
            $res['VideoBitRate'] = $this->videoBitRate;
        }
        if (null !== $this->videoFrameRate) {
            $res['VideoFrameRate'] = $this->videoFrameRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameRateAndBitRateInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioBitRate'])) {
            $model->audioBitRate = $map['AudioBitRate'];
        }
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
        if (isset($map['VideoBitRate'])) {
            $model->videoBitRate = $map['VideoBitRate'];
        }
        if (isset($map['VideoFrameRate'])) {
            $model->videoFrameRate = $map['VideoFrameRate'];
        }

        return $model;
    }
}
