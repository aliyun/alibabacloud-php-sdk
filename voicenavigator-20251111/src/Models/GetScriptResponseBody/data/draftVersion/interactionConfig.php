<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\draftVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\draftVersion\interactionConfig\endConversationConfig;
use AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\draftVersion\interactionConfig\silenceDetectionConfig;

class interactionConfig extends Model
{
    /**
     * @var string
     */
    public $backgroundMusicId;

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
    protected $_name = [
        'backgroundMusicId' => 'BackgroundMusicId',
        'endConversationConfig' => 'EndConversationConfig',
        'initialGreetingDelayMilliseconds' => 'InitialGreetingDelayMilliseconds',
        'silenceDetectionConfig' => 'SilenceDetectionConfig',
    ];

    public function validate()
    {
        if (null !== $this->endConversationConfig) {
            $this->endConversationConfig->validate();
        }
        if (null !== $this->silenceDetectionConfig) {
            $this->silenceDetectionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundMusicId) {
            $res['BackgroundMusicId'] = $this->backgroundMusicId;
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

        if (isset($map['EndConversationConfig'])) {
            $model->endConversationConfig = endConversationConfig::fromMap($map['EndConversationConfig']);
        }

        if (isset($map['InitialGreetingDelayMilliseconds'])) {
            $model->initialGreetingDelayMilliseconds = $map['InitialGreetingDelayMilliseconds'];
        }

        if (isset($map['SilenceDetectionConfig'])) {
            $model->silenceDetectionConfig = silenceDetectionConfig::fromMap($map['SilenceDetectionConfig']);
        }

        return $model;
    }
}
