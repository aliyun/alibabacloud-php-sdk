<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ModifyScriptRequest extends Model
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
     * @var bool
     */
    public $emotionEnable;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $longWaitEnable;

    /**
     * @var string
     */
    public $miniPlaybackConfigListJsonString;

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
    public $nlsConfig;

    /**
     * @var string
     */
    public $nluAccessType;

    /**
     * @var string
     */
    public $nluEngine;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string[]
     */
    public $scriptContent;

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
     * @var string[]
     */
    public $scriptWaveform;

    /**
     * @var string
     */
    public $ttsConfig;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentKey' => 'AgentKey',
        'agentLlm' => 'AgentLlm',
        'asrConfig' => 'AsrConfig',
        'chatConfig' => 'ChatConfig',
        'chatbotId' => 'ChatbotId',
        'emotionEnable' => 'EmotionEnable',
        'industry' => 'Industry',
        'instanceId' => 'InstanceId',
        'longWaitEnable' => 'LongWaitEnable',
        'miniPlaybackConfigListJsonString' => 'MiniPlaybackConfigListJsonString',
        'miniPlaybackEnable' => 'MiniPlaybackEnable',
        'newBargeInEnable' => 'NewBargeInEnable',
        'nlsConfig' => 'NlsConfig',
        'nluAccessType' => 'NluAccessType',
        'nluEngine' => 'NluEngine',
        'scene' => 'Scene',
        'scriptContent' => 'ScriptContent',
        'scriptDescription' => 'ScriptDescription',
        'scriptId' => 'ScriptId',
        'scriptName' => 'ScriptName',
        'scriptWaveform' => 'ScriptWaveform',
        'ttsConfig' => 'TtsConfig',
    ];

    public function validate()
    {
        if (\is_array($this->scriptContent)) {
            Model::validateArray($this->scriptContent);
        }
        if (\is_array($this->scriptWaveform)) {
            Model::validateArray($this->scriptWaveform);
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

        if (null !== $this->emotionEnable) {
            $res['EmotionEnable'] = $this->emotionEnable;
        }

        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->longWaitEnable) {
            $res['LongWaitEnable'] = $this->longWaitEnable;
        }

        if (null !== $this->miniPlaybackConfigListJsonString) {
            $res['MiniPlaybackConfigListJsonString'] = $this->miniPlaybackConfigListJsonString;
        }

        if (null !== $this->miniPlaybackEnable) {
            $res['MiniPlaybackEnable'] = $this->miniPlaybackEnable;
        }

        if (null !== $this->newBargeInEnable) {
            $res['NewBargeInEnable'] = $this->newBargeInEnable;
        }

        if (null !== $this->nlsConfig) {
            $res['NlsConfig'] = $this->nlsConfig;
        }

        if (null !== $this->nluAccessType) {
            $res['NluAccessType'] = $this->nluAccessType;
        }

        if (null !== $this->nluEngine) {
            $res['NluEngine'] = $this->nluEngine;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->scriptContent) {
            if (\is_array($this->scriptContent)) {
                $res['ScriptContent'] = [];
                $n1 = 0;
                foreach ($this->scriptContent as $item1) {
                    $res['ScriptContent'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->scriptWaveform) {
            if (\is_array($this->scriptWaveform)) {
                $res['ScriptWaveform'] = [];
                $n1 = 0;
                foreach ($this->scriptWaveform as $item1) {
                    $res['ScriptWaveform'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = $this->ttsConfig;
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

        if (isset($map['EmotionEnable'])) {
            $model->emotionEnable = $map['EmotionEnable'];
        }

        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LongWaitEnable'])) {
            $model->longWaitEnable = $map['LongWaitEnable'];
        }

        if (isset($map['MiniPlaybackConfigListJsonString'])) {
            $model->miniPlaybackConfigListJsonString = $map['MiniPlaybackConfigListJsonString'];
        }

        if (isset($map['MiniPlaybackEnable'])) {
            $model->miniPlaybackEnable = $map['MiniPlaybackEnable'];
        }

        if (isset($map['NewBargeInEnable'])) {
            $model->newBargeInEnable = $map['NewBargeInEnable'];
        }

        if (isset($map['NlsConfig'])) {
            $model->nlsConfig = $map['NlsConfig'];
        }

        if (isset($map['NluAccessType'])) {
            $model->nluAccessType = $map['NluAccessType'];
        }

        if (isset($map['NluEngine'])) {
            $model->nluEngine = $map['NluEngine'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['ScriptContent'])) {
            if (!empty($map['ScriptContent'])) {
                $model->scriptContent = [];
                $n1 = 0;
                foreach ($map['ScriptContent'] as $item1) {
                    $model->scriptContent[$n1++] = $item1;
                }
            }
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

        if (isset($map['ScriptWaveform'])) {
            if (!empty($map['ScriptWaveform'])) {
                $model->scriptWaveform = [];
                $n1 = 0;
                foreach ($map['ScriptWaveform'] as $item1) {
                    $model->scriptWaveform[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = $map['TtsConfig'];
        }

        return $model;
    }
}
