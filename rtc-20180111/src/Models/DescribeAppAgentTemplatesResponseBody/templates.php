<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\asrConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\llmConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\ttsConfig;
use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var asrConfig
     */
    public $asrConfig;

    /**
     * @example 1
     *
     * @var int
     */
    public $chatMode;

    /**
     * @example 2020-09-04T06:22:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 你好，机器人。
     *
     * @var string
     */
    public $greeting;

    /**
     * @example wv7N****
     *
     * @var string
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $interruptMode;

    /**
     * @var llmConfig
     */
    public $llmConfig;

    /**
     * @example 测试
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = null !== $this->asrConfig ? $this->asrConfig->toMap() : null;
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
     * @return templates
     */
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
