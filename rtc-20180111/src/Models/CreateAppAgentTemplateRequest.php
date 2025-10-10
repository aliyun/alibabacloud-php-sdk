<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\agentSilenceConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\ambientSoundConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\asrConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\backChannelConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\interruptConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\llmConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\ttsConfig;

class CreateAppAgentTemplateRequest extends Model
{
    /**
     * @var agentSilenceConfig
     */
    public $agentSilenceConfig;

    /**
     * @var ambientSoundConfig
     */
    public $ambientSoundConfig;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var asrConfig
     */
    public $asrConfig;

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
     * @var llmConfig
     */
    public $llmConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ttsConfig
     */
    public $ttsConfig;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'agentSilenceConfig' => 'AgentSilenceConfig',
        'ambientSoundConfig' => 'AmbientSoundConfig',
        'appId' => 'AppId',
        'asrConfig' => 'AsrConfig',
        'backChannelConfig' => 'BackChannelConfig',
        'chatMode' => 'ChatMode',
        'greeting' => 'Greeting',
        'interruptConfig' => 'InterruptConfig',
        'interruptMode' => 'InterruptMode',
        'llmConfig' => 'LlmConfig',
        'name' => 'Name',
        'ttsConfig' => 'TtsConfig',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->agentSilenceConfig) {
            $this->agentSilenceConfig->validate();
        }
        if (null !== $this->ambientSoundConfig) {
            $this->ambientSoundConfig->validate();
        }
        if (null !== $this->asrConfig) {
            $this->asrConfig->validate();
        }
        if (null !== $this->backChannelConfig) {
            $this->backChannelConfig->validate();
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSilenceConfig) {
            $res['AgentSilenceConfig'] = null !== $this->agentSilenceConfig ? $this->agentSilenceConfig->toArray($noStream) : $this->agentSilenceConfig;
        }

        if (null !== $this->ambientSoundConfig) {
            $res['AmbientSoundConfig'] = null !== $this->ambientSoundConfig ? $this->ambientSoundConfig->toArray($noStream) : $this->ambientSoundConfig;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = null !== $this->asrConfig ? $this->asrConfig->toArray($noStream) : $this->asrConfig;
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

        if (null !== $this->llmConfig) {
            $res['LlmConfig'] = null !== $this->llmConfig ? $this->llmConfig->toArray($noStream) : $this->llmConfig;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = null !== $this->ttsConfig ? $this->ttsConfig->toArray($noStream) : $this->ttsConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AgentSilenceConfig'])) {
            $model->agentSilenceConfig = agentSilenceConfig::fromMap($map['AgentSilenceConfig']);
        }

        if (isset($map['AmbientSoundConfig'])) {
            $model->ambientSoundConfig = ambientSoundConfig::fromMap($map['AmbientSoundConfig']);
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AsrConfig'])) {
            $model->asrConfig = asrConfig::fromMap($map['AsrConfig']);
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

        if (isset($map['LlmConfig'])) {
            $model->llmConfig = llmConfig::fromMap($map['LlmConfig']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = ttsConfig::fromMap($map['TtsConfig']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
