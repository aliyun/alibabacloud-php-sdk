<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class ModifyAppAgentTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $asrConfigShrink;

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
    public $id;

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
        'appId' => 'AppId',
        'asrConfigShrink' => 'AsrConfig',
        'chatMode' => 'ChatMode',
        'greeting' => 'Greeting',
        'id' => 'Id',
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
