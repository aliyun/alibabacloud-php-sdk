<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session\output\audio\voice;

class audio extends Model
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
     * @var int
     */
    public $channels;

    /**
     * @var voice
     */
    public $voice;
    protected $_name = [
        'format' => 'format',
        'sampleRate' => 'sample_rate',
        'channels' => 'channels',
        'voice' => 'voice',
    ];

    public function validate()
    {
        if (null !== $this->voice) {
            $this->voice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        if (null !== $this->sampleRate) {
            $res['sample_rate'] = $this->sampleRate;
        }

        if (null !== $this->channels) {
            $res['channels'] = $this->channels;
        }

        if (null !== $this->voice) {
            $res['voice'] = null !== $this->voice ? $this->voice->toArray($noStream) : $this->voice;
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

        if (isset($map['sample_rate'])) {
            $model->sampleRate = $map['sample_rate'];
        }

        if (isset($map['channels'])) {
            $model->channels = $map['channels'];
        }

        if (isset($map['voice'])) {
            $model->voice = voice::fromMap($map['voice']);
        }

        return $model;
    }
}
