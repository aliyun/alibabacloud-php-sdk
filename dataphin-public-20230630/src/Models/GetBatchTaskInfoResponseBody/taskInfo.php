<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo\customScheduleConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo\paramList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo\sparkClientInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo\upStreamList;
use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @example show tables;
     *
     * @var string
     */
    public $code;

    /**
     * @example 0 0 1 * * ?
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @var customScheduleConfig
     */
    public $customScheduleConfig;

    /**
     * @example dag_102121211
     *
     * @var string
     */
    public $dagId;

    /**
     * @example mysql_catalog
     *
     * @var string
     */
    public $dataSourceCatalog;

    /**
     * @example 12131111
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example erp
     *
     * @var string
     */
    public $dataSourceSchema;

    /**
     * @example 30231123
     *
     * @var string
     */
    public $developOwnerId;

    /**
     * @example 张三
     *
     * @var string
     */
    public $developOwnerName;

    /**
     * @example 12113111
     *
     * @var int
     */
    public $fileId;

    /**
     * @var bool
     */
    public $hasDevNode;

    /**
     * @example 测试任务1
     *
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needPublish;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $nodeDescription;

    /**
     * @example openapi
     *
     * @var string
     */
    public $nodeFrom;

    /**
     * @example n_1011_21232132322
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 测试任务1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @var string[]
     */
    public $nodeOutputNameList;

    /**
     * @example 1
     *
     * @var int
     */
    public $nodeStatus;

    /**
     * @example 30231123
     *
     * @var string
     */
    public $operatorUserId;

    /**
     * @example 30231123
     *
     * @var string
     */
    public $opsOwnerId;

    /**
     * @example 张三
     *
     * @var string
     */
    public $opsOwnerName;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 30231123
     *
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
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example 131211211
     *
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $published;

    /**
     * @example test xx
     *
     * @var string
     */
    public $remark;

    /**
     * @var bool
     */
    public $rerunable;

    /**
     * @example DAILY
     *
     * @var string
     */
    public $schedulePeriod;

    /**
     * @example 3
     *
     * @var int
     */
    public $scheduleType;

    /**
     * @var sparkClientInfo
     */
    public $sparkClientInfo;

    /**
     * @example 测试任务1
     *
     * @var string
     */
    public $status;

    /**
     * @example 21
     *
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
        'developOwnerId' => 'DevelopOwnerId',
        'developOwnerName' => 'DevelopOwnerName',
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
        'opsOwnerId' => 'OpsOwnerId',
        'opsOwnerName' => 'OpsOwnerName',
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->customScheduleConfig) {
            $res['CustomScheduleConfig'] = null !== $this->customScheduleConfig ? $this->customScheduleConfig->toMap() : null;
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
        if (null !== $this->developOwnerId) {
            $res['DevelopOwnerId'] = $this->developOwnerId;
        }
        if (null !== $this->developOwnerName) {
            $res['DevelopOwnerName'] = $this->developOwnerName;
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
            $res['NodeOutputNameList'] = $this->nodeOutputNameList;
        }
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }
        if (null !== $this->operatorUserId) {
            $res['OperatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->opsOwnerId) {
            $res['OpsOwnerId'] = $this->opsOwnerId;
        }
        if (null !== $this->opsOwnerName) {
            $res['OpsOwnerName'] = $this->opsOwnerName;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->paramList) {
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SparkClientInfo'] = null !== $this->sparkClientInfo ? $this->sparkClientInfo->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->upStreamList) {
            $res['UpStreamList'] = [];
            if (null !== $this->upStreamList && \is_array($this->upStreamList)) {
                $n = 0;
                foreach ($this->upStreamList as $item) {
                    $res['UpStreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
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
        if (isset($map['DevelopOwnerId'])) {
            $model->developOwnerId = $map['DevelopOwnerId'];
        }
        if (isset($map['DevelopOwnerName'])) {
            $model->developOwnerName = $map['DevelopOwnerName'];
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
                $model->nodeOutputNameList = $map['NodeOutputNameList'];
            }
        }
        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }
        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }
        if (isset($map['OpsOwnerId'])) {
            $model->opsOwnerId = $map['OpsOwnerId'];
        }
        if (isset($map['OpsOwnerName'])) {
            $model->opsOwnerName = $map['OpsOwnerName'];
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
                $n = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['UpStreamList'] as $item) {
                    $model->upStreamList[$n++] = null !== $item ? upStreamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
