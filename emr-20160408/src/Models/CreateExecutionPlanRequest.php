<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\CreateExecutionPlanRequest\bootstrapAction;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateExecutionPlanRequest\config;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateExecutionPlanRequest\ecsOrder;
use AlibabaCloud\Tea\Model;

class CreateExecutionPlanRequest extends Model
{
    /**
     * @var bootstrapAction[]
     */
    public $bootstrapAction;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var config[]
     */
    public $config;

    /**
     * @var string
     */
    public $configurations;

    /**
     * @var bool
     */
    public $createClusterOnDemand;

    /**
     * @var string
     */
    public $dayOfMonth;

    /**
     * @var string
     */
    public $dayOfWeek;

    /**
     * @var bool
     */
    public $easEnable;

    /**
     * @var ecsOrder[]
     */
    public $ecsOrder;

    /**
     * @var string
     */
    public $emrVer;

    /**
     * @var bool
     */
    public $highAvailabilityEnable;

    /**
     * @var bool
     */
    public $initCustomHiveMetaDB;

    /**
     * @var string
     */
    public $instanceGeneration;

    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var bool
     */
    public $isOpenPublicIp;

    /**
     * @var string[]
     */
    public $jobIdList;

    /**
     * @var bool
     */
    public $logEnable;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string[]
     */
    public $optionSoftWareList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var int
     */
    public $timeInterval;

    /**
     * @var string
     */
    public $timeUnit;

    /**
     * @var bool
     */
    public $useCustomHiveMetaDB;

    /**
     * @var bool
     */
    public $useLocalMetaDb;

    /**
     * @var string
     */
    public $userDefinedEmrEcsRole;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $workflowDefinition;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bootstrapAction'        => 'BootstrapAction',
        'clusterId'              => 'ClusterId',
        'clusterName'            => 'ClusterName',
        'clusterType'            => 'ClusterType',
        'config'                 => 'Config',
        'configurations'         => 'Configurations',
        'createClusterOnDemand'  => 'CreateClusterOnDemand',
        'dayOfMonth'             => 'DayOfMonth',
        'dayOfWeek'              => 'DayOfWeek',
        'easEnable'              => 'EasEnable',
        'ecsOrder'               => 'EcsOrder',
        'emrVer'                 => 'EmrVer',
        'highAvailabilityEnable' => 'HighAvailabilityEnable',
        'initCustomHiveMetaDB'   => 'InitCustomHiveMetaDB',
        'instanceGeneration'     => 'InstanceGeneration',
        'ioOptimized'            => 'IoOptimized',
        'isOpenPublicIp'         => 'IsOpenPublicIp',
        'jobIdList'              => 'JobIdList',
        'logEnable'              => 'LogEnable',
        'logPath'                => 'LogPath',
        'name'                   => 'Name',
        'netType'                => 'NetType',
        'optionSoftWareList'     => 'OptionSoftWareList',
        'regionId'               => 'RegionId',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'securityGroupId'        => 'SecurityGroupId',
        'startTime'              => 'StartTime',
        'strategy'               => 'Strategy',
        'timeInterval'           => 'TimeInterval',
        'timeUnit'               => 'TimeUnit',
        'useCustomHiveMetaDB'    => 'UseCustomHiveMetaDB',
        'useLocalMetaDb'         => 'UseLocalMetaDb',
        'userDefinedEmrEcsRole'  => 'UserDefinedEmrEcsRole',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
        'workflowDefinition'     => 'WorkflowDefinition',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootstrapAction) {
            $res['BootstrapAction'] = [];
            if (null !== $this->bootstrapAction && \is_array($this->bootstrapAction)) {
                $n = 0;
                foreach ($this->bootstrapAction as $item) {
                    $res['BootstrapAction'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->config) {
            $res['Config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                $n = 0;
                foreach ($this->config as $item) {
                    $res['Config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->configurations) {
            $res['Configurations'] = $this->configurations;
        }
        if (null !== $this->createClusterOnDemand) {
            $res['CreateClusterOnDemand'] = $this->createClusterOnDemand;
        }
        if (null !== $this->dayOfMonth) {
            $res['DayOfMonth'] = $this->dayOfMonth;
        }
        if (null !== $this->dayOfWeek) {
            $res['DayOfWeek'] = $this->dayOfWeek;
        }
        if (null !== $this->easEnable) {
            $res['EasEnable'] = $this->easEnable;
        }
        if (null !== $this->ecsOrder) {
            $res['EcsOrder'] = [];
            if (null !== $this->ecsOrder && \is_array($this->ecsOrder)) {
                $n = 0;
                foreach ($this->ecsOrder as $item) {
                    $res['EcsOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->emrVer) {
            $res['EmrVer'] = $this->emrVer;
        }
        if (null !== $this->highAvailabilityEnable) {
            $res['HighAvailabilityEnable'] = $this->highAvailabilityEnable;
        }
        if (null !== $this->initCustomHiveMetaDB) {
            $res['InitCustomHiveMetaDB'] = $this->initCustomHiveMetaDB;
        }
        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->isOpenPublicIp) {
            $res['IsOpenPublicIp'] = $this->isOpenPublicIp;
        }
        if (null !== $this->jobIdList) {
            $res['JobIdList'] = $this->jobIdList;
        }
        if (null !== $this->logEnable) {
            $res['LogEnable'] = $this->logEnable;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->optionSoftWareList) {
            $res['OptionSoftWareList'] = $this->optionSoftWareList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->timeInterval) {
            $res['TimeInterval'] = $this->timeInterval;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->useCustomHiveMetaDB) {
            $res['UseCustomHiveMetaDB'] = $this->useCustomHiveMetaDB;
        }
        if (null !== $this->useLocalMetaDb) {
            $res['UseLocalMetaDb'] = $this->useLocalMetaDb;
        }
        if (null !== $this->userDefinedEmrEcsRole) {
            $res['UserDefinedEmrEcsRole'] = $this->userDefinedEmrEcsRole;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->workflowDefinition) {
            $res['WorkflowDefinition'] = $this->workflowDefinition;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExecutionPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BootstrapAction'])) {
            if (!empty($map['BootstrapAction'])) {
                $model->bootstrapAction = [];
                $n                      = 0;
                foreach ($map['BootstrapAction'] as $item) {
                    $model->bootstrapAction[$n++] = null !== $item ? bootstrapAction::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Config'])) {
            if (!empty($map['Config'])) {
                $model->config = [];
                $n             = 0;
                foreach ($map['Config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Configurations'])) {
            $model->configurations = $map['Configurations'];
        }
        if (isset($map['CreateClusterOnDemand'])) {
            $model->createClusterOnDemand = $map['CreateClusterOnDemand'];
        }
        if (isset($map['DayOfMonth'])) {
            $model->dayOfMonth = $map['DayOfMonth'];
        }
        if (isset($map['DayOfWeek'])) {
            $model->dayOfWeek = $map['DayOfWeek'];
        }
        if (isset($map['EasEnable'])) {
            $model->easEnable = $map['EasEnable'];
        }
        if (isset($map['EcsOrder'])) {
            if (!empty($map['EcsOrder'])) {
                $model->ecsOrder = [];
                $n               = 0;
                foreach ($map['EcsOrder'] as $item) {
                    $model->ecsOrder[$n++] = null !== $item ? ecsOrder::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EmrVer'])) {
            $model->emrVer = $map['EmrVer'];
        }
        if (isset($map['HighAvailabilityEnable'])) {
            $model->highAvailabilityEnable = $map['HighAvailabilityEnable'];
        }
        if (isset($map['InitCustomHiveMetaDB'])) {
            $model->initCustomHiveMetaDB = $map['InitCustomHiveMetaDB'];
        }
        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['IsOpenPublicIp'])) {
            $model->isOpenPublicIp = $map['IsOpenPublicIp'];
        }
        if (isset($map['JobIdList'])) {
            if (!empty($map['JobIdList'])) {
                $model->jobIdList = $map['JobIdList'];
            }
        }
        if (isset($map['LogEnable'])) {
            $model->logEnable = $map['LogEnable'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OptionSoftWareList'])) {
            if (!empty($map['OptionSoftWareList'])) {
                $model->optionSoftWareList = $map['OptionSoftWareList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['TimeInterval'])) {
            $model->timeInterval = $map['TimeInterval'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['UseCustomHiveMetaDB'])) {
            $model->useCustomHiveMetaDB = $map['UseCustomHiveMetaDB'];
        }
        if (isset($map['UseLocalMetaDb'])) {
            $model->useLocalMetaDb = $map['UseLocalMetaDb'];
        }
        if (isset($map['UserDefinedEmrEcsRole'])) {
            $model->userDefinedEmrEcsRole = $map['UserDefinedEmrEcsRole'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WorkflowDefinition'])) {
            $model->workflowDefinition = $map['WorkflowDefinition'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
