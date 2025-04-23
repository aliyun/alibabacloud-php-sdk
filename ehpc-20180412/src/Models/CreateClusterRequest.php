<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\additionalVolumes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\addOns;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\application;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\ecsOrder;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\postInstallScript;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\tag;

class CreateClusterRequest extends Model
{
    /**
     * @var ecsOrder
     */
    public $ecsOrder;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var addOns[]
     */
    public $addOns;

    /**
     * @var additionalVolumes[]
     */
    public $additionalVolumes;

    /**
     * @var application[]
     */
    public $application;

    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $clusterVersion;

    /**
     * @var bool
     */
    public $computeEnableHt;

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
    public $deployMode;

    /**
     * @var string
     */
    public $deploymentSetId;

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
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var bool
     */
    public $haEnable;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $inputFileUrl;

    /**
     * @var bool
     */
    public $isComputeEss;

    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $password;

    /**
     * @var int
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
     * @var postInstallScript[]
     */
    public $postInstallScript;

    /**
     * @var string[]
     */
    public $ramNodeTypes;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $remoteVisEnable;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sccClusterId;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $systemDiskType;

    /**
     * @var tag[]
     */
    public $tag;

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
    public $volumeMountOption;

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
     * @var bool
     */
    public $withoutAgent;

    /**
     * @var bool
     */
    public $withoutElasticIp;

    /**
     * @var bool
     */
    public $withoutNas;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ecsOrder' => 'EcsOrder',
        'accountType' => 'AccountType',
        'addOns' => 'AddOns',
        'additionalVolumes' => 'AdditionalVolumes',
        'application' => 'Application',
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'clientToken' => 'ClientToken',
        'clientVersion' => 'ClientVersion',
        'clusterVersion' => 'ClusterVersion',
        'computeEnableHt' => 'ComputeEnableHt',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy' => 'ComputeSpotStrategy',
        'deployMode' => 'DeployMode',
        'deploymentSetId' => 'DeploymentSetId',
        'description' => 'Description',
        'domain' => 'Domain',
        'ecsChargeType' => 'EcsChargeType',
        'ehpcVersion' => 'EhpcVersion',
        'haEnable' => 'HaEnable',
        'imageId' => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'inputFileUrl' => 'InputFileUrl',
        'isComputeEss' => 'IsComputeEss',
        'jobQueue' => 'JobQueue',
        'keyPairName' => 'KeyPairName',
        'name' => 'Name',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'osTag' => 'OsTag',
        'password' => 'Password',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'plugin' => 'Plugin',
        'postInstallScript' => 'PostInstallScript',
        'ramNodeTypes' => 'RamNodeTypes',
        'ramRoleName' => 'RamRoleName',
        'remoteDirectory' => 'RemoteDirectory',
        'remoteVisEnable' => 'RemoteVisEnable',
        'resourceGroupId' => 'ResourceGroupId',
        'sccClusterId' => 'SccClusterId',
        'schedulerType' => 'SchedulerType',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
        'systemDiskLevel' => 'SystemDiskLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'systemDiskType' => 'SystemDiskType',
        'tag' => 'Tag',
        'vSwitchId' => 'VSwitchId',
        'volumeId' => 'VolumeId',
        'volumeMountOption' => 'VolumeMountOption',
        'volumeMountpoint' => 'VolumeMountpoint',
        'volumeProtocol' => 'VolumeProtocol',
        'volumeType' => 'VolumeType',
        'vpcId' => 'VpcId',
        'withoutAgent' => 'WithoutAgent',
        'withoutElasticIp' => 'WithoutElasticIp',
        'withoutNas' => 'WithoutNas',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->ecsOrder) {
            $this->ecsOrder->validate();
        }
        if (\is_array($this->addOns)) {
            Model::validateArray($this->addOns);
        }
        if (\is_array($this->additionalVolumes)) {
            Model::validateArray($this->additionalVolumes);
        }
        if (\is_array($this->application)) {
            Model::validateArray($this->application);
        }
        if (\is_array($this->postInstallScript)) {
            Model::validateArray($this->postInstallScript);
        }
        if (\is_array($this->ramNodeTypes)) {
            Model::validateArray($this->ramNodeTypes);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsOrder) {
            $res['EcsOrder'] = null !== $this->ecsOrder ? $this->ecsOrder->toArray($noStream) : $this->ecsOrder;
        }

        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->addOns) {
            if (\is_array($this->addOns)) {
                $res['AddOns'] = [];
                $n1 = 0;
                foreach ($this->addOns as $item1) {
                    $res['AddOns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->additionalVolumes) {
            if (\is_array($this->additionalVolumes)) {
                $res['AdditionalVolumes'] = [];
                $n1 = 0;
                foreach ($this->additionalVolumes as $item1) {
                    $res['AdditionalVolumes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->application) {
            if (\is_array($this->application)) {
                $res['Application'] = [];
                $n1 = 0;
                foreach ($this->application as $item1) {
                    $res['Application'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->clusterVersion) {
            $res['ClusterVersion'] = $this->clusterVersion;
        }

        if (null !== $this->computeEnableHt) {
            $res['ComputeEnableHt'] = $this->computeEnableHt;
        }

        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }

        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }

        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }

        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
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

        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }

        if (null !== $this->haEnable) {
            $res['HaEnable'] = $this->haEnable;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }

        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
        }

        if (null !== $this->isComputeEss) {
            $res['IsComputeEss'] = $this->isComputeEss;
        }

        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }

        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
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

        if (null !== $this->postInstallScript) {
            if (\is_array($this->postInstallScript)) {
                $res['PostInstallScript'] = [];
                $n1 = 0;
                foreach ($this->postInstallScript as $item1) {
                    $res['PostInstallScript'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ramNodeTypes) {
            if (\is_array($this->ramNodeTypes)) {
                $res['RamNodeTypes'] = [];
                $n1 = 0;
                foreach ($this->ramNodeTypes as $item1) {
                    $res['RamNodeTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }

        if (null !== $this->remoteVisEnable) {
            $res['RemoteVisEnable'] = $this->remoteVisEnable;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }

        if (null !== $this->systemDiskLevel) {
            $res['SystemDiskLevel'] = $this->systemDiskLevel;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }

        if (null !== $this->volumeMountOption) {
            $res['VolumeMountOption'] = $this->volumeMountOption;
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

        if (null !== $this->withoutAgent) {
            $res['WithoutAgent'] = $this->withoutAgent;
        }

        if (null !== $this->withoutElasticIp) {
            $res['WithoutElasticIp'] = $this->withoutElasticIp;
        }

        if (null !== $this->withoutNas) {
            $res['WithoutNas'] = $this->withoutNas;
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
        if (isset($map['EcsOrder'])) {
            $model->ecsOrder = ecsOrder::fromMap($map['EcsOrder']);
        }

        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['AddOns'])) {
            if (!empty($map['AddOns'])) {
                $model->addOns = [];
                $n1 = 0;
                foreach ($map['AddOns'] as $item1) {
                    $model->addOns[$n1++] = addOns::fromMap($item1);
                }
            }
        }

        if (isset($map['AdditionalVolumes'])) {
            if (!empty($map['AdditionalVolumes'])) {
                $model->additionalVolumes = [];
                $n1 = 0;
                foreach ($map['AdditionalVolumes'] as $item1) {
                    $model->additionalVolumes[$n1++] = additionalVolumes::fromMap($item1);
                }
            }
        }

        if (isset($map['Application'])) {
            if (!empty($map['Application'])) {
                $model->application = [];
                $n1 = 0;
                foreach ($map['Application'] as $item1) {
                    $model->application[$n1++] = application::fromMap($item1);
                }
            }
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['ClusterVersion'])) {
            $model->clusterVersion = $map['ClusterVersion'];
        }

        if (isset($map['ComputeEnableHt'])) {
            $model->computeEnableHt = $map['ComputeEnableHt'];
        }

        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }

        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }

        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }

        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
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

        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }

        if (isset($map['HaEnable'])) {
            $model->haEnable = $map['HaEnable'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }

        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
        }

        if (isset($map['IsComputeEss'])) {
            $model->isComputeEss = $map['IsComputeEss'];
        }

        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }

        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
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

        if (isset($map['PostInstallScript'])) {
            if (!empty($map['PostInstallScript'])) {
                $model->postInstallScript = [];
                $n1 = 0;
                foreach ($map['PostInstallScript'] as $item1) {
                    $model->postInstallScript[$n1++] = postInstallScript::fromMap($item1);
                }
            }
        }

        if (isset($map['RamNodeTypes'])) {
            if (!empty($map['RamNodeTypes'])) {
                $model->ramNodeTypes = [];
                $n1 = 0;
                foreach ($map['RamNodeTypes'] as $item1) {
                    $model->ramNodeTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }

        if (isset($map['RemoteVisEnable'])) {
            $model->remoteVisEnable = $map['RemoteVisEnable'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        if (isset($map['SystemDiskLevel'])) {
            $model->systemDiskLevel = $map['SystemDiskLevel'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        if (isset($map['VolumeMountOption'])) {
            $model->volumeMountOption = $map['VolumeMountOption'];
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

        if (isset($map['WithoutAgent'])) {
            $model->withoutAgent = $map['WithoutAgent'];
        }

        if (isset($map['WithoutElasticIp'])) {
            $model->withoutElasticIp = $map['WithoutElasticIp'];
        }

        if (isset($map['WithoutNas'])) {
            $model->withoutNas = $map['WithoutNas'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
