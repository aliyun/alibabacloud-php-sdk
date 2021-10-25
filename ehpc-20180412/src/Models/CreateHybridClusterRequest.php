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
    public $domain;

    /**
     * @var string
     */
    public $location;

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
    public $onPremiseVolumeProtocol;

    /**
     * @var string
     */
    public $onPremiseVolumeMountPoint;

    /**
     * @var string
     */
    public $onPremiseVolumeRemotePath;

    /**
     * @var string
     */
    public $onPremiseVolumeLocalPath;

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
    public $jobQueue;

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
    public $computeSpotStrategy;

    /**
     * @var float
     */
    public $computeSpotPriceLimit;

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
    public $clientToken;

    /**
     * @var bool
     */
    public $multiOs;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var application[]
     */
    public $application;

    /**
     * @var postInstallScript[]
     */
    public $postInstallScript;
    protected $_name = [
        'ecsOrder'                  => 'EcsOrder',
        'zoneId'                    => 'ZoneId',
        'name'                      => 'Name',
        'description'               => 'Description',
        'ehpcVersion'               => 'EhpcVersion',
        'clientVersion'             => 'ClientVersion',
        'osTag'                     => 'OsTag',
        'domain'                    => 'Domain',
        'location'                  => 'Location',
        'securityGroupId'           => 'SecurityGroupId',
        'securityGroupName'         => 'SecurityGroupName',
        'vpcId'                     => 'VpcId',
        'vSwitchId'                 => 'VSwitchId',
        'volumeType'                => 'VolumeType',
        'volumeId'                  => 'VolumeId',
        'volumeProtocol'            => 'VolumeProtocol',
        'volumeMountpoint'          => 'VolumeMountpoint',
        'remoteDirectory'           => 'RemoteDirectory',
        'onPremiseVolumeProtocol'   => 'OnPremiseVolumeProtocol',
        'onPremiseVolumeMountPoint' => 'OnPremiseVolumeMountPoint',
        'onPremiseVolumeRemotePath' => 'OnPremiseVolumeRemotePath',
        'onPremiseVolumeLocalPath'  => 'OnPremiseVolumeLocalPath',
        'password'                  => 'Password',
        'keyPairName'               => 'KeyPairName',
        'jobQueue'                  => 'JobQueue',
        'resourceGroupId'           => 'ResourceGroupId',
        'schedulerPreInstall'       => 'SchedulerPreInstall',
        'computeSpotStrategy'       => 'ComputeSpotStrategy',
        'computeSpotPriceLimit'     => 'ComputeSpotPriceLimit',
        'imageOwnerAlias'           => 'ImageOwnerAlias',
        'imageId'                   => 'ImageId',
        'clientToken'               => 'ClientToken',
        'multiOs'                   => 'MultiOs',
        'nodes'                     => 'Nodes',
        'application'               => 'Application',
        'postInstallScript'         => 'PostInstallScript',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
        if (null !== $this->onPremiseVolumeProtocol) {
            $res['OnPremiseVolumeProtocol'] = $this->onPremiseVolumeProtocol;
        }
        if (null !== $this->onPremiseVolumeMountPoint) {
            $res['OnPremiseVolumeMountPoint'] = $this->onPremiseVolumeMountPoint;
        }
        if (null !== $this->onPremiseVolumeRemotePath) {
            $res['OnPremiseVolumeRemotePath'] = $this->onPremiseVolumeRemotePath;
        }
        if (null !== $this->onPremiseVolumeLocalPath) {
            $res['OnPremiseVolumeLocalPath'] = $this->onPremiseVolumeLocalPath;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->schedulerPreInstall) {
            $res['SchedulerPreInstall'] = $this->schedulerPreInstall;
        }
        if (null !== $this->computeSpotStrategy) {
            $res['ComputeSpotStrategy'] = $this->computeSpotStrategy;
        }
        if (null !== $this->computeSpotPriceLimit) {
            $res['ComputeSpotPriceLimit'] = $this->computeSpotPriceLimit;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->multiOs) {
            $res['MultiOs'] = $this->multiOs;
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
        if (null !== $this->application) {
            $res['Application'] = [];
            if (null !== $this->application && \is_array($this->application)) {
                $n = 0;
                foreach ($this->application as $item) {
                    $res['Application'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return CreateHybridClusterRequest
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
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
        if (isset($map['OnPremiseVolumeProtocol'])) {
            $model->onPremiseVolumeProtocol = $map['OnPremiseVolumeProtocol'];
        }
        if (isset($map['OnPremiseVolumeMountPoint'])) {
            $model->onPremiseVolumeMountPoint = $map['OnPremiseVolumeMountPoint'];
        }
        if (isset($map['OnPremiseVolumeRemotePath'])) {
            $model->onPremiseVolumeRemotePath = $map['OnPremiseVolumeRemotePath'];
        }
        if (isset($map['OnPremiseVolumeLocalPath'])) {
            $model->onPremiseVolumeLocalPath = $map['OnPremiseVolumeLocalPath'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SchedulerPreInstall'])) {
            $model->schedulerPreInstall = $map['SchedulerPreInstall'];
        }
        if (isset($map['ComputeSpotStrategy'])) {
            $model->computeSpotStrategy = $map['ComputeSpotStrategy'];
        }
        if (isset($map['ComputeSpotPriceLimit'])) {
            $model->computeSpotPriceLimit = $map['ComputeSpotPriceLimit'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['MultiOs'])) {
            $model->multiOs = $map['MultiOs'];
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
        if (isset($map['Application'])) {
            if (!empty($map['Application'])) {
                $model->application = [];
                $n                  = 0;
                foreach ($map['Application'] as $item) {
                    $model->application[$n++] = null !== $item ? application::fromMap($item) : $item;
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
