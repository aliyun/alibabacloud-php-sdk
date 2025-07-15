<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudRecordingRequest;

use AlibabaCloud\Tea\Model;

class mixTranscodeParams extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 300
     *
     * @var int
     */
    public $audioBitrate;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $audioChannels;

    /**
     * @description This parameter is required.
     *
     * @example 32000
     *
     * @var int
     */
    public $audioSampleRate;

    /**
     * @example 0
     *
     * @var int
     */
    public $frameFillType;

    /**
     * @example 5000
     *
     * @var int
     */
    public $videoBitrate;

    /**
     * @example H.264
     *
     * @var string
     */
    public $videoCodec;

    /**
     * @example 30
     *
     * @var int
     */
    public $videoFramerate;

    /**
     * @example 30
     *
     * @var int
     */
    public $videoGop;

    /**
     * @example 480
     *
     * @var int
     */
    public $videoHeight;

    /**
     * @example 640
     *
     * @var int
     */
    public $videoWidth;
    protected $_name = [
        'audioBitrate' => 'AudioBitrate',
        'audioChannels' => 'AudioChannels',
        'audioSampleRate' => 'AudioSampleRate',
        'frameFillType' => 'FrameFillType',
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
        if (null !== $this->audioSampleRate) {
            $res['AudioSampleRate'] = $this->audioSampleRate;
        }
        if (null !== $this->frameFillType) {
            $res['FrameFillType'] = $this->frameFillType;
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
     * @return mixTranscodeParams
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
        if (isset($map['AudioSampleRate'])) {
            $model->audioSampleRate = $map['AudioSampleRate'];
        }
        if (isset($map['FrameFillType'])) {
            $model->frameFillType = $map['FrameFillType'];
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
