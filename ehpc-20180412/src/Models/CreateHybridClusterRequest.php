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
     * @var application[]
     */
    public $application;

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
     * @example 0.034
     *
     * @var float
     */
    public $computeSpotPriceLimit;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $computeSpotStrategy;

    /**
     * @example TestDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example nis
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @example wi_1607_x64_dtc_zh_40G_alibase****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

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
     * @example OnPremise
     *
     * @var string
     */
    public $location;

    /**
     * @example false
     *
     * @var bool
     */
    public $multiOs;

    /**
     * @example hybridcluster
     *
     * @var string
     */
    public $name;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @example /OnCloudDirectory
     *
     * @var string
     */
    public $onPremiseVolumeLocalPath;

    /**
     * @example RemoteNasDomain.com
     *
     * @var string
     */
    public $onPremiseVolumeMountPoint;

    /**
     * @example NFS
     *
     * @var string
     */
    public $onPremiseVolumeProtocol;

    /**
     * @example /RemoteDirectory
     *
     * @var string
     */
    public $onPremiseVolumeRemotePath;

    /**
     * @var openldapPar
     */
    public $openldapPar;

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
     * @var string
     */
    public $plugin;

    /**
     * @var postInstallScript[]
     */
    public $postInstallScript;

    /**
     * @example /RemoteDirectory
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example true
     *
     * @var bool
     */
    public $schedulerPreInstall;

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
     * @example NAS
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
     * @var winAdPar
     */
    public $winAdPar;

    /**
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
