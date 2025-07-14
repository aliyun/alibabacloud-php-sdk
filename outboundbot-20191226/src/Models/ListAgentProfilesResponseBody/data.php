<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAgentProfilesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 37ca3ca1ac4b4e57adf3da5b5d939d04
     *
     * @var string
     */
    public $agentProfileId;

    /**
     * @example default-survey
     *
     * @var string
     */
    public $agentProfileTemplateId;

    /**
     * @description agent type
     *
     * @example “”
     *
     * @var string
     */
    public $agentType;

    /**
     * @example 1721701525327
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example e49ad122-15a1-443a-a102-84a78a93be79
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example [{"type":"TransferToAgent","instructions":[{"code":"Transfer0","skillGroupId":"123","skillGroupName":"123"}],"timeoutEnable":false},{"type":"CollectNumber","instructions":[]}]
     *
     * @var string
     */
    public $instructionJson;

    /**
     * @var string
     */
    public $labelsJson;

    /**
     * @example model_002
     *
     * @var string
     */
    public $model;

    /**
     * @example {}
     *
     * @var string
     */
    public $modelConfig;

    /**
     * @example “”
     *
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $promptJson;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @example 43972417-0657-452a-81c2-c59d8245a9b2
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example false
     *
     * @var bool
     */
    public $system;

    /**
     * @example 1721701525327
     *
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $variablesJson;
    protected $_name = [
        'agentProfileId' => 'AgentProfileId',
        'agentProfileTemplateId' => 'AgentProfileTemplateId',
        'agentType' => 'AgentType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'instructionJson' => 'InstructionJson',
        'labelsJson' => 'LabelsJson',
        'model' => 'Model',
        'modelConfig' => 'ModelConfig',
        'prompt' => 'Prompt',
        'promptJson' => 'PromptJson',
        'scenario' => 'Scenario',
        'scriptId' => 'ScriptId',
        'system' => 'System',
        'updateTime' => 'UpdateTime',
        'variablesJson' => 'VariablesJson',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentProfileId) {
            $res['AgentProfileId'] = $this->agentProfileId;
        }
        if (null !== $this->agentProfileTemplateId) {
            $res['AgentProfileTemplateId'] = $this->agentProfileTemplateId;
        }
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instructionJson) {
            $res['InstructionJson'] = $this->instructionJson;
        }
        if (null !== $this->labelsJson) {
            $res['LabelsJson'] = $this->labelsJson;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = $this->modelConfig;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->promptJson) {
            $res['PromptJson'] = $this->promptJson;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->variablesJson) {
            $res['VariablesJson'] = $this->variablesJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentProfileId'])) {
            $model->agentProfileId = $map['AgentProfileId'];
        }
        if (isset($map['AgentProfileTemplateId'])) {
            $model->agentProfileTemplateId = $map['AgentProfileTemplateId'];
        }
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstructionJson'])) {
            $model->instructionJson = $map['InstructionJson'];
        }
        if (isset($map['LabelsJson'])) {
            $model->labelsJson = $map['LabelsJson'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['ModelConfig'])) {
            $model->modelConfig = $map['ModelConfig'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['PromptJson'])) {
            $model->promptJson = $map['PromptJson'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VariablesJson'])) {
            $model->variablesJson = $map['VariablesJson'];
        }

        return $model;
    }
}
