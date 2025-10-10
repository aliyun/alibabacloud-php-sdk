<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class CreateAppAgentTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentSilenceConfigShrink;

    /**
     * @var string
     */
    public $ambientSoundConfigShrink;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $asrConfigShrink;

    /**
     * @var string
     */
    public $backChannelConfigShrink;

    /**
     * @var int
     */
    public $chatMode;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @var string
     */
    public $interruptConfigShrink;

    /**
     * @var int
     */
    public $interruptMode;

    /**
     * @var string
     */
    public $llmConfigShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ttsConfigShrink;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'agentSilenceConfigShrink' => 'AgentSilenceConfig',
        'ambientSoundConfigShrink' => 'AmbientSoundConfig',
        'appId' => 'AppId',
        'asrConfigShrink' => 'AsrConfig',
        'backChannelConfigShrink' => 'BackChannelConfig',
        'chatMode' => 'ChatMode',
        'greeting' => 'Greeting',
        'interruptConfigShrink' => 'InterruptConfig',
        'interruptMode' => 'InterruptMode',
        'llmConfigShrink' => 'LlmConfig',
        'name' => 'Name',
        'ttsConfigShrink' => 'TtsConfig',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSilenceConfigShrink) {
            $res['AgentSilenceConfig'] = $this->agentSilenceConfigShrink;
        }

        if (null !== $this->ambientSoundConfigShrink) {
            $res['AmbientSoundConfig'] = $this->ambientSoundConfigShrink;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->asrConfigShrink) {
            $res['AsrConfig'] = $this->asrConfigShrink;
        }

        if (null !== $this->backChannelConfigShrink) {
            $res['BackChannelConfig'] = $this->backChannelConfigShrink;
        }

        if (null !== $this->chatMode) {
            $res['ChatMode'] = $this->chatMode;
        }

        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }

        if (null !== $this->interruptConfigShrink) {
            $res['InterruptConfig'] = $this->interruptConfigShrink;
        }

        if (null !== $this->interruptMode) {
            $res['InterruptMode'] = $this->interruptMode;
        }

        if (null !== $this->llmConfigShrink) {
            $res['LlmConfig'] = $this->llmConfigShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ttsConfigShrink) {
            $res['TtsConfig'] = $this->ttsConfigShrink;
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
            $model->agentSilenceConfigShrink = $map['AgentSilenceConfig'];
        }

        if (isset($map['AmbientSoundConfig'])) {
            $model->ambientSoundConfigShrink = $map['AmbientSoundConfig'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AsrConfig'])) {
            $model->asrConfigShrink = $map['AsrConfig'];
        }

        if (isset($map['BackChannelConfig'])) {
            $model->backChannelConfigShrink = $map['BackChannelConfig'];
        }

        if (isset($map['ChatMode'])) {
            $model->chatMode = $map['ChatMode'];
        }

        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }

        if (isset($map['InterruptConfig'])) {
            $model->interruptConfigShrink = $map['InterruptConfig'];
        }

        if (isset($map['InterruptMode'])) {
            $model->interruptMode = $map['InterruptMode'];
        }

        if (isset($map['LlmConfig'])) {
            $model->llmConfigShrink = $map['LlmConfig'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfigShrink = $map['TtsConfig'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
