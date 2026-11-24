<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdated\session;

use AlibabaCloud\Dara\Model;

class inputAudio extends Model
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
    protected $_name = [
        'format' => 'format',
        'sampleRate' => 'sample_rate',
        'channels' => 'channels',
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
            $res['sample_rate'] = $this->sampleRate;
        }

        if (null !== $this->channels) {
            $res['channels'] = $this->channels;
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

        return $model;
    }
}
