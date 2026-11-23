<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceCommand\payload\parameters;

use AlibabaCloud\Dara\Model;

class tts extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $sampleRate;

    /**
     * @var string
     */
    public $voice;

    /**
     * @var int
     */
    public $volume;

    /**
     * @var float
     */
    public $rate;
    protected $_name = [
        'format' => 'format',
        'sampleRate' => 'sampleRate',
        'voice' => 'voice',
        'volume' => 'volume',
        'rate' => 'rate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->sampleRate) {
            $res['sampleRate'] = $this->sampleRate;
        }

        if (null !== $this->voice) {
            $res['voice'] = $this->voice;
        }

        if (null !== $this->volume) {
            $res['volume'] = $this->volume;
        }

        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
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
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        if (isset($map['sampleRate'])) {
            $model->sampleRate = $map['sampleRate'];
        }

        if (isset($map['voice'])) {
            $model->voice = $map['voice'];
        }

        if (isset($map['volume'])) {
            $model->volume = $map['volume'];
        }

        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }

        return $model;
    }
}
