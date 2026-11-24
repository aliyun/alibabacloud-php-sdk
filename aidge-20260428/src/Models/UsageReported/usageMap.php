<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\UsageReported;

use AlibabaCloud\Dara\Model;

class usageMap extends Model
{
    /**
     * @var string
     */
    public $inputAudioSeconds;

    /**
     * @var string
     */
    public $voiceTranslationType;
    protected $_name = [
        'inputAudioSeconds' => 'InputAudioSeconds',
        'voiceTranslationType' => 'VoiceTranslationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputAudioSeconds) {
            $res['InputAudioSeconds'] = $this->inputAudioSeconds;
        }

        if (null !== $this->voiceTranslationType) {
            $res['VoiceTranslationType'] = $this->voiceTranslationType;
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
        if (isset($map['InputAudioSeconds'])) {
            $model->inputAudioSeconds = $map['InputAudioSeconds'];
        }

        if (isset($map['VoiceTranslationType'])) {
            $model->voiceTranslationType = $map['VoiceTranslationType'];
        }

        return $model;
    }
}
