<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentCallConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig;

class data extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var aiVoiceAgentCallConfig
     */
    public $aiVoiceAgentCallConfig;

    /**
     * @var aiVoiceAgentModelConfig
     */
    public $aiVoiceAgentModelConfig;

    /**
     * @var string
     */
    public $businessTypeName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $knowledgeName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $voiceStyleName;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'aiVoiceAgentCallConfig' => 'AiVoiceAgentCallConfig',
        'aiVoiceAgentModelConfig' => 'AiVoiceAgentModelConfig',
        'businessTypeName' => 'BusinessTypeName',
        'description' => 'Description',
        'knowledgeName' => 'KnowledgeName',
        'status' => 'Status',
        'voiceStyleName' => 'VoiceStyleName',
    ];

    public function validate()
    {
        if (null !== $this->aiVoiceAgentCallConfig) {
            $this->aiVoiceAgentCallConfig->validate();
        }
        if (null !== $this->aiVoiceAgentModelConfig) {
            $this->aiVoiceAgentModelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->aiVoiceAgentCallConfig) {
            $res['AiVoiceAgentCallConfig'] = null !== $this->aiVoiceAgentCallConfig ? $this->aiVoiceAgentCallConfig->toArray($noStream) : $this->aiVoiceAgentCallConfig;
        }

        if (null !== $this->aiVoiceAgentModelConfig) {
            $res['AiVoiceAgentModelConfig'] = null !== $this->aiVoiceAgentModelConfig ? $this->aiVoiceAgentModelConfig->toArray($noStream) : $this->aiVoiceAgentModelConfig;
        }

        if (null !== $this->businessTypeName) {
            $res['BusinessTypeName'] = $this->businessTypeName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->knowledgeName) {
            $res['KnowledgeName'] = $this->knowledgeName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->voiceStyleName) {
            $res['VoiceStyleName'] = $this->voiceStyleName;
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

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AiVoiceAgentCallConfig'])) {
            $model->aiVoiceAgentCallConfig = aiVoiceAgentCallConfig::fromMap($map['AiVoiceAgentCallConfig']);
        }

        if (isset($map['AiVoiceAgentModelConfig'])) {
            $model->aiVoiceAgentModelConfig = aiVoiceAgentModelConfig::fromMap($map['AiVoiceAgentModelConfig']);
        }

        if (isset($map['BusinessTypeName'])) {
            $model->businessTypeName = $map['BusinessTypeName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['KnowledgeName'])) {
            $model->knowledgeName = $map['KnowledgeName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VoiceStyleName'])) {
            $model->voiceStyleName = $map['VoiceStyleName'];
        }

        return $model;
    }
}
