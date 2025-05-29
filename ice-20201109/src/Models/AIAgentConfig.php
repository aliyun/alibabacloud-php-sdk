<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\asrConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\avatarConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\interruptConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\llmConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\ttsConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\turnDetectionConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\voiceprintConfig;

class AIAgentConfig extends Model
{
    /**
     * @var asrConfig
     */
    public $asrConfig;

    /**
     * @var avatarConfig
     */
    public $avatarConfig;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $avatarUrlType;

    /**
     * @var bool
     */
    public $enableIntelligentSegment;

    /**
     * @var bool
     */
    public $enablePushToTalk;

    /**
     * @var string
     */
    public $experimentalConfig;

    /**
     * @var bool
     */
    public $gracefulShutdown;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @var interruptConfig
     */
    public $interruptConfig;

    /**
     * @var llmConfig
     */
    public $llmConfig;

    /**
     * @var int
     */
    public $maxIdleTime;

    /**
     * @var ttsConfig
     */
    public $ttsConfig;

    /**
     * @var turnDetectionConfig
     */
    public $turnDetectionConfig;

    /**
     * @var int
     */
    public $userOfflineTimeout;

    /**
     * @var int
     */
    public $userOnlineTimeout;

    /**
     * @var voiceprintConfig
     */
    public $voiceprintConfig;

    /**
     * @var int
     */
    public $volume;

    /**
     * @var string
     */
    public $wakeUpQuery;

    /**
     * @var string
     */
    public $workflowOverrideParams;
    protected $_name = [
        'asrConfig' => 'AsrConfig',
        'avatarConfig' => 'AvatarConfig',
        'avatarUrl' => 'AvatarUrl',
        'avatarUrlType' => 'AvatarUrlType',
        'enableIntelligentSegment' => 'EnableIntelligentSegment',
        'enablePushToTalk' => 'EnablePushToTalk',
        'experimentalConfig' => 'ExperimentalConfig',
        'gracefulShutdown' => 'GracefulShutdown',
        'greeting' => 'Greeting',
        'interruptConfig' => 'InterruptConfig',
        'llmConfig' => 'LlmConfig',
        'maxIdleTime' => 'MaxIdleTime',
        'ttsConfig' => 'TtsConfig',
        'turnDetectionConfig' => 'TurnDetectionConfig',
        'userOfflineTimeout' => 'UserOfflineTimeout',
        'userOnlineTimeout' => 'UserOnlineTimeout',
        'voiceprintConfig' => 'VoiceprintConfig',
        'volume' => 'Volume',
        'wakeUpQuery' => 'WakeUpQuery',
        'workflowOverrideParams' => 'WorkflowOverrideParams',
    ];

    public function validate()
    {
        if (null !== $this->asrConfig) {
            $this->asrConfig->validate();
        }
        if (null !== $this->avatarConfig) {
            $this->avatarConfig->validate();
        }
        if (null !== $this->interruptConfig) {
            $this->interruptConfig->validate();
        }
        if (null !== $this->llmConfig) {
            $this->llmConfig->validate();
        }
        if (null !== $this->ttsConfig) {
            $this->ttsConfig->validate();
        }
        if (null !== $this->turnDetectionConfig) {
            $this->turnDetectionConfig->validate();
        }
        if (null !== $this->voiceprintConfig) {
            $this->voiceprintConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = null !== $this->asrConfig ? $this->asrConfig->toArray($noStream) : $this->asrConfig;
        }

        if (null !== $this->avatarConfig) {
            $res['AvatarConfig'] = null !== $this->avatarConfig ? $this->avatarConfig->toArray($noStream) : $this->avatarConfig;
        }

        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->avatarUrlType) {
            $res['AvatarUrlType'] = $this->avatarUrlType;
        }

        if (null !== $this->enableIntelligentSegment) {
            $res['EnableIntelligentSegment'] = $this->enableIntelligentSegment;
        }

        if (null !== $this->enablePushToTalk) {
            $res['EnablePushToTalk'] = $this->enablePushToTalk;
        }

        if (null !== $this->experimentalConfig) {
            $res['ExperimentalConfig'] = $this->experimentalConfig;
        }

        if (null !== $this->gracefulShutdown) {
            $res['GracefulShutdown'] = $this->gracefulShutdown;
        }

        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }

        if (null !== $this->interruptConfig) {
            $res['InterruptConfig'] = null !== $this->interruptConfig ? $this->interruptConfig->toArray($noStream) : $this->interruptConfig;
        }

        if (null !== $this->llmConfig) {
            $res['LlmConfig'] = null !== $this->llmConfig ? $this->llmConfig->toArray($noStream) : $this->llmConfig;
        }

        if (null !== $this->maxIdleTime) {
            $res['MaxIdleTime'] = $this->maxIdleTime;
        }

        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = null !== $this->ttsConfig ? $this->ttsConfig->toArray($noStream) : $this->ttsConfig;
        }

        if (null !== $this->turnDetectionConfig) {
            $res['TurnDetectionConfig'] = null !== $this->turnDetectionConfig ? $this->turnDetectionConfig->toArray($noStream) : $this->turnDetectionConfig;
        }

        if (null !== $this->userOfflineTimeout) {
            $res['UserOfflineTimeout'] = $this->userOfflineTimeout;
        }

        if (null !== $this->userOnlineTimeout) {
            $res['UserOnlineTimeout'] = $this->userOnlineTimeout;
        }

        if (null !== $this->voiceprintConfig) {
            $res['VoiceprintConfig'] = null !== $this->voiceprintConfig ? $this->voiceprintConfig->toArray($noStream) : $this->voiceprintConfig;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        if (null !== $this->wakeUpQuery) {
            $res['WakeUpQuery'] = $this->wakeUpQuery;
        }

        if (null !== $this->workflowOverrideParams) {
            $res['WorkflowOverrideParams'] = $this->workflowOverrideParams;
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

        if (isset($map['AvatarConfig'])) {
            $model->avatarConfig = avatarConfig::fromMap($map['AvatarConfig']);
        }

        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }

        if (isset($map['AvatarUrlType'])) {
            $model->avatarUrlType = $map['AvatarUrlType'];
        }

        if (isset($map['EnableIntelligentSegment'])) {
            $model->enableIntelligentSegment = $map['EnableIntelligentSegment'];
        }

        if (isset($map['EnablePushToTalk'])) {
            $model->enablePushToTalk = $map['EnablePushToTalk'];
        }

        if (isset($map['ExperimentalConfig'])) {
            $model->experimentalConfig = $map['ExperimentalConfig'];
        }

        if (isset($map['GracefulShutdown'])) {
            $model->gracefulShutdown = $map['GracefulShutdown'];
        }

        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }

        if (isset($map['InterruptConfig'])) {
            $model->interruptConfig = interruptConfig::fromMap($map['InterruptConfig']);
        }

        if (isset($map['LlmConfig'])) {
            $model->llmConfig = llmConfig::fromMap($map['LlmConfig']);
        }

        if (isset($map['MaxIdleTime'])) {
            $model->maxIdleTime = $map['MaxIdleTime'];
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = ttsConfig::fromMap($map['TtsConfig']);
        }

        if (isset($map['TurnDetectionConfig'])) {
            $model->turnDetectionConfig = turnDetectionConfig::fromMap($map['TurnDetectionConfig']);
        }

        if (isset($map['UserOfflineTimeout'])) {
            $model->userOfflineTimeout = $map['UserOfflineTimeout'];
        }

        if (isset($map['UserOnlineTimeout'])) {
            $model->userOnlineTimeout = $map['UserOnlineTimeout'];
        }

        if (isset($map['VoiceprintConfig'])) {
            $model->voiceprintConfig = voiceprintConfig::fromMap($map['VoiceprintConfig']);
        }

        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        if (isset($map['WakeUpQuery'])) {
            $model->wakeUpQuery = $map['WakeUpQuery'];
        }

        if (isset($map['WorkflowOverrideParams'])) {
            $model->workflowOverrideParams = $map['WorkflowOverrideParams'];
        }

        return $model;
    }
}
