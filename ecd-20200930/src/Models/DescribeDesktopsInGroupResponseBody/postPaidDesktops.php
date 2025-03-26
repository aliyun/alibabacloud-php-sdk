<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponseBody;

use AlibabaCloud\Dara\Model;

class postPaidDesktops extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $createDuration;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $endUserName;

    /**
     * @var string[]
     */
    public $endUserNames;

    /**
     * @var string
     */
    public $fotaVersion;

    /**
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $managementFlag;

    /**
     * @var string[]
     */
    public $managementFlags;

    /**
     * @var string
     */
    public $memberEniIp;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $primaryEniIp;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $resetTime;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'createDuration' => 'CreateDuration',
        'createTime' => 'CreateTime',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'diskType' => 'DiskType',
        'endUserId' => 'EndUserId',
        'endUserIds' => 'EndUserIds',
        'endUserName' => 'EndUserName',
        'endUserNames' => 'EndUserNames',
        'fotaVersion' => 'FotaVersion',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'managementFlag' => 'ManagementFlag',
        'managementFlags' => 'ManagementFlags',
        'memberEniIp' => 'MemberEniIp',
        'osType' => 'OsType',
        'primaryEniIp' => 'PrimaryEniIp',
        'protocolType' => 'ProtocolType',
        'releaseTime' => 'ReleaseTime',
        'resetTime' => 'ResetTime',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (\is_array($this->endUserNames)) {
            Model::validateArray($this->endUserNames);
        }
        if (\is_array($this->managementFlags)) {
            Model::validateArray($this->managementFlags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->createDuration) {
            $res['CreateDuration'] = $this->createDuration;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endUserName) {
            $res['EndUserName'] = $this->endUserName;
        }

        if (null !== $this->endUserNames) {
            if (\is_array($this->endUserNames)) {
                $res['EndUserNames'] = [];
                $n1 = 0;
                foreach ($this->endUserNames as $item1) {
                    $res['EndUserNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->fotaVersion) {
            $res['FotaVersion'] = $this->fotaVersion;
        }

        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->managementFlag) {
            $res['ManagementFlag'] = $this->managementFlag;
        }

        if (null !== $this->managementFlags) {
            if (\is_array($this->managementFlags)) {
                $res['ManagementFlags'] = [];
                $n1 = 0;
                foreach ($this->managementFlags as $item1) {
                    $res['ManagementFlags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->memberEniIp) {
            $res['MemberEniIp'] = $this->memberEniIp;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->primaryEniIp) {
            $res['PrimaryEniIp'] = $this->primaryEniIp;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->resetTime) {
            $res['ResetTime'] = $this->resetTime;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['CreateDuration'])) {
            $model->createDuration = $map['CreateDuration'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndUserName'])) {
            $model->endUserName = $map['EndUserName'];
        }

        if (isset($map['EndUserNames'])) {
            if (!empty($map['EndUserNames'])) {
                $model->endUserNames = [];
                $n1 = 0;
                foreach ($map['EndUserNames'] as $item1) {
                    $model->endUserNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FotaVersion'])) {
            $model->fotaVersion = $map['FotaVersion'];
        }

        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ManagementFlag'])) {
            $model->managementFlag = $map['ManagementFlag'];
        }

        if (isset($map['ManagementFlags'])) {
            if (!empty($map['ManagementFlags'])) {
                $model->managementFlags = [];
                $n1 = 0;
                foreach ($map['ManagementFlags'] as $item1) {
                    $model->managementFlags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MemberEniIp'])) {
            $model->memberEniIp = $map['MemberEniIp'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PrimaryEniIp'])) {
            $model->primaryEniIp = $map['PrimaryEniIp'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['ResetTime'])) {
            $model->resetTime = $map['ResetTime'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
