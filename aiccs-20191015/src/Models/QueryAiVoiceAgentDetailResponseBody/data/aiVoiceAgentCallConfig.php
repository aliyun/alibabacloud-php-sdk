<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentCallConfig\eventConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentCallConfig\ttsConfig;

class aiVoiceAgentCallConfig extends Model
{
    /**
     * @var eventConfig
     */
    public $eventConfig;

    /**
     * @var ttsConfig
     */
    public $ttsConfig;

    /**
     * @var string
     */
    public $vocabId;
    protected $_name = [
        'eventConfig' => 'EventConfig',
        'ttsConfig' => 'TtsConfig',
        'vocabId' => 'VocabId',
    ];

    public function validate()
    {
        if (null !== $this->eventConfig) {
            $this->eventConfig->validate();
        }
        if (null !== $this->ttsConfig) {
            $this->ttsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventConfig) {
            $res['EventConfig'] = null !== $this->eventConfig ? $this->eventConfig->toArray($noStream) : $this->eventConfig;
        }

        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = null !== $this->ttsConfig ? $this->ttsConfig->toArray($noStream) : $this->ttsConfig;
        }

        if (null !== $this->vocabId) {
            $res['VocabId'] = $this->vocabId;
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
        if (isset($map['EventConfig'])) {
            $model->eventConfig = eventConfig::fromMap($map['EventConfig']);
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = ttsConfig::fromMap($map['TtsConfig']);
        }

        if (isset($map['VocabId'])) {
            $model->vocabId = $map['VocabId'];
        }

        return $model;
    }
}
