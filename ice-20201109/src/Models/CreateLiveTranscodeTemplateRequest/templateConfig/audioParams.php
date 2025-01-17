<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateRequest\templateConfig;

use AlibabaCloud\Dara\Model;

class audioParams extends Model
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

        if (null !== $this->samplerate) {
            $res['Samplerate'] = $this->samplerate;
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

        if (isset($map['Samplerate'])) {
            $model->samplerate = $map['Samplerate'];
        }

        return $model;
    }
}
