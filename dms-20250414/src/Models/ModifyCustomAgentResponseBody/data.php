<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ModifyCustomAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\ModifyCustomAgentResponseBody\data\executionConfig;
use AlibabaCloud\SDK\Dms\V20250414\Models\ModifyCustomAgentResponseBody\data\knowledgeConfigList;
use AlibabaCloud\SDK\Dms\V20250414\Models\ModifyCustomAgentResponseBody\data\scheduleTaskConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $aliyunParentUid;

    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $creatorUserName;

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
    public $dmsUnit;

    /**
     * @var executionConfig
     */
    public $executionConfig;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var bool
     */
    public $isScheduleTask;

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
    public $modifier;

    /**
     * @var string
     */
    public $modifierUserName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nextRuntime;

    /**
     * @var string
     */
    public $offlineTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var scheduleTaskConfig
     */
    public $scheduleTaskConfig;

    /**
     * @var string
     */
    public $status;

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
        'aliyunParentUid' => 'AliyunParentUid',
        'aliyunUid' => 'AliyunUid',
        'creatorUserName' => 'CreatorUserName',
        'customAgentId' => 'CustomAgentId',
        'DMSUnit' => 'DMSUnit',
        'dataJson' => 'DataJson',
        'description' => 'Description',
        'dmsUnit' => 'DmsUnit',
        'executionConfig' => 'ExecutionConfig',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'instruction' => 'Instruction',
        'isScheduleTask' => 'IsScheduleTask',
        'knowledge' => 'Knowledge',
        'knowledgeConfigList' => 'KnowledgeConfigList',
        'modifier' => 'Modifier',
        'modifierUserName' => 'ModifierUserName',
        'name' => 'Name',
        'nextRuntime' => 'NextRuntime',
        'offlineTime' => 'OfflineTime',
        'region' => 'Region',
        'releaseTime' => 'ReleaseTime',
        'scheduleTaskConfig' => 'ScheduleTaskConfig',
        'status' => 'Status',
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
        if (null !== $this->aliyunParentUid) {
            $res['AliyunParentUid'] = $this->aliyunParentUid;
        }

        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->creatorUserName) {
            $res['CreatorUserName'] = $this->creatorUserName;
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

        if (null !== $this->dmsUnit) {
            $res['DmsUnit'] = $this->dmsUnit;
        }

        if (null !== $this->executionConfig) {
            $res['ExecutionConfig'] = null !== $this->executionConfig ? $this->executionConfig->toArray($noStream) : $this->executionConfig;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->instruction) {
            $res['Instruction'] = $this->instruction;
        }

        if (null !== $this->isScheduleTask) {
            $res['IsScheduleTask'] = $this->isScheduleTask;
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

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifierUserName) {
            $res['ModifierUserName'] = $this->modifierUserName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextRuntime) {
            $res['NextRuntime'] = $this->nextRuntime;
        }

        if (null !== $this->offlineTime) {
            $res['OfflineTime'] = $this->offlineTime;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->scheduleTaskConfig) {
            $res['ScheduleTaskConfig'] = null !== $this->scheduleTaskConfig ? $this->scheduleTaskConfig->toArray($noStream) : $this->scheduleTaskConfig;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AliyunParentUid'])) {
            $model->aliyunParentUid = $map['AliyunParentUid'];
        }

        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['CreatorUserName'])) {
            $model->creatorUserName = $map['CreatorUserName'];
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

        if (isset($map['DmsUnit'])) {
            $model->dmsUnit = $map['DmsUnit'];
        }

        if (isset($map['ExecutionConfig'])) {
            $model->executionConfig = executionConfig::fromMap($map['ExecutionConfig']);
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Instruction'])) {
            $model->instruction = $map['Instruction'];
        }

        if (isset($map['IsScheduleTask'])) {
            $model->isScheduleTask = $map['IsScheduleTask'];
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

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifierUserName'])) {
            $model->modifierUserName = $map['ModifierUserName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextRuntime'])) {
            $model->nextRuntime = $map['NextRuntime'];
        }

        if (isset($map['OfflineTime'])) {
            $model->offlineTime = $map['OfflineTime'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['ScheduleTaskConfig'])) {
            $model->scheduleTaskConfig = scheduleTaskConfig::fromMap($map['ScheduleTaskConfig']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
