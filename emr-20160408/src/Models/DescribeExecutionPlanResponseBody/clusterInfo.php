<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\clusterInfo\bootstrapActionList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\clusterInfo\configList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\clusterInfo\ecsOrders;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\clusterInfo\softwareInfo;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @var bootstrapActionList
     */
    public $bootstrapActionList;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var configList
     */
    public $configList;

    /**
     * @var string
     */
    public $configurations;

    /**
     * @var bool
     */
    public $easEnable;

    /**
     * @var ecsOrders
     */
    public $ecsOrders;

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
     * @var string
     */
    public $securityGroupId;

    /**
     * @var softwareInfo
     */
    public $softwareInfo;

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
    public $zoneId;
    protected $_name = [
        'bootstrapActionList'    => 'BootstrapActionList',
        'clusterType'            => 'ClusterType',
        'configList'             => 'ConfigList',
        'configurations'         => 'Configurations',
        'easEnable'              => 'EasEnable',
        'ecsOrders'              => 'EcsOrders',
        'emrVer'                 => 'EmrVer',
        'highAvailabilityEnable' => 'HighAvailabilityEnable',
        'initCustomHiveMetaDB'   => 'InitCustomHiveMetaDB',
        'instanceGeneration'     => 'InstanceGeneration',
        'ioOptimized'            => 'IoOptimized',
        'logEnable'              => 'LogEnable',
        'logPath'                => 'LogPath',
        'name'                   => 'Name',
        'netType'                => 'NetType',
        'securityGroupId'        => 'SecurityGroupId',
        'softwareInfo'           => 'SoftwareInfo',
        'useCustomHiveMetaDB'    => 'UseCustomHiveMetaDB',
        'useLocalMetaDb'         => 'UseLocalMetaDb',
        'userDefinedEmrEcsRole'  => 'UserDefinedEmrEcsRole',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootstrapActionList) {
            $res['BootstrapActionList'] = null !== $this->bootstrapActionList ? $this->bootstrapActionList->toMap() : null;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toMap() : null;
        }
        if (null !== $this->configurations) {
            $res['Configurations'] = $this->configurations;
        }
        if (null !== $this->easEnable) {
            $res['EasEnable'] = $this->easEnable;
        }
        if (null !== $this->ecsOrders) {
            $res['EcsOrders'] = null !== $this->ecsOrders ? $this->ecsOrders->toMap() : null;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->softwareInfo) {
            $res['SoftwareInfo'] = null !== $this->softwareInfo ? $this->softwareInfo->toMap() : null;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BootstrapActionList'])) {
            $model->bootstrapActionList = bootstrapActionList::fromMap($map['BootstrapActionList']);
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }
        if (isset($map['Configurations'])) {
            $model->configurations = $map['Configurations'];
        }
        if (isset($map['EasEnable'])) {
            $model->easEnable = $map['EasEnable'];
        }
        if (isset($map['EcsOrders'])) {
            $model->ecsOrders = ecsOrders::fromMap($map['EcsOrders']);
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SoftwareInfo'])) {
            $model->softwareInfo = softwareInfo::fromMap($map['SoftwareInfo']);
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
