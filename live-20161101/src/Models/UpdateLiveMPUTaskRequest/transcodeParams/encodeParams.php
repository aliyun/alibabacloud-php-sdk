<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams;

use AlibabaCloud\Tea\Model;

class encodeParams extends Model
{
    /**
     * @description The bitrate of the audio. Valid values: [8,500]. Unit: Kbit/s.
     *
     * @example 128
     *
     * @var string
     */
    public $audioBitrate;

    /**
     * @description The number of sound channels. Valid values: 1 and 2.
     *
     * @example 2
     *
     * @var string
     */
    public $audioChannels;

    /**
     * @description Specifies whether the output stream is an audio-only stream. Valid values:
     *
     *   **true**: The output stream is an audio-only stream. If you set this parameter to true, you need to configure only audio-related parameters under EncodeParams.
     *   **false** (default): The output stream is not an audio-only stream. If you set this parameter to false, you need to configure all parameters under EncodeParams, except the VideoCodec and EnhancedParam parameters.
     *
     * @example false
     *
     * @var string
     */
    public $audioOnly;

    /**
     * @description The audio sampling rate. Valid values: 8000, 16000, 32000, 44100, and 48000. Unit: Hz.
     *
     * @example 44100
     *
     * @var string
     */
    public $audioSampleRate;

    /**
     * @description The parameter used for encoding enhancement, which is a JSON string. The parameter includes the optional profile and preset fields.
     *
     *   profile: the encoding level. If the video codec is H.264, the valid values of this field are baseline, main, and high. If the video codec is H.265, the valid value of this field is main.
     *   preset: adjusts the trade-off between encoding speed and video quality. The valid values of this field are ultrafast, superfast, veryfast, faster, fast, medium, slow, slower, veryslow, and placebo. Each value specifies a level of trade-off between encoding speed and video quality. For example, the ultrafast preset has the fastest encoding speed but the lowest video quality, while the placebo preset sacrifices the encoding speed for the best video quality.
     *
     * >  A value of superfast for the preset field is suitable for real-time communication scenarios. We recommend that you not set the field if you are not a professional encoding engineer.
     *
     * @example {"profile": "high", "preset": "veryfast"}
     *
     * @var string
     */
    public $enhancedParam;

    /**
     * @description The bitrate of the video. Valid values: [1,10000]. Unit: Kbit/s.
     *
     * @example 3500
     *
     * @var string
     */
    public $videoBitrate;

    /**
     * @description The video codec. Valid values:
     *
     *   H.264 (default)
     *   H.265
     *
     * @example H.264
     *
     * @var string
     */
    public $videoCodec;

    /**
     * @description The frame rate of the video. Valid values: [1,60]. Unit: frames per second (FPS).
     *
     * @example 25
     *
     * @var string
     */
    public $videoFramerate;

    /**
     * @description The group of pictures (GOP) size of the video. Valid values: [1,60].
     *
     * @example 20
     *
     * @var string
     */
    public $videoGop;

    /**
     * @description The height of the video. Valid values: [0,1920]. Unit: pixels.
     *
     * @example 1000
     *
     * @var string
     */
    public $videoHeight;

    /**
     * @description The width of the video. Valid values: [0,1920]. Unit: pixels.
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
