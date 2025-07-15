<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos;

use AlibabaCloud\Tea\Model;

class frameRateAndBitRateInfo extends Model
{
    /**
     * @description The audio frame rate of the live stream. Unit: FPS.
     *
     * @example 42.9
     *
     * @var float
     */
    public $audioFrameRate;

    /**
     * @description The bitrate of the live stream. Unit: bit/s.
     *
     * @example 30693.96
     *
     * @var float
     */
    public $bitRate;

    /**
     * @description The URL of the live stream.
     *
     * @example rtmp://demo.aliyundoc.com/test/liveStream****_3_4
     *
     * @var string
     */
    public $streamUrl;

    /**
     * @description The video frame rate of the live stream. Unit: frames per second (FPS).
     *
     * @example 24.9
     *
     * @var float
     */
    public $videoFrameRate;
    protected $_name = [
        'audioFrameRate' => 'AudioFrameRate',
        'bitRate' => 'BitRate',
        'streamUrl' => 'StreamUrl',
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
        if (isset($map['VideoFrameRate'])) {
            $model->videoFrameRate = $map['VideoFrameRate'];
        }

        return $model;
    }
}
