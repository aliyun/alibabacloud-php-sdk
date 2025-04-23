<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\application;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\ecsOrder;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\nodes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\openldapPar;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\postInstallScript;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\winAdPar;

class CreateHybridClusterRequest extends Model
{
    /**
     * @var ecsOrder
     */
    public $ecsOrder;

    /**
     * @var application[]
     */
    public $application;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @var string
     */
    public $computeSpotStrategy;

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
    public $ehpcVersion;

    /**
     * @var string
     */
    public $hybridClusterOpMode;

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
    public $jobQueue;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $location;

    /**
     * @var bool
     */
    public $multiOs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $onPremiseVolumeLocalPath;

    /**
     * @var string
     */
    public $onPremiseVolumeMountPoint;

    /**
     * @var string
     */
    public $onPremiseVolumeProtocol;

    /**
     * @var string
     */
    public $onPremiseVolumeRemotePath;

    /**
     * @var openldapPar
     */
    public $openldapPar;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $plugin;

    /**
     * @var postInstallScript[]
     */
    public $postInstallScript;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $schedulerPreInstall;

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
     * @var winAdPar
     */
    public $winAdPar;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ecsOrder' => 'EcsOrder',
        'application' => 'Application',
        'clientToken' => 'ClientToken',
        'clientVersion' => 'ClientVersion',
        'computeSpotPriceLimit' => 'ComputeSpotPriceLimit',
        'computeSpotStrategy' => 'ComputeSpotStrategy',
        'description' => 'Description',
        'domain' => 'Domain',
        'ehpcVersion' => 'EhpcVersion',
        'hybridClusterOpMode' => 'HybridClusterOpMode',
        'imageId' => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'jobQueue' => 'JobQueue',
        'keyPairName' => 'KeyPairName',
        'location' => 'Location',
        'multiOs' => 'MultiOs',
        'name' => 'Name',
        'nodes' => 'Nodes',
        'onPremiseVolumeLocalPath' => 'OnPremiseVolumeLocalPath',
        'onPremiseVolumeMountPoint' => 'OnPremiseVolumeMountPoint',
        'onPremiseVolumeProtocol' => 'OnPremiseVolumeProtocol',
        'onPremiseVolumeRemotePath' => 'OnPremiseVolumeRemotePath',
        'openldapPar' => 'OpenldapPar',
        'osTag' => 'OsTag',
        'password' => 'Password',
        'plugin' => 'Plugin',
        'postInstallScript' => 'PostInstallScript',
        'remoteDirectory' => 'RemoteDirectory',
        'resourceGroupId' => 'ResourceGroupId',
        'schedulerPreInstall' => 'SchedulerPreInstall',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
        'vSwitchId' => 'VSwitchId',
        'volumeId' => 'VolumeId',
        'volumeMountpoint' => 'VolumeMountpoint',
        'volumeProtocol' => 'VolumeProtocol',
        'volumeType' => 'VolumeType',
        'vpcId' => 'VpcId',
        'winAdPar' => 'WinAdPar',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->ecsOrder) {
            $this->ecsOrder->validate();
        }
        if (\is_array($this->application)) {
            Model::validateArray($this->application);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (null !== $this->openldapPar) {
            $this->openldapPar->validate();
        }
        if (\is_array($this->postInstallScript)) {
            Model::validateArray($this->postInstallScript);
        }
        if (null !== $this->winAdPar) {
            $this->winAdPar->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsOrder) {
            $res['EcsOrder'] = null !== $this->ecsOrder ? $this->ecsOrder->toArray($noStream) : $this->ecsOrder;
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
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['OpenldapPar'] = null !== $this->openldapPar ? $this->openldapPar->toArray($noStream) : $this->openldapPar;
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
            if (\is_array($this->postInstallScript)) {
                $res['PostInstallScript'] = [];
                $n1 = 0;
                foreach ($this->postInstallScript as $item1) {
                    $res['PostInstallScript'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['WinAdPar'] = null !== $this->winAdPar ? $this->winAdPar->toArray($noStream) : $this->winAdPar;
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

        if (isset($map['Application'])) {
            if (!empty($map['Application'])) {
                $model->application = [];
                $n1 = 0;
                foreach ($map['Application'] as $item1) {
                    $model->application[$n1++] = application::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['PostInstallScript'] as $item1) {
                    $model->postInstallScript[$n1++] = postInstallScript::fromMap($item1);
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
