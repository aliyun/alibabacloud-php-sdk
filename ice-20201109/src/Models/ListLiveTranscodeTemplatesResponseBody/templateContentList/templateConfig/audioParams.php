<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponseBody\templateContentList\templateConfig;

use AlibabaCloud\Tea\Model;

class audioParams extends Model
{
    /**
     * @description The audio bitrate.
     *
     * @example 1000
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The number of sound channels.
     *
     * @example 2
     *
     * @var string
     */
    public $channels;

    /**
     * @description The audio codec.
     *
     * @example AAC
     *
     * @var string
     */
    public $codec;

    /**
     * @description The encoding profile.
     *
     * @example aac_low
     *
     * @var string
     */
    public $profile;

    /**
     * @description The audio sampling rate.
     *
     * @example 44100
     *
     * @var string
     */
    public $samplerate;
    protected $_name = [
        'bitrate'    => 'Bitrate',
        'channels'   => 'Channels',
        'codec'      => 'Codec',
        'profile'    => 'Profile',
        'samplerate' => 'Samplerate',
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
        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioParams
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
        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }

        return $model;
    }
}
