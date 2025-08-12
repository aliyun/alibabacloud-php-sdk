<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\transcodeParams;

use AlibabaCloud\Dara\Model;

class encodeParams extends Model
{
    /**
     * @var string
     */
    public $audioBitrate;

    /**
     * @var string
     */
    public $audioChannels;

    /**
     * @var string
     */
    public $audioOnly;

    /**
     * @var string
     */
    public $audioSampleRate;

    /**
     * @var string
     */
    public $enhancedParam;

    /**
     * @var string
     */
    public $videoBitrate;

    /**
     * @var string
     */
    public $videoCodec;

    /**
     * @var string
     */
    public $videoFramerate;

    /**
     * @var string
     */
    public $videoGop;

    /**
     * @var string
     */
    public $videoHeight;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
