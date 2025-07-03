<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\ASRConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\LLMConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig\TTSConfig;

class voiceChatConfig extends Model
{
    /**
     * @var ASRConfig
     */
    public $ASRConfig;

    /**
     * @var int
     */
    public $chatMode;

    /**
     * @var string
     */
    public $greeting;

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
        'chatMode' => 'ChatMode',
        'greeting' => 'Greeting',
        'interruptMode' => 'InterruptMode',
        'LLMConfig' => 'LLMConfig',
        'TTSConfig' => 'TTSConfig',
    ];

    public function validate()
    {
        if (null !== $this->ASRConfig) {
            $this->ASRConfig->validate();
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
