<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoByVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoByVersionResponseBody\taskInfo\customScheduleConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoByVersionResponseBody\taskInfo\paramList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoByVersionResponseBody\taskInfo\sparkClientInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoByVersionResponseBody\taskInfo\upStreamList;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var customScheduleConfig
     */
    public $customScheduleConfig;

    /**
     * @var string
     */
    public $dagId;

    /**
     * @var string
     */
    public $dataSourceCatalog;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceSchema;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var bool
     */
    public $hasDevNode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needPublish;

    /**
     * @var string
     */
    public $nodeDescription;

    /**
     * @var string
     */
    public $nodeFrom;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string[]
     */
    public $nodeOutputNameList;

    /**
     * @var int
     */
    public $nodeStatus;

    /**
     * @var string
     */
    public $operatorUserId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var paramList[]
     */
    public $paramList;

    /**
     * @var bool
     */
    public $paused;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $published;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var bool
     */
    public $rerunable;

    /**
     * @var string
     */
    public $schedulePeriod;

    /**
     * @var int
     */
    public $scheduleType;

    /**
     * @var sparkClientInfo
     */
    public $sparkClientInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var upStreamList[]
     */
    public $upStreamList;
    protected $_name = [
        'code' => 'Code',
        'cronExpression' => 'CronExpression',
        'customScheduleConfig' => 'CustomScheduleConfig',
        'dagId' => 'DagId',
        'dataSourceCatalog' => 'DataSourceCatalog',
        'dataSourceId' => 'DataSourceId',
        'dataSourceSchema' => 'DataSourceSchema',
        'fileId' => 'FileId',
        'hasDevNode' => 'HasDevNode',
        'name' => 'Name',
        'needPublish' => 'NeedPublish',
        'nodeDescription' => 'NodeDescription',
        'nodeFrom' => 'NodeFrom',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeOutputNameList' => 'NodeOutputNameList',
        'nodeStatus' => 'NodeStatus',
        'operatorUserId' => 'OperatorUserId',
        'ownerName' => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'paramList' => 'ParamList',
        'paused' => 'Paused',
        'priority' => 'Priority',
        'projectId' => 'ProjectId',
        'published' => 'Published',
        'remark' => 'Remark',
        'rerunable' => 'Rerunable',
        'schedulePeriod' => 'SchedulePeriod',
        'scheduleType' => 'ScheduleType',
        'sparkClientInfo' => 'SparkClientInfo',
        'status' => 'Status',
        'taskType' => 'TaskType',
        'upStreamList' => 'UpStreamList',
    ];

    public function validate()
    {
        if (null !== $this->customScheduleConfig) {
            $this->customScheduleConfig->validate();
        }
        if (\is_array($this->nodeOutputNameList)) {
            Model::validateArray($this->nodeOutputNameList);
        }
        if (\is_array($this->paramList)) {
            Model::validateArray($this->paramList);
        }
        if (null !== $this->sparkClientInfo) {
            $this->sparkClientInfo->validate();
        }
        if (\is_array($this->upStreamList)) {
            Model::validateArray($this->upStreamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->customScheduleConfig) {
            $res['CustomScheduleConfig'] = null !== $this->customScheduleConfig ? $this->customScheduleConfig->toArray($noStream) : $this->customScheduleConfig;
        }

        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }

        if (null !== $this->dataSourceCatalog) {
            $res['DataSourceCatalog'] = $this->dataSourceCatalog;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceSchema) {
            $res['DataSourceSchema'] = $this->dataSourceSchema;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->hasDevNode) {
            $res['HasDevNode'] = $this->hasDevNode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needPublish) {
            $res['NeedPublish'] = $this->needPublish;
        }

        if (null !== $this->nodeDescription) {
            $res['NodeDescription'] = $this->nodeDescription;
        }

        if (null !== $this->nodeFrom) {
            $res['NodeFrom'] = $this->nodeFrom;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeOutputNameList) {
            if (\is_array($this->nodeOutputNameList)) {
                $res['NodeOutputNameList'] = [];
                $n1 = 0;
                foreach ($this->nodeOutputNameList as $item1) {
                    $res['NodeOutputNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }

        if (null !== $this->operatorUserId) {
            $res['OperatorUserId'] = $this->operatorUserId;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->paramList) {
            if (\is_array($this->paramList)) {
                $res['ParamList'] = [];
                $n1 = 0;
                foreach ($this->paramList as $item1) {
                    $res['ParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paused) {
            $res['Paused'] = $this->paused;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->published) {
            $res['Published'] = $this->published;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->rerunable) {
            $res['Rerunable'] = $this->rerunable;
        }

        if (null !== $this->schedulePeriod) {
            $res['SchedulePeriod'] = $this->schedulePeriod;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->sparkClientInfo) {
            $res['SparkClientInfo'] = null !== $this->sparkClientInfo ? $this->sparkClientInfo->toArray($noStream) : $this->sparkClientInfo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->upStreamList) {
            if (\is_array($this->upStreamList)) {
                $res['UpStreamList'] = [];
                $n1 = 0;
                foreach ($this->upStreamList as $item1) {
                    $res['UpStreamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['CustomScheduleConfig'])) {
            $model->customScheduleConfig = customScheduleConfig::fromMap($map['CustomScheduleConfig']);
        }

        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        if (isset($map['DataSourceCatalog'])) {
            $model->dataSourceCatalog = $map['DataSourceCatalog'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceSchema'])) {
            $model->dataSourceSchema = $map['DataSourceSchema'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['HasDevNode'])) {
            $model->hasDevNode = $map['HasDevNode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedPublish'])) {
            $model->needPublish = $map['NeedPublish'];
        }

        if (isset($map['NodeDescription'])) {
            $model->nodeDescription = $map['NodeDescription'];
        }

        if (isset($map['NodeFrom'])) {
            $model->nodeFrom = $map['NodeFrom'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeOutputNameList'])) {
            if (!empty($map['NodeOutputNameList'])) {
                $model->nodeOutputNameList = [];
                $n1 = 0;
                foreach ($map['NodeOutputNameList'] as $item1) {
                    $model->nodeOutputNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }

        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n1 = 0;
                foreach ($map['ParamList'] as $item1) {
                    $model->paramList[$n1] = paramList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Paused'])) {
            $model->paused = $map['Paused'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Published'])) {
            $model->published = $map['Published'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Rerunable'])) {
            $model->rerunable = $map['Rerunable'];
        }

        if (isset($map['SchedulePeriod'])) {
            $model->schedulePeriod = $map['SchedulePeriod'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['SparkClientInfo'])) {
            $model->sparkClientInfo = sparkClientInfo::fromMap($map['SparkClientInfo']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['UpStreamList'])) {
            if (!empty($map['UpStreamList'])) {
                $model->upStreamList = [];
                $n1 = 0;
                foreach ($map['UpStreamList'] as $item1) {
                    $model->upStreamList[$n1] = upStreamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
