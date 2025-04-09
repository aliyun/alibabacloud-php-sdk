<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentProfileRequest extends Model
{
    /**
     * @var string
     */
    public $agentProfileTemplateId;

    /**
     * @var string
     */
    public $appIp;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $faqCategoryIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instructionJson;

    /**
     * @var string
     */
    public $labelsJson;

    /**
     * @var string
     */
    public $model;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
