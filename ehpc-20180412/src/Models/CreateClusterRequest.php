<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\additionalVolumes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\application;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\ecsOrder;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\postInstallScript;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var ecsOrder
     */
    public $ecsOrder;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $accountType;

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
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $volumeType;

    /**
     * @var string
     */
    public $volumeId;

    /**
     * @var string
     */
    public $volumeProtocol;

    /**
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var bool
     */
    public $haEnable;

    /**
     * @var string
     */
    public $ecsChargeType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $sccClusterId;

    /**
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @var string
     */
    public $computeSpotPriceLimit;

    /**
     * @var bool
     */
    public $computeEnableHt;

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
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $inputFileUrl;

    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var string
     */
    public $systemDiskType;

    /**
     * @var int
     */
    public $systemDiskSize;

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
    public $clientToken;

    /**
     * @var bool
     */
    public $withoutElasticIp;

    /**
     * @var application[]
     */
    public $application;

    /**
     * @var additionalVolumes[]
     */
    public $additionalVolumes;

    /**
     * @var postInstallScript[]
     */
    public $postInstallScript;
    protected $_name = [
        'ecsOrder'              => 'EcsOrder',
        'zoneId'                => 'ZoneId',
        'name'                  => 'Name',
        'description'           => 'Description',
        'ehpcVersion'           => 'EhpcVersion',
        'clientVersion'         => 'ClientVersion',
        'osTag'                 => 'OsTag',
        'accountType'           => 'AccountType',
        'schedulerType'         => 'SchedulerType',
        'securityGroupId'       => 'SecurityGroupId',
        'securityGroupName'     => 'SecurityGroupName',
        'vpcId'                 => 'VpcId',
        'vSwitchId'             => 'VSwitchId',
        'volumeType'            => 'VolumeType',
        'volumeId'              => 'VolumeId',
        'volumeProtocol'        => 'VolumeProtocol',
        'volumeMountpoint'      => 'VolumeMountpoint',
        'remoteDirectory'       => 'RemoteDirectory',
        'deployMode'            => 'DeployMode',
        'haEnable'              => 'HaEnable',
        'ecsChargeType'         => 'EcsChargeType',
        'password'              => 'Password',
        'keyPairName'           => 'KeyPairName',
        'imageOwnerAlias'       => 'ImageOwnerAlias',
        'imageId'               => 'ImageId',
        'sccClusterId'          => 'SccClusterId',
        'computeSpotStrategy'   => 'ComputeSpotStrategy',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeEnableHt'       => 'ComputeEnableHt',
        'period'                => 'Period',
        'periodUnit'            => 'PeriodUnit',
        'autoRenew'             => 'AutoRenew',
        'autoRenewPeriod'       => 'AutoRenewPeriod',
        'inputFileUrl'          => 'InputFileUrl',
        'jobQueue'              => 'JobQueue',
        'systemDiskType'        => 'SystemDiskType',
        'systemDiskSize'        => 'SystemDiskSize',
        'remoteVisEnable'       => 'RemoteVisEnable',
        'resourceGroupId'       => 'ResourceGroupId',
        'clientToken'           => 'ClientToken',
        'withoutElasticIp'      => 'WithoutElasticIp',
        'application'           => 'Application',
        'additionalVolumes'     => 'AdditionalVolumes',
        'postInstallScript'     => 'PostInstallScript',
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->haEnable) {
            $res['HaEnable'] = $this->haEnable;
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->sccClusterId) {
            $res['SccClusterId'] = $this->sccClusterId;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->computeEnableHt) {
            $res['ComputeEnableHt'] = $this->computeEnableHt;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->inputFileUrl) {
            $res['InputFileUrl'] = $this->inputFileUrl;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->systemDiskType) {
            $res['SystemDiskType'] = $this->systemDiskType;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->remoteVisEnable) {
            $res['RemoteVisEnable'] = $this->remoteVisEnable;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->withoutElasticIp) {
            $res['WithoutElasticIp'] = $this->withoutElasticIp;
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
        if (null !== $this->additionalVolumes) {
            $res['AdditionalVolumes'] = [];
            if (null !== $this->additionalVolumes && \is_array($this->additionalVolumes)) {
                $n = 0;
                foreach ($this->additionalVolumes as $item) {
                    $res['AdditionalVolumes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['HaEnable'])) {
            $model->haEnable = $map['HaEnable'];
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['SccClusterId'])) {
            $model->sccClusterId = $map['SccClusterId'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ComputeEnableHt'])) {
            $model->computeEnableHt = $map['ComputeEnableHt'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['InputFileUrl'])) {
            $model->inputFileUrl = $map['InputFileUrl'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['SystemDiskType'])) {
            $model->systemDiskType = $map['SystemDiskType'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['RemoteVisEnable'])) {
            $model->remoteVisEnable = $map['RemoteVisEnable'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['WithoutElasticIp'])) {
            $model->withoutElasticIp = $map['WithoutElasticIp'];
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
        if (isset($map['AdditionalVolumes'])) {
            if (!empty($map['AdditionalVolumes'])) {
                $model->additionalVolumes = [];
                $n                        = 0;
                foreach ($map['AdditionalVolumes'] as $item) {
                    $model->additionalVolumes[$n++] = null !== $item ? additionalVolumes::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
