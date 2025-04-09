<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody\desktopGroups\countPerStatus;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody\desktopGroups\tags;

class desktopGroups extends Model
{
    /**
     * @var int
     */
    public $bindAmount;

    /**
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @var string
     */
    public $comments;

    /**
     * @var int
     */
    public $connectDuration;

    /**
     * @var countPerStatus[]
     */
    public $countPerStatus;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var int
     */
    public $desktopCount;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopGroupName;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var int
     */
    public $endUserCount;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var int
     */
    public $idleDisconnectDuration;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $isLdap;

    /**
     * @var int
     */
    public $keepDuration;

    /**
     * @var int
     */
    public $loadPolicy;

    /**
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $ownBundleId;

    /**
     * @var string
     */
    public $ownBundleName;

    /**
     * @var int
     */
    public $ownType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupName;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var float
     */
    public $ratioThreshold;

    /**
     * @var int
     */
    public $resetType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $stopDuration;

    /**
     * @var string
     */
    public $subnetId;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userOuPath;

    /**
     * @var int
     */
    public $version;

    /**
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'bindAmount' => 'BindAmount',
        'buyDesktopsCount' => 'BuyDesktopsCount',
        'comments' => 'Comments',
        'connectDuration' => 'ConnectDuration',
        'countPerStatus' => 'CountPerStatus',
        'cpu' => 'Cpu',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskSize' => 'DataDiskSize',
        'desktopCount' => 'DesktopCount',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupName' => 'DesktopGroupName',
        'desktopType' => 'DesktopType',
        'endUserCount' => 'EndUserCount',
        'expiredTime' => 'ExpiredTime',
        'gpuCount' => 'GpuCount',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'gpuSpec' => 'GpuSpec',
        'idleDisconnectDuration' => 'IdleDisconnectDuration',
        'imageId' => 'ImageId',
        'isLdap' => 'IsLdap',
        'keepDuration' => 'KeepDuration',
        'loadPolicy' => 'LoadPolicy',
        'maxDesktopsCount' => 'MaxDesktopsCount',
        'memory' => 'Memory',
        'minDesktopsCount' => 'MinDesktopsCount',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'officeSiteType' => 'OfficeSiteType',
        'osType' => 'OsType',
        'ownBundleId' => 'OwnBundleId',
        'ownBundleName' => 'OwnBundleName',
        'ownType' => 'OwnType',
        'payType' => 'PayType',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupName' => 'PolicyGroupName',
        'protocolType' => 'ProtocolType',
        'ratioThreshold' => 'RatioThreshold',
        'resetType' => 'ResetType',
        'status' => 'Status',
        'stopDuration' => 'StopDuration',
        'subnetId' => 'SubnetId',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskSize' => 'SystemDiskSize',
        'tags' => 'Tags',
        'userOuPath' => 'UserOuPath',
        'version' => 'Version',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
    ];

    public function validate()
    {
        if (\is_array($this->countPerStatus)) {
            Model::validateArray($this->countPerStatus);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindAmount) {
            $res['BindAmount'] = $this->bindAmount;
        }

        if (null !== $this->buyDesktopsCount) {
            $res['BuyDesktopsCount'] = $this->buyDesktopsCount;
        }

        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }

        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }

        if (null !== $this->countPerStatus) {
            if (\is_array($this->countPerStatus)) {
                $res['CountPerStatus'] = [];
                $n1 = 0;
                foreach ($this->countPerStatus as $item1) {
                    $res['CountPerStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }

        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }

        if (null !== $this->endUserCount) {
            $res['EndUserCount'] = $this->endUserCount;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }

        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }

        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }

        if (null !== $this->idleDisconnectDuration) {
            $res['IdleDisconnectDuration'] = $this->idleDisconnectDuration;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->isLdap) {
            $res['IsLdap'] = $this->isLdap;
        }

        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }

        if (null !== $this->loadPolicy) {
            $res['LoadPolicy'] = $this->loadPolicy;
        }

        if (null !== $this->maxDesktopsCount) {
            $res['MaxDesktopsCount'] = $this->maxDesktopsCount;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->ownBundleId) {
            $res['OwnBundleId'] = $this->ownBundleId;
        }

        if (null !== $this->ownBundleName) {
            $res['OwnBundleName'] = $this->ownBundleName;
        }

        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }

        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }

        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userOuPath) {
            $res['UserOuPath'] = $this->userOuPath;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }

        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
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
        if (isset($map['BindAmount'])) {
            $model->bindAmount = $map['BindAmount'];
        }

        if (isset($map['BuyDesktopsCount'])) {
            $model->buyDesktopsCount = $map['BuyDesktopsCount'];
        }

        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }

        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }

        if (isset($map['CountPerStatus'])) {
            if (!empty($map['CountPerStatus'])) {
                $model->countPerStatus = [];
                $n1 = 0;
                foreach ($map['CountPerStatus'] as $item1) {
                    $model->countPerStatus[$n1++] = countPerStatus::fromMap($item1);
                }
            }
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }

        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }

        if (isset($map['EndUserCount'])) {
            $model->endUserCount = $map['EndUserCount'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }

        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }

        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }

        if (isset($map['IdleDisconnectDuration'])) {
            $model->idleDisconnectDuration = $map['IdleDisconnectDuration'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['IsLdap'])) {
            $model->isLdap = $map['IsLdap'];
        }

        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }

        if (isset($map['LoadPolicy'])) {
            $model->loadPolicy = $map['LoadPolicy'];
        }

        if (isset($map['MaxDesktopsCount'])) {
            $model->maxDesktopsCount = $map['MaxDesktopsCount'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['OwnBundleId'])) {
            $model->ownBundleId = $map['OwnBundleId'];
        }

        if (isset($map['OwnBundleName'])) {
            $model->ownBundleName = $map['OwnBundleName'];
        }

        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }

        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }

        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UserOuPath'])) {
            $model->userOuPath = $map['UserOuPath'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }

        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
