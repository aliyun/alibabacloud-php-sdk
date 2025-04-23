<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\addOnsInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\applications;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\initialImage;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\nodes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\onPremiseInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\postInstallScripts;

class clusterInfo extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var addOnsInfo
     */
    public $addOnsInfo;

    /**
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
     * @var string
     */
    public $baseOsTag;

    /**
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
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $ecsChargeType;

    /**
     * @var ecsInfo
     */
    public $ecsInfo;

    /**
     * @var bool
     */
    public $haEnable;

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
    public $imageName;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var initialImage
     */
    public $initialImage;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $location;

    /**
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
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sccClusterId;

    /**
     * @var int
     */
    public $schedulerPreInstall;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $schedulerVersion;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $volumeId;

    /**
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @var string
     */
    public $volumeProtocol;

    /**
     * @var string
     */
    public $volumeType;

    /**
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
        'accountType' => 'AccountType',
        'addOnsInfo' => 'AddOnsInfo',
        'applications' => 'Applications',
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'baseOsTag' => 'BaseOsTag',
        'clientVersion' => 'ClientVersion',
        'clusterVersion' => 'ClusterVersion',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy' => 'ComputeSpotStrategy',
        'createTime' => 'CreateTime',
        'deployMode' => 'DeployMode',
        'description' => 'Description',
        'domain' => 'Domain',
        'ecsChargeType' => 'EcsChargeType',
        'ecsInfo' => 'EcsInfo',
        'haEnable' => 'HaEnable',
        'id' => 'Id',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'initialImage' => 'InitialImage',
        'keyPairName' => 'KeyPairName',
        'location' => 'Location',
        'name' => 'Name',
        'nodes' => 'Nodes',
        'onPremiseInfo' => 'OnPremiseInfo',
        'openldapPar' => 'OpenldapPar',
        'osTag' => 'OsTag',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'plugin' => 'Plugin',
        'postInstallScripts' => 'PostInstallScripts',
        'ramNodeTypes' => 'RamNodeTypes',
        'ramRoleName' => 'RamRoleName',
        'regionId' => 'RegionId',
        'remoteDirectory' => 'RemoteDirectory',
        'resourceGroupId' => 'ResourceGroupId',
        'sccClusterId' => 'SccClusterId',
        'schedulerPreInstall' => 'SchedulerPreInstall',
        'schedulerType' => 'SchedulerType',
        'schedulerVersion' => 'SchedulerVersion',
        'securityGroupId' => 'SecurityGroupId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'volumeId' => 'VolumeId',
        'volumeMountpoint' => 'VolumeMountpoint',
        'volumeProtocol' => 'VolumeProtocol',
        'volumeType' => 'VolumeType',
        'vpcId' => 'VpcId',
        'winAdPar' => 'WinAdPar',
        'withoutAgent' => 'WithoutAgent',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->addOnsInfo) {
            $this->addOnsInfo->validate();
        }
        if (null !== $this->applications) {
            $this->applications->validate();
        }
        if (null !== $this->ecsInfo) {
            $this->ecsInfo->validate();
        }
        if (null !== $this->initialImage) {
            $this->initialImage->validate();
        }
        if (null !== $this->nodes) {
            $this->nodes->validate();
        }
        if (null !== $this->onPremiseInfo) {
            $this->onPremiseInfo->validate();
        }
        if (null !== $this->postInstallScripts) {
            $this->postInstallScripts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->addOnsInfo) {
            $res['AddOnsInfo'] = null !== $this->addOnsInfo ? $this->addOnsInfo->toArray($noStream) : $this->addOnsInfo;
        }

        if (null !== $this->applications) {
            $res['Applications'] = null !== $this->applications ? $this->applications->toArray($noStream) : $this->applications;
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
            $res['EcsInfo'] = null !== $this->ecsInfo ? $this->ecsInfo->toArray($noStream) : $this->ecsInfo;
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
            $res['InitialImage'] = null !== $this->initialImage ? $this->initialImage->toArray($noStream) : $this->initialImage;
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
            $res['Nodes'] = null !== $this->nodes ? $this->nodes->toArray($noStream) : $this->nodes;
        }

        if (null !== $this->onPremiseInfo) {
            $res['OnPremiseInfo'] = null !== $this->onPremiseInfo ? $this->onPremiseInfo->toArray($noStream) : $this->onPremiseInfo;
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
            $res['PostInstallScripts'] = null !== $this->postInstallScripts ? $this->postInstallScripts->toArray($noStream) : $this->postInstallScripts;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
