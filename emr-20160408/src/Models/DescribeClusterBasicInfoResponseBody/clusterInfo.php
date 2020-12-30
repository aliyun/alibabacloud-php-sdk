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
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $logEnable;

    /**
     * @var int
     */
    public $taskNodeInService;

    /**
     * @var bool
     */
    public $autoScalingSpotWithLimitAllowed;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $stopTime;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $depositType;

    /**
     * @var relateClusterInfo
     */
    public $relateClusterInfo;

    /**
     * @var string
     */
    public $relateClusterId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var bool
     */
    public $resizeDiskEnable;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var failReason
     */
    public $failReason;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $userDefinedEmrEcsRole;

    /**
     * @var string
     */
    public $metaStoreType;

    /**
     * @var softwareInfo
     */
    public $softwareInfo;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $configurations;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $autoScalingVersion;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var accessInfo
     */
    public $accessInfo;

    /**
     * @var string
     */
    public $createResource;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var bool
     */
    public $highAvailabilityEnable;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var bool
     */
    public $autoScalingAllowed;

    /**
     * @var int
     */
    public $masterNodeInService;

    /**
     * @var bool
     */
    public $autoScalingEnable;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var bool
     */
    public $autoScalingWithGraceAllowed;

    /**
     * @var bool
     */
    public $showSoftwareInterface;

    /**
     * @var int
     */
    public $coreNodeInService;

    /**
     * @var bool
     */
    public $autoScalingByLoadAllowed;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var bool
     */
    public $localMetaDb;

    /**
     * @var bootstrapActionList
     */
    public $bootstrapActionList;

    /**
     * @var gatewayClusterInfoList
     */
    public $gatewayClusterInfoList;

    /**
     * @var string
     */
    public $instanceGeneration;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $easEnable;

    /**
     * @var string
     */
    public $machineType;

    /**
     * @var hostPoolInfo
     */
    public $hostPoolInfo;

    /**
     * @var int
     */
    public $masterNodeTotal;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $coreNodeTotal;

    /**
     * @var string
     */
    public $gatewayClusterIds;

    /**
     * @var bool
     */
    public $bootstrapFailed;

    /**
     * @var int
     */
    public $taskNodeTotal;
    protected $_name = [
        'vpcId'                           => 'VpcId',
        'logEnable'                       => 'LogEnable',
        'taskNodeInService'               => 'TaskNodeInService',
        'autoScalingSpotWithLimitAllowed' => 'AutoScalingSpotWithLimitAllowed',
        'chargeType'                      => 'ChargeType',
        'userId'                          => 'UserId',
        'stopTime'                        => 'StopTime',
        'createType'                      => 'CreateType',
        'depositType'                     => 'DepositType',
        'relateClusterInfo'               => 'RelateClusterInfo',
        'relateClusterId'                 => 'RelateClusterId',
        'securityGroupName'               => 'SecurityGroupName',
        'resizeDiskEnable'                => 'ResizeDiskEnable',
        'imageId'                         => 'ImageId',
        'failReason'                      => 'FailReason',
        'clusterId'                       => 'ClusterId',
        'userDefinedEmrEcsRole'           => 'UserDefinedEmrEcsRole',
        'metaStoreType'                   => 'MetaStoreType',
        'softwareInfo'                    => 'SoftwareInfo',
        'startTime'                       => 'StartTime',
        'configurations'                  => 'Configurations',
        'logPath'                         => 'LogPath',
        'autoScalingVersion'              => 'AutoScalingVersion',
        'netType'                         => 'NetType',
        'zoneId'                          => 'ZoneId',
        'accessInfo'                      => 'AccessInfo',
        'createResource'                  => 'CreateResource',
        'status'                          => 'Status',
        'runningTime'                     => 'RunningTime',
        'highAvailabilityEnable'          => 'HighAvailabilityEnable',
        'securityGroupId'                 => 'SecurityGroupId',
        'autoScalingAllowed'              => 'AutoScalingAllowed',
        'masterNodeInService'             => 'MasterNodeInService',
        'autoScalingEnable'               => 'AutoScalingEnable',
        'operationId'                     => 'OperationId',
        'autoScalingWithGraceAllowed'     => 'AutoScalingWithGraceAllowed',
        'showSoftwareInterface'           => 'ShowSoftwareInterface',
        'coreNodeInService'               => 'CoreNodeInService',
        'autoScalingByLoadAllowed'        => 'AutoScalingByLoadAllowed',
        'k8sClusterId'                    => 'K8sClusterId',
        'localMetaDb'                     => 'LocalMetaDb',
        'bootstrapActionList'             => 'BootstrapActionList',
        'gatewayClusterInfoList'          => 'GatewayClusterInfoList',
        'instanceGeneration'              => 'InstanceGeneration',
        'name'                            => 'Name',
        'easEnable'                       => 'EasEnable',
        'machineType'                     => 'MachineType',
        'hostPoolInfo'                    => 'HostPoolInfo',
        'masterNodeTotal'                 => 'MasterNodeTotal',
        'regionId'                        => 'RegionId',
        'period'                          => 'Period',
        'extraInfo'                       => 'ExtraInfo',
        'ioOptimized'                     => 'IoOptimized',
        'vSwitchId'                       => 'VSwitchId',
        'expiredTime'                     => 'ExpiredTime',
        'coreNodeTotal'                   => 'CoreNodeTotal',
        'gatewayClusterIds'               => 'GatewayClusterIds',
        'bootstrapFailed'                 => 'BootstrapFailed',
        'taskNodeTotal'                   => 'TaskNodeTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->logEnable) {
            $res['LogEnable'] = $this->logEnable;
        }
        if (null !== $this->taskNodeInService) {
            $res['TaskNodeInService'] = $this->taskNodeInService;
        }
        if (null !== $this->autoScalingSpotWithLimitAllowed) {
            $res['AutoScalingSpotWithLimitAllowed'] = $this->autoScalingSpotWithLimitAllowed;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->createType) {
            $res['CreateType'] = $this->createType;
        }
        if (null !== $this->depositType) {
            $res['DepositType'] = $this->depositType;
        }
        if (null !== $this->relateClusterInfo) {
            $res['RelateClusterInfo'] = null !== $this->relateClusterInfo ? $this->relateClusterInfo->toMap() : null;
        }
        if (null !== $this->relateClusterId) {
            $res['RelateClusterId'] = $this->relateClusterId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->resizeDiskEnable) {
            $res['ResizeDiskEnable'] = $this->resizeDiskEnable;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = null !== $this->failReason ? $this->failReason->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->userDefinedEmrEcsRole) {
            $res['UserDefinedEmrEcsRole'] = $this->userDefinedEmrEcsRole;
        }
        if (null !== $this->metaStoreType) {
            $res['MetaStoreType'] = $this->metaStoreType;
        }
        if (null !== $this->softwareInfo) {
            $res['SoftwareInfo'] = null !== $this->softwareInfo ? $this->softwareInfo->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->configurations) {
            $res['Configurations'] = $this->configurations;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->autoScalingVersion) {
            $res['AutoScalingVersion'] = $this->autoScalingVersion;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->accessInfo) {
            $res['AccessInfo'] = null !== $this->accessInfo ? $this->accessInfo->toMap() : null;
        }
        if (null !== $this->createResource) {
            $res['CreateResource'] = $this->createResource;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->highAvailabilityEnable) {
            $res['HighAvailabilityEnable'] = $this->highAvailabilityEnable;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->autoScalingAllowed) {
            $res['AutoScalingAllowed'] = $this->autoScalingAllowed;
        }
        if (null !== $this->masterNodeInService) {
            $res['MasterNodeInService'] = $this->masterNodeInService;
        }
        if (null !== $this->autoScalingEnable) {
            $res['AutoScalingEnable'] = $this->autoScalingEnable;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->autoScalingWithGraceAllowed) {
            $res['AutoScalingWithGraceAllowed'] = $this->autoScalingWithGraceAllowed;
        }
        if (null !== $this->showSoftwareInterface) {
            $res['ShowSoftwareInterface'] = $this->showSoftwareInterface;
        }
        if (null !== $this->coreNodeInService) {
            $res['CoreNodeInService'] = $this->coreNodeInService;
        }
        if (null !== $this->autoScalingByLoadAllowed) {
            $res['AutoScalingByLoadAllowed'] = $this->autoScalingByLoadAllowed;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->localMetaDb) {
            $res['LocalMetaDb'] = $this->localMetaDb;
        }
        if (null !== $this->bootstrapActionList) {
            $res['BootstrapActionList'] = null !== $this->bootstrapActionList ? $this->bootstrapActionList->toMap() : null;
        }
        if (null !== $this->gatewayClusterInfoList) {
            $res['GatewayClusterInfoList'] = null !== $this->gatewayClusterInfoList ? $this->gatewayClusterInfoList->toMap() : null;
        }
        if (null !== $this->instanceGeneration) {
            $res['InstanceGeneration'] = $this->instanceGeneration;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->easEnable) {
            $res['EasEnable'] = $this->easEnable;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->hostPoolInfo) {
            $res['HostPoolInfo'] = null !== $this->hostPoolInfo ? $this->hostPoolInfo->toMap() : null;
        }
        if (null !== $this->masterNodeTotal) {
            $res['MasterNodeTotal'] = $this->masterNodeTotal;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->coreNodeTotal) {
            $res['CoreNodeTotal'] = $this->coreNodeTotal;
        }
        if (null !== $this->gatewayClusterIds) {
            $res['GatewayClusterIds'] = $this->gatewayClusterIds;
        }
        if (null !== $this->bootstrapFailed) {
            $res['BootstrapFailed'] = $this->bootstrapFailed;
        }
        if (null !== $this->taskNodeTotal) {
            $res['TaskNodeTotal'] = $this->taskNodeTotal;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['LogEnable'])) {
            $model->logEnable = $map['LogEnable'];
        }
        if (isset($map['TaskNodeInService'])) {
            $model->taskNodeInService = $map['TaskNodeInService'];
        }
        if (isset($map['AutoScalingSpotWithLimitAllowed'])) {
            $model->autoScalingSpotWithLimitAllowed = $map['AutoScalingSpotWithLimitAllowed'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['CreateType'])) {
            $model->createType = $map['CreateType'];
        }
        if (isset($map['DepositType'])) {
            $model->depositType = $map['DepositType'];
        }
        if (isset($map['RelateClusterInfo'])) {
            $model->relateClusterInfo = relateClusterInfo::fromMap($map['RelateClusterInfo']);
        }
        if (isset($map['RelateClusterId'])) {
            $model->relateClusterId = $map['RelateClusterId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['ResizeDiskEnable'])) {
            $model->resizeDiskEnable = $map['ResizeDiskEnable'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = failReason::fromMap($map['FailReason']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UserDefinedEmrEcsRole'])) {
            $model->userDefinedEmrEcsRole = $map['UserDefinedEmrEcsRole'];
        }
        if (isset($map['MetaStoreType'])) {
            $model->metaStoreType = $map['MetaStoreType'];
        }
        if (isset($map['SoftwareInfo'])) {
            $model->softwareInfo = softwareInfo::fromMap($map['SoftwareInfo']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Configurations'])) {
            $model->configurations = $map['Configurations'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['AutoScalingVersion'])) {
            $model->autoScalingVersion = $map['AutoScalingVersion'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['AccessInfo'])) {
            $model->accessInfo = accessInfo::fromMap($map['AccessInfo']);
        }
        if (isset($map['CreateResource'])) {
            $model->createResource = $map['CreateResource'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['HighAvailabilityEnable'])) {
            $model->highAvailabilityEnable = $map['HighAvailabilityEnable'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['AutoScalingAllowed'])) {
            $model->autoScalingAllowed = $map['AutoScalingAllowed'];
        }
        if (isset($map['MasterNodeInService'])) {
            $model->masterNodeInService = $map['MasterNodeInService'];
        }
        if (isset($map['AutoScalingEnable'])) {
            $model->autoScalingEnable = $map['AutoScalingEnable'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['AutoScalingWithGraceAllowed'])) {
            $model->autoScalingWithGraceAllowed = $map['AutoScalingWithGraceAllowed'];
        }
        if (isset($map['ShowSoftwareInterface'])) {
            $model->showSoftwareInterface = $map['ShowSoftwareInterface'];
        }
        if (isset($map['CoreNodeInService'])) {
            $model->coreNodeInService = $map['CoreNodeInService'];
        }
        if (isset($map['AutoScalingByLoadAllowed'])) {
            $model->autoScalingByLoadAllowed = $map['AutoScalingByLoadAllowed'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['LocalMetaDb'])) {
            $model->localMetaDb = $map['LocalMetaDb'];
        }
        if (isset($map['BootstrapActionList'])) {
            $model->bootstrapActionList = bootstrapActionList::fromMap($map['BootstrapActionList']);
        }
        if (isset($map['GatewayClusterInfoList'])) {
            $model->gatewayClusterInfoList = gatewayClusterInfoList::fromMap($map['GatewayClusterInfoList']);
        }
        if (isset($map['InstanceGeneration'])) {
            $model->instanceGeneration = $map['InstanceGeneration'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EasEnable'])) {
            $model->easEnable = $map['EasEnable'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['HostPoolInfo'])) {
            $model->hostPoolInfo = hostPoolInfo::fromMap($map['HostPoolInfo']);
        }
        if (isset($map['MasterNodeTotal'])) {
            $model->masterNodeTotal = $map['MasterNodeTotal'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['CoreNodeTotal'])) {
            $model->coreNodeTotal = $map['CoreNodeTotal'];
        }
        if (isset($map['GatewayClusterIds'])) {
            $model->gatewayClusterIds = $map['GatewayClusterIds'];
        }
        if (isset($map['BootstrapFailed'])) {
            $model->bootstrapFailed = $map['BootstrapFailed'];
        }
        if (isset($map['TaskNodeTotal'])) {
            $model->taskNodeTotal = $map['TaskNodeTotal'];
        }

        return $model;
    }
}
