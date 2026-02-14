<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomAgentShrinkRequest extends Model
{
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
    public $name;

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
    public $webReportConfig;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'DMSUnit' => 'DMSUnit',
        'dataJson' => 'DataJson',
        'description' => 'Description',
        'executionConfigShrink' => 'ExecutionConfig',
        'instruction' => 'Instruction',
        'knowledge' => 'Knowledge',
        'knowledgeConfigListShrink' => 'KnowledgeConfigList',
        'name' => 'Name',
        'scheduleTaskConfigShrink' => 'ScheduleTaskConfig',
        'textReportConfig' => 'TextReportConfig',
        'webReportConfig' => 'WebReportConfig',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scheduleTaskConfigShrink) {
            $res['ScheduleTaskConfig'] = $this->scheduleTaskConfigShrink;
        }

        if (null !== $this->textReportConfig) {
            $res['TextReportConfig'] = $this->textReportConfig;
        }

        if (null !== $this->webReportConfig) {
            $res['WebReportConfig'] = $this->webReportConfig;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ScheduleTaskConfig'])) {
            $model->scheduleTaskConfigShrink = $map['ScheduleTaskConfig'];
        }

        if (isset($map['TextReportConfig'])) {
            $model->textReportConfig = $map['TextReportConfig'];
        }

        if (isset($map['WebReportConfig'])) {
            $model->webReportConfig = $map['WebReportConfig'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
