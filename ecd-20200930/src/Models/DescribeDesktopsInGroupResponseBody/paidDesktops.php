<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponseBody;

use AlibabaCloud\Tea\Model;

class paidDesktops extends Model
{
    /**
     * @description The connection status of the cloud desktop.
     *
     * @example Connected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The cloud desktop ID.
     *
     * @example ud-7ftf5b6yu77b0****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The cloud desktop name.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The state of the cloud desktop.
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The disk type.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The authorized user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The IDs of users that are connected to cloud desktops. If no users are connected, null is returned.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description The username of the authorized user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserName;

    /**
     * @description The usernames of users that are connected to cloud desktops. If no users are connected, null is returned.
     *
     * @var string[]
     */
    public $endUserNames;

    /**
     * @description The image version.
     *
     * @example 0.1.0-R-20220914.17****
     *
     * @var string
     */
    public $fotaVersion;

    /**
     * @description The GPU driver version.
     *
     * @example 1.0
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The image ID.
     *
     * @example m-hn5v2mmk0****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example Win10_ZC
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The flag that is used for management.
     *
     * @example NoFlag
     *
     * @var string
     */
    public $managementFlag;

    /**
     * @description The flags that are used for management.
     *
     * @var string[]
     */
    public $managementFlags;

    /**
     * @description The IP address of the member Elastic Network Interface (ENI).
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $memberEniIp;

    /**
     * @description The OS type.
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The IP address of the primary ENI.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $primaryEniIp;

    /**
     * @description The protocol. Valid values:
     *
     *   ASP
     *   HDX
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The point in time when the cloud desktop was reset.
     *
     * @example 2021-03-03 08:48:08
     *
     * @var string
     */
    public $resetTime;

    /**
     * @description The system disk size. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'desktopId'        => 'DesktopId',
        'desktopName'      => 'DesktopName',
        'desktopStatus'    => 'DesktopStatus',
        'diskType'         => 'DiskType',
        'endUserId'        => 'EndUserId',
        'endUserIds'       => 'EndUserIds',
        'endUserName'      => 'EndUserName',
        'endUserNames'     => 'EndUserNames',
        'fotaVersion'      => 'FotaVersion',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'imageId'          => 'ImageId',
        'imageName'        => 'ImageName',
        'managementFlag'   => 'ManagementFlag',
        'managementFlags'  => 'ManagementFlags',
        'memberEniIp'      => 'MemberEniIp',
        'osType'           => 'OsType',
        'primaryEniIp'     => 'PrimaryEniIp',
        'protocolType'     => 'ProtocolType',
        'resetTime'        => 'ResetTime',
        'systemDiskSize'   => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
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
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->endUserName) {
            $res['EndUserName'] = $this->endUserName;
        }
        if (null !== $this->endUserNames) {
            $res['EndUserNames'] = $this->endUserNames;
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
            $res['ManagementFlags'] = $this->managementFlags;
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
        if (null !== $this->resetTime) {
            $res['ResetTime'] = $this->resetTime;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paidDesktops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
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
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['EndUserName'])) {
            $model->endUserName = $map['EndUserName'];
        }
        if (isset($map['EndUserNames'])) {
            if (!empty($map['EndUserNames'])) {
                $model->endUserNames = $map['EndUserNames'];
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
                $model->managementFlags = $map['ManagementFlags'];
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
        if (isset($map['ResetTime'])) {
            $model->resetTime = $map['ResetTime'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
