<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentTemplateConfig\visionChat\llmHistory;

class visionChat extends Model
{
    /**
     * @var int
     */
    public $asrMaxSilence;
    /**
     * @var string
     */
    public $bailianAppParams;
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
     * @var llmHistory[]
     */
    public $llmHistory;
    /**
     * @var int
     */
    public $llmHistoryLimit;
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
        'asrMaxSilence'            => 'AsrMaxSilence',
        'bailianAppParams'         => 'BailianAppParams',
        'enableIntelligentSegment' => 'EnableIntelligentSegment',
        'enablePushToTalk'         => 'EnablePushToTalk',
        'enableVoiceInterrupt'     => 'EnableVoiceInterrupt',
        'gracefulShutdown'         => 'GracefulShutdown',
        'greeting'                 => 'Greeting',
        'llmHistory'               => 'LlmHistory',
        'llmHistoryLimit'          => 'LlmHistoryLimit',
        'maxIdleTime'              => 'MaxIdleTime',
        'useVoiceprint'            => 'UseVoiceprint',
        'userOfflineTimeout'       => 'UserOfflineTimeout',
        'userOnlineTimeout'        => 'UserOnlineTimeout',
        'voiceId'                  => 'VoiceId',
        'voiceIdList'              => 'VoiceIdList',
        'voiceprintId'             => 'VoiceprintId',
        'volume'                   => 'Volume',
        'wakeUpQuery'              => 'WakeUpQuery',
        'workflowOverrideParams'   => 'WorkflowOverrideParams',
    ];

    public function validate()
    {
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
        if (null !== $this->asrMaxSilence) {
            $res['AsrMaxSilence'] = $this->asrMaxSilence;
        }

        if (null !== $this->bailianAppParams) {
            $res['BailianAppParams'] = $this->bailianAppParams;
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

        if (null !== $this->llmHistory) {
            if (\is_array($this->llmHistory)) {
                $res['LlmHistory'] = [];
                $n1                = 0;
                foreach ($this->llmHistory as $item1) {
                    $res['LlmHistory'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->llmHistoryLimit) {
            $res['LlmHistoryLimit'] = $this->llmHistoryLimit;
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

        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
        }

        if (null !== $this->voiceIdList) {
            if (\is_array($this->voiceIdList)) {
                $res['VoiceIdList'] = [];
                $n1                 = 0;
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
        if (isset($map['AsrMaxSilence'])) {
            $model->asrMaxSilence = $map['AsrMaxSilence'];
        }

        if (isset($map['BailianAppParams'])) {
            $model->bailianAppParams = $map['BailianAppParams'];
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

        if (isset($map['LlmHistory'])) {
            if (!empty($map['LlmHistory'])) {
                $model->llmHistory = [];
                $n1                = 0;
                foreach ($map['LlmHistory'] as $item1) {
                    $model->llmHistory[$n1++] = llmHistory::fromMap($item1);
                }
            }
        }

        if (isset($map['LlmHistoryLimit'])) {
            $model->llmHistoryLimit = $map['LlmHistoryLimit'];
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

        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }

        if (isset($map['VoiceIdList'])) {
            if (!empty($map['VoiceIdList'])) {
                $model->voiceIdList = [];
                $n1                 = 0;
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
