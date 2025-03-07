<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\transcode\overwriteParams;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\transcode\overwriteParams\audio\volume;
use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @description The audio bitrate of the output file.
     *
     *   Valid values: [8,1000].
     *   Unit: Kbit/s.
     *   Default value: 128.
     *
     * @example 128
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The number of sound channels. Default value: 2.
     *
     * @example 2
     *
     * @var string
     */
    public $channels;

    /**
     * @description The audio codec. Valid values: AAC, MP3, VORBIS, and FLAC. Default value: AAC.
     *
     * @example AAC
     *
     * @var string
     */
    public $codec;

    /**
     * @description The audio codec profile. If the Codec parameter is set to AAC, the valid values are aac_low, aac_he, aac_he_v2, aac_ld, and aac_eld.
     *
     * @example aac_low
     *
     * @var string
     */
    public $profile;

    /**
     * @description Specifies whether to delete the audio stream.
     *
     * @example false
     *
     * @var string
     */
    public $remove;

    /**
     * @description The sampling rate.
     *
     *   Valid values: 22050, 32000, 44100, 48000, and 96000. Default value: 44100.
     *   Unit: Hz.
     *
     * @example 44100
     *
     * @var string
     */
    public $samplerate;

    /**
     * @description The volume configurations.
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
