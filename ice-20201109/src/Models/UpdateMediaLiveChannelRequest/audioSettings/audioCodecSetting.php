<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\audioSettings;

use AlibabaCloud\Tea\Model;

class audioCodecSetting extends Model
{
    /**
     * @description The audio bitrate. Unit: bit/s. Valid values: 8000 to 1000000. The value must be divisible by 1000.
     *
     * @example 200000
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description The audio codec profile. When AudioCodec is set to aac, AAC-LOW and AAC-MAIN are supported. When AudioCodec is set to libfdk_aac, AAC-LOW, AAC-HE, and AAC-HEV2 are supported.
     *
     * @example AAC-LOW
     *
     * @var string
     */
    public $profile;

    /**
     * @description The audio sample rate. Unit: Hz. Valid values: 22050, 32000, 44100, 48000, and 96000.
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
