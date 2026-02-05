<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\ambientSoundConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\asrConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\autoSpeechConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\backChannelingConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\backChannelingConfigs;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\interruptConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\llmConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\ttsConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\turnDetectionConfig;

class AIAgentOutboundCallConfig extends Model
{
    /**
     * @var ambientSoundConfig
     */
    public $ambientSoundConfig;

    /**
     * @var asrConfig
     */
    public $asrConfig;

    /**
     * @var autoSpeechConfig
     */
    public $autoSpeechConfig;

    /**
     * @var backChannelingConfig
     */
    public $backChannelingConfig;

    /**
     * @var backChannelingConfigs[]
     */
    public $backChannelingConfigs;

    /**
     * @var bool
     */
    public $enableIntelligentSegment;

    /**
     * @var string
     */
    public $experimentalConfig;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @var int
     */
    public $greetingDelay;

    /**
     * @var interruptConfig
     */
    public $interruptConfig;

    /**
     * @var llmConfig
     */
    public $llmConfig;

    /**
     * @var int
     */
    public $maxIdleTime;

    /**
     * @var ttsConfig
     */
    public $ttsConfig;

    /**
     * @var turnDetectionConfig
     */
    public $turnDetectionConfig;
    protected $_name = [
        'ambientSoundConfig' => 'AmbientSoundConfig',
        'asrConfig' => 'AsrConfig',
        'autoSpeechConfig' => 'AutoSpeechConfig',
        'backChannelingConfig' => 'BackChannelingConfig',
        'backChannelingConfigs' => 'BackChannelingConfigs',
        'enableIntelligentSegment' => 'EnableIntelligentSegment',
        'experimentalConfig' => 'ExperimentalConfig',
        'greeting' => 'Greeting',
        'greetingDelay' => 'GreetingDelay',
        'interruptConfig' => 'InterruptConfig',
        'llmConfig' => 'LlmConfig',
        'maxIdleTime' => 'MaxIdleTime',
        'ttsConfig' => 'TtsConfig',
        'turnDetectionConfig' => 'TurnDetectionConfig',
    ];

    public function validate()
    {
        if (null !== $this->ambientSoundConfig) {
            $this->ambientSoundConfig->validate();
        }
        if (null !== $this->asrConfig) {
            $this->asrConfig->validate();
        }
        if (null !== $this->autoSpeechConfig) {
            $this->autoSpeechConfig->validate();
        }
        if (null !== $this->backChannelingConfig) {
            $this->backChannelingConfig->validate();
        }
        if (\is_array($this->backChannelingConfigs)) {
            Model::validateArray($this->backChannelingConfigs);
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
        if (null !== $this->ambientSoundConfig) {
            $res['AmbientSoundConfig'] = null !== $this->ambientSoundConfig ? $this->ambientSoundConfig->toArray($noStream) : $this->ambientSoundConfig;
        }

        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = null !== $this->asrConfig ? $this->asrConfig->toArray($noStream) : $this->asrConfig;
        }

        if (null !== $this->autoSpeechConfig) {
            $res['AutoSpeechConfig'] = null !== $this->autoSpeechConfig ? $this->autoSpeechConfig->toArray($noStream) : $this->autoSpeechConfig;
        }

        if (null !== $this->backChannelingConfig) {
            $res['BackChannelingConfig'] = null !== $this->backChannelingConfig ? $this->backChannelingConfig->toArray($noStream) : $this->backChannelingConfig;
        }

        if (null !== $this->backChannelingConfigs) {
            if (\is_array($this->backChannelingConfigs)) {
                $res['BackChannelingConfigs'] = [];
                $n1 = 0;
                foreach ($this->backChannelingConfigs as $item1) {
                    $res['BackChannelingConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableIntelligentSegment) {
            $res['EnableIntelligentSegment'] = $this->enableIntelligentSegment;
        }

        if (null !== $this->experimentalConfig) {
            $res['ExperimentalConfig'] = $this->experimentalConfig;
        }

        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }

        if (null !== $this->greetingDelay) {
            $res['GreetingDelay'] = $this->greetingDelay;
        }

        if (null !== $this->interruptConfig) {
            $res['InterruptConfig'] = null !== $this->interruptConfig ? $this->interruptConfig->toArray($noStream) : $this->interruptConfig;
        }

        if (null !== $this->llmConfig) {
            $res['LlmConfig'] = null !== $this->llmConfig ? $this->llmConfig->toArray($noStream) : $this->llmConfig;
        }

        if (null !== $this->maxIdleTime) {
            $res['MaxIdleTime'] = $this->maxIdleTime;
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
        if (isset($map['AmbientSoundConfig'])) {
            $model->ambientSoundConfig = ambientSoundConfig::fromMap($map['AmbientSoundConfig']);
        }

        if (isset($map['AsrConfig'])) {
            $model->asrConfig = asrConfig::fromMap($map['AsrConfig']);
        }

        if (isset($map['AutoSpeechConfig'])) {
            $model->autoSpeechConfig = autoSpeechConfig::fromMap($map['AutoSpeechConfig']);
        }

        if (isset($map['BackChannelingConfig'])) {
            $model->backChannelingConfig = backChannelingConfig::fromMap($map['BackChannelingConfig']);
        }

        if (isset($map['BackChannelingConfigs'])) {
            if (!empty($map['BackChannelingConfigs'])) {
                $model->backChannelingConfigs = [];
                $n1 = 0;
                foreach ($map['BackChannelingConfigs'] as $item1) {
                    $model->backChannelingConfigs[$n1] = backChannelingConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableIntelligentSegment'])) {
            $model->enableIntelligentSegment = $map['EnableIntelligentSegment'];
        }

        if (isset($map['ExperimentalConfig'])) {
            $model->experimentalConfig = $map['ExperimentalConfig'];
        }

        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }

        if (isset($map['GreetingDelay'])) {
            $model->greetingDelay = $map['GreetingDelay'];
        }

        if (isset($map['InterruptConfig'])) {
            $model->interruptConfig = interruptConfig::fromMap($map['InterruptConfig']);
        }

        if (isset($map['LlmConfig'])) {
            $model->llmConfig = llmConfig::fromMap($map['LlmConfig']);
        }

        if (isset($map['MaxIdleTime'])) {
            $model->maxIdleTime = $map['MaxIdleTime'];
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
