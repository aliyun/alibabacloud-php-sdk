<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams\audio\volume;
use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @description 输出文件的音频码率。
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description 声道数。
     *
     * @var string
     */
    public $channels;

    /**
     * @description 音频编解码格式，AAC、MP3、VORBIS、FLAC。
     *
     * @var string
     */
    public $codec;

    /**
     * @description 音频编码预置。
     *
     * @var string
     */
    public $profile;

    /**
     * @description 是否删除音频流。
     *
     * @var string
     */
    public $remove;

    /**
     * @description 采样率。
     *
     * @var string
     */
    public $samplerate;

    /**
     * @description 音量控制
     *
     * @var volume
     */
    public $volume;
    protected $_name = [
        'bitrate'    => 'Bitrate',
        'channels'   => 'Channels',
        'codec'      => 'Codec',
        'profile'    => 'Profile',
        'remove'     => 'Remove',
        'samplerate' => 'Samplerate',
        'volume'     => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->remove) {
            $res['Remove'] = $this->remove;
        }
        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
        }
        if (null !== $this->volume) {
            $res['Volume'] = null !== $this->volume ? $this->volume->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Channels'])) {
            $model->channels = $map['Channels'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Remove'])) {
            $model->remove = $map['Remove'];
        }
        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }
        if (isset($map['Volume'])) {
            $model->volume = volume::fromMap($map['Volume']);
        }

        return $model;
    }
}
