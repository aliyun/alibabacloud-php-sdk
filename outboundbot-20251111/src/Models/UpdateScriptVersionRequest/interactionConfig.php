<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionRequest\interactionConfig\bargeInConfig;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionRequest\interactionConfig\endConversationConfig;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionRequest\interactionConfig\silenceDetectionConfig;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionRequest\interactionConfig\transitionConfig;

class interactionConfig extends Model
{
    /**
     * @var string
     */
    public $backgroundMusicId;

    /**
     * @var bargeInConfig
     */
    public $bargeInConfig;

    /**
     * @var endConversationConfig
     */
    public $endConversationConfig;

    /**
     * @var int
     */
    public $initialGreetingDelayMilliseconds;

    /**
     * @var silenceDetectionConfig
     */
    public $silenceDetectionConfig;

    /**
     * @var transitionConfig
     */
    public $transitionConfig;
    protected $_name = [
        'backgroundMusicId' => 'BackgroundMusicId',
        'bargeInConfig' => 'BargeInConfig',
        'endConversationConfig' => 'EndConversationConfig',
        'initialGreetingDelayMilliseconds' => 'InitialGreetingDelayMilliseconds',
        'silenceDetectionConfig' => 'SilenceDetectionConfig',
        'transitionConfig' => 'TransitionConfig',
    ];

    public function validate()
    {
        if (null !== $this->bargeInConfig) {
            $this->bargeInConfig->validate();
        }
        if (null !== $this->endConversationConfig) {
            $this->endConversationConfig->validate();
        }
        if (null !== $this->silenceDetectionConfig) {
            $this->silenceDetectionConfig->validate();
        }
        if (null !== $this->transitionConfig) {
            $this->transitionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundMusicId) {
            $res['BackgroundMusicId'] = $this->backgroundMusicId;
        }

        if (null !== $this->bargeInConfig) {
            $res['BargeInConfig'] = null !== $this->bargeInConfig ? $this->bargeInConfig->toArray($noStream) : $this->bargeInConfig;
        }

        if (null !== $this->endConversationConfig) {
            $res['EndConversationConfig'] = null !== $this->endConversationConfig ? $this->endConversationConfig->toArray($noStream) : $this->endConversationConfig;
        }

        if (null !== $this->initialGreetingDelayMilliseconds) {
            $res['InitialGreetingDelayMilliseconds'] = $this->initialGreetingDelayMilliseconds;
        }

        if (null !== $this->silenceDetectionConfig) {
            $res['SilenceDetectionConfig'] = null !== $this->silenceDetectionConfig ? $this->silenceDetectionConfig->toArray($noStream) : $this->silenceDetectionConfig;
        }

        if (null !== $this->transitionConfig) {
            $res['TransitionConfig'] = null !== $this->transitionConfig ? $this->transitionConfig->toArray($noStream) : $this->transitionConfig;
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
        if (isset($map['BackgroundMusicId'])) {
            $model->backgroundMusicId = $map['BackgroundMusicId'];
        }

        if (isset($map['BargeInConfig'])) {
            $model->bargeInConfig = bargeInConfig::fromMap($map['BargeInConfig']);
        }

        if (isset($map['EndConversationConfig'])) {
            $model->endConversationConfig = endConversationConfig::fromMap($map['EndConversationConfig']);
        }

        if (isset($map['InitialGreetingDelayMilliseconds'])) {
            $model->initialGreetingDelayMilliseconds = $map['InitialGreetingDelayMilliseconds'];
        }

        if (isset($map['SilenceDetectionConfig'])) {
            $model->silenceDetectionConfig = silenceDetectionConfig::fromMap($map['SilenceDetectionConfig']);
        }

        if (isset($map['TransitionConfig'])) {
            $model->transitionConfig = transitionConfig::fromMap($map['TransitionConfig']);
        }

        return $model;
    }
}
