<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\conditionScheduleConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\customScheduleConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\executeRerunConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\executeTimeOutConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\offlineCodeTemplateParams;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\paramList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\scheduleTemplate;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\sparkClientInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand\upStreamList;

class submitCommand extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $codeTemplateVersion;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var conditionScheduleConfig
     */
    public $conditionScheduleConfig;

    /**
     * @var string
     */
    public $cpuResource;

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
    public $engine;

    /**
     * @var executeRerunConfig
     */
    public $executeRerunConfig;

    /**
     * @var executeTimeOutConfig
     */
    public $executeTimeOutConfig;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $memoryResource;

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
     * @var string
     */
    public $offlineCodeTemplateId;

    /**
     * @var offlineCodeTemplateParams[]
     */
    public $offlineCodeTemplateParams;

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
     * @var string[]
     */
    public $resourceReferenceList;

    /**
     * @var bool
     */
    public $retryOnTimeoutEnable;

    /**
     * @var string
     */
    public $schedulePeriod;

    /**
     * @var scheduleTemplate
     */
    public $scheduleTemplate;

    /**
     * @var sparkClientInfo
     */
    public $sparkClientInfo;

    /**
     * @var bool
     */
    public $sparkDynamicResourceSwitch;

    /**
     * @var string
     */
    public $sparkResourceEffectScope;

    /**
     * @var string[]
     */
    public $sparkSqlResourceConfigMap;

    /**
     * @var upStreamList[]
     */
    public $upStreamList;
    protected $_name = [
        'code' => 'Code',
        'codeTemplateVersion' => 'CodeTemplateVersion',
        'comment' => 'Comment',
        'conditionScheduleConfig' => 'ConditionScheduleConfig',
        'cpuResource' => 'CpuResource',
        'cronExpression' => 'CronExpression',
        'customScheduleConfig' => 'CustomScheduleConfig',
        'engine' => 'Engine',
        'executeRerunConfig' => 'ExecuteRerunConfig',
        'executeTimeOutConfig' => 'ExecuteTimeOutConfig',
        'fileId' => 'FileId',
        'memoryResource' => 'MemoryResource',
        'name' => 'Name',
        'nodeDescription' => 'NodeDescription',
        'nodeOutputNameList' => 'NodeOutputNameList',
        'nodeStatus' => 'NodeStatus',
        'offlineCodeTemplateId' => 'OfflineCodeTemplateId',
        'offlineCodeTemplateParams' => 'OfflineCodeTemplateParams',
        'paramList' => 'ParamList',
        'priority' => 'Priority',
        'projectId' => 'ProjectId',
        'pythonModuleList' => 'PythonModuleList',
        'resourceReferenceList' => 'ResourceReferenceList',
        'retryOnTimeoutEnable' => 'RetryOnTimeoutEnable',
        'schedulePeriod' => 'SchedulePeriod',
        'scheduleTemplate' => 'ScheduleTemplate',
        'sparkClientInfo' => 'SparkClientInfo',
        'sparkDynamicResourceSwitch' => 'SparkDynamicResourceSwitch',
        'sparkResourceEffectScope' => 'SparkResourceEffectScope',
        'sparkSqlResourceConfigMap' => 'SparkSqlResourceConfigMap',
        'upStreamList' => 'UpStreamList',
    ];

    public function validate()
    {
        if (null !== $this->conditionScheduleConfig) {
            $this->conditionScheduleConfig->validate();
        }
        if (null !== $this->customScheduleConfig) {
            $this->customScheduleConfig->validate();
        }
        if (null !== $this->executeRerunConfig) {
            $this->executeRerunConfig->validate();
        }
        if (null !== $this->executeTimeOutConfig) {
            $this->executeTimeOutConfig->validate();
        }
        if (\is_array($this->nodeOutputNameList)) {
            Model::validateArray($this->nodeOutputNameList);
        }
        if (\is_array($this->offlineCodeTemplateParams)) {
            Model::validateArray($this->offlineCodeTemplateParams);
        }
        if (\is_array($this->paramList)) {
            Model::validateArray($this->paramList);
        }
        if (\is_array($this->pythonModuleList)) {
            Model::validateArray($this->pythonModuleList);
        }
        if (\is_array($this->resourceReferenceList)) {
            Model::validateArray($this->resourceReferenceList);
        }
        if (null !== $this->scheduleTemplate) {
            $this->scheduleTemplate->validate();
        }
        if (null !== $this->sparkClientInfo) {
            $this->sparkClientInfo->validate();
        }
        if (\is_array($this->sparkSqlResourceConfigMap)) {
            Model::validateArray($this->sparkSqlResourceConfigMap);
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

        if (null !== $this->codeTemplateVersion) {
            $res['CodeTemplateVersion'] = $this->codeTemplateVersion;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->conditionScheduleConfig) {
            $res['ConditionScheduleConfig'] = null !== $this->conditionScheduleConfig ? $this->conditionScheduleConfig->toArray($noStream) : $this->conditionScheduleConfig;
        }

        if (null !== $this->cpuResource) {
            $res['CpuResource'] = $this->cpuResource;
        }

        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->customScheduleConfig) {
            $res['CustomScheduleConfig'] = null !== $this->customScheduleConfig ? $this->customScheduleConfig->toArray($noStream) : $this->customScheduleConfig;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->executeRerunConfig) {
            $res['ExecuteRerunConfig'] = null !== $this->executeRerunConfig ? $this->executeRerunConfig->toArray($noStream) : $this->executeRerunConfig;
        }

        if (null !== $this->executeTimeOutConfig) {
            $res['ExecuteTimeOutConfig'] = null !== $this->executeTimeOutConfig ? $this->executeTimeOutConfig->toArray($noStream) : $this->executeTimeOutConfig;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->memoryResource) {
            $res['MemoryResource'] = $this->memoryResource;
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

        if (null !== $this->offlineCodeTemplateId) {
            $res['OfflineCodeTemplateId'] = $this->offlineCodeTemplateId;
        }

        if (null !== $this->offlineCodeTemplateParams) {
            if (\is_array($this->offlineCodeTemplateParams)) {
                $res['OfflineCodeTemplateParams'] = [];
                $n1 = 0;
                foreach ($this->offlineCodeTemplateParams as $item1) {
                    $res['OfflineCodeTemplateParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->resourceReferenceList) {
            if (\is_array($this->resourceReferenceList)) {
                $res['ResourceReferenceList'] = [];
                $n1 = 0;
                foreach ($this->resourceReferenceList as $item1) {
                    $res['ResourceReferenceList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retryOnTimeoutEnable) {
            $res['RetryOnTimeoutEnable'] = $this->retryOnTimeoutEnable;
        }

        if (null !== $this->schedulePeriod) {
            $res['SchedulePeriod'] = $this->schedulePeriod;
        }

        if (null !== $this->scheduleTemplate) {
            $res['ScheduleTemplate'] = null !== $this->scheduleTemplate ? $this->scheduleTemplate->toArray($noStream) : $this->scheduleTemplate;
        }

        if (null !== $this->sparkClientInfo) {
            $res['SparkClientInfo'] = null !== $this->sparkClientInfo ? $this->sparkClientInfo->toArray($noStream) : $this->sparkClientInfo;
        }

        if (null !== $this->sparkDynamicResourceSwitch) {
            $res['SparkDynamicResourceSwitch'] = $this->sparkDynamicResourceSwitch;
        }

        if (null !== $this->sparkResourceEffectScope) {
            $res['SparkResourceEffectScope'] = $this->sparkResourceEffectScope;
        }

        if (null !== $this->sparkSqlResourceConfigMap) {
            if (\is_array($this->sparkSqlResourceConfigMap)) {
                $res['SparkSqlResourceConfigMap'] = [];
                foreach ($this->sparkSqlResourceConfigMap as $key1 => $value1) {
                    $res['SparkSqlResourceConfigMap'][$key1] = $value1;
                }
            }
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

        if (isset($map['CodeTemplateVersion'])) {
            $model->codeTemplateVersion = $map['CodeTemplateVersion'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['ConditionScheduleConfig'])) {
            $model->conditionScheduleConfig = conditionScheduleConfig::fromMap($map['ConditionScheduleConfig']);
        }

        if (isset($map['CpuResource'])) {
            $model->cpuResource = $map['CpuResource'];
        }

        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['CustomScheduleConfig'])) {
            $model->customScheduleConfig = customScheduleConfig::fromMap($map['CustomScheduleConfig']);
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['ExecuteRerunConfig'])) {
            $model->executeRerunConfig = executeRerunConfig::fromMap($map['ExecuteRerunConfig']);
        }

        if (isset($map['ExecuteTimeOutConfig'])) {
            $model->executeTimeOutConfig = executeTimeOutConfig::fromMap($map['ExecuteTimeOutConfig']);
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['MemoryResource'])) {
            $model->memoryResource = $map['MemoryResource'];
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

        if (isset($map['OfflineCodeTemplateId'])) {
            $model->offlineCodeTemplateId = $map['OfflineCodeTemplateId'];
        }

        if (isset($map['OfflineCodeTemplateParams'])) {
            if (!empty($map['OfflineCodeTemplateParams'])) {
                $model->offlineCodeTemplateParams = [];
                $n1 = 0;
                foreach ($map['OfflineCodeTemplateParams'] as $item1) {
                    $model->offlineCodeTemplateParams[$n1] = offlineCodeTemplateParams::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['ResourceReferenceList'])) {
            if (!empty($map['ResourceReferenceList'])) {
                $model->resourceReferenceList = [];
                $n1 = 0;
                foreach ($map['ResourceReferenceList'] as $item1) {
                    $model->resourceReferenceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RetryOnTimeoutEnable'])) {
            $model->retryOnTimeoutEnable = $map['RetryOnTimeoutEnable'];
        }

        if (isset($map['SchedulePeriod'])) {
            $model->schedulePeriod = $map['SchedulePeriod'];
        }

        if (isset($map['ScheduleTemplate'])) {
            $model->scheduleTemplate = scheduleTemplate::fromMap($map['ScheduleTemplate']);
        }

        if (isset($map['SparkClientInfo'])) {
            $model->sparkClientInfo = sparkClientInfo::fromMap($map['SparkClientInfo']);
        }

        if (isset($map['SparkDynamicResourceSwitch'])) {
            $model->sparkDynamicResourceSwitch = $map['SparkDynamicResourceSwitch'];
        }

        if (isset($map['SparkResourceEffectScope'])) {
            $model->sparkResourceEffectScope = $map['SparkResourceEffectScope'];
        }

        if (isset($map['SparkSqlResourceConfigMap'])) {
            if (!empty($map['SparkSqlResourceConfigMap'])) {
                $model->sparkSqlResourceConfigMap = [];
                foreach ($map['SparkSqlResourceConfigMap'] as $key1 => $value1) {
                    $model->sparkSqlResourceConfigMap[$key1] = $value1;
                }
            }
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
