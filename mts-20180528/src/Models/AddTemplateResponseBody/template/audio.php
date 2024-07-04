<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\AddTemplateResponseBody\template;

use AlibabaCloud\SDK\Mts\V20180528\Models\AddTemplateResponseBody\template\audio\volume;
use AlibabaCloud\Tea\Model;

class audio extends Model
{
    /**
     * @example 50
     *
     * @var string
     */
    public $bitrate;

    /**
     * @example 2
     *
     * @var string
     */
    public $channels;

    /**
     * @example acc
     *
     * @var string
     */
    public $codec;

    /**
     * @example aac_eld
     *
     * @var string
     */
    public $profile;

    /**
     * @example 20
     *
     * @var string
     */
    public $qscale;

    /**
     * @example false
     *
     * @var string
     */
    public $remove;

    /**
     * @example 22050
     *
     * @var string
     */
    public $samplerate;

    /**
     * @var volume
     */
    public $volume;
    protected $_name = [
        'bitrate'    => 'Bitrate',
        'channels'   => 'Channels',
        'codec'      => 'Codec',
        'profile'    => 'Profile',
        'qscale'     => 'Qscale',
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
