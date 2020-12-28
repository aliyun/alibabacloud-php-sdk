<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\applications;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\ecsInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\postInstallScripts;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $ecsChargeType;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $sccClusterId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $volumeProtocol;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $volumeId;

    /**
     * @var bool
     */
    public $haEnable;

    /**
     * @var string
     */
    public $baseOsTag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var postInstallScripts[]
     */
    public $postInstallScripts;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var ecsInfo
     */
    public $ecsInfo;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var applications[]
     */
    public $applications;

    /**
     * @var string
     */
    public $volumeType;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $clientVersion;
    protected $_name = [
        'status'             => 'Status',
        'vpcId'              => 'VpcId',
        'keyPairName'        => 'KeyPairName',
        'ecsChargeType'      => 'EcsChargeType',
        'securityGroupId'    => 'SecurityGroupId',
        'sccClusterId'       => 'SccClusterId',
        'createTime'         => 'CreateTime',
        'accountType'        => 'AccountType',
        'volumeProtocol'     => 'VolumeProtocol',
        'description'        => 'Description',
        'volumeId'           => 'VolumeId',
        'haEnable'           => 'HaEnable',
        'baseOsTag'          => 'BaseOsTag',
        'name'               => 'Name',
        'imageId'            => 'ImageId',
        'postInstallScripts' => 'PostInstallScripts',
        'schedulerType'      => 'SchedulerType',
        'deployMode'         => 'DeployMode',
        'imageOwnerAlias'    => 'ImageOwnerAlias',
        'remoteDirectory'    => 'RemoteDirectory',
        'volumeMountpoint'   => 'VolumeMountpoint',
        'osTag'              => 'OsTag',
        'regionId'           => 'RegionId',
        'vSwitchId'          => 'VSwitchId',
        'ecsInfo'            => 'EcsInfo',
        'imageName'          => 'ImageName',
        'applications'       => 'Applications',
        'volumeType'         => 'VolumeType',
        'location'           => 'Location',
        'id'                 => 'Id',
        'clientVersion'      => 'ClientVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ecsChargeType) {
            $res['EcsChargeType'] = $this->ecsChargeType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sccClusterId) {
            $res['SccClusterId'] = $this->sccClusterId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->haEnable) {
            $res['HaEnable'] = $this->haEnable;
        }
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->postInstallScripts) {
            $res['PostInstallScripts'] = [];
            if (null !== $this->postInstallScripts && \is_array($this->postInstallScripts)) {
                $n = 0;
                foreach ($this->postInstallScripts as $item) {
                    $res['PostInstallScripts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->ecsInfo) {
            $res['EcsInfo'] = null !== $this->ecsInfo ? $this->ecsInfo->toMap() : null;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->applications) {
            $res['Applications'] = [];
            if (null !== $this->applications && \is_array($this->applications)) {
                $n = 0;
                foreach ($this->applications as $item) {
                    $res['Applications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['EcsChargeType'])) {
            $model->ecsChargeType = $map['EcsChargeType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SccClusterId'])) {
            $model->sccClusterId = $map['SccClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['HaEnable'])) {
            $model->haEnable = $map['HaEnable'];
        }
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['PostInstallScripts'])) {
            if (!empty($map['PostInstallScripts'])) {
                $model->postInstallScripts = [];
                $n                         = 0;
                foreach ($map['PostInstallScripts'] as $item) {
                    $model->postInstallScripts[$n++] = null !== $item ? postInstallScripts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['EcsInfo'])) {
            $model->ecsInfo = ecsInfo::fromMap($map['EcsInfo']);
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['Applications'])) {
            if (!empty($map['Applications'])) {
                $model->applications = [];
                $n                   = 0;
                foreach ($map['Applications'] as $item) {
                    $model->applications[$n++] = null !== $item ? applications::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        return $model;
    }
}
