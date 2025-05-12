<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\audio\volume;

class audio extends Model
{
    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $channels;

    /**
     * @var string
     */
    public $codec;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $qscale;

    /**
     * @var string
     */
    public $samplerate;

    /**
     * @var volume
     */
    public $volume;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'channels' => 'Channels',
        'codec' => 'Codec',
        'profile' => 'Profile',
        'qscale' => 'Qscale',
        'samplerate' => 'Samplerate',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        if (null !== $this->volume) {
            $this->volume->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
        }

        if (null !== $this->volume) {
            $res['Volume'] = null !== $this->volume ? $this->volume->toArray($noStream) : $this->volume;
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

        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }

        if (isset($map['Volume'])) {
            $model->volume = volume::fromMap($map['Volume']);
        }

        return $model;
    }
}
