<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponseBody;

use AlibabaCloud\Tea\Model;

class postPaidDesktops extends Model
{
    /**
     * @description The connection state.
     *
     * Valid values:
     *
     *   Unknown
     *
     * <!-- -->
     *
     *   Connected
     *
     * <!-- -->
     *
     *   Disconnected
     *
     * <!-- -->
     * @example Connected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The retention period.
     *
     * @example 4153958447
     *
     * @var string
     */
    public $createDuration;

    /**
     * @description The time when the auxiliary media asset was created.
     *
     * @example 2022-01-21T06:34:57Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The cloud desktop ID.
     *
     * @example ud-2i8qxpv6t1a07****
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
     * Valid values:
     *
     *   Stopped
     *
     * <!-- -->
     *
     *   Starting
     *
     * <!-- -->
     *
     *   Rebuilding
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     *
     *   Stopping
     *
     * <!-- -->
     *
     *   Expired
     *
     * <!-- -->
     *
     *   Deleted
     *
     * <!-- -->
     *
     *   Pending
     *
     * <!-- -->
     * @example Stopped
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The disk type.
     *
     * Valid values:
     *
     *   SYSTEM
     *
     * <!-- -->
     *
     *   DATA:
     *
     * <!-- -->
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
     * @description The names of users that are connected to cloud desktops. If no users are connected, null is returned.
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
     * Valid values:
     *
     *   Updating: The configurations of the cloud desktop are being changed.
     *
     * <!-- -->
     *
     *   NoFlag: No flags are available.
     *
     * <!-- -->
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
     * @description The OS.
     *
     * Valid values:
     *
     *   Linux
     *
     * <!-- -->
     *
     *   Windows
     *
     * <!-- -->
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
     * @description The protocol type. Valid values:
     *
     *   ASP
     *   HDX
     *
     * @example HDX
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The time when the cloud desktop was released.
     *
     * @example 2022-01-21T16:34:57Z
     *
     * @var string
     */
    public $releaseTime;

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
        'createDuration'   => 'CreateDuration',
        'createTime'       => 'CreateTime',
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
        'releaseTime'      => 'ReleaseTime',
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

    /**
     * @param array $map
     *
     * @return postPaidDesktops
     */
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
