<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail\datasetProxyRelations;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail\taskTemplateConfig;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\TaskDetail\taskWorkflow;

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
        'admins' => 'Admins',
        'alertTime' => 'AlertTime',
        'allowAppendData' => 'AllowAppendData',
        'archived' => 'Archived',
        'archivedInfos' => 'ArchivedInfos',
        'assignConfig' => 'AssignConfig',
        'creator' => 'Creator',
        'datasetProxyRelations' => 'DatasetProxyRelations',
        'exif' => 'Exif',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labelStyle' => 'LabelStyle',
        'mineConfigs' => 'MineConfigs',
        'modifier' => 'Modifier',
        'noticeConfig' => 'NoticeConfig',
        'periodConfig' => 'PeriodConfig',
        'refTaskId' => 'RefTaskId',
        'relateTaskConfig' => 'RelateTaskConfig',
        'remark' => 'Remark',
        'resultCallbackConfig' => 'ResultCallbackConfig',
        'stage' => 'Stage',
        'status' => 'Status',
        'tags' => 'Tags',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskTemplateConfig' => 'TaskTemplateConfig',
        'taskType' => 'TaskType',
        'taskWorkflow' => 'TaskWorkflow',
        'templateId' => 'TemplateId',
        'tenantId' => 'TenantId',
        'tenantName' => 'TenantName',
        'UUID' => 'UUID',
        'voteConfigs' => 'VoteConfigs',
        'workflowNodes' => 'WorkflowNodes',
        'runMsg' => 'runMsg',
    ];

    public function validate()
    {
        if (\is_array($this->admins)) {
            Model::validateArray($this->admins);
        }
        if (\is_array($this->assignConfig)) {
            Model::validateArray($this->assignConfig);
        }
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (\is_array($this->datasetProxyRelations)) {
            Model::validateArray($this->datasetProxyRelations);
        }
        if (\is_array($this->exif)) {
            Model::validateArray($this->exif);
        }
        if (\is_array($this->mineConfigs)) {
            Model::validateArray($this->mineConfigs);
        }
        if (null !== $this->modifier) {
            $this->modifier->validate();
        }
        if (\is_array($this->noticeConfig)) {
            Model::validateArray($this->noticeConfig);
        }
        if (\is_array($this->periodConfig)) {
            Model::validateArray($this->periodConfig);
        }
        if (\is_array($this->relateTaskConfig)) {
            Model::validateArray($this->relateTaskConfig);
        }
        if (\is_array($this->resultCallbackConfig)) {
            Model::validateArray($this->resultCallbackConfig);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->taskTemplateConfig) {
            $this->taskTemplateConfig->validate();
        }
        if (\is_array($this->taskWorkflow)) {
            Model::validateArray($this->taskWorkflow);
        }
        if (\is_array($this->voteConfigs)) {
            Model::validateArray($this->voteConfigs);
        }
        if (\is_array($this->workflowNodes)) {
            Model::validateArray($this->workflowNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->admins) {
            if (\is_array($this->admins)) {
                $res['Admins'] = [];
                $n1 = 0;
                foreach ($this->admins as $item1) {
                    $res['Admins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->assignConfig)) {
                $res['AssignConfig'] = [];
                foreach ($this->assignConfig as $key1 => $value1) {
                    $res['AssignConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->datasetProxyRelations) {
            if (\is_array($this->datasetProxyRelations)) {
                $res['DatasetProxyRelations'] = [];
                $n1 = 0;
                foreach ($this->datasetProxyRelations as $item1) {
                    $res['DatasetProxyRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exif) {
            if (\is_array($this->exif)) {
                $res['Exif'] = [];
                foreach ($this->exif as $key1 => $value1) {
                    $res['Exif'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->mineConfigs)) {
                $res['MineConfigs'] = [];
                foreach ($this->mineConfigs as $key1 => $value1) {
                    $res['MineConfigs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toArray($noStream) : $this->modifier;
        }

        if (null !== $this->noticeConfig) {
            if (\is_array($this->noticeConfig)) {
                $res['NoticeConfig'] = [];
                foreach ($this->noticeConfig as $key1 => $value1) {
                    $res['NoticeConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->periodConfig) {
            if (\is_array($this->periodConfig)) {
                $res['PeriodConfig'] = [];
                foreach ($this->periodConfig as $key1 => $value1) {
                    $res['PeriodConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->refTaskId) {
            $res['RefTaskId'] = $this->refTaskId;
        }

        if (null !== $this->relateTaskConfig) {
            if (\is_array($this->relateTaskConfig)) {
                $res['RelateTaskConfig'] = [];
                foreach ($this->relateTaskConfig as $key1 => $value1) {
                    $res['RelateTaskConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->resultCallbackConfig) {
            if (\is_array($this->resultCallbackConfig)) {
                $res['ResultCallbackConfig'] = [];
                foreach ($this->resultCallbackConfig as $key1 => $value1) {
                    $res['ResultCallbackConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskTemplateConfig) {
            $res['TaskTemplateConfig'] = null !== $this->taskTemplateConfig ? $this->taskTemplateConfig->toArray($noStream) : $this->taskTemplateConfig;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->taskWorkflow) {
            if (\is_array($this->taskWorkflow)) {
                $res['TaskWorkflow'] = [];
                $n1 = 0;
                foreach ($this->taskWorkflow as $item1) {
                    $res['TaskWorkflow'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->voteConfigs)) {
                $res['VoteConfigs'] = [];
                foreach ($this->voteConfigs as $key1 => $value1) {
                    $res['VoteConfigs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->workflowNodes) {
            if (\is_array($this->workflowNodes)) {
                $res['WorkflowNodes'] = [];
                $n1 = 0;
                foreach ($this->workflowNodes as $item1) {
                    $res['WorkflowNodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runMsg) {
            $res['runMsg'] = $this->runMsg;
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
        if (isset($map['Admins'])) {
            if (!empty($map['Admins'])) {
                $model->admins = [];
                $n1 = 0;
                foreach ($map['Admins'] as $item1) {
                    $model->admins[$n1] = SimpleUser::fromMap($item1);
                    ++$n1;
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
            if (!empty($map['AssignConfig'])) {
                $model->assignConfig = [];
                foreach ($map['AssignConfig'] as $key1 => $value1) {
                    $model->assignConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['Creator'])) {
            $model->creator = SimpleUser::fromMap($map['Creator']);
        }

        if (isset($map['DatasetProxyRelations'])) {
            if (!empty($map['DatasetProxyRelations'])) {
                $model->datasetProxyRelations = [];
                $n1 = 0;
                foreach ($map['DatasetProxyRelations'] as $item1) {
                    $model->datasetProxyRelations[$n1] = datasetProxyRelations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Exif'])) {
            if (!empty($map['Exif'])) {
                $model->exif = [];
                foreach ($map['Exif'] as $key1 => $value1) {
                    $model->exif[$key1] = $value1;
                }
            }
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
            if (!empty($map['MineConfigs'])) {
                $model->mineConfigs = [];
                foreach ($map['MineConfigs'] as $key1 => $value1) {
                    $model->mineConfigs[$key1] = $value1;
                }
            }
        }

        if (isset($map['Modifier'])) {
            $model->modifier = SimpleUser::fromMap($map['Modifier']);
        }

        if (isset($map['NoticeConfig'])) {
            if (!empty($map['NoticeConfig'])) {
                $model->noticeConfig = [];
                foreach ($map['NoticeConfig'] as $key1 => $value1) {
                    $model->noticeConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['PeriodConfig'])) {
            if (!empty($map['PeriodConfig'])) {
                $model->periodConfig = [];
                foreach ($map['PeriodConfig'] as $key1 => $value1) {
                    $model->periodConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['RefTaskId'])) {
            $model->refTaskId = $map['RefTaskId'];
        }

        if (isset($map['RelateTaskConfig'])) {
            if (!empty($map['RelateTaskConfig'])) {
                $model->relateTaskConfig = [];
                foreach ($map['RelateTaskConfig'] as $key1 => $value1) {
                    $model->relateTaskConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ResultCallbackConfig'])) {
            if (!empty($map['ResultCallbackConfig'])) {
                $model->resultCallbackConfig = [];
                foreach ($map['ResultCallbackConfig'] as $key1 => $value1) {
                    $model->resultCallbackConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['TaskWorkflow'] as $item1) {
                    $model->taskWorkflow[$n1] = taskWorkflow::fromMap($item1);
                    ++$n1;
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
            if (!empty($map['VoteConfigs'])) {
                $model->voteConfigs = [];
                foreach ($map['VoteConfigs'] as $key1 => $value1) {
                    $model->voteConfigs[$key1] = $value1;
                }
            }
        }

        if (isset($map['WorkflowNodes'])) {
            if (!empty($map['WorkflowNodes'])) {
                $model->workflowNodes = [];
                $n1 = 0;
                foreach ($map['WorkflowNodes'] as $item1) {
                    $model->workflowNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['runMsg'])) {
            $model->runMsg = $map['runMsg'];
        }

        return $model;
    }
}
