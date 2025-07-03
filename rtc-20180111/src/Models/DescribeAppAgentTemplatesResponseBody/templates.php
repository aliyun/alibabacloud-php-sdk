<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\asrConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\llmConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\ttsConfig;

class templates extends Model
{
    /**
     * @var asrConfig
     */
    public $asrConfig;

    /**
     * @var int
     */
    public $chatMode;

    /**
     * @var string
     */
    public $createTime;

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
        'asrConfig' => 'AsrConfig',
        'chatMode' => 'ChatMode',
        'createTime' => 'CreateTime',
        'greeting' => 'Greeting',
        'id' => 'Id',
        'interruptMode' => 'InterruptMode',
        'llmConfig' => 'LlmConfig',
        'name' => 'Name',
        'ttsConfig' => 'TtsConfig',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->asrConfig) {
            $this->asrConfig->validate();
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
        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = null !== $this->asrConfig ? $this->asrConfig->toArray($noStream) : $this->asrConfig;
        }

        if (null !== $this->chatMode) {
            $res['ChatMode'] = $this->chatMode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['AsrConfig'])) {
            $model->asrConfig = asrConfig::fromMap($map['AsrConfig']);
        }

        if (isset($map['ChatMode'])) {
            $model->chatMode = $map['ChatMode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
