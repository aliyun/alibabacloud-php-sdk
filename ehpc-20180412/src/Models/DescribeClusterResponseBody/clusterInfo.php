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
     * @description The server type of the account. Valid values:
     *
     *   nis
     *   ldap
     *
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The information about the custom component service.
     *
     * @var addOnsInfo
     */
    public $addOnsInfo;

    /**
     * @description The array of the software in the cluster. The array contains the name and version of the software.
     *
     * @var applications
     */
    public $applications;

    /**
     * @description Specifies whether to enable auto-renewal. The parameter takes effect only when EcsChargeType is set to PrePaid. Valid values:
     *
     *   true: enables auto-renewal.
     *   false: disables auto-renewal.
     *
     * Default value: true.
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period of the subscription compute nodes. The parameter takes effect when AutoRenew is set to true.
     *
     *   If PeriodUnit is set to Week, the valid values of the AutoRenewPeriod parameter are 1, 2, and 3.
     *   If PeriodUnit is set to Month, the valid values of the AutoRenewPeriod parameter are 1, 2, 3, 6, and 12.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @description The image of the cluster.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $baseOsTag;

    /**
     * @description The version of the E-HPC client.
     *
     * @example 1.0.1
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The version of the E-HPC cluster.
     *
     * @example 1.0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @description The maximum hourly price of the compute nodes. A maximum of three decimal places can be used in the value of the parameter. The parameter is valid only when the ComputeSpotStrategy parameter is set to SpotWithPriceLimit.
     *
     * @example 0.56
     *
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @description The bidding method of the compute node. Valid values:
     *
     *   NoSpot: The instance is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @description The time at which the instance is created.
     *
     * @example 2020-12-24T03:18:23.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The mode in which the cluster is deployed. Valid values:
     *
     *   Standard: An account node, a scheduling node, a logon node, and multiple compute nodes are separately deployed.
     *   Advanced: Two high availability (HA) account nodes, two HA scheduler nodes, one logon node, and multiple compute nodes are separately deployed.
     *   Simple: A management node, a logon node, and multiple compute nodes are deployed. The management node consists of an account node and a scheduling node. The logon node and compute nodes are separately deployed.
     *   Tiny: The account node, scheduling node, and logon node are deployed on one node. The compute node is separately deployed.
     *
     * @example Simple
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The description of the cluster.
     *
     * @example cluster
     *
     * @var string
     */
    public $description;

    /**
     * @description The domain name of the on-premises E-HPC cluster.
     *
     * This parameter takes effect only when the AccoutType parameter is set to Idap.
     * @example ldap
     *
     * @var string
     */
    public $domain;

    /**
     * @description The billing method of the nodes in the cluster. Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $ecsChargeType;

    /**
     * @description The list of ECS instance specifications and quantity.
     *
     * @var ecsInfo
     */
    public $ecsInfo;

    /**
     * @description Specifies whether to enable the high availability feature.
     *
     * >  If high availability is enabled, each management role in the cluster uses both primary and secondary instances.
     * @example false
     *
     * @var bool
     */
    public $haEnable;

    /**
     * @description The instance ID.
     *
     * @example i-bp15de54eet1c43f****
     *
     * @var string
     */
    public $id;

    /**
     * @description The image ID.
     *
     * @example centos_7_02_64_20G_alibase_20170818****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example test_for_Image
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The image type. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *   marketplace: Alibaba Cloud Marketplace image
     *
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The image information of the operating systems.
     *
     * @var initialImage
     */
    public $initialImage;

    /**
     * @description The name of the AccessKey pair.
     *
     * @example test
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The location where the cluster is deployed. Valid values:
     *
     *   OnPremise: The node is deployed on a hybrid cloud.
     *   PublicCloud: The cluster is deployed on a public cloud.
     *
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The name of the cluster.
     *
     * @example cluster
     *
     * @var string
     */
    public $name;

    /**
     * @description The information of the on-premises node in the cluster.
     *
     * @var nodes
     */
    public $nodes;

    /**
     * @description The list of on-premises management nodes.
     *
     * This parameter is returned only when the cluster is deployed across hybrid environments and the hybrid-cloud proxy mode is enabled for the cluster.
     * @var onPremiseInfo
     */
    public $onPremiseInfo;

    /**
     * @description The parameter that is used to connect to the OpenLDAP server.
     *
     * @example {
     * }
     * @var string
     */
    public $openldapPar;

    /**
     * @description The operating system tag of the image.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The duration of the subscription. The unit of the duration is specified by the `PeriodUnit` parameter.
     *
     *   If you set PriceUnit to Year, the valid values of the Period parameter are 1, 2, and 3.
     *   If you set PriceUnit to Month, the valid values of the Period parameter are 1, 2, 3, 4, 5, 6, 7, 8, and 9.
     *   If you set PriceUnit to Hour, the valid value of the Period parameter is 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $period;

    /**
     * @description The unit of the subscription duration. Valid value:
     *
     *   Year
     *   Month
     *   Hour
     *
     * Default value: Month.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

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
     * @example {\"pluginMod\":\"image\",\"pluginLocalPath\":\"/opt/plugin\"}
     *
     * @var string
     */
    public $plugin;

    /**
     * @description The list of post-installation scripts
     *
     * @var postInstallScripts
     */
    public $postInstallScripts;

    /**
     * @description The node type details of the instance RAM role.
     *
     * @example ["manager", "compute"]
     *
     * @var string
     */
    public $ramNodeTypes;

    /**
     * @description The name of the instance Resource Access Management (RAM) role.
     *
     * @example AliyunEHPCFullAccess
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remote directory on which the file system is mounted.
     *
     * @example NasMountpoint:/RemoteDirectory
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek23szz5i2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the Super Computing Cluster (SCC) instance. If the cluster is not an SCC instance, a null string is returned.
     *
     * @example 00b648b****
     *
     * @var string
     */
    public $sccClusterId;

    /**
     * @description Specifies whether the scheduler is preinstalled for the image. Valid values:
     *
     *   true: The scheduler is preinstalled. When you create a node or scale out a cluster, you do not need to install the scheduler.
     *   false: The scheduler is not preinstalled. When you create or add a cluster, you must install the scheduler.
     *
     * @example true
     *
     * @var int
     */
    public $schedulerPreInstall;

    /**
     * @description The type of the scheduler. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp1asugr34gzn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   uninit: The cluster is not initialized.
     *   creating: The cluster is being created.
     *   init: The cluster is being initialized.
     *   running: The cluster is running.
     *   exception: The cluster encounters an exception.
     *   releasing: The cluster is being released.
     *
     * @example creating
     *
     * @var string
     */
    public $status;

    /**
     * @description The vSwitch ID. E-HPC can be deployed only in VPCs.
     *
     * @example vsw-bp1e47optm9g58zcu****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the Apsara File Storage NAS file system. NAS file systems cannot be automatically created.
     *
     * @example 008b64****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The mount target of the NAS file system. The mount target is of the VPC type. Mount targets cannot be automatically created for NAS file systems.
     *
     * @example 008b648bcb-s****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The type of the protocol that is used by the file system. Valid values:
     *
     *   nfs
     *   smb
     *
     * @example nfs
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @description The type of the network shared storage. Valid value: NAS.
     *
     * @example NAS
     *
     * @var string
     */
    public $volumeType;

    /**
     * @description The VPC ID of the node.
     *
     * @example vpc-bp1pxkcvmmz53ki89****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The parameter that is used to connect to the Windows AD server.
     *
     * @example {	"AdUser": "Administrator",	"AdUserPasswd": "xxxxxx",	"AdDc": "ad-hybrid001.ehpcad.com",	"AdIp": "192.168.XX.XX"}
     *
     * @var string
     */
    public $winAdPar;

    /**
     * @description Specifies whether to not install the agent.
     *
     * @example false
     *
     * @var int
     */
    public $withoutAgent;

    /**
     * @description The zone ID.
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
