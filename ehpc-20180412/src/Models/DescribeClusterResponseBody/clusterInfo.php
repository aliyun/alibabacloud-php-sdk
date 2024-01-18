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
     * @description The image type. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *   marketplace: Alibaba Cloud Marketplace image
     *
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The duration of the subscription. The unit of the duration is specified by the `PeriodUnit` parameter.
     *
     *   If you set PriceUnit to Year, the valid values of the Period parameter are 1, 2, and 3.
     *   If you set PriceUnit to Month, the valid values of the Period parameter are 1, 2, 3, 4, 5, 6, 7, 8, and 9.
     *   If you set PriceUnit to Hour, the valid value of the Period parameter is 1.
     *
     * Default value: 1.
     * @var addOnsInfo
     */
    public $addOnsInfo;

    /**
     * @description The number of management nodes.
     *
     * @var applications
     */
    public $applications;

    /**
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The image ID.
     *
     * @example 1
     *
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @description The vSwitch ID. E-HPC can be deployed only in VPCs.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $baseOsTag;

    /**
     * @description The URL used to download the script.
     *
     * @example 1.0.1
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The role of the on-premises node in the cluster. Valid values:
     *
     *   Manager: management node
     *   Login: logon node
     *   Compute: compute node
     *
     * @example 1.0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @example 0.56
     *
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @description The mode in which the cluster is deployed. Valid values:
     *
     *   Standard: An account node, a scheduling node, a logon node, and multiple compute nodes are separately deployed.
     *   Advanced: Two high availability (HA) account nodes, two HA scheduler nodes, one logon node, and multiple compute nodes are separately deployed.
     *   Simple: A management node, a logon node, and multiple compute nodes are deployed. The management node consists of an account node and a scheduling node. The logon node and compute nodes are separately deployed.
     *   Tiny: The account node, scheduling node, and logon node are deployed on one node. The compute node is separately deployed.
     *
     * @example 2020-12-24T03:18:23.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The instance ID.
     *
     * @example Simple
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The mount target of the NAS file system. The mount target is of the VPC type. Mount targets cannot be automatically created for NAS file systems.
     *
     * @example cluster
     *
     * @var string
     */
    public $description;

    /**
     * @description The directory of the on-premises node in the cluster.
     *
     * @example ldap
     *
     * @var string
     */
    public $domain;

    /**
     * @description The image ID.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $ecsChargeType;

    /**
     * @description The number of proxy nodes.
     *
     * @var ecsInfo
     */
    public $ecsInfo;

    /**
     * @description The region ID.
     *
     * @example false
     *
     * @var bool
     */
    public $haEnable;

    /**
     * @description The list of post-installation scripts
     *
     * @example i-bp15de54eet1c43f****
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the network shared storage. Valid value: NAS.
     *
     * @example centos_7_02_64_20G_alibase_20170818****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The tag of the software.
     *
     * @example test_for_Image
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The version of the E-HPC client.
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
     * @description The name of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The version of the software.
     *
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The image name.
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
     * @description The mode configurations of the plug-in. This parameter takes effect only when the SchedulerType parameter is set to custom.
     *
     * The value must be a JSON string. The parameter contains the following parameters: pluginMod, pluginLocalPath, and pluginOssPath.
     *
     *   pluginMod: the mode of the plug-in. The following modes are supported:
     *
     *   oss: The plug-in is downloaded and decompressed from OSS to a local path that is specified by the pluginLocalPath parameter.
     *   image: By default, the plug-in is stored in a pre-defined local path that is specified by the pluginLocalPath parameter.
     *
     *   pluginLocalPath: the local path where the plug-in is stored. We recommend that you select a shared directory in the oss mode and a non-shared directory in the image mode.
     *
     *   pluginOssPath: the remote path where the plug-in is stored in OSS. This parameter takes effect only if you set the pluginMod parameter to oss.
     *
     * @var onPremiseInfo
     */
    public $onPremiseInfo;

    /**
     * @description The scheduler type of the on-premises node in the cluster. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * Default value: pbs.
     * @example {
     * }
     * @var string
     */
    public $openldapPar;

    /**
     * @description The zone ID.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description An array of OS images that are supported by E-HPC.
     *
     * @example 1
     *
     * @var string
     */
    public $period;

    /**
     * @description The type of the image. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *   marketplace: Alibaba Cloud Marketplace image
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The IP address of the on-premises node in the cluster.
     *
     * @example {\"pluginMod\":\"image\",\"pluginLocalPath\":\"/opt/plugin\"}
     *
     * @var string
     */
    public $plugin;

    /**
     * @description The instance type of the logon nodes.
     *
     * @var postInstallScripts
     */
    public $postInstallScripts;

    /**
     * @description The instance type of the management nodes.
     *
     * @example ["manager", "compute"]
     *
     * @var string
     */
    public $ramNodeTypes;

    /**
     * @description The information of management nodes.
     *
     * @example AliyunEHPCFullAccess
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The node type details of the instance RAM role.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the instance Resource Access Management (RAM) role.
     *
     * @example NasMountpoint:/RemoteDirectory
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The list of ECS instance specifications and quantity.
     *
     * @example rg-aek23szz5i2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The version of the scheduler.
     *
     * @example 00b648b****
     *
     * @var string
     */
    public $sccClusterId;

    /**
     * @description The service type of the domain account to which the on-premises node in the cluster belongs. Valid values:
     *
     *   nis
     *   ldap
     *
     * Default value: nis.
     * @example true
     *
     * @var int
     */
    public $schedulerPreInstall;

    /**
     * @description The location where the cluster is deployed. Valid values:
     *
     *   OnPremise: The node is deployed on a hybrid cloud.
     *   PublicCloud: The cluster is deployed on a public cloud.
     *
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The version of the scheduler.
     *
     * @example 18.1.1
     *
     * @var string
     */
    public $schedulerVersion;

    /**
     * @description The type of the scheduler. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * @example sg-bp1asugr34gzn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description Specifies whether to enable the high availability feature.
     *
     * >  If high availability is enabled, each management role in the cluster uses both primary and secondary instances.
     * @example creating
     *
     * @var string
     */
    public $status;

    /**
     * @description The array of the software in the cluster. The array contains the name and version of the software.
     *
     * @example vsw-bp1e47optm9g58zcu****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The remote directory on which the file system is mounted.
     *
     * @example 008b64****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The resource group ID.
     *
     * @example 008b648bcb-s****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The operating system tag of the image.
     *
     * @example nfs
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @description The name of the software.
     *
     * @example NAS
     *
     * @var string
     */
    public $volumeType;

    /**
     * @description The image of the cluster.
     *
     * @example vpc-bp1pxkcvmmz53ki89****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The image information of the operating systems.
     *
     * @example {	"AdUser": "Administrator",	"AdUserPasswd": "xxxxxx",	"AdDc": "ad-hybrid001.ehpcad.com",	"AdIp": "192.168.XX.XX"}
     *
     * @var string
     */
    public $winAdPar;

    /**
     * @description The hostname of the on-premises node in the cluster.
     *
     * @example false
     *
     * @var int
     */
    public $withoutAgent;

    /**
     * @description The runtime parameter of the script.
     *
     * @example cn-hangzhou-k
     *
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
        'schedulerVersion'      => 'SchedulerVersion',
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
        if (null !== $this->schedulerVersion) {
            $res['SchedulerVersion'] = $this->schedulerVersion;
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
        if (isset($map['SchedulerVersion'])) {
            $model->schedulerVersion = $map['SchedulerVersion'];
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
