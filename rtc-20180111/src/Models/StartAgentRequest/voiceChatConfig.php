<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\agentSilenceConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\ambientSoundConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\ASRConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\backChannelConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\interruptConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\LLMConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\TTSConfig;

class voiceChatConfig extends Model
{
    /**
     * @var ASRConfig
     */
    public $ASRConfig;

    /**
     * @var agentSilenceConfig
     */
    public $agentSilenceConfig;

    /**
     * @var ambientSoundConfig
     */
    public $ambientSoundConfig;

    /**
     * @var backChannelConfig
     */
    public $backChannelConfig;

    /**
     * @var int
     */
    public $chatMode;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @var interruptConfig
     */
    public $interruptConfig;

    /**
     * @var int
     */
    public $interruptMode;

    /**
     * @var LLMConfig
     */
    public $LLMConfig;

    /**
     * @var TTSConfig
     */
    public $TTSConfig;
    protected $_name = [
        'ASRConfig' => 'ASRConfig',
        'agentSilenceConfig' => 'AgentSilenceConfig',
        'ambientSoundConfig' => 'AmbientSoundConfig',
        'backChannelConfig' => 'BackChannelConfig',
        'chatMode' => 'ChatMode',
        'greeting' => 'Greeting',
        'interruptConfig' => 'InterruptConfig',
        'interruptMode' => 'InterruptMode',
        'LLMConfig' => 'LLMConfig',
        'TTSConfig' => 'TTSConfig',
    ];

    public function validate()
    {
        if (null !== $this->ASRConfig) {
            $this->ASRConfig->validate();
        }
        if (null !== $this->agentSilenceConfig) {
            $this->agentSilenceConfig->validate();
        }
        if (null !== $this->ambientSoundConfig) {
            $this->ambientSoundConfig->validate();
        }
        if (null !== $this->backChannelConfig) {
            $this->backChannelConfig->validate();
        }
        if (null !== $this->interruptConfig) {
            $this->interruptConfig->validate();
        }
        if (null !== $this->LLMConfig) {
            $this->LLMConfig->validate();
        }
        if (null !== $this->TTSConfig) {
            $this->TTSConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ASRConfig) {
            $res['ASRConfig'] = null !== $this->ASRConfig ? $this->ASRConfig->toArray($noStream) : $this->ASRConfig;
        }

        if (null !== $this->agentSilenceConfig) {
            $res['AgentSilenceConfig'] = null !== $this->agentSilenceConfig ? $this->agentSilenceConfig->toArray($noStream) : $this->agentSilenceConfig;
        }

        if (null !== $this->ambientSoundConfig) {
            $res['AmbientSoundConfig'] = null !== $this->ambientSoundConfig ? $this->ambientSoundConfig->toArray($noStream) : $this->ambientSoundConfig;
        }

        if (null !== $this->backChannelConfig) {
            $res['BackChannelConfig'] = null !== $this->backChannelConfig ? $this->backChannelConfig->toArray($noStream) : $this->backChannelConfig;
        }

        if (null !== $this->chatMode) {
            $res['ChatMode'] = $this->chatMode;
        }

        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }

        if (null !== $this->interruptConfig) {
            $res['InterruptConfig'] = null !== $this->interruptConfig ? $this->interruptConfig->toArray($noStream) : $this->interruptConfig;
        }

        if (null !== $this->interruptMode) {
            $res['InterruptMode'] = $this->interruptMode;
        }

        if (null !== $this->LLMConfig) {
            $res['LLMConfig'] = null !== $this->LLMConfig ? $this->LLMConfig->toArray($noStream) : $this->LLMConfig;
        }

        if (null !== $this->TTSConfig) {
            $res['TTSConfig'] = null !== $this->TTSConfig ? $this->TTSConfig->toArray($noStream) : $this->TTSConfig;
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
        if (isset($map['ASRConfig'])) {
            $model->ASRConfig = ASRConfig::fromMap($map['ASRConfig']);
        }

        if (isset($map['AgentSilenceConfig'])) {
            $model->agentSilenceConfig = agentSilenceConfig::fromMap($map['AgentSilenceConfig']);
        }

        if (isset($map['AmbientSoundConfig'])) {
            $model->ambientSoundConfig = ambientSoundConfig::fromMap($map['AmbientSoundConfig']);
        }

        if (isset($map['BackChannelConfig'])) {
            $model->backChannelConfig = backChannelConfig::fromMap($map['BackChannelConfig']);
        }

        if (isset($map['ChatMode'])) {
            $model->chatMode = $map['ChatMode'];
        }

        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }

        if (isset($map['InterruptConfig'])) {
            $model->interruptConfig = interruptConfig::fromMap($map['InterruptConfig']);
        }

        if (isset($map['InterruptMode'])) {
            $model->interruptMode = $map['InterruptMode'];
        }

        if (isset($map['LLMConfig'])) {
            $model->LLMConfig = LLMConfig::fromMap($map['LLMConfig']);
        }

        if (isset($map['TTSConfig'])) {
            $model->TTSConfig = TTSConfig::fromMap($map['TTSConfig']);
        }

        return $model;
    }
}
