<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyAgentProfileShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 37ca3ca1ac4b4e57adf3da5b5d939d04
     *
     * @var string
     */
    public $agentProfileId;

    /**
     * @example []
     *
     * @var string
     */
    public $apiPluginJson;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $faqCategoryIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
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
     * @example model_001
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
    public $variablesJson;
    protected $_name = [
        'agentProfileId' => 'AgentProfileId',
        'apiPluginJson' => 'ApiPluginJson',
        'description' => 'Description',
        'faqCategoryIdsShrink' => 'FaqCategoryIds',
        'instanceId' => 'InstanceId',
        'instructionJson' => 'InstructionJson',
        'labelsJson' => 'LabelsJson',
        'model' => 'Model',
        'modelConfig' => 'ModelConfig',
        'prompt' => 'Prompt',
        'promptJson' => 'PromptJson',
        'scenario' => 'Scenario',
        'variablesJson' => 'VariablesJson',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentProfileId) {
            $res['AgentProfileId'] = $this->agentProfileId;
        }
        if (null !== $this->apiPluginJson) {
            $res['ApiPluginJson'] = $this->apiPluginJson;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->faqCategoryIdsShrink) {
            $res['FaqCategoryIds'] = $this->faqCategoryIdsShrink;
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
        if (null !== $this->variablesJson) {
            $res['VariablesJson'] = $this->variablesJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAgentProfileShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentProfileId'])) {
            $model->agentProfileId = $map['AgentProfileId'];
        }
        if (isset($map['ApiPluginJson'])) {
            $model->apiPluginJson = $map['ApiPluginJson'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FaqCategoryIds'])) {
            $model->faqCategoryIdsShrink = $map['FaqCategoryIds'];
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
        if (isset($map['VariablesJson'])) {
            $model->variablesJson = $map['VariablesJson'];
        }

        return $model;
    }
}
