<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\application;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\ecsOrder;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\nodes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\openldapPar;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\postInstallScript;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\winAdPar;
use AlibabaCloud\Tea\Model;

class CreateHybridClusterRequest extends Model
{
    /**
     * @var ecsOrder
     */
    public $ecsOrder;

    /**
     * @description An array that consists of the information about the software.
     *
     * @var application[]
     */
    public $application;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure the idempotence of a request?](~~25693~~)
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The version of the client. By default, the latest version is used.
     *
     * @example 1.0.64
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The maximum hourly price for the ECS instance under the compute node. A maximum of three decimal places can be used in the value of the parameter. The parameter is valid only when the ComputeSpotStrategy parameter is set to SpotWithPriceLimit.
     *
     * @example 0.034
     *
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @description The preemption policy of the compute nodes. Valid values:
     *
     *   NoSpot: The compute nodes are pay-as-you-go instances.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is created as a preemptible instance for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * Default value: NoSpot.
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @description The description of the E-HPC cluster. The description must be 2 to 256 characters in length and cannot start with [http:// or https://](http://https://。).
     *
     * This parameter is empty by default.
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the domain account service. Valid values:
     *
     *   nis
     *   ldap
     *
     * Default value: nis.
     * @example nis
     *
     * @var string
     */
    public $domain;

    /**
     * @description The version of E-HPC. By default, the latest version is used.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @description The mode in which the proxy node manages the offline nodes. Valid values:
     *
     *   SSH: indicates management via SSH logon.
     *   CA: indicates management through Cloud Assistant.
     *
     * @example SSH
     *
     * @var string
     */
    public $hybridClusterOpMode;

    /**
     * @description The IDs of the images.
     *
     * @example wi_1607_x64_dtc_zh_40G_alibase****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image. Valid values:
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
     * @description The default queue of the scale-out nodes.
     *
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The name of the key pair. The name must be 2 to 128 characters in length, and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter and cannot start with http:// or https://.[](http://https://。、（:）、（\_）（-）。)
     *
     * > To use an SSH key pair, see [Create an SSH key pair](~~51793~~).
     * @example test
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The location where the cluster resides. Set the value to OnPremise.
     *
     * @example OnPremise
     *
     * @var string
     */
    public $location;

    /**
     * @description Specifies whether the cluster supports multiple operating systems. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $multiOs;

    /**
     * @description The name of the cluster. The name must be 2 to 64 characters in length, and can contain only letters, digits, hyphens (-), and underscores (\_). It must start with a letter.
     *
     * @example hybridcluster
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the nodes in the local cluster.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The path in which the on-premises file system is mounted on the nodes on the cloud.
     *
     * @example /OnCloudDirectory
     *
     * @var string
     */
    public $onPremiseVolumeLocalPath;

    /**
     * @description The mount target of the on-premises file system.
     *
     * @example RemoteNasDomain.com
     *
     * @var string
     */
    public $onPremiseVolumeMountPoint;

    /**
     * @description The type of the protocol that is used by the on-premises file system. Only NFS is supported.
     *
     * @example NFS
     *
     * @var string
     */
    public $onPremiseVolumeProtocol;

    /**
     * @description The mount path of the on-premises file system.
     *
     * @example /RemoteDirectory
     *
     * @var string
     */
    public $onPremiseVolumeRemotePath;

    /**
     * @description The parameter that is used to connect to the OpenLDAP server.
     *
     * @var openldapPar
     */
    public $openldapPar;

    /**
     * @description The image tag of the operating system. You can call the [ListImages](~~87213~~) operation to query the image tag.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The root password of the logon node. The password must be 8 to 30 characters in length and contain at least three of the following items: uppercase letters, lowercase letters, digits, and special characters. The following special characters are supported: `() ~ ! @ # $ % ^ & * - = + | { } [ ] : ; ‘ < > , . ? /`
     *
     * > We recommend that you use HTTPS to call the API operation to prevent password leakage.
     * @example 123****
     *
     * @var string
     */
    public $password;

    /**
     * @description The mode configurations of the plug-in. This parameter takes effect only when the SchedulerType parameter is set to custom.
     *
     * The value must be a JSON string. The parameter contains the following parameters: pluginMod, pluginLocalPath, and pluginOssPath.
     *
     *   pluginMod: the mode of the plug-in. The following modes are supported:
     *
     *   oss: The plug-in is downloaded and decompressed from OSS to a local path. The local path is specified by the pluginLocalPath parameter.
     *   image: By default, the plug-in is stored in a pre-defined local path. The local path is specified by the pluginLocalPath parameter.
     *
     *   pluginLocalPath: the local path where the plug-in is stored. We recommend that you select a shared directory in oss mode and a non-shared directory in image mode.
     *
     *   pluginOssPath: the remote path where the plug-in is stored in OSS. This parameter takes effect only when the pluginMod parameter is set to oss.
     *
     * @example {"pluginMod": "oss","pluginLocalPath": "/opt/plugin","pluginOssPath": "https://bucket.oss-cn-hangzhou.aliyuncs.com/plugin/plugin.tgz"}
     *
     * @var string
     */
    public $plugin;

    /**
     * @description The list of post-installation script information.
     *
     * @var postInstallScript[]
     */
    public $postInstallScript;

    /**
     * @description The remote directory to which the file system is mounted.
     *
     * @example /RemoteDirectory
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether the scheduler is preinstalled for the image. Valid values:
     *
     *   true: The scheduler is preinstalled. When you create or add a node, you do not need to install the scheduler.
     *   false: The scheduler is not preinstalled. When you create or add a cluster, you must install the scheduler.
     *
     * @example true
     *
     * @var bool
     */
    public $schedulerPreInstall;

    /**
     * @description You can select an existing security group by its ID.
     *
     **
     *
     **If you specify this parameter, you cannot specify the **SecurityGroupName`  parameter. `
     *
     * @example sg-bp13n61xsydodfyg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description If you do not use an existing security group, set the parameter to the name of a new security group. A default policy is applied to the new security group.
     *
     * > If you specify this parameter, you cannot specify the `SecurityGroupId` parameter.
     * @example ehpc-SecurityGroup
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @description The ID of the vSwitch to which the instance connects to.
     *
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the file system. NAS file systems cannot be automatically created.
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
     * @description The type of the protocol that is used by the NAS file system. Only NFS is supported.
     *
     * @example NFS
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @description The type of the file system. Only NAS file systems are supported.
     *
     * @example NAS
     *
     * @var string
     */
    public $volumeType;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the E-HPC cluster belongs.
     *
     * @example vpc-b3f3edefefeep0760yju****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The parameter that is used to connect to the Windows AD server.
     *
     * @var winAdPar
     */
    public $winAdPar;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ecsOrder'                  => 'EcsOrder',
        'application'               => 'Application',
        'clientToken'               => 'ClientToken',
        'clientVersion'             => 'ClientVersion',
        'computeSpotPriceLimit'     => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'       => 'ComputeSpotStrategy',
        'description'               => 'Description',
        'domain'                    => 'Domain',
        'ehpcVersion'               => 'EhpcVersion',
        'hybridClusterOpMode'       => 'HybridClusterOpMode',
        'imageId'                   => 'ImageId',
        'imageOwnerAlias'           => 'ImageOwnerAlias',
        'jobQueue'                  => 'JobQueue',
        'keyPairName'               => 'KeyPairName',
        'location'                  => 'Location',
        'multiOs'                   => 'MultiOs',
        'name'                      => 'Name',
        'nodes'                     => 'Nodes',
        'onPremiseVolumeLocalPath'  => 'OnPremiseVolumeLocalPath',
        'onPremiseVolumeMountPoint' => 'OnPremiseVolumeMountPoint',
        'onPremiseVolumeProtocol'   => 'OnPremiseVolumeProtocol',
        'onPremiseVolumeRemotePath' => 'OnPremiseVolumeRemotePath',
        'openldapPar'               => 'OpenldapPar',
        'osTag'                     => 'OsTag',
        'password'                  => 'Password',
        'plugin'                    => 'Plugin',
        'postInstallScript'         => 'PostInstallScript',
        'remoteDirectory'           => 'RemoteDirectory',
        'resourceGroupId'           => 'ResourceGroupId',
        'schedulerPreInstall'       => 'SchedulerPreInstall',
        'securityGroupId'           => 'SecurityGroupId',
        'securityGroupName'         => 'SecurityGroupName',
        'vSwitchId'                 => 'VSwitchId',
        'volumeId'                  => 'VolumeId',
        'volumeMountpoint'          => 'VolumeMountpoint',
        'volumeProtocol'            => 'VolumeProtocol',
        'volumeType'                => 'VolumeType',
        'vpcId'                     => 'VpcId',
        'winAdPar'                  => 'WinAdPar',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsOrder) {
            $res['EcsOrder'] = null !== $this->ecsOrder ? $this->ecsOrder->toMap() : null;
        }
        if (null !== $this->application) {
            $res['Application'] = [];
            if (null !== $this->application && \is_array($this->application)) {
                $n = 0;
                foreach ($this->application as $item) {
                    $res['Application'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }
        if (null !== $this->hybridClusterOpMode) {
            $res['HybridClusterOpMode'] = $this->hybridClusterOpMode;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->multiOs) {
            $res['MultiOs'] = $this->multiOs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->onPremiseVolumeLocalPath) {
            $res['OnPremiseVolumeLocalPath'] = $this->onPremiseVolumeLocalPath;
        }
        if (null !== $this->onPremiseVolumeMountPoint) {
            $res['OnPremiseVolumeMountPoint'] = $this->onPremiseVolumeMountPoint;
        }
        if (null !== $this->onPremiseVolumeProtocol) {
            $res['OnPremiseVolumeProtocol'] = $this->onPremiseVolumeProtocol;
        }
        if (null !== $this->onPremiseVolumeRemotePath) {
            $res['OnPremiseVolumeRemotePath'] = $this->onPremiseVolumeRemotePath;
        }
        if (null !== $this->openldapPar) {
            $res['OpenldapPar'] = null !== $this->openldapPar ? $this->openldapPar->toMap() : null;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->plugin) {
            $res['Plugin'] = $this->plugin;
        }
        if (null !== $this->postInstallScript) {
            $res['PostInstallScript'] = [];
            if (null !== $this->postInstallScript && \is_array($this->postInstallScript)) {
                $n = 0;
                foreach ($this->postInstallScript as $item) {
                    $res['PostInstallScript'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->schedulerPreInstall) {
            $res['SchedulerPreInstall'] = $this->schedulerPreInstall;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
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
            $res['WinAdPar'] = null !== $this->winAdPar ? $this->winAdPar->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHybridClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsOrder'])) {
            $model->ecsOrder = ecsOrder::fromMap($map['EcsOrder']);
        }
        if (isset($map['Application'])) {
            if (!empty($map['Application'])) {
                $model->application = [];
                $n                  = 0;
                foreach ($map['Application'] as $item) {
                    $model->application[$n++] = null !== $item ? application::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }
        if (isset($map['HybridClusterOpMode'])) {
            $model->hybridClusterOpMode = $map['HybridClusterOpMode'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MultiOs'])) {
            $model->multiOs = $map['MultiOs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OnPremiseVolumeLocalPath'])) {
            $model->onPremiseVolumeLocalPath = $map['OnPremiseVolumeLocalPath'];
        }
        if (isset($map['OnPremiseVolumeMountPoint'])) {
            $model->onPremiseVolumeMountPoint = $map['OnPremiseVolumeMountPoint'];
        }
        if (isset($map['OnPremiseVolumeProtocol'])) {
            $model->onPremiseVolumeProtocol = $map['OnPremiseVolumeProtocol'];
        }
        if (isset($map['OnPremiseVolumeRemotePath'])) {
            $model->onPremiseVolumeRemotePath = $map['OnPremiseVolumeRemotePath'];
        }
        if (isset($map['OpenldapPar'])) {
            $model->openldapPar = openldapPar::fromMap($map['OpenldapPar']);
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Plugin'])) {
            $model->plugin = $map['Plugin'];
        }
        if (isset($map['PostInstallScript'])) {
            if (!empty($map['PostInstallScript'])) {
                $model->postInstallScript = [];
                $n                        = 0;
                foreach ($map['PostInstallScript'] as $item) {
                    $model->postInstallScript[$n++] = null !== $item ? postInstallScript::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SchedulerPreInstall'])) {
            $model->schedulerPreInstall = $map['SchedulerPreInstall'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
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
            $model->winAdPar = winAdPar::fromMap($map['WinAdPar']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
