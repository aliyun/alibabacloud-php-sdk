<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops\scaleTimerInfos;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops\timerInfos;

class desktops extends Model
{
    /**
     * @var int
     */
    public $allowAutoSetup;
    /**
     * @var int
     */
    public $allowBufferCount;
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
     * @var int
     */
    public $cpu;
    /**
     * @var string
     */
    public $creationTime;
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
    public $directoryId;
    /**
     * @var string
     */
    public $directoryType;
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
    public $nasFileSystemID;
    /**
     * @var string
     */
    public $nasFileSystemName;
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
     * @var string[]
     */
    public $policyGroupIds;
    /**
     * @var string
     */
    public $policyGroupName;
    /**
     * @var string[]
     */
    public $policyGroupNames;
    /**
     * @var bool
     */
    public $profileFollowSwitch;
    /**
     * @var float
     */
    public $ratioThreshold;
    /**
     * @var int
     */
    public $resType;
    /**
     * @var int
     */
    public $resetType;
    /**
     * @var scaleTimerInfos[]
     */
    public $scaleTimerInfos;
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
    public $systemDiskCategory;
    /**
     * @var int
     */
    public $systemDiskSize;
    /**
     * @var timerInfos[]
     */
    public $timerInfos;
    /**
     * @var string
     */
    public $timingStrategyInfo;
    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'allowAutoSetup'         => 'AllowAutoSetup',
        'allowBufferCount'       => 'AllowBufferCount',
        'bindAmount'             => 'BindAmount',
        'buyDesktopsCount'       => 'BuyDesktopsCount',
        'comments'               => 'Comments',
        'connectDuration'        => 'ConnectDuration',
        'cpu'                    => 'Cpu',
        'creationTime'           => 'CreationTime',
        'creator'                => 'Creator',
        'dataDiskCategory'       => 'DataDiskCategory',
        'dataDiskSize'           => 'DataDiskSize',
        'desktopGroupId'         => 'DesktopGroupId',
        'desktopGroupName'       => 'DesktopGroupName',
        'directoryId'            => 'DirectoryId',
        'directoryType'          => 'DirectoryType',
        'expiredTime'            => 'ExpiredTime',
        'gpuCount'               => 'GpuCount',
        'gpuSpec'                => 'GpuSpec',
        'idleDisconnectDuration' => 'IdleDisconnectDuration',
        'imageId'                => 'ImageId',
        'keepDuration'           => 'KeepDuration',
        'loadPolicy'             => 'LoadPolicy',
        'maxDesktopsCount'       => 'MaxDesktopsCount',
        'memory'                 => 'Memory',
        'minDesktopsCount'       => 'MinDesktopsCount',
        'nasFileSystemID'        => 'NasFileSystemID',
        'nasFileSystemName'      => 'NasFileSystemName',
        'officeSiteId'           => 'OfficeSiteId',
        'officeSiteName'         => 'OfficeSiteName',
        'officeSiteType'         => 'OfficeSiteType',
        'ownBundleId'            => 'OwnBundleId',
        'ownBundleName'          => 'OwnBundleName',
        'ownType'                => 'OwnType',
        'payType'                => 'PayType',
        'policyGroupId'          => 'PolicyGroupId',
        'policyGroupIds'         => 'PolicyGroupIds',
        'policyGroupName'        => 'PolicyGroupName',
        'policyGroupNames'       => 'PolicyGroupNames',
        'profileFollowSwitch'    => 'ProfileFollowSwitch',
        'ratioThreshold'         => 'RatioThreshold',
        'resType'                => 'ResType',
        'resetType'              => 'ResetType',
        'scaleTimerInfos'        => 'ScaleTimerInfos',
        'status'                 => 'Status',
        'stopDuration'           => 'StopDuration',
        'systemDiskCategory'     => 'SystemDiskCategory',
        'systemDiskSize'         => 'SystemDiskSize',
        'timerInfos'             => 'TimerInfos',
        'timingStrategyInfo'     => 'TimingStrategyInfo',
        'version'                => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->policyGroupIds)) {
            Model::validateArray($this->policyGroupIds);
        }
        if (\is_array($this->policyGroupNames)) {
            Model::validateArray($this->policyGroupNames);
        }
        if (\is_array($this->scaleTimerInfos)) {
            Model::validateArray($this->scaleTimerInfos);
        }
        if (\is_array($this->timerInfos)) {
            Model::validateArray($this->timerInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowAutoSetup) {
            $res['AllowAutoSetup'] = $this->allowAutoSetup;
        }

        if (null !== $this->allowBufferCount) {
            $res['AllowBufferCount'] = $this->allowBufferCount;
        }

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

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
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

        if (null !== $this->nasFileSystemID) {
            $res['NasFileSystemID'] = $this->nasFileSystemID;
        }

        if (null !== $this->nasFileSystemName) {
            $res['NasFileSystemName'] = $this->nasFileSystemName;
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

        if (null !== $this->policyGroupIds) {
            if (\is_array($this->policyGroupIds)) {
                $res['PolicyGroupIds'] = [];
                $n1                    = 0;
                foreach ($this->policyGroupIds as $item1) {
                    $res['PolicyGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }

        if (null !== $this->policyGroupNames) {
            if (\is_array($this->policyGroupNames)) {
                $res['PolicyGroupNames'] = [];
                $n1                      = 0;
                foreach ($this->policyGroupNames as $item1) {
                    $res['PolicyGroupNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->profileFollowSwitch) {
            $res['ProfileFollowSwitch'] = $this->profileFollowSwitch;
        }

        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }

        if (null !== $this->resType) {
            $res['ResType'] = $this->resType;
        }

        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }

        if (null !== $this->scaleTimerInfos) {
            if (\is_array($this->scaleTimerInfos)) {
                $res['ScaleTimerInfos'] = [];
                $n1                     = 0;
                foreach ($this->scaleTimerInfos as $item1) {
                    $res['ScaleTimerInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->timerInfos) {
            if (\is_array($this->timerInfos)) {
                $res['TimerInfos'] = [];
                $n1                = 0;
                foreach ($this->timerInfos as $item1) {
                    $res['TimerInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timingStrategyInfo) {
            $res['TimingStrategyInfo'] = $this->timingStrategyInfo;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AllowAutoSetup'])) {
            $model->allowAutoSetup = $map['AllowAutoSetup'];
        }

        if (isset($map['AllowBufferCount'])) {
            $model->allowBufferCount = $map['AllowBufferCount'];
        }

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

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
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

        if (isset($map['NasFileSystemID'])) {
            $model->nasFileSystemID = $map['NasFileSystemID'];
        }

        if (isset($map['NasFileSystemName'])) {
            $model->nasFileSystemName = $map['NasFileSystemName'];
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

        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = [];
                $n1                    = 0;
                foreach ($map['PolicyGroupIds'] as $item1) {
                    $model->policyGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }

        if (isset($map['PolicyGroupNames'])) {
            if (!empty($map['PolicyGroupNames'])) {
                $model->policyGroupNames = [];
                $n1                      = 0;
                foreach ($map['PolicyGroupNames'] as $item1) {
                    $model->policyGroupNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProfileFollowSwitch'])) {
            $model->profileFollowSwitch = $map['ProfileFollowSwitch'];
        }

        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }

        if (isset($map['ResType'])) {
            $model->resType = $map['ResType'];
        }

        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }

        if (isset($map['ScaleTimerInfos'])) {
            if (!empty($map['ScaleTimerInfos'])) {
                $model->scaleTimerInfos = [];
                $n1                     = 0;
                foreach ($map['ScaleTimerInfos'] as $item1) {
                    $model->scaleTimerInfos[$n1++] = scaleTimerInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['TimerInfos'])) {
            if (!empty($map['TimerInfos'])) {
                $model->timerInfos = [];
                $n1                = 0;
                foreach ($map['TimerInfos'] as $item1) {
                    $model->timerInfos[$n1++] = timerInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['TimingStrategyInfo'])) {
            $model->timingStrategyInfo = $map['TimingStrategyInfo'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
