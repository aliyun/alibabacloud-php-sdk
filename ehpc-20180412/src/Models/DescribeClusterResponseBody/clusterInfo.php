<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\applications;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\onPremiseInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\postInstallScripts;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @description The service type of the domain account. Valid values:
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
     * @description The array of the software in the cluster. The array contains the name and version of the software.
     *
     * @var applications
     */
    public $applications;

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
     * @description The time when the cluster was created.
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
     *   Tiny: A management node and multiple compute nodes are deployed. The management node consists of an account node, a scheduling node, and a logon node. The compute nodes are separately deployed.
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
     * @description Indicates whether the high availability feature is enabled.
     *
     * >  If high availability is enabled, a primary management node and a secondary management node are used.
     * @example false
     *
     * @var bool
     */
    public $haEnable;

    /**
     * @description The ID of the Elastic Compute Service (ECS) instance.
     *
     * @example i-bp15de54eet1c43f****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the image.
     *
     * @example centos_7_02_64_20G_alibase_20170818****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example test_for_Image
     *
     * @var string
     */
    public $imageName;

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
     *   OnPremise: The cluster is deployed on a hybrid cloud.
     *   PublicCloud: The node is deployed on a public cloud.
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
     * @description The list of on-premises management nodes.
     *
     * This parameter is returned only when the cluster is deployed across hybrid environments and the hybrid-cloud proxy mode is enabled for the cluster.
     * @var onPremiseInfo
     */
    public $onPremiseInfo;

    /**
     * @description The image tag of the operating system.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The list of scripts downloaded after the cluster was created.
     *
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
     * @description The region ID of the security group.
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
     * @description The ID of the Super Computing Cluster (SCC) instance. If the cluster is not an SCC instance, a null string is returned.
     *
     * @example 00b648b****
     *
     * @var string
     */
    public $sccClusterId;

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
     * @description The ID of the vSwitch. E-HPC can be deployed only in VPCs.
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
     * @description The mount target of the file system. Mount targets cannot be automatically created for NAS file systems.
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
     * @description The ID of the VPC.
     *
     * @example vpc-bp1pxkcvmmz53ki89****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accountType'        => 'AccountType',
        'applications'       => 'Applications',
        'baseOsTag'          => 'BaseOsTag',
        'clientVersion'      => 'ClientVersion',
        'createTime'         => 'CreateTime',
        'deployMode'         => 'DeployMode',
        'description'        => 'Description',
        'ecsChargeType'      => 'EcsChargeType',
        'ecsInfo'            => 'EcsInfo',
        'haEnable'           => 'HaEnable',
        'id'                 => 'Id',
        'imageId'            => 'ImageId',
        'imageName'          => 'ImageName',
        'imageOwnerAlias'    => 'ImageOwnerAlias',
        'keyPairName'        => 'KeyPairName',
        'location'           => 'Location',
        'name'               => 'Name',
        'onPremiseInfo'      => 'OnPremiseInfo',
        'osTag'              => 'OsTag',
        'postInstallScripts' => 'PostInstallScripts',
        'ramNodeTypes'       => 'RamNodeTypes',
        'ramRoleName'        => 'RamRoleName',
        'regionId'           => 'RegionId',
        'remoteDirectory'    => 'RemoteDirectory',
        'sccClusterId'       => 'SccClusterId',
        'schedulerType'      => 'SchedulerType',
        'securityGroupId'    => 'SecurityGroupId',
        'status'             => 'Status',
        'vSwitchId'          => 'VSwitchId',
        'volumeId'           => 'VolumeId',
        'volumeMountpoint'   => 'VolumeMountpoint',
        'volumeProtocol'     => 'VolumeProtocol',
        'volumeType'         => 'VolumeType',
        'vpcId'              => 'VpcId',
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
        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toMap() : null;
        }
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
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
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->onPremiseInfo) {
            $res['OnPremiseInfo'] = null !== $this->onPremiseInfo ? $this->onPremiseInfo->toMap() : null;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
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
        if (null !== $this->sccClusterId) {
            $res['SccClusterId'] = $this->sccClusterId;
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
        if (isset($map['Applications'])) {
            $model->applications = applications::fromMap($map['Applications']);
        }
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
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
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OnPremiseInfo'])) {
            $model->onPremiseInfo = onPremiseInfo::fromMap($map['OnPremiseInfo']);
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
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
        if (isset($map['SccClusterId'])) {
            $model->sccClusterId = $map['SccClusterId'];
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

        return $model;
    }
}
