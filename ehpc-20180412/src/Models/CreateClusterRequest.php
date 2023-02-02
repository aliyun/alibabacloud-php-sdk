<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\additionalVolumes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\application;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\ecsOrder;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\postInstallScript;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var ecsOrder
     */
    public $ecsOrder;

    /**
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @var additionalVolumes[]
     */
    public $additionalVolumes;

    /**
     * @var application[]
     */
    public $application;

    /**
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1.0.64
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $computeEnableHt;

    /**
     * @example 0.034
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
     * @example Simple
     *
     * @var string
     */
    public $deployMode;

    /**
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example ldap
     *
     * @var string
     */
    public $domain;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $ecsChargeType;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $haEnable;

    /**
     * @example centos_7_02_64_20G_alibase_20170818****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @example https://ehpc-tianshui.oss-cn-beijing.aliyuncs.com/test-u****\/testlist_ehpc.sh
     *
     * @var string
     */
    public $inputFileUrl;

    /**
     * @example false
     *
     * @var bool
     */
    public $isComputeEss;

    /**
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @example test
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @example 123****
     *
     * @var string
     */
    public $password;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Year
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example \"{"pluginMod": "oss","pluginLocalPath": "/opt/plugin","pluginOssPath": "https://bucket.oss-cn-hangzhou.aliyuncs.com/plugin/plugin.tgz"}\"
     *
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
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @example NasMountpoint:/RemoteDirectory
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @example false
     *
     * @var string
     */
    public $remoteVisEnable;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 00b648b****
     *
     * @var string
     */
    public $sccClusterId;

    /**
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @example sg-bp13n61xsydodfyg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example ehpc-SecurityGroup
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @example PL0
     *
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example 008b64****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @example -t nfs -o vers=4
     *
     * @var string
     */
    public $volumeMountOption;

    /**
     * @example 008b648bcb-s****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @example NFS
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @example nas
     *
     * @var string
     */
    public $volumeType;

    /**
     * @example vpc-b3f3edefefeep0760yju****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example false
     *
     * @var bool
     */
    public $withoutAgent;

    /**
     * @example true
     *
     * @var bool
     */
    public $withoutElasticIp;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ecsOrder'              => 'EcsOrder',
        'accountType'           => 'AccountType',
        'additionalVolumes'     => 'AdditionalVolumes',
        'application'           => 'Application',
        'autoRenew'             => 'AutoRenew',
        'autoRenewPeriod'       => 'AutoRenewPeriod',
        'clientToken'           => 'ClientToken',
        'clientVersion'         => 'ClientVersion',
        'clusterVersion'        => 'ClusterVersion',
        'computeEnableHt'       => 'ComputeEnableHt',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy'   => 'ComputeSpotStrategy',
        'deployMode'            => 'DeployMode',
        'description'           => 'Description',
        'domain'                => 'Domain',
        'ecsChargeType'         => 'EcsChargeType',
        'ehpcVersion'           => 'EhpcVersion',
        'haEnable'              => 'HaEnable',
        'imageId'               => 'ImageId',
        'imageOwnerAlias'       => 'ImageOwnerAlias',
        'inputFileUrl'          => 'InputFileUrl',
        'isComputeEss'          => 'IsComputeEss',
        'jobQueue'              => 'JobQueue',
        'keyPairName'           => 'KeyPairName',
        'name'                  => 'Name',
        'osTag'                 => 'OsTag',
        'password'              => 'Password',
        'period'                => 'Period',
        'periodUnit'            => 'PeriodUnit',
        'plugin'                => 'Plugin',
        'postInstallScript'     => 'PostInstallScript',
        'ramNodeTypes'          => 'RamNodeTypes',
        'ramRoleName'           => 'RamRoleName',
        'remoteDirectory'       => 'RemoteDirectory',
        'remoteVisEnable'       => 'RemoteVisEnable',
        'resourceGroupId'       => 'ResourceGroupId',
        'sccClusterId'          => 'SccClusterId',
        'schedulerType'         => 'SchedulerType',
        'securityGroupId'       => 'SecurityGroupId',
        'securityGroupName'     => 'SecurityGroupName',
        'systemDiskLevel'       => 'SystemDiskLevel',
        'systemDiskSize'        => 'SystemDiskSize',
        'systemDiskType'        => 'SystemDiskType',
        'tag'                   => 'Tag',
        'vSwitchId'             => 'VSwitchId',
        'volumeId'              => 'VolumeId',
        'volumeMountOption'     => 'VolumeMountOption',
        'volumeMountpoint'      => 'VolumeMountpoint',
        'volumeProtocol'        => 'VolumeProtocol',
        'volumeType'            => 'VolumeType',
        'vpcId'                 => 'VpcId',
        'withoutAgent'          => 'WithoutAgent',
        'withoutElasticIp'      => 'WithoutElasticIp',
        'zoneId'                => 'ZoneId',
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
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->additionalVolumes) {
            $res['AdditionalVolumes'] = [];
            if (null !== $this->additionalVolumes && \is_array($this->additionalVolumes)) {
                $n = 0;
                foreach ($this->additionalVolumes as $item) {
                    $res['AdditionalVolumes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            $res['PostInstallScript'] = [];
            if (null !== $this->postInstallScript && \is_array($this->postInstallScript)) {
                $n = 0;
                foreach ($this->postInstallScript as $item) {
                    $res['PostInstallScript'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ramNodeTypes) {
            $res['RamNodeTypes'] = $this->ramNodeTypes;
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsOrder'])) {
            $model->ecsOrder = ecsOrder::fromMap($map['EcsOrder']);
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AdditionalVolumes'])) {
            if (!empty($map['AdditionalVolumes'])) {
                $model->additionalVolumes = [];
                $n                        = 0;
                foreach ($map['AdditionalVolumes'] as $item) {
                    $model->additionalVolumes[$n++] = null !== $item ? additionalVolumes::fromMap($item) : $item;
                }
            }
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
                $n                        = 0;
                foreach ($map['PostInstallScript'] as $item) {
                    $model->postInstallScript[$n++] = null !== $item ? postInstallScript::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RamNodeTypes'])) {
            if (!empty($map['RamNodeTypes'])) {
                $model->ramNodeTypes = $map['RamNodeTypes'];
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
