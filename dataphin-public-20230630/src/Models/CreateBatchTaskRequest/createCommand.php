<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTaskRequest\createCommand\databricksPythonConnectInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBatchTaskRequest\createCommand\paiConfig;

class createCommand extends Model
{
    /**
     * @var string
     */
    public $codeTemplateId;

    /**
     * @var int
     */
    public $codeTemplateVersion;

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
     * @var databricksPythonConnectInfo
     */
    public $databricksPythonConnectInfo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $developOwnerIdList;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $opsOwnerIdList;

    /**
     * @var paiConfig
     */
    public $paiConfig;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $pythonModuleList;

    /**
     * @var int
     */
    public $scheduleType;

    /**
     * @var bool
     */
    public $sparkDynamicResourceSwitch;

    /**
     * @var string
     */
    public $sparkResourceEffectScope;

    /**
     * @var string
     */
    public $sparkSqlResourceConfigMap;

    /**
     * @var string
     */
    public $sparkVersion;

    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'codeTemplateId' => 'CodeTemplateId',
        'codeTemplateVersion' => 'CodeTemplateVersion',
        'dataSourceCatalog' => 'DataSourceCatalog',
        'dataSourceId' => 'DataSourceId',
        'dataSourceSchema' => 'DataSourceSchema',
        'databricksPythonConnectInfo' => 'DatabricksPythonConnectInfo',
        'description' => 'Description',
        'developOwnerIdList' => 'DevelopOwnerIdList',
        'directory' => 'Directory',
        'engine' => 'Engine',
        'name' => 'Name',
        'opsOwnerIdList' => 'OpsOwnerIdList',
        'paiConfig' => 'PaiConfig',
        'projectId' => 'ProjectId',
        'pythonModuleList' => 'PythonModuleList',
        'scheduleType' => 'ScheduleType',
        'sparkDynamicResourceSwitch' => 'SparkDynamicResourceSwitch',
        'sparkResourceEffectScope' => 'SparkResourceEffectScope',
        'sparkSqlResourceConfigMap' => 'SparkSqlResourceConfigMap',
        'sparkVersion' => 'SparkVersion',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (null !== $this->databricksPythonConnectInfo) {
            $this->databricksPythonConnectInfo->validate();
        }
        if (\is_array($this->developOwnerIdList)) {
            Model::validateArray($this->developOwnerIdList);
        }
        if (\is_array($this->opsOwnerIdList)) {
            Model::validateArray($this->opsOwnerIdList);
        }
        if (null !== $this->paiConfig) {
            $this->paiConfig->validate();
        }
        if (\is_array($this->pythonModuleList)) {
            Model::validateArray($this->pythonModuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeTemplateId) {
            $res['CodeTemplateId'] = $this->codeTemplateId;
        }

        if (null !== $this->codeTemplateVersion) {
            $res['CodeTemplateVersion'] = $this->codeTemplateVersion;
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

        if (null !== $this->databricksPythonConnectInfo) {
            $res['DatabricksPythonConnectInfo'] = null !== $this->databricksPythonConnectInfo ? $this->databricksPythonConnectInfo->toArray($noStream) : $this->databricksPythonConnectInfo;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->developOwnerIdList) {
            if (\is_array($this->developOwnerIdList)) {
                $res['DevelopOwnerIdList'] = [];
                $n1 = 0;
                foreach ($this->developOwnerIdList as $item1) {
                    $res['DevelopOwnerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->opsOwnerIdList) {
            if (\is_array($this->opsOwnerIdList)) {
                $res['OpsOwnerIdList'] = [];
                $n1 = 0;
                foreach ($this->opsOwnerIdList as $item1) {
                    $res['OpsOwnerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paiConfig) {
            $res['PaiConfig'] = null !== $this->paiConfig ? $this->paiConfig->toArray($noStream) : $this->paiConfig;
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

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->sparkDynamicResourceSwitch) {
            $res['SparkDynamicResourceSwitch'] = $this->sparkDynamicResourceSwitch;
        }

        if (null !== $this->sparkResourceEffectScope) {
            $res['SparkResourceEffectScope'] = $this->sparkResourceEffectScope;
        }

        if (null !== $this->sparkSqlResourceConfigMap) {
            $res['SparkSqlResourceConfigMap'] = $this->sparkSqlResourceConfigMap;
        }

        if (null !== $this->sparkVersion) {
            $res['SparkVersion'] = $this->sparkVersion;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['CodeTemplateId'])) {
            $model->codeTemplateId = $map['CodeTemplateId'];
        }

        if (isset($map['CodeTemplateVersion'])) {
            $model->codeTemplateVersion = $map['CodeTemplateVersion'];
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

        if (isset($map['DatabricksPythonConnectInfo'])) {
            $model->databricksPythonConnectInfo = databricksPythonConnectInfo::fromMap($map['DatabricksPythonConnectInfo']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DevelopOwnerIdList'])) {
            if (!empty($map['DevelopOwnerIdList'])) {
                $model->developOwnerIdList = [];
                $n1 = 0;
                foreach ($map['DevelopOwnerIdList'] as $item1) {
                    $model->developOwnerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OpsOwnerIdList'])) {
            if (!empty($map['OpsOwnerIdList'])) {
                $model->opsOwnerIdList = [];
                $n1 = 0;
                foreach ($map['OpsOwnerIdList'] as $item1) {
                    $model->opsOwnerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PaiConfig'])) {
            $model->paiConfig = paiConfig::fromMap($map['PaiConfig']);
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

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['SparkDynamicResourceSwitch'])) {
            $model->sparkDynamicResourceSwitch = $map['SparkDynamicResourceSwitch'];
        }

        if (isset($map['SparkResourceEffectScope'])) {
            $model->sparkResourceEffectScope = $map['SparkResourceEffectScope'];
        }

        if (isset($map['SparkSqlResourceConfigMap'])) {
            $model->sparkSqlResourceConfigMap = $map['SparkSqlResourceConfigMap'];
        }

        if (isset($map['SparkVersion'])) {
            $model->sparkVersion = $map['SparkVersion'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
