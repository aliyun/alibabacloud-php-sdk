<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig\avatarChat3D\llmHistory;

class avatarChat3D extends Model
{
    /**
     * @var string[]
     */
    public $asrHotWords;

    /**
     * @var string
     */
    public $asrLanguageId;

    /**
     * @var int
     */
    public $asrMaxSilence;

    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var string
     */
    public $bailianAppParams;

    /**
     * @var bool
     */
    public $charBreak;

    /**
     * @var bool
     */
    public $enableIntelligentSegment;

    /**
     * @var bool
     */
    public $enablePushToTalk;

    /**
     * @var bool
     */
    public $enableVoiceInterrupt;

    /**
     * @var bool
     */
    public $gracefulShutdown;

    /**
     * @var string
     */
    public $greeting;

    /**
     * @var string[]
     */
    public $interruptWords;

    /**
     * @var llmHistory[]
     */
    public $llmHistory;

    /**
     * @var int
     */
    public $llmHistoryLimit;

    /**
     * @var string
     */
    public $llmSystemPrompt;

    /**
     * @var int
     */
    public $maxIdleTime;

    /**
     * @var bool
     */
    public $useVoiceprint;

    /**
     * @var int
     */
    public $userOfflineTimeout;

    /**
     * @var int
     */
    public $userOnlineTimeout;

    /**
     * @var int
     */
    public $vadLevel;

    /**
     * @var string
     */
    public $voiceId;

    /**
     * @var string[]
     */
    public $voiceIdList;

    /**
     * @var string
     */
    public $voiceprintId;

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
        'asrHotWords' => 'AsrHotWords',
        'asrLanguageId' => 'AsrLanguageId',
        'asrMaxSilence' => 'AsrMaxSilence',
        'avatarId' => 'AvatarId',
        'bailianAppParams' => 'BailianAppParams',
        'charBreak' => 'CharBreak',
        'enableIntelligentSegment' => 'EnableIntelligentSegment',
        'enablePushToTalk' => 'EnablePushToTalk',
        'enableVoiceInterrupt' => 'EnableVoiceInterrupt',
        'gracefulShutdown' => 'GracefulShutdown',
        'greeting' => 'Greeting',
        'interruptWords' => 'InterruptWords',
        'llmHistory' => 'LlmHistory',
        'llmHistoryLimit' => 'LlmHistoryLimit',
        'llmSystemPrompt' => 'LlmSystemPrompt',
        'maxIdleTime' => 'MaxIdleTime',
        'useVoiceprint' => 'UseVoiceprint',
        'userOfflineTimeout' => 'UserOfflineTimeout',
        'userOnlineTimeout' => 'UserOnlineTimeout',
        'vadLevel' => 'VadLevel',
        'voiceId' => 'VoiceId',
        'voiceIdList' => 'VoiceIdList',
        'voiceprintId' => 'VoiceprintId',
        'volume' => 'Volume',
        'wakeUpQuery' => 'WakeUpQuery',
        'workflowOverrideParams' => 'WorkflowOverrideParams',
    ];

    public function validate()
    {
        if (\is_array($this->asrHotWords)) {
            Model::validateArray($this->asrHotWords);
        }
        if (\is_array($this->interruptWords)) {
            Model::validateArray($this->interruptWords);
        }
        if (\is_array($this->llmHistory)) {
            Model::validateArray($this->llmHistory);
        }
        if (\is_array($this->voiceIdList)) {
            Model::validateArray($this->voiceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrHotWords) {
            if (\is_array($this->asrHotWords)) {
                $res['AsrHotWords'] = [];
                $n1 = 0;
                foreach ($this->asrHotWords as $item1) {
                    $res['AsrHotWords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->asrLanguageId) {
            $res['AsrLanguageId'] = $this->asrLanguageId;
        }

        if (null !== $this->asrMaxSilence) {
            $res['AsrMaxSilence'] = $this->asrMaxSilence;
        }

        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }

        if (null !== $this->bailianAppParams) {
            $res['BailianAppParams'] = $this->bailianAppParams;
        }

        if (null !== $this->charBreak) {
            $res['CharBreak'] = $this->charBreak;
        }

        if (null !== $this->enableIntelligentSegment) {
            $res['EnableIntelligentSegment'] = $this->enableIntelligentSegment;
        }

        if (null !== $this->enablePushToTalk) {
            $res['EnablePushToTalk'] = $this->enablePushToTalk;
        }

        if (null !== $this->enableVoiceInterrupt) {
            $res['EnableVoiceInterrupt'] = $this->enableVoiceInterrupt;
        }

        if (null !== $this->gracefulShutdown) {
            $res['GracefulShutdown'] = $this->gracefulShutdown;
        }

        if (null !== $this->greeting) {
            $res['Greeting'] = $this->greeting;
        }

        if (null !== $this->interruptWords) {
            if (\is_array($this->interruptWords)) {
                $res['InterruptWords'] = [];
                $n1 = 0;
                foreach ($this->interruptWords as $item1) {
                    $res['InterruptWords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->llmHistory) {
            if (\is_array($this->llmHistory)) {
                $res['LlmHistory'] = [];
                $n1 = 0;
                foreach ($this->llmHistory as $item1) {
                    $res['LlmHistory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->llmHistoryLimit) {
            $res['LlmHistoryLimit'] = $this->llmHistoryLimit;
        }

        if (null !== $this->llmSystemPrompt) {
            $res['LlmSystemPrompt'] = $this->llmSystemPrompt;
        }

        if (null !== $this->maxIdleTime) {
            $res['MaxIdleTime'] = $this->maxIdleTime;
        }

        if (null !== $this->useVoiceprint) {
            $res['UseVoiceprint'] = $this->useVoiceprint;
        }

        if (null !== $this->userOfflineTimeout) {
            $res['UserOfflineTimeout'] = $this->userOfflineTimeout;
        }

        if (null !== $this->userOnlineTimeout) {
            $res['UserOnlineTimeout'] = $this->userOnlineTimeout;
        }

        if (null !== $this->vadLevel) {
            $res['VadLevel'] = $this->vadLevel;
        }

        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
        }

        if (null !== $this->voiceIdList) {
            if (\is_array($this->voiceIdList)) {
                $res['VoiceIdList'] = [];
                $n1 = 0;
                foreach ($this->voiceIdList as $item1) {
                    $res['VoiceIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->voiceprintId) {
            $res['VoiceprintId'] = $this->voiceprintId;
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
        if (isset($map['AsrHotWords'])) {
            if (!empty($map['AsrHotWords'])) {
                $model->asrHotWords = [];
                $n1 = 0;
                foreach ($map['AsrHotWords'] as $item1) {
                    $model->asrHotWords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AsrLanguageId'])) {
            $model->asrLanguageId = $map['AsrLanguageId'];
        }

        if (isset($map['AsrMaxSilence'])) {
            $model->asrMaxSilence = $map['AsrMaxSilence'];
        }

        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }

        if (isset($map['BailianAppParams'])) {
            $model->bailianAppParams = $map['BailianAppParams'];
        }

        if (isset($map['CharBreak'])) {
            $model->charBreak = $map['CharBreak'];
        }

        if (isset($map['EnableIntelligentSegment'])) {
            $model->enableIntelligentSegment = $map['EnableIntelligentSegment'];
        }

        if (isset($map['EnablePushToTalk'])) {
            $model->enablePushToTalk = $map['EnablePushToTalk'];
        }

        if (isset($map['EnableVoiceInterrupt'])) {
            $model->enableVoiceInterrupt = $map['EnableVoiceInterrupt'];
        }

        if (isset($map['GracefulShutdown'])) {
            $model->gracefulShutdown = $map['GracefulShutdown'];
        }

        if (isset($map['Greeting'])) {
            $model->greeting = $map['Greeting'];
        }

        if (isset($map['InterruptWords'])) {
            if (!empty($map['InterruptWords'])) {
                $model->interruptWords = [];
                $n1 = 0;
                foreach ($map['InterruptWords'] as $item1) {
                    $model->interruptWords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LlmHistory'])) {
            if (!empty($map['LlmHistory'])) {
                $model->llmHistory = [];
                $n1 = 0;
                foreach ($map['LlmHistory'] as $item1) {
                    $model->llmHistory[$n1++] = llmHistory::fromMap($item1);
                }
            }
        }

        if (isset($map['LlmHistoryLimit'])) {
            $model->llmHistoryLimit = $map['LlmHistoryLimit'];
        }

        if (isset($map['LlmSystemPrompt'])) {
            $model->llmSystemPrompt = $map['LlmSystemPrompt'];
        }

        if (isset($map['MaxIdleTime'])) {
            $model->maxIdleTime = $map['MaxIdleTime'];
        }

        if (isset($map['UseVoiceprint'])) {
            $model->useVoiceprint = $map['UseVoiceprint'];
        }

        if (isset($map['UserOfflineTimeout'])) {
            $model->userOfflineTimeout = $map['UserOfflineTimeout'];
        }

        if (isset($map['UserOnlineTimeout'])) {
            $model->userOnlineTimeout = $map['UserOnlineTimeout'];
        }

        if (isset($map['VadLevel'])) {
            $model->vadLevel = $map['VadLevel'];
        }

        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }

        if (isset($map['VoiceIdList'])) {
            if (!empty($map['VoiceIdList'])) {
                $model->voiceIdList = [];
                $n1 = 0;
                foreach ($map['VoiceIdList'] as $item1) {
                    $model->voiceIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VoiceprintId'])) {
            $model->voiceprintId = $map['VoiceprintId'];
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
