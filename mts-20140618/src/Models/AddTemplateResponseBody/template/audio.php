<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template;

use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\audio\volume;
use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @description The audio bitrate of the output file.
     *
     *   Unit: Kbit/s.
     *   Default value: **128**.
     *
     * @example 500
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The number of sound channels. Default value: **2**.
     *
     * @example 2
     *
     * @var string
     */
    public $channels;

    /**
     * @description The audio codec format. Default value: **aac**. Valid values:
     *
     *   **aac**
     *   **mp3**
     *   **vorbis**
     *   **flac**
     *
     * @example aac
     *
     * @var string
     */
    public $codec;

    /**
     * @description The codec profile of the audio. Valid values if the **Codec** parameter is set to **AAC**:
     *
     *   **aac_low**
     *   **aac_he**
     *   **aac_he_v2**
     *   **aac_ld**
     *   **aac_eld**
     *
     * @example aac_low
     *
     * @var string
     */
    public $profile;

    /**
     * @description The level of the independent denoising algorithm.
     *
     * @example 5
     *
     * @var string
     */
    public $qscale;

    /**
     * @description Indicates whether the audio stream is deleted.
     *
     *   **true**: The audio stream is deleted.
     *   **false**: The audio stream is retained.
     *   Default value: **false**.
     *
     * @example true
     *
     * @var string
     */
    public $remove;

    /**
     * @description The sampling rate.
     *
     *   Unit: Hz.
     *   Default value: **44100**.
     *
     * @example 44100
     *
     * @var string
     */
    public $samplerate;

    /**
     * @description The volume control configurations
     *
     * @var volume
     */
    public $volume;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'channels' => 'Channels',
        'codec' => 'Codec',
        'profile' => 'Profile',
        'qscale' => 'Qscale',
        'remove' => 'Remove',
        'samplerate' => 'Samplerate',
        'volume' => 'Volume',
    ];

    public function validate() {}

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
        if (null !== $this->qscale) {
            $res['Qscale'] = $this->qscale;
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
        if (isset($map['Qscale'])) {
            $model->qscale = $map['Qscale'];
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
