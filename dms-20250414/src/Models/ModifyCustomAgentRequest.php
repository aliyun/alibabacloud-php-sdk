<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\ModifyCustomAgentRequest\executionConfig;
use AlibabaCloud\SDK\Dms\V20250414\Models\ModifyCustomAgentRequest\knowledgeConfigList;
use AlibabaCloud\SDK\Dms\V20250414\Models\ModifyCustomAgentRequest\scheduleTaskConfig;

class ModifyCustomAgentRequest extends Model
{
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
     * @var executionConfig
     */
    public $executionConfig;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $knowledge;

    /**
     * @var knowledgeConfigList[]
     */
    public $knowledgeConfigList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var scheduleTaskConfig
     */
    public $scheduleTaskConfig;

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
        'customAgentId' => 'CustomAgentId',
        'DMSUnit' => 'DMSUnit',
        'dataJson' => 'DataJson',
        'description' => 'Description',
        'executionConfig' => 'ExecutionConfig',
        'instruction' => 'Instruction',
        'knowledge' => 'Knowledge',
        'knowledgeConfigList' => 'KnowledgeConfigList',
        'name' => 'Name',
        'scheduleTaskConfig' => 'ScheduleTaskConfig',
        'textReportConfig' => 'TextReportConfig',
        'webReportConfig' => 'WebReportConfig',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->executionConfig) {
            $this->executionConfig->validate();
        }
        if (\is_array($this->knowledgeConfigList)) {
            Model::validateArray($this->knowledgeConfigList);
        }
        if (null !== $this->scheduleTaskConfig) {
            $this->scheduleTaskConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->executionConfig) {
            $res['ExecutionConfig'] = null !== $this->executionConfig ? $this->executionConfig->toArray($noStream) : $this->executionConfig;
        }

        if (null !== $this->instruction) {
            $res['Instruction'] = $this->instruction;
        }

        if (null !== $this->knowledge) {
            $res['Knowledge'] = $this->knowledge;
        }

        if (null !== $this->knowledgeConfigList) {
            if (\is_array($this->knowledgeConfigList)) {
                $res['KnowledgeConfigList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeConfigList as $item1) {
                    $res['KnowledgeConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scheduleTaskConfig) {
            $res['ScheduleTaskConfig'] = null !== $this->scheduleTaskConfig ? $this->scheduleTaskConfig->toArray($noStream) : $this->scheduleTaskConfig;
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
            $model->executionConfig = executionConfig::fromMap($map['ExecutionConfig']);
        }

        if (isset($map['Instruction'])) {
            $model->instruction = $map['Instruction'];
        }

        if (isset($map['Knowledge'])) {
            $model->knowledge = $map['Knowledge'];
        }

        if (isset($map['KnowledgeConfigList'])) {
            if (!empty($map['KnowledgeConfigList'])) {
                $model->knowledgeConfigList = [];
                $n1 = 0;
                foreach ($map['KnowledgeConfigList'] as $item1) {
                    $model->knowledgeConfigList[$n1] = knowledgeConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ScheduleTaskConfig'])) {
            $model->scheduleTaskConfig = scheduleTaskConfig::fromMap($map['ScheduleTaskConfig']);
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
