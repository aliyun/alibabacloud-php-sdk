<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams;

use AlibabaCloud\Tea\Model;

class encodeParams extends Model
{
    /**
     * @description The bitrate of the audio. Unit: Kbit/s.
     *
     * @example 128
     *
     * @var string
     */
    public $audioBitrate;

    /**
     * @description The number of audio channels. Valid values: 1 and 2.
     *
     * @example 2
     *
     * @var string
     */
    public $audioChannels;

    /**
     * @description Indicates whether the output stream is an audio-only stream. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var string
     */
    public $audioOnly;

    /**
     * @description The audio sampling rate. Unit: Hz.
     *
     * @example 44100
     *
     * @var string
     */
    public $audioSampleRate;

    /**
     * @description The parameter for advanced video encoding. The value is a JSON string. Optional fields:
     *
     *   profile: the encoding level. If the video encoding format is set to H.264, the valid values of this field are baseline, main, and high.
     *   preset: adjusts the trade-off between encoding speed and video quality. Valid values: ultrafast, superfast, veryfast, faster, fast, medium, slow, slower, veryslow, and placebo. Each value specifies a level of trade-off between encoding speed and video quality. For example, the ultrafast preset has the fastest encoding speed but the lowest video quality, while the placebo preset sacrifices the encoding speed for the best video quality.
     *
     * @example {"profile": "high", "preset": "veryfast"}
     *
     * @var string
     */
    public $enhancedParam;

    /**
     * @description The bitrate of the video. Unit: Kbit/s.
     *
     * @example 3500
     *
     * @var string
     */
    public $videoBitrate;

    /**
     * @description The video encoding format. Default value: H.264.
     *
     * @example H.264
     *
     * @var string
     */
    public $videoCodec;

    /**
     * @description The frame rate of the video. Unit: frames per second (FPS).
     *
     * @example 25
     *
     * @var string
     */
    public $videoFramerate;

    /**
     * @description The group of pictures (GOP) size of the video.
     *
     * @example 20
     *
     * @var string
     */
    public $videoGop;

    /**
     * @description The height of the video. Unit: pixels.
     *
     * @example 1000
     *
     * @var string
     */
    public $videoHeight;

    /**
     * @description The width of the video. Unit: pixels.
     *
     * @example 1920
     *
     * @var string
     */
    public $videoWidth;
    protected $_name = [
        'audioBitrate' => 'AudioBitrate',
        'audioChannels' => 'AudioChannels',
        'audioOnly' => 'AudioOnly',
        'audioSampleRate' => 'AudioSampleRate',
        'enhancedParam' => 'EnhancedParam',
        'videoBitrate' => 'VideoBitrate',
        'videoCodec' => 'VideoCodec',
        'videoFramerate' => 'VideoFramerate',
        'videoGop' => 'VideoGop',
        'videoHeight' => 'VideoHeight',
        'videoWidth' => 'VideoWidth',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioBitrate) {
            $res['AudioBitrate'] = $this->audioBitrate;
        }
        if (null !== $this->audioChannels) {
            $res['AudioChannels'] = $this->audioChannels;
        }
        if (null !== $this->audioOnly) {
            $res['AudioOnly'] = $this->audioOnly;
        }
        if (null !== $this->audioSampleRate) {
            $res['AudioSampleRate'] = $this->audioSampleRate;
        }
        if (null !== $this->enhancedParam) {
            $res['EnhancedParam'] = $this->enhancedParam;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->videoCodec) {
            $res['VideoCodec'] = $this->videoCodec;
        }
        if (null !== $this->videoFramerate) {
            $res['VideoFramerate'] = $this->videoFramerate;
        }
        if (null !== $this->videoGop) {
            $res['VideoGop'] = $this->videoGop;
        }
        if (null !== $this->videoHeight) {
            $res['VideoHeight'] = $this->videoHeight;
        }
        if (null !== $this->videoWidth) {
            $res['VideoWidth'] = $this->videoWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return encodeParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioBitrate'])) {
            $model->audioBitrate = $map['AudioBitrate'];
        }
        if (isset($map['AudioChannels'])) {
            $model->audioChannels = $map['AudioChannels'];
        }
        if (isset($map['AudioOnly'])) {
            $model->audioOnly = $map['AudioOnly'];
        }
        if (isset($map['AudioSampleRate'])) {
            $model->audioSampleRate = $map['AudioSampleRate'];
        }
        if (isset($map['EnhancedParam'])) {
            $model->enhancedParam = $map['EnhancedParam'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['VideoCodec'])) {
            $model->videoCodec = $map['VideoCodec'];
        }
        if (isset($map['VideoFramerate'])) {
            $model->videoFramerate = $map['VideoFramerate'];
        }
        if (isset($map['VideoGop'])) {
            $model->videoGop = $map['VideoGop'];
        }
        if (isset($map['VideoHeight'])) {
            $model->videoHeight = $map['VideoHeight'];
        }
        if (isset($map['VideoWidth'])) {
            $model->videoWidth = $map['VideoWidth'];
        }

        return $model;
    }
}
