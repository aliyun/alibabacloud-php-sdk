<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\PreviewVoiceRequest;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var float
     */
    public $pitchRate;

    /**
     * @var float
     */
    public $speechRate;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'pitchRate' => 'PitchRate',
        'speechRate' => 'SpeechRate',
        'volume' => 'Volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pitchRate) {
            $res['PitchRate'] = $this->pitchRate;
        }

        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['PitchRate'])) {
            $model->pitchRate = $map['PitchRate'];
        }

        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }

        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
