<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\customScheduleConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\paramList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\sparkClientInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\upStreamList;
use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
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
     * @example PYTHON3_7
     *
     * @var string
     */
    public $engine;

    /**
     * @description This parameter is required.
     *
     * @example 12113111
     *
     * @var int
     */
    public $fileId;

    /**
     * @description This parameter is required.
     *
     * @example test111
     *
     * @var string
     */
    public $name;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $nodeDescription;

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
     * @var paramList[]
     */
    public $paramList;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description This parameter is required.
     *
     * @example 10121101
     *
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $pythonModuleList;

    /**
     * @example DAILY
     *
     * @var string
     */
    public $schedulePeriod;

    /**
     * @var sparkClientInfo
     */
    public $sparkClientInfo;

    /**
     * @description This parameter is required.
     *
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
        'code'                 => 'Code',
        'cronExpression'       => 'CronExpression',
        'customScheduleConfig' => 'CustomScheduleConfig',
        'dataSourceCatalog'    => 'DataSourceCatalog',
        'dataSourceId'         => 'DataSourceId',
        'dataSourceSchema'     => 'DataSourceSchema',
        'engine'               => 'Engine',
        'fileId'               => 'FileId',
        'name'                 => 'Name',
        'nodeDescription'      => 'NodeDescription',
        'nodeOutputNameList'   => 'NodeOutputNameList',
        'nodeStatus'           => 'NodeStatus',
        'paramList'            => 'ParamList',
        'priority'             => 'Priority',
        'projectId'            => 'ProjectId',
        'pythonModuleList'     => 'PythonModuleList',
        'schedulePeriod'       => 'SchedulePeriod',
        'sparkClientInfo'      => 'SparkClientInfo',
        'taskType'             => 'TaskType',
        'upStreamList'         => 'UpStreamList',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->dataSourceCatalog) {
            $res['DataSourceCatalog'] = $this->dataSourceCatalog;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceSchema) {
            $res['DataSourceSchema'] = $this->dataSourceSchema;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeDescription) {
            $res['NodeDescription'] = $this->nodeDescription;
        }
        if (null !== $this->nodeOutputNameList) {
            $res['NodeOutputNameList'] = $this->nodeOutputNameList;
        }
        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
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
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->pythonModuleList) {
            $res['PythonModuleList'] = $this->pythonModuleList;
        }
        if (null !== $this->schedulePeriod) {
            $res['SchedulePeriod'] = $this->schedulePeriod;
        }
        if (null !== $this->sparkClientInfo) {
            $res['SparkClientInfo'] = null !== $this->sparkClientInfo ? $this->sparkClientInfo->toMap() : null;
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
     * @return updateCommand
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
        if (isset($map['DataSourceCatalog'])) {
            $model->dataSourceCatalog = $map['DataSourceCatalog'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceSchema'])) {
            $model->dataSourceSchema = $map['DataSourceSchema'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeDescription'])) {
            $model->nodeDescription = $map['NodeDescription'];
        }
        if (isset($map['NodeOutputNameList'])) {
            if (!empty($map['NodeOutputNameList'])) {
                $model->nodeOutputNameList = $map['NodeOutputNameList'];
            }
        }
        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }
        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n                = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['PythonModuleList'])) {
            if (!empty($map['PythonModuleList'])) {
                $model->pythonModuleList = $map['PythonModuleList'];
            }
        }
        if (isset($map['SchedulePeriod'])) {
            $model->schedulePeriod = $map['SchedulePeriod'];
        }
        if (isset($map['SparkClientInfo'])) {
            $model->sparkClientInfo = sparkClientInfo::fromMap($map['SparkClientInfo']);
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UpStreamList'])) {
            if (!empty($map['UpStreamList'])) {
                $model->upStreamList = [];
                $n                   = 0;
                foreach ($map['UpStreamList'] as $item) {
                    $model->upStreamList[$n++] = null !== $item ? upStreamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
