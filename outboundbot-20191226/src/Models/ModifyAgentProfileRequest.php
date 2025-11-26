<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ModifyAgentProfileRequest extends Model
{
    /**
     * @var string
     */
    public $agentProfileId;

    /**
     * @var string
     */
    public $apiPluginJson;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int[]
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
    public $variablesJson;
    protected $_name = [
        'agentProfileId' => 'AgentProfileId',
        'apiPluginJson' => 'ApiPluginJson',
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
        'variablesJson' => 'VariablesJson',
    ];

    public function validate()
    {
        if (\is_array($this->faqCategoryIds)) {
            Model::validateArray($this->faqCategoryIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->faqCategoryIds) {
            if (\is_array($this->faqCategoryIds)) {
                $res['FaqCategoryIds'] = [];
                $n1 = 0;
                foreach ($this->faqCategoryIds as $item1) {
                    $res['FaqCategoryIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['FaqCategoryIds'])) {
                $model->faqCategoryIds = [];
                $n1 = 0;
                foreach ($map['FaqCategoryIds'] as $item1) {
                    $model->faqCategoryIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
