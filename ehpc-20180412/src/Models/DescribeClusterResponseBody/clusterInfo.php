<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\addOnsInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\applications;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\initialImage;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\nodes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\onPremiseInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\postInstallScripts;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @description The version of the E-HPC client.
     *
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @var addOnsInfo
     */
    public $addOnsInfo;

    /**
     * @description The list of on-premises management nodes.
     *
     * This parameter is returned only when the cluster is deployed across hybrid environments and the hybrid-cloud proxy mode is enabled for the cluster.
     * @var applications
     */
    public $applications;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @description The list of scripts downloaded after the cluster was created.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $baseOsTag;

    /**
     * @description The number of proxy nodes.
     *
     * @example 1.0.1
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $clusterVersion;

    /**
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @description The ID of the Elastic Compute Service (ECS) instance.
     *
     * @example 2020-12-24T03:18:23.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The list of management nodes.
     *
     * @example Simple
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The tag of the software.
     *
     * @example cluster
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @description The name of the image.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $ecsChargeType;

    /**
     * @var ecsInfo
     */
    public $ecsInfo;

    /**
     * @description The version of the software.
     *
     * @example false
     *
     * @var bool
     */
    public $haEnable;

    /**
     * @description The instance type of the proxy node.
     *
     * @example i-bp15de54eet1c43f****
     *
     * @var string
     */
    public $id;

    /**
     * @description The runtime parameter of the script.
     *
     * @example centos_7_02_64_20G_alibase_20170818****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The instance type of the logon nodes.
     *
     * @example test_for_Image
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The instance type of the management nodes.
     *
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var initialImage
     */
    public $initialImage;

    /**
     * @description The ID of the vSwitch. E-HPC can be deployed only in VPCs.
     *
     * @example test
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The list of proxy nodes on the cloud.
     *
     * This parameter is returned only when the cluster is deployed across hybrid environments and the hybrid-cloud proxy mode is enabled for the cluster.
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The URL that was used to download the script.
     *
     * @example cluster
     *
     * @var string
     */
    public $name;

    /**
     * @var nodes
     */
    public $nodes;

    /**
     * @var onPremiseInfo
     */
    public $onPremiseInfo;

    /**
     * @var string
     */
    public $openldapPar;

    /**
     * @description The number of management nodes.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $plugin;

    /**
     * @var postInstallScripts
     */
    public $postInstallScripts;

    /**
     * @var string
     */
    public $ramNodeTypes;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The number of compute nodes.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instance type of the compute nodes.
     *
     * @example NasMountpoint:/RemoteDirectory
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The location where the cluster is deployed. Valid values:
     *
     *   OnPremise: The cluster is deployed on a hybrid cloud.
     *   PublicCloud: The node is deployed on a public cloud.
     *
     * @example 00b648b****
     *
     * @var string
     */
    public $sccClusterId;

    /**
     * @var int
     */
    public $schedulerPreInstall;

    /**
     * @description The list of ECS instance specifications and quantity.
     *
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The type of the network shared storage. Valid value: NAS.
     *
     * @example sg-bp1asugr34gzn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The remote directory on which the file system is mounted.
     *
     * @example creating
     *
     * @var string
     */
    public $status;

    /**
     * @description The list of logon nodes.
     *
     * @example vsw-bp1e47optm9g58zcu****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the software.
     *
     * @example 008b64****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The list of compute nodes.
     *
     * @example 008b648bcb-s****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The array of the software in the cluster. The array contains the name and version of the software.
     *
     * @example nfs
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @description The number of logon nodes.
     *
     * @example NAS
     *
     * @var string
     */
    public $volumeType;

    /**
     * @description The region ID of the security group.
     *
     * @example vpc-bp1pxkcvmmz53ki89****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $winAdPar;

    /**
     * @var int
     */
    public $withoutAgent;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountType'           => 'AccountType',
        'addOnsInfo'            => 'AddOnsInfo',
        'applications'          => 'Applications',
        'autoRenew'             => 'AutoRenew',
        'autoRenewPeriod'       => 'AutoRenewPeriod',
        'baseOsTag'             => 'BaseOsTag',
        'clientVersion'         => 'ClientVersion',
        'clusterVersion'        => 'ClusterVersion',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'   => 'ComputeSpotStrategy',
        'createTime'            => 'CreateTime',
        'deployMode'            => 'DeployMode',
        'description'           => 'Description',
        'domain'                => 'Domain',
        'ecsChargeType'         => 'EcsChargeType',
        'ecsInfo'               => 'EcsInfo',
        'haEnable'              => 'HaEnable',
        'id'                    => 'Id',
        'imageId'               => 'ImageId',
        'imageName'             => 'ImageName',
        'imageOwnerAlias'       => 'ImageOwnerAlias',
        'initialImage'          => 'InitialImage',
        'keyPairName'           => 'KeyPairName',
        'location'              => 'Location',
        'name'                  => 'Name',
        'nodes'                 => 'Nodes',
        'onPremiseInfo'         => 'OnPremiseInfo',
        'openldapPar'           => 'OpenldapPar',
        'osTag'                 => 'OsTag',
        'period'                => 'Period',
        'periodUnit'            => 'PeriodUnit',
        'plugin'                => 'Plugin',
        'postInstallScripts'    => 'PostInstallScripts',
        'ramNodeTypes'          => 'RamNodeTypes',
        'ramRoleName'           => 'RamRoleName',
        'regionId'              => 'RegionId',
        'remoteDirectory'       => 'RemoteDirectory',
        'resourceGroupId'       => 'ResourceGroupId',
        'sccClusterId'          => 'SccClusterId',
        'schedulerPreInstall'   => 'SchedulerPreInstall',
        'schedulerType'         => 'SchedulerType',
        'securityGroupId'       => 'SecurityGroupId',
        'status'                => 'Status',
        'vSwitchId'             => 'VSwitchId',
        'volumeId'              => 'VolumeId',
        'volumeMountpoint'      => 'VolumeMountpoint',
        'volumeProtocol'        => 'VolumeProtocol',
        'volumeType'            => 'VolumeType',
        'vpcId'                 => 'VpcId',
        'winAdPar'              => 'WinAdPar',
        'withoutAgent'          => 'WithoutAgent',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->addOnsInfo) {
            $res['AddOnsInfo'] = null !== $this->addOnsInfo ? $this->addOnsInfo->toMap() : null;
        }
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterVersion) {
            $res['ClusterVersion'] = $this->clusterVersion;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
        }
        if (null !== $this->ecsInfo) {
            $res['EcsInfo'] = null !== $this->ecsInfo ? $this->ecsInfo->toMap() : null;
        }
        if (null !== $this->haEnable) {
            $res['HaEnable'] = $this->haEnable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->initialImage) {
            $res['InitialImage'] = null !== $this->initialImage ? $this->initialImage->toMap() : null;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toMap() : null;
        }
        if (null !== $this->onPremiseInfo) {
            $res['OnPremiseInfo'] = null !== $this->onPremiseInfo ? $this->onPremiseInfo->toMap() : null;
        }
        if (null !== $this->openldapPar) {
            $res['OpenldapPar'] = $this->openldapPar;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->plugin) {
            $res['Plugin'] = $this->plugin;
        }
        if (null !== $this->postInstallScripts) {
            $res['PostInstallScripts'] = null !== $this->postInstallScripts ? $this->postInstallScripts->toMap() : null;
        }
        if (null !== $this->ramNodeTypes) {
            $res['RamNodeTypes'] = $this->ramNodeTypes;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sccClusterId) {
            $res['SccClusterId'] = $this->sccClusterId;
        }
        if (null !== $this->schedulerPreInstall) {
            $res['SchedulerPreInstall'] = $this->schedulerPreInstall;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->winAdPar) {
            $res['WinAdPar'] = $this->winAdPar;
        }
        if (null !== $this->withoutAgent) {
            $res['WithoutAgent'] = $this->withoutAgent;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AddOnsInfo'])) {
            $model->addOnsInfo = addOnsInfo::fromMap($map['AddOnsInfo']);
        }
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterVersion'])) {
            $model->clusterVersion = $map['ClusterVersion'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
        }
        if (isset($map['EcsInfo'])) {
            $model->ecsInfo = ecsInfo::fromMap($map['EcsInfo']);
        }
        if (isset($map['HaEnable'])) {
            $model->haEnable = $map['HaEnable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InitialImage'])) {
            $model->initialImage = initialImage::fromMap($map['InitialImage']);
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = nodes::fromMap($map['Nodes']);
        }
        if (isset($map['OnPremiseInfo'])) {
            $model->onPremiseInfo = onPremiseInfo::fromMap($map['OnPremiseInfo']);
        }
        if (isset($map['OpenldapPar'])) {
            $model->openldapPar = $map['OpenldapPar'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Plugin'])) {
            $model->plugin = $map['Plugin'];
        }
        if (isset($map['PostInstallScripts'])) {
            $model->postInstallScripts = postInstallScripts::fromMap($map['PostInstallScripts']);
        }
        if (isset($map['RamNodeTypes'])) {
            $model->ramNodeTypes = $map['RamNodeTypes'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SccClusterId'])) {
            $model->sccClusterId = $map['SccClusterId'];
        }
        if (isset($map['SchedulerPreInstall'])) {
            $model->schedulerPreInstall = $map['SchedulerPreInstall'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WinAdPar'])) {
            $model->winAdPar = $map['WinAdPar'];
        }
        if (isset($map['WithoutAgent'])) {
            $model->withoutAgent = $map['WithoutAgent'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
