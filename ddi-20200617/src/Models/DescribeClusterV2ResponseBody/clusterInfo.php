<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\accessInfo;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\bootstrapActionList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\failReason;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\gatewayClusterInfoList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\hostPoolInfo;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\relateClusterInfo;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\softwareInfo;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @var accessInfo
     */
    public $accessInfo;

    /**
     * @var bool
     */
    public $autoScalingAllowed;

    /**
     * @var bool
     */
    public $autoScalingByLoadAllowed;

    /**
     * @var bool
     */
    public $autoScalingEnable;

    /**
     * @var bool
     */
    public $autoScalingSpotWithLimitAllowed;

    /**
     * @var string
     */
    public $autoScalingVersion;

    /**
     * @var bool
     */
    public $autoScalingWithGraceAllowed;

    /**
     * @var bootstrapActionList
     */
    public $bootstrapActionList;

    /**
     * @var bool
     */
    public $bootstrapFailed;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $configurations;

    /**
     * @var int
     */
    public $coreNodeInService;

    /**
     * @var int
     */
    public $coreNodeTotal;

    /**
     * @var string
     */
    public $createResource;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $depositType;

    /**
     * @var bool
     */
    public $easEnable;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var failReason
     */
    public $failReason;

    /**
     * @var string
     */
    public $gatewayClusterIds;

    /**
     * @var gatewayClusterInfoList
     */
    public $gatewayClusterInfoList;

    /**
     * @var bool
     */
    public $highAvailabilityEnable;

    /**
     * @var hostGroupList
     */
    public $hostGroupList;

    /**
     * @var hostPoolInfo
     */
    public $hostPoolInfo;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceGeneration;

    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var bool
     */
    public $localMetaDb;

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
    public $machineType;

    /**
     * @var int
     */
    public $masterNodeInService;

    /**
     * @var int
     */
    public $masterNodeTotal;

    /**
     * @var string
     */
    public $metaStoreType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relateClusterId;

    /**
     * @var relateClusterInfo
     */
    public $relateClusterInfo;

    /**
     * @var bool
     */
    public $resizeDiskEnable;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var bool
     */
    public $showSoftwareInterface;

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
    public $status;

    /**
     * @var int
     */
    public $stopTime;

    /**
     * @var int
     */
    public $taskNodeInService;

    /**
     * @var int
     */
    public $taskNodeTotal;

    /**
     * @var string
     */
    public $userDefinedEmrEcsRole;

    /**
     * @var string
     */
    public $userId;

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
        'configurations'                  => 'Configurations',
        'coreNodeInService'               => 'CoreNodeInService',
        'coreNodeTotal'                   => 'CoreNodeTotal',
        'createResource'                  => 'CreateResource',
        'createType'                      => 'CreateType',
        'depositType'                     => 'DepositType',
        'easEnable'                       => 'EasEnable',
        'expiredTime'                     => 'ExpiredTime',
        'extraInfo'                       => 'ExtraInfo',
        'failReason'                      => 'FailReason',
        'gatewayClusterIds'               => 'GatewayClusterIds',
        'gatewayClusterInfoList'          => 'GatewayClusterInfoList',
        'highAvailabilityEnable'          => 'HighAvailabilityEnable',
        'hostGroupList'                   => 'HostGroupList',
        'hostPoolInfo'                    => 'HostPoolInfo',
        'id'                              => 'Id',
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
        'period'                          => 'Period',
        'regionId'                        => 'RegionId',
        'relateClusterId'                 => 'RelateClusterId',
        'relateClusterInfo'               => 'RelateClusterInfo',
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
        if (null !== $this->hostGroupList) {
            $res['HostGroupList'] = null !== $this->hostGroupList ? $this->hostGroupList->toMap() : null;
        }
        if (null !== $this->hostPoolInfo) {
            $res['HostPoolInfo'] = null !== $this->hostPoolInfo ? $this->hostPoolInfo->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['HostGroupList'])) {
            $model->hostGroupList = hostGroupList::fromMap($map['HostGroupList']);
        }
        if (isset($map['HostPoolInfo'])) {
            $model->hostPoolInfo = hostPoolInfo::fromMap($map['HostPoolInfo']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
