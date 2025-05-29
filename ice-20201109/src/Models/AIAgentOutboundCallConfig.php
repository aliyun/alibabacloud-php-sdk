<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\asrConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\interruptConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\llmConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\ttsConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\turnDetectionConfig;

class AIAgentOutboundCallConfig extends Model
{
    /**
     * @var asrConfig
     */
    public $asrConfig;

    /**
     * @var bool
     */
    public $enableIntelligentSegment;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @var interruptConfig
     */
    public $interruptConfig;

    /**
     * @var llmConfig
     */
    public $llmConfig;

    /**
     * @var ttsConfig
     */
    public $ttsConfig;

    /**
     * @var turnDetectionConfig
     */
    public $turnDetectionConfig;
    protected $_name = [
        'asrConfig' => 'AsrConfig',
        'enableIntelligentSegment' => 'EnableIntelligentSegment',
        'greeting' => 'Greeting',
        'interruptConfig' => 'InterruptConfig',
        'llmConfig' => 'LlmConfig',
        'ttsConfig' => 'TtsConfig',
        'turnDetectionConfig' => 'TurnDetectionConfig',
    ];

    public function validate()
    {
        if (null !== $this->asrConfig) {
            $this->asrConfig->validate();
        }
        if (null !== $this->interruptConfig) {
            $this->interruptConfig->validate();
        }
        if (null !== $this->llmConfig) {
            $this->llmConfig->validate();
        }
        if (null !== $this->ttsConfig) {
            $this->ttsConfig->validate();
        }
        if (null !== $this->turnDetectionConfig) {
            $this->turnDetectionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = null !== $this->asrConfig ? $this->asrConfig->toArray($noStream) : $this->asrConfig;
        }

        if (null !== $this->enableIntelligentSegment) {
            $res['EnableIntelligentSegment'] = $this->enableIntelligentSegment;
        }

        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }

        if (null !== $this->interruptConfig) {
            $res['InterruptConfig'] = null !== $this->interruptConfig ? $this->interruptConfig->toArray($noStream) : $this->interruptConfig;
        }

        if (null !== $this->llmConfig) {
            $res['LlmConfig'] = null !== $this->llmConfig ? $this->llmConfig->toArray($noStream) : $this->llmConfig;
        }

        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = null !== $this->ttsConfig ? $this->ttsConfig->toArray($noStream) : $this->ttsConfig;
        }

        if (null !== $this->turnDetectionConfig) {
            $res['TurnDetectionConfig'] = null !== $this->turnDetectionConfig ? $this->turnDetectionConfig->toArray($noStream) : $this->turnDetectionConfig;
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
        if (isset($map['AsrConfig'])) {
            $model->asrConfig = asrConfig::fromMap($map['AsrConfig']);
        }

        if (isset($map['EnableIntelligentSegment'])) {
            $model->enableIntelligentSegment = $map['EnableIntelligentSegment'];
        }

        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }

        if (isset($map['InterruptConfig'])) {
            $model->interruptConfig = interruptConfig::fromMap($map['InterruptConfig']);
        }

        if (isset($map['LlmConfig'])) {
            $model->llmConfig = llmConfig::fromMap($map['LlmConfig']);
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = ttsConfig::fromMap($map['TtsConfig']);
        }

        if (isset($map['TurnDetectionConfig'])) {
            $model->turnDetectionConfig = turnDetectionConfig::fromMap($map['TurnDetectionConfig']);
        }

        return $model;
    }
}
