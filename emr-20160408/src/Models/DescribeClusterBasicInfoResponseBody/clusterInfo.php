<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\accessInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\bootstrapActionList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\failReason;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\gatewayClusterInfoList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\hostPoolInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\relateClusterInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\softwareInfo;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @var accessInfo
     */
    public $accessInfo;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoScalingAllowed;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoScalingByLoadAllowed;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoScalingEnable;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoScalingSpotWithLimitAllowed;

    /**
     * @example N/A
     *
     * @var string
     */
    public $autoScalingVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoScalingWithGraceAllowed;

    /**
     * @var bootstrapActionList
     */
    public $bootstrapActionList;

    /**
     * @example false
     *
     * @var bool
     */
    public $bootstrapFailed;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example ""
     *
     * @var string
     */
    public $clickhouseConf;

    /**
     * @example C-02582A4A415E****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example ""
     *
     * @var string
     */
    public $configurations;

    /**
     * @example 0
     *
     * @var int
     */
    public $coreNodeInService;

    /**
     * @example 0
     *
     * @var int
     */
    public $coreNodeTotal;

    /**
     * @example ECM_EMR
     *
     * @var string
     */
    public $createResource;

    /**
     * @example MANUAL
     *
     * @var string
     */
    public $createType;

    /**
     * @example false
     *
     * @var bool
     */
    public $dataDiskEncrypted;

    /**
     * @example false
     *
     * @var string
     */
    public $dataDiskKMSKeyId;

    /**
     * @example HALF_MANAGED
     *
     * @var string
     */
    public $depositType;

    /**
     * @example false
     *
     * @var bool
     */
    public $easEnable;

    /**
     * @example 1564367083000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example -None-
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @var failReason
     */
    public $failReason;

    /**
     * @example C-xxx
     *
     * @var string
     */
    public $gatewayClusterIds;

    /**
     * @var gatewayClusterInfoList
     */
    public $gatewayClusterInfoList;

    /**
     * @example true
     *
     * @var bool
     */
    public $highAvailabilityEnable;

    /**
     * @var hostPoolInfo
     */
    public $hostPoolInfo;

    /**
     * @example m-hp37dmahkdx7h2b5****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example ecs-2
     *
     * @var string
     */
    public $instanceGeneration;

    /**
     * @example true
     *
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $localMetaDb;

    /**
     * @example false
     *
     * @var bool
     */
    public $logEnable;

    /**
     * @example ""
     *
     * @var string
     */
    public $logPath;

    /**
     * @example ECS
     *
     * @var string
     */
    public $machineType;

    /**
     * @example 0
     *
     * @var int
     */
    public $masterNodeInService;

    /**
     * @example 0
     *
     * @var int
     */
    public $masterNodeTotal;

    /**
     * @example LOCAL
     *
     * @var string
     */
    public $metaStoreType;

    /**
     * @example test_cluster
     *
     * @var string
     */
    public $name;

    /**
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @example 1111
     *
     * @var string
     */
    public $operationId;

    /**
     * @example 0
     *
     * @var int
     */
    public $period;

    /**
     * @example cn-huhehaote-a
     *
     * @var string
     */
    public $regionId;

    /**
     * @example C-xxx
     *
     * @var string
     */
    public $relateClusterId;

    /**
     * @var relateClusterInfo
     */
    public $relateClusterInfo;

    /**
     * @example false
     *
     * @var bool
     */
    public $resizeClusterEnable;

    /**
     * @example true
     *
     * @var bool
     */
    public $resizeDiskEnable;

    /**
     * @example 1583000
     *
     * @var int
     */
    public $runningTime;

    /**
     * @example sg-xxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example emr-default-securitygroup
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @example false
     *
     * @var bool
     */
    public $showSoftwareInterface;

    /**
     * @var softwareInfo
     */
    public $softwareInfo;

    /**
     * @example 1564367083000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example IDLE
     *
     * @var string
     */
    public $status;

    /**
     * @example 1564367083000
     *
     * @var int
     */
    public $stopTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $taskNodeInService;

    /**
     * @example 0
     *
     * @var int
     */
    public $taskNodeTotal;

    /**
     * @example AliyunEmrEcsDefaultRole
     *
     * @var string
     */
    public $userDefinedEmrEcsRole;

    /**
     * @example 11131321311****
     *
     * @var string
     */
    public $userId;

    /**
     * @example vsw-xxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-xxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-huhehaote-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessInfo'                      => 'AccessInfo',
        'autoScalingAllowed'              => 'AutoScalingAllowed',
        'autoScalingByLoadAllowed'        => 'AutoScalingByLoadAllowed',
        'autoScalingEnable'               => 'AutoScalingEnable',
        'autoScalingSpotWithLimitAllowed' => 'AutoScalingSpotWithLimitAllowed',
        'autoScalingVersion'              => 'AutoScalingVersion',
        'autoScalingWithGraceAllowed'     => 'AutoScalingWithGraceAllowed',
        'bootstrapActionList'             => 'BootstrapActionList',
        'bootstrapFailed'                 => 'BootstrapFailed',
        'chargeType'                      => 'ChargeType',
        'clickhouseConf'                  => 'ClickhouseConf',
        'clusterId'                       => 'ClusterId',
        'configurations'                  => 'Configurations',
        'coreNodeInService'               => 'CoreNodeInService',
        'coreNodeTotal'                   => 'CoreNodeTotal',
        'createResource'                  => 'CreateResource',
        'createType'                      => 'CreateType',
        'dataDiskEncrypted'               => 'DataDiskEncrypted',
        'dataDiskKMSKeyId'                => 'DataDiskKMSKeyId',
        'depositType'                     => 'DepositType',
        'easEnable'                       => 'EasEnable',
        'expiredTime'                     => 'ExpiredTime',
        'extraInfo'                       => 'ExtraInfo',
        'failReason'                      => 'FailReason',
        'gatewayClusterIds'               => 'GatewayClusterIds',
        'gatewayClusterInfoList'          => 'GatewayClusterInfoList',
        'highAvailabilityEnable'          => 'HighAvailabilityEnable',
        'hostPoolInfo'                    => 'HostPoolInfo',
        'imageId'                         => 'ImageId',
        'instanceGeneration'              => 'InstanceGeneration',
        'ioOptimized'                     => 'IoOptimized',
        'k8sClusterId'                    => 'K8sClusterId',
        'localMetaDb'                     => 'LocalMetaDb',
        'logEnable'                       => 'LogEnable',
        'logPath'                         => 'LogPath',
        'machineType'                     => 'MachineType',
        'masterNodeInService'             => 'MasterNodeInService',
        'masterNodeTotal'                 => 'MasterNodeTotal',
        'metaStoreType'                   => 'MetaStoreType',
        'name'                            => 'Name',
        'netType'                         => 'NetType',
        'operationId'                     => 'OperationId',
        'period'                          => 'Period',
        'regionId'                        => 'RegionId',
        'relateClusterId'                 => 'RelateClusterId',
        'relateClusterInfo'               => 'RelateClusterInfo',
        'resizeClusterEnable'             => 'ResizeClusterEnable',
        'resizeDiskEnable'                => 'ResizeDiskEnable',
        'runningTime'                     => 'RunningTime',
        'securityGroupId'                 => 'SecurityGroupId',
        'securityGroupName'               => 'SecurityGroupName',
        'showSoftwareInterface'           => 'ShowSoftwareInterface',
        'softwareInfo'                    => 'SoftwareInfo',
        'startTime'                       => 'StartTime',
        'status'                          => 'Status',
        'stopTime'                        => 'StopTime',
        'taskNodeInService'               => 'TaskNodeInService',
        'taskNodeTotal'                   => 'TaskNodeTotal',
        'userDefinedEmrEcsRole'           => 'UserDefinedEmrEcsRole',
        'userId'                          => 'UserId',
        'vSwitchId'                       => 'VSwitchId',
        'vpcId'                           => 'VpcId',
        'zoneId'                          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessInfo) {
            $res['AccessInfo'] = null !== $this->accessInfo ? $this->accessInfo->toMap() : null;
        }
        if (null !== $this->autoScalingAllowed) {
            $res['AutoScalingAllowed'] = $this->autoScalingAllowed;
        }
        if (null !== $this->autoScalingByLoadAllowed) {
            $res['AutoScalingByLoadAllowed'] = $this->autoScalingByLoadAllowed;
        }
        if (null !== $this->autoScalingEnable) {
            $res['AutoScalingEnable'] = $this->autoScalingEnable;
        }
        if (null !== $this->autoScalingSpotWithLimitAllowed) {
            $res['AutoScalingSpotWithLimitAllowed'] = $this->autoScalingSpotWithLimitAllowed;
        }
        if (null !== $this->autoScalingVersion) {
            $res['AutoScalingVersion'] = $this->autoScalingVersion;
        }
        if (null !== $this->autoScalingWithGraceAllowed) {
            $res['AutoScalingWithGraceAllowed'] = $this->autoScalingWithGraceAllowed;
        }
        if (null !== $this->bootstrapActionList) {
            $res['BootstrapActionList'] = null !== $this->bootstrapActionList ? $this->bootstrapActionList->toMap() : null;
        }
        if (null !== $this->bootstrapFailed) {
            $res['BootstrapFailed'] = $this->bootstrapFailed;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clickhouseConf) {
            $res['ClickhouseConf'] = $this->clickhouseConf;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->configurations) {
            $res['Configurations'] = $this->configurations;
        }
        if (null !== $this->coreNodeInService) {
            $res['CoreNodeInService'] = $this->coreNodeInService;
        }
        if (null !== $this->coreNodeTotal) {
            $res['CoreNodeTotal'] = $this->coreNodeTotal;
        }
        if (null !== $this->createResource) {
            $res['CreateResource'] = $this->createResource;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->dataDiskEncrypted) {
            $res['DataDiskEncrypted'] = $this->dataDiskEncrypted;
        }
        if (null !== $this->dataDiskKMSKeyId) {
            $res['DataDiskKMSKeyId'] = $this->dataDiskKMSKeyId;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->easEnable) {
            $res['EasEnable'] = $this->easEnable;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = null !== $this->failReason ? $this->failReason->toMap() : null;
        }
        if (null !== $this->gatewayClusterIds) {
            $res['GatewayClusterIds'] = $this->gatewayClusterIds;
        }
        if (null !== $this->gatewayClusterInfoList) {
            $res['GatewayClusterInfoList'] = null !== $this->gatewayClusterInfoList ? $this->gatewayClusterInfoList->toMap() : null;
        }
        if (null !== $this->highAvailabilityEnable) {
            $res['HighAvailabilityEnable'] = $this->highAvailabilityEnable;
        }
        if (null !== $this->hostPoolInfo) {
            $res['HostPoolInfo'] = null !== $this->hostPoolInfo ? $this->hostPoolInfo->toMap() : null;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->localMetaDb) {
            $res['LocalMetaDb'] = $this->localMetaDb;
        }
        if (null !== $this->logEnable) {
            $res['LogEnable'] = $this->logEnable;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->masterNodeInService) {
            $res['MasterNodeInService'] = $this->masterNodeInService;
        }
        if (null !== $this->masterNodeTotal) {
            $res['MasterNodeTotal'] = $this->masterNodeTotal;
        }
        if (null !== $this->metaStoreType) {
            $res['MetaStoreType'] = $this->metaStoreType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->relateClusterId) {
            $res['RelateClusterId'] = $this->relateClusterId;
        }
        if (null !== $this->relateClusterInfo) {
            $res['RelateClusterInfo'] = null !== $this->relateClusterInfo ? $this->relateClusterInfo->toMap() : null;
        }
        if (null !== $this->resizeClusterEnable) {
            $res['ResizeClusterEnable'] = $this->resizeClusterEnable;
        }
        if (null !== $this->resizeDiskEnable) {
            $res['ResizeDiskEnable'] = $this->resizeDiskEnable;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->showSoftwareInterface) {
            $res['ShowSoftwareInterface'] = $this->showSoftwareInterface;
        }
        if (null !== $this->softwareInfo) {
            $res['SoftwareInfo'] = null !== $this->softwareInfo ? $this->softwareInfo->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->taskNodeInService) {
            $res['TaskNodeInService'] = $this->taskNodeInService;
        }
        if (null !== $this->taskNodeTotal) {
            $res['TaskNodeTotal'] = $this->taskNodeTotal;
        }
        if (null !== $this->userDefinedEmrEcsRole) {
            $res['UserDefinedEmrEcsRole'] = $this->userDefinedEmrEcsRole;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AccessInfo'])) {
            $model->accessInfo = accessInfo::fromMap($map['AccessInfo']);
        }
        if (isset($map['AutoScalingAllowed'])) {
            $model->autoScalingAllowed = $map['AutoScalingAllowed'];
        }
        if (isset($map['AutoScalingByLoadAllowed'])) {
            $model->autoScalingByLoadAllowed = $map['AutoScalingByLoadAllowed'];
        }
        if (isset($map['AutoScalingEnable'])) {
            $model->autoScalingEnable = $map['AutoScalingEnable'];
        }
        if (isset($map['AutoScalingSpotWithLimitAllowed'])) {
            $model->autoScalingSpotWithLimitAllowed = $map['AutoScalingSpotWithLimitAllowed'];
        }
        if (isset($map['AutoScalingVersion'])) {
            $model->autoScalingVersion = $map['AutoScalingVersion'];
        }
        if (isset($map['AutoScalingWithGraceAllowed'])) {
            $model->autoScalingWithGraceAllowed = $map['AutoScalingWithGraceAllowed'];
        }
        if (isset($map['BootstrapActionList'])) {
            $model->bootstrapActionList = bootstrapActionList::fromMap($map['BootstrapActionList']);
        }
        if (isset($map['BootstrapFailed'])) {
            $model->bootstrapFailed = $map['BootstrapFailed'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClickhouseConf'])) {
            $model->clickhouseConf = $map['ClickhouseConf'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Configurations'])) {
            $model->configurations = $map['Configurations'];
        }
        if (isset($map['CoreNodeInService'])) {
            $model->coreNodeInService = $map['CoreNodeInService'];
        }
        if (isset($map['CoreNodeTotal'])) {
            $model->coreNodeTotal = $map['CoreNodeTotal'];
        }
        if (isset($map['CreateResource'])) {
            $model->createResource = $map['CreateResource'];
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['DataDiskEncrypted'])) {
            $model->dataDiskEncrypted = $map['DataDiskEncrypted'];
        }
        if (isset($map['DataDiskKMSKeyId'])) {
            $model->dataDiskKMSKeyId = $map['DataDiskKMSKeyId'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['EasEnable'])) {
            $model->easEnable = $map['EasEnable'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = failReason::fromMap($map['FailReason']);
        }
        if (isset($map['GatewayClusterIds'])) {
            $model->gatewayClusterIds = $map['GatewayClusterIds'];
        }
        if (isset($map['GatewayClusterInfoList'])) {
            $model->gatewayClusterInfoList = gatewayClusterInfoList::fromMap($map['GatewayClusterInfoList']);
        }
        if (isset($map['HighAvailabilityEnable'])) {
            $model->highAvailabilityEnable = $map['HighAvailabilityEnable'];
        }
        if (isset($map['HostPoolInfo'])) {
            $model->hostPoolInfo = hostPoolInfo::fromMap($map['HostPoolInfo']);
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['LocalMetaDb'])) {
            $model->localMetaDb = $map['LocalMetaDb'];
        }
        if (isset($map['LogEnable'])) {
            $model->logEnable = $map['LogEnable'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['MasterNodeInService'])) {
            $model->masterNodeInService = $map['MasterNodeInService'];
        }
        if (isset($map['MasterNodeTotal'])) {
            $model->masterNodeTotal = $map['MasterNodeTotal'];
        }
        if (isset($map['MetaStoreType'])) {
            $model->metaStoreType = $map['MetaStoreType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RelateClusterId'])) {
            $model->relateClusterId = $map['RelateClusterId'];
        }
        if (isset($map['RelateClusterInfo'])) {
            $model->relateClusterInfo = relateClusterInfo::fromMap($map['RelateClusterInfo']);
        }
        if (isset($map['ResizeClusterEnable'])) {
            $model->resizeClusterEnable = $map['ResizeClusterEnable'];
        }
        if (isset($map['ResizeDiskEnable'])) {
            $model->resizeDiskEnable = $map['ResizeDiskEnable'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['ShowSoftwareInterface'])) {
            $model->showSoftwareInterface = $map['ShowSoftwareInterface'];
        }
        if (isset($map['SoftwareInfo'])) {
            $model->softwareInfo = softwareInfo::fromMap($map['SoftwareInfo']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['TaskNodeInService'])) {
            $model->taskNodeInService = $map['TaskNodeInService'];
        }
        if (isset($map['TaskNodeTotal'])) {
            $model->taskNodeTotal = $map['TaskNodeTotal'];
        }
        if (isset($map['UserDefinedEmrEcsRole'])) {
            $model->userDefinedEmrEcsRole = $map['UserDefinedEmrEcsRole'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
