<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateAgentProfileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example default-survey
     *
     * @var string
     */
    public $agentProfileTemplateId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $appIp;

    /**
     * @var string
     */
    public $description;

    /**
     * @example [30000474726]
     *
     * @var string
     */
    public $faqCategoryIds;

    /**
     * @description This parameter is required.
     *
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example [{\\"type\\":\\"TransferToAgent\\",\\"instructions\\":[{\\"code\\":\\"Transfer0\\",\\"skillGroupId\\":\\"123\\",\\"skillGroupName\\":\\"123\\"}]
     *
     * @var string
     */
    public $instructionJson;

    /**
     * @var string
     */
    public $labelsJson;

    /**
     * @description This parameter is required.
     *
     * @example model_001
     *
     * @var string
     */
    public $model;

    /**
     * @example ""
     *
     * @var string
     */
    public $modelConfig;

    /**
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
     * @description This parameter is required.
     *
     * @example aa279896-64a6-4182-864c-4f2b04ec8d17
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $variablesJson;
    protected $_name = [
        'agentProfileTemplateId' => 'AgentProfileTemplateId',
        'appIp' => 'AppIp',
        'description' => 'Description',
        'faqCategoryIds' => 'FaqCategoryIds',
        'instanceId' => 'InstanceId',
        'instructionJson' => 'InstructionJson',
        'labelsJson' => 'LabelsJson',
        'model' => 'Model',
        'modelConfig' => 'ModelConfig',
        'prompt' => 'Prompt',
        'promptJson' => 'PromptJson',
        'scenario' => 'Scenario',
        'scriptId' => 'ScriptId',
        'variablesJson' => 'VariablesJson',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentProfileTemplateId) {
            $res['AgentProfileTemplateId'] = $this->agentProfileTemplateId;
        }
        if (null !== $this->appIp) {
            $res['AppIp'] = $this->appIp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->faqCategoryIds) {
            $res['FaqCategoryIds'] = $this->faqCategoryIds;
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
        if (null !== $this->variablesJson) {
            $res['VariablesJson'] = $this->variablesJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAgentProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentProfileTemplateId'])) {
            $model->agentProfileTemplateId = $map['AgentProfileTemplateId'];
        }
        if (isset($map['AppIp'])) {
            $model->appIp = $map['AppIp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FaqCategoryIds'])) {
            $model->faqCategoryIds = $map['FaqCategoryIds'];
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
        if (isset($map['VariablesJson'])) {
            $model->variablesJson = $map['VariablesJson'];
        }

        return $model;
    }
}
