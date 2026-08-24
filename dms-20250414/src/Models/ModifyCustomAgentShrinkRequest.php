<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ModifyCustomAgentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callbackConfigShrink;

    /**
     * @var string
     */
    public $customAgentId;

    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var string
     */
    public $dataJson;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionConfigShrink;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $knowledge;

    /**
     * @var string
     */
    public $knowledgeConfigListShrink;

    /**
     * @var string
     */
    public $knowledgeSemanticConfigListShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $relatedSessionId;

    /**
     * @var string
     */
    public $scheduleTaskConfigShrink;

    /**
     * @var string
     */
    public $textReportConfig;

    /**
     * @var string
     */
    public $userSpecifiedSkillListShrink;

    /**
     * @var string
     */
    public $webReportConfig;

    /**
     * @var string
     */
    public $webReportTheme;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'callbackConfigShrink' => 'CallbackConfig',
        'customAgentId' => 'CustomAgentId',
        'DMSUnit' => 'DMSUnit',
        'dataJson' => 'DataJson',
        'description' => 'Description',
        'executionConfigShrink' => 'ExecutionConfig',
        'instruction' => 'Instruction',
        'knowledge' => 'Knowledge',
        'knowledgeConfigListShrink' => 'KnowledgeConfigList',
        'knowledgeSemanticConfigListShrink' => 'KnowledgeSemanticConfigList',
        'name' => 'Name',
        'relatedSessionId' => 'RelatedSessionId',
        'scheduleTaskConfigShrink' => 'ScheduleTaskConfig',
        'textReportConfig' => 'TextReportConfig',
        'userSpecifiedSkillListShrink' => 'UserSpecifiedSkillList',
        'webReportConfig' => 'WebReportConfig',
        'webReportTheme' => 'WebReportTheme',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackConfigShrink) {
            $res['CallbackConfig'] = $this->callbackConfigShrink;
        }

        if (null !== $this->customAgentId) {
            $res['CustomAgentId'] = $this->customAgentId;
        }

        if (null !== $this->DMSUnit) {
            $res['DMSUnit'] = $this->DMSUnit;
        }

        if (null !== $this->dataJson) {
            $res['DataJson'] = $this->dataJson;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->executionConfigShrink) {
            $res['ExecutionConfig'] = $this->executionConfigShrink;
        }

        if (null !== $this->instruction) {
            $res['Instruction'] = $this->instruction;
        }

        if (null !== $this->knowledge) {
            $res['Knowledge'] = $this->knowledge;
        }

        if (null !== $this->knowledgeConfigListShrink) {
            $res['KnowledgeConfigList'] = $this->knowledgeConfigListShrink;
        }

        if (null !== $this->knowledgeSemanticConfigListShrink) {
            $res['KnowledgeSemanticConfigList'] = $this->knowledgeSemanticConfigListShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->relatedSessionId) {
            $res['RelatedSessionId'] = $this->relatedSessionId;
        }

        if (null !== $this->scheduleTaskConfigShrink) {
            $res['ScheduleTaskConfig'] = $this->scheduleTaskConfigShrink;
        }

        if (null !== $this->textReportConfig) {
            $res['TextReportConfig'] = $this->textReportConfig;
        }

        if (null !== $this->userSpecifiedSkillListShrink) {
            $res['UserSpecifiedSkillList'] = $this->userSpecifiedSkillListShrink;
        }

        if (null !== $this->webReportConfig) {
            $res['WebReportConfig'] = $this->webReportConfig;
        }

        if (null !== $this->webReportTheme) {
            $res['WebReportTheme'] = $this->webReportTheme;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CallbackConfig'])) {
            $model->callbackConfigShrink = $map['CallbackConfig'];
        }

        if (isset($map['CustomAgentId'])) {
            $model->customAgentId = $map['CustomAgentId'];
        }

        if (isset($map['DMSUnit'])) {
            $model->DMSUnit = $map['DMSUnit'];
        }

        if (isset($map['DataJson'])) {
            $model->dataJson = $map['DataJson'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExecutionConfig'])) {
            $model->executionConfigShrink = $map['ExecutionConfig'];
        }

        if (isset($map['Instruction'])) {
            $model->instruction = $map['Instruction'];
        }

        if (isset($map['Knowledge'])) {
            $model->knowledge = $map['Knowledge'];
        }

        if (isset($map['KnowledgeConfigList'])) {
            $model->knowledgeConfigListShrink = $map['KnowledgeConfigList'];
        }

        if (isset($map['KnowledgeSemanticConfigList'])) {
            $model->knowledgeSemanticConfigListShrink = $map['KnowledgeSemanticConfigList'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RelatedSessionId'])) {
            $model->relatedSessionId = $map['RelatedSessionId'];
        }

        if (isset($map['ScheduleTaskConfig'])) {
            $model->scheduleTaskConfigShrink = $map['ScheduleTaskConfig'];
        }

        if (isset($map['TextReportConfig'])) {
            $model->textReportConfig = $map['TextReportConfig'];
        }

        if (isset($map['UserSpecifiedSkillList'])) {
            $model->userSpecifiedSkillListShrink = $map['UserSpecifiedSkillList'];
        }

        if (isset($map['WebReportConfig'])) {
            $model->webReportConfig = $map['WebReportConfig'];
        }

        if (isset($map['WebReportTheme'])) {
            $model->webReportTheme = $map['WebReportTheme'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
