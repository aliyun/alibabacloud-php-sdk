<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponseBody\channels\audioSettings;

use AlibabaCloud\Tea\Model;

class audioCodecSetting extends Model
{
    /**
     * @description The audio bitrate. Unit: bit/s.
     *
     * @example 200000
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description The audio codec profile.
     *
     * @example AAC-LOW
     *
     * @var string
     */
    public $profile;

    /**
     * @description The audio sample rate. Unit: Hz.
     *
     * @example 44100
     *
     * @var int
     */
    public $sampleRate;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'profile' => 'Profile',
        'sampleRate' => 'SampleRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioCodecSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        return $model;
    }
}
