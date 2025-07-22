<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\ASRConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\LLMConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\TTSConfig;
use AlibabaCloud\Tea\Model;

class voiceChatConfig extends Model
{
    /**
     * @var ASRConfig
     */
    public $ASRConfig;

    /**
     * @example 1
     *
     * @var int
     */
    public $chatMode;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @example 1
     *
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
        'chatMode' => 'ChatMode',
        'greeting' => 'Greeting',
        'interruptMode' => 'InterruptMode',
        'LLMConfig' => 'LLMConfig',
        'TTSConfig' => 'TTSConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ASRConfig) {
            $res['ASRConfig'] = null !== $this->ASRConfig ? $this->ASRConfig->toMap() : null;
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
        if (null !== $this->LLMConfig) {
            $res['LLMConfig'] = null !== $this->LLMConfig ? $this->LLMConfig->toMap() : null;
        }
        if (null !== $this->TTSConfig) {
            $res['TTSConfig'] = null !== $this->TTSConfig ? $this->TTSConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return voiceChatConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ASRConfig'])) {
            $model->ASRConfig = ASRConfig::fromMap($map['ASRConfig']);
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
        if (isset($map['LLMConfig'])) {
            $model->LLMConfig = LLMConfig::fromMap($map['LLMConfig']);
        }
        if (isset($map['TTSConfig'])) {
            $model->TTSConfig = TTSConfig::fromMap($map['TTSConfig']);
        }

        return $model;
    }
}
