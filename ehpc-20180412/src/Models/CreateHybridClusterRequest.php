<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\application;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\ecsOrder;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\nodes;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateHybridClusterRequest\postInstallScript;
use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $password;

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
        'osTag'                     => 'OsTag',
        'password'                  => 'Password',
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
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
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
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
