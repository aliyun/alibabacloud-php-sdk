<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppAgentTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentSilenceConfigShrink;

    /**
     * @description This parameter is required.
     *
     * @example ac7N****
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $asrConfigShrink;

    /**
     * @example 2
     *
     * @var int
     */
    public $chatMode;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @example 2
     *
     * @var int
     */
    public $interruptMode;

    /**
     * @var string
     */
    public $llmConfigShrink;

    /**
     * @description This parameter is required.
     *
     * @example 智能体模版
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ttsConfigShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'agentSilenceConfigShrink' => 'AgentSilenceConfig',
        'appId' => 'AppId',
        'asrConfigShrink' => 'AsrConfig',
        'chatMode' => 'ChatMode',
        'greeting' => 'Greeting',
        'interruptMode' => 'InterruptMode',
        'llmConfigShrink' => 'LlmConfig',
        'name' => 'Name',
        'ttsConfigShrink' => 'TtsConfig',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentSilenceConfigShrink) {
            $res['AgentSilenceConfig'] = $this->agentSilenceConfigShrink;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->asrConfigShrink) {
            $res['AsrConfig'] = $this->asrConfigShrink;
        }
        if (null !== $this->chatMode) {
            $res['ChatMode'] = $this->chatMode;
        }
        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
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

    /**
     * @param array $map
     *
     * @return CreateAppAgentTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentSilenceConfig'])) {
            $model->agentSilenceConfigShrink = $map['AgentSilenceConfig'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AsrConfig'])) {
            $model->asrConfigShrink = $map['AsrConfig'];
        }
        if (isset($map['ChatMode'])) {
            $model->chatMode = $map['ChatMode'];
        }
        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
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
