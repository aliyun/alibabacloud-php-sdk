<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\customScheduleConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\paramList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\sparkClientInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\upStreamList;

class updateCommand extends Model
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
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeDescription;

    /**
     * @var string[]
     */
    public $nodeOutputNameList;

    /**
     * @var int
     */
    public $nodeStatus;

    /**
     * @var paramList[]
     */
    public $paramList;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $pythonModuleList;

    /**
     * @var string
     */
    public $schedulePeriod;

    /**
     * @var sparkClientInfo
     */
    public $sparkClientInfo;

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
        'dataSourceCatalog' => 'DataSourceCatalog',
        'dataSourceId' => 'DataSourceId',
        'dataSourceSchema' => 'DataSourceSchema',
        'engine' => 'Engine',
        'fileId' => 'FileId',
        'name' => 'Name',
        'nodeDescription' => 'NodeDescription',
        'nodeOutputNameList' => 'NodeOutputNameList',
        'nodeStatus' => 'NodeStatus',
        'paramList' => 'ParamList',
        'priority' => 'Priority',
        'projectId' => 'ProjectId',
        'pythonModuleList' => 'PythonModuleList',
        'schedulePeriod' => 'SchedulePeriod',
        'sparkClientInfo' => 'SparkClientInfo',
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
        if (\is_array($this->pythonModuleList)) {
            Model::validateArray($this->pythonModuleList);
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

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->pythonModuleList) {
            if (\is_array($this->pythonModuleList)) {
                $res['PythonModuleList'] = [];
                $n1 = 0;
                foreach ($this->pythonModuleList as $item1) {
                    $res['PythonModuleList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schedulePeriod) {
            $res['SchedulePeriod'] = $this->schedulePeriod;
        }

        if (null !== $this->sparkClientInfo) {
            $res['SparkClientInfo'] = null !== $this->sparkClientInfo ? $this->sparkClientInfo->toArray($noStream) : $this->sparkClientInfo;
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

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['PythonModuleList'])) {
            if (!empty($map['PythonModuleList'])) {
                $model->pythonModuleList = [];
                $n1 = 0;
                foreach ($map['PythonModuleList'] as $item1) {
                    $model->pythonModuleList[$n1] = $item1;
                    ++$n1;
                }
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
