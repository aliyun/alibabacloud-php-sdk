<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\asrConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\llmConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppAgentTemplateRequest\ttsConfig;
use AlibabaCloud\Tea\Model;

class CreateAppAgentTemplateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ac7N****
     *
     * @var string
     */
    public $appId;

    /**
     * @var asrConfig
     */
    public $asrConfig;

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
     * @var llmConfig
     */
    public $llmConfig;

    /**
     * @description This parameter is required.
     *
     * @example 智能体模版
     *
     * @var string
     */
    public $name;

    /**
     * @var ttsConfig
     */
    public $ttsConfig;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'asrConfig' => 'AsrConfig',
        'chatMode' => 'ChatMode',
        'greeting' => 'Greeting',
        'interruptMode' => 'InterruptMode',
        'llmConfig' => 'LlmConfig',
        'name' => 'Name',
        'ttsConfig' => 'TtsConfig',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = null !== $this->asrConfig ? $this->asrConfig->toMap() : null;
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
        if (null !== $this->llmConfig) {
            $res['LlmConfig'] = null !== $this->llmConfig ? $this->llmConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = null !== $this->ttsConfig ? $this->ttsConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppAgentTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AsrConfig'])) {
            $model->asrConfig = asrConfig::fromMap($map['AsrConfig']);
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
