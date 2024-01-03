<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail\datasetProxyRelations;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail\taskTemplateConfig;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail\taskWorkflow;
use AlibabaCloud\Tea\Model;

class TaskDetail extends Model
{
    /**
     * @var SimpleUser[]
     */
    public $admins;

    /**
     * @var int
     */
    public $alertTime;

    /**
     * @var bool
     */
    public $allowAppendData;

    /**
     * @var bool
     */
    public $archived;

    /**
     * @var string
     */
    public $archivedInfos;

    /**
     * @var mixed[]
     */
    public $assignConfig;

    /**
     * @var SimpleUser
     */
    public $creator;

    /**
     * @var datasetProxyRelations[]
     */
    public $datasetProxyRelations;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $labelStyle;

    /**
     * @var mixed[]
     */
    public $mineConfigs;

    /**
     * @var SimpleUser
     */
    public $modifier;

    /**
     * @var mixed[]
     */
    public $noticeConfig;

    /**
     * @var mixed[]
     */
    public $periodConfig;

    /**
     * @var string
     */
    public $refTaskId;

    /**
     * @var mixed[]
     */
    public $relateTaskConfig;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var mixed[]
     */
    public $resultCallbackConfig;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var taskTemplateConfig
     */
    public $taskTemplateConfig;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var taskWorkflow[]
     */
    public $taskWorkflow;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $UUID;

    /**
     * @var mixed[]
     */
    public $voteConfigs;

    /**
     * @var string[]
     */
    public $workflowNodes;

    /**
     * @var string
     */
    public $runMsg;
    protected $_name = [
        'admins'                => 'Admins',
        'alertTime'             => 'AlertTime',
        'allowAppendData'       => 'AllowAppendData',
        'archived'              => 'Archived',
        'archivedInfos'         => 'ArchivedInfos',
        'assignConfig'          => 'AssignConfig',
        'creator'               => 'Creator',
        'datasetProxyRelations' => 'DatasetProxyRelations',
        'exif'                  => 'Exif',
        'gmtCreateTime'         => 'GmtCreateTime',
        'gmtModifiedTime'       => 'GmtModifiedTime',
        'labelStyle'            => 'LabelStyle',
        'mineConfigs'           => 'MineConfigs',
        'modifier'              => 'Modifier',
        'noticeConfig'          => 'NoticeConfig',
        'periodConfig'          => 'PeriodConfig',
        'refTaskId'             => 'RefTaskId',
        'relateTaskConfig'      => 'RelateTaskConfig',
        'remark'                => 'Remark',
        'resultCallbackConfig'  => 'ResultCallbackConfig',
        'stage'                 => 'Stage',
        'status'                => 'Status',
        'tags'                  => 'Tags',
        'taskId'                => 'TaskId',
        'taskName'              => 'TaskName',
        'taskTemplateConfig'    => 'TaskTemplateConfig',
        'taskType'              => 'TaskType',
        'taskWorkflow'          => 'TaskWorkflow',
        'templateId'            => 'TemplateId',
        'tenantId'              => 'TenantId',
        'tenantName'            => 'TenantName',
        'UUID'                  => 'UUID',
        'voteConfigs'           => 'VoteConfigs',
        'workflowNodes'         => 'WorkflowNodes',
        'runMsg'                => 'runMsg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->admins) {
            $res['Admins'] = [];
            if (null !== $this->admins && \is_array($this->admins)) {
                $n = 0;
                foreach ($this->admins as $item) {
                    $res['Admins'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->allowAppendData) {
            $res['AllowAppendData'] = $this->allowAppendData;
        }
        if (null !== $this->archived) {
            $res['Archived'] = $this->archived;
        }
        if (null !== $this->archivedInfos) {
            $res['ArchivedInfos'] = $this->archivedInfos;
        }
        if (null !== $this->assignConfig) {
            $res['AssignConfig'] = $this->assignConfig;
        }
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->datasetProxyRelations) {
            $res['DatasetProxyRelations'] = [];
            if (null !== $this->datasetProxyRelations && \is_array($this->datasetProxyRelations)) {
                $n = 0;
                foreach ($this->datasetProxyRelations as $item) {
                    $res['DatasetProxyRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->labelStyle) {
            $res['LabelStyle'] = $this->labelStyle;
        }
        if (null !== $this->mineConfigs) {
            $res['MineConfigs'] = $this->mineConfigs;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toMap() : null;
        }
        if (null !== $this->noticeConfig) {
            $res['NoticeConfig'] = $this->noticeConfig;
        }
        if (null !== $this->periodConfig) {
            $res['PeriodConfig'] = $this->periodConfig;
        }
        if (null !== $this->refTaskId) {
            $res['RefTaskId'] = $this->refTaskId;
        }
        if (null !== $this->relateTaskConfig) {
            $res['RelateTaskConfig'] = $this->relateTaskConfig;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resultCallbackConfig) {
            $res['ResultCallbackConfig'] = $this->resultCallbackConfig;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskTemplateConfig) {
            $res['TaskTemplateConfig'] = null !== $this->taskTemplateConfig ? $this->taskTemplateConfig->toMap() : null;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskWorkflow) {
            $res['TaskWorkflow'] = [];
            if (null !== $this->taskWorkflow && \is_array($this->taskWorkflow)) {
                $n = 0;
                foreach ($this->taskWorkflow as $item) {
                    $res['TaskWorkflow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }
        if (null !== $this->voteConfigs) {
            $res['VoteConfigs'] = $this->voteConfigs;
        }
        if (null !== $this->workflowNodes) {
            $res['WorkflowNodes'] = $this->workflowNodes;
        }
        if (null !== $this->runMsg) {
            $res['runMsg'] = $this->runMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Admins'])) {
            if (!empty($map['Admins'])) {
                $model->admins = [];
                $n             = 0;
                foreach ($map['Admins'] as $item) {
                    $model->admins[$n++] = null !== $item ? SimpleUser::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['AllowAppendData'])) {
            $model->allowAppendData = $map['AllowAppendData'];
        }
        if (isset($map['Archived'])) {
            $model->archived = $map['Archived'];
        }
        if (isset($map['ArchivedInfos'])) {
            $model->archivedInfos = $map['ArchivedInfos'];
        }
        if (isset($map['AssignConfig'])) {
            $model->assignConfig = $map['AssignConfig'];
        }
        if (isset($map['Creator'])) {
            $model->creator = SimpleUser::fromMap($map['Creator']);
        }
        if (isset($map['DatasetProxyRelations'])) {
            if (!empty($map['DatasetProxyRelations'])) {
                $model->datasetProxyRelations = [];
                $n                            = 0;
                foreach ($map['DatasetProxyRelations'] as $item) {
                    $model->datasetProxyRelations[$n++] = null !== $item ? datasetProxyRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['LabelStyle'])) {
            $model->labelStyle = $map['LabelStyle'];
        }
        if (isset($map['MineConfigs'])) {
            $model->mineConfigs = $map['MineConfigs'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = SimpleUser::fromMap($map['Modifier']);
        }
        if (isset($map['NoticeConfig'])) {
            $model->noticeConfig = $map['NoticeConfig'];
        }
        if (isset($map['PeriodConfig'])) {
            $model->periodConfig = $map['PeriodConfig'];
        }
        if (isset($map['RefTaskId'])) {
            $model->refTaskId = $map['RefTaskId'];
        }
        if (isset($map['RelateTaskConfig'])) {
            $model->relateTaskConfig = $map['RelateTaskConfig'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResultCallbackConfig'])) {
            $model->resultCallbackConfig = $map['ResultCallbackConfig'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskTemplateConfig'])) {
            $model->taskTemplateConfig = taskTemplateConfig::fromMap($map['TaskTemplateConfig']);
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskWorkflow'])) {
            if (!empty($map['TaskWorkflow'])) {
                $model->taskWorkflow = [];
                $n                   = 0;
                foreach ($map['TaskWorkflow'] as $item) {
                    $model->taskWorkflow[$n++] = null !== $item ? taskWorkflow::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }
        if (isset($map['VoteConfigs'])) {
            $model->voteConfigs = $map['VoteConfigs'];
        }
        if (isset($map['WorkflowNodes'])) {
            if (!empty($map['WorkflowNodes'])) {
                $model->workflowNodes = $map['WorkflowNodes'];
            }
        }
        if (isset($map['runMsg'])) {
            $model->runMsg = $map['runMsg'];
        }

        return $model;
    }
}
