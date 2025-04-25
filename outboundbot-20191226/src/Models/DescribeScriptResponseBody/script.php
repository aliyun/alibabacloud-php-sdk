<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptResponseBody\script\nluProfile;

class script extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var bool
     */
    public $agentLlm;

    /**
     * @var string
     */
    public $asrConfig;

    /**
     * @var string
     */
    public $chatConfig;

    /**
     * @var string
     */
    public $chatbotId;

    /**
     * @var string
     */
    public $debugStatus;

    /**
     * @var bool
     */
    public $emotionEnable;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var bool
     */
    public $isDebugDrafted;

    /**
     * @var bool
     */
    public $isDrafted;

    /**
     * @var bool
     */
    public $longWaitEnable;

    /**
     * @var bool
     */
    public $miniPlaybackEnable;

    /**
     * @var bool
     */
    public $newBargeInEnable;

    /**
     * @var string
     */
    public $nluEngine;

    /**
     * @var nluProfile
     */
    public $nluProfile;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $scriptDescription;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ttsConfig;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentKey' => 'AgentKey',
        'agentLlm' => 'AgentLlm',
        'asrConfig' => 'AsrConfig',
        'chatConfig' => 'ChatConfig',
        'chatbotId' => 'ChatbotId',
        'debugStatus' => 'DebugStatus',
        'emotionEnable' => 'EmotionEnable',
        'industry' => 'Industry',
        'isDebugDrafted' => 'IsDebugDrafted',
        'isDrafted' => 'IsDrafted',
        'longWaitEnable' => 'LongWaitEnable',
        'miniPlaybackEnable' => 'MiniPlaybackEnable',
        'newBargeInEnable' => 'NewBargeInEnable',
        'nluEngine' => 'NluEngine',
        'nluProfile' => 'NluProfile',
        'scene' => 'Scene',
        'scriptDescription' => 'ScriptDescription',
        'scriptId' => 'ScriptId',
        'scriptName' => 'ScriptName',
        'status' => 'Status',
        'ttsConfig' => 'TtsConfig',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->nluProfile) {
            $this->nluProfile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->agentLlm) {
            $res['AgentLlm'] = $this->agentLlm;
        }

        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = $this->asrConfig;
        }

        if (null !== $this->chatConfig) {
            $res['ChatConfig'] = $this->chatConfig;
        }

        if (null !== $this->chatbotId) {
            $res['ChatbotId'] = $this->chatbotId;
        }

        if (null !== $this->debugStatus) {
            $res['DebugStatus'] = $this->debugStatus;
        }

        if (null !== $this->emotionEnable) {
            $res['EmotionEnable'] = $this->emotionEnable;
        }

        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }

        if (null !== $this->isDebugDrafted) {
            $res['IsDebugDrafted'] = $this->isDebugDrafted;
        }

        if (null !== $this->isDrafted) {
            $res['IsDrafted'] = $this->isDrafted;
        }

        if (null !== $this->longWaitEnable) {
            $res['LongWaitEnable'] = $this->longWaitEnable;
        }

        if (null !== $this->miniPlaybackEnable) {
            $res['MiniPlaybackEnable'] = $this->miniPlaybackEnable;
        }

        if (null !== $this->newBargeInEnable) {
            $res['NewBargeInEnable'] = $this->newBargeInEnable;
        }

        if (null !== $this->nluEngine) {
            $res['NluEngine'] = $this->nluEngine;
        }

        if (null !== $this->nluProfile) {
            $res['NluProfile'] = null !== $this->nluProfile ? $this->nluProfile->toArray($noStream) : $this->nluProfile;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->scriptDescription) {
            $res['ScriptDescription'] = $this->scriptDescription;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = $this->ttsConfig;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['AgentLlm'])) {
            $model->agentLlm = $map['AgentLlm'];
        }

        if (isset($map['AsrConfig'])) {
            $model->asrConfig = $map['AsrConfig'];
        }

        if (isset($map['ChatConfig'])) {
            $model->chatConfig = $map['ChatConfig'];
        }

        if (isset($map['ChatbotId'])) {
            $model->chatbotId = $map['ChatbotId'];
        }

        if (isset($map['DebugStatus'])) {
            $model->debugStatus = $map['DebugStatus'];
        }

        if (isset($map['EmotionEnable'])) {
            $model->emotionEnable = $map['EmotionEnable'];
        }

        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }

        if (isset($map['IsDebugDrafted'])) {
            $model->isDebugDrafted = $map['IsDebugDrafted'];
        }

        if (isset($map['IsDrafted'])) {
            $model->isDrafted = $map['IsDrafted'];
        }

        if (isset($map['LongWaitEnable'])) {
            $model->longWaitEnable = $map['LongWaitEnable'];
        }

        if (isset($map['MiniPlaybackEnable'])) {
            $model->miniPlaybackEnable = $map['MiniPlaybackEnable'];
        }

        if (isset($map['NewBargeInEnable'])) {
            $model->newBargeInEnable = $map['NewBargeInEnable'];
        }

        if (isset($map['NluEngine'])) {
            $model->nluEngine = $map['NluEngine'];
        }

        if (isset($map['NluProfile'])) {
            $model->nluProfile = nluProfile::fromMap($map['NluProfile']);
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['ScriptDescription'])) {
            $model->scriptDescription = $map['ScriptDescription'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = $map['TtsConfig'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
