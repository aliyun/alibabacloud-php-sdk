<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\audio;

use AlibabaCloud\Tea\Model;

class transcodeAudio extends Model
{
    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var string
     */
    public $bitrateOption;

    /**
     * @var int
     */
    public $channel;

    /**
     * @var string
     */
    public $codec;

    /**
     * @var int
     */
    public $quality;

    /**
     * @var int
     */
    public $sampleRate;

    /**
     * @var string
     */
    public $sampleRateOption;
    protected $_name = [
        'bitrate'          => 'Bitrate',
        'bitrateOption'    => 'BitrateOption',
        'channel'          => 'Channel',
        'codec'            => 'Codec',
        'quality'          => 'Quality',
        'sampleRate'       => 'SampleRate',
        'sampleRateOption' => 'SampleRateOption',
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
        if (null !== $this->bitrateOption) {
            $res['BitrateOption'] = $this->bitrateOption;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->sampleRateOption) {
            $res['SampleRateOption'] = $this->sampleRateOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeAudio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['BitrateOption'])) {
            $model->bitrateOption = $map['BitrateOption'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['SampleRateOption'])) {
            $model->sampleRateOption = $map['SampleRateOption'];
        }

        return $model;
    }
}
