<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponseBody\clients\settings;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponseBody\clients\tags;
use AlibabaCloud\Tea\Model;

class clients extends Model
{
    /**
     * @description Indicates whether the HBR client is installed on an all-in-one PC that integrates hardware and monitoring program. Valid values:
     *
     *   true: The HBR client is installed on an all-in-one PC that integrates hardware and monitoring program.
     *   false: The HBR client is not installed on an all-in-one PC that integrates hardware and monitoring program.
     *
     * @example false
     *
     * @var bool
     */
    public $appliance;

    /**
     * @description This parameter is valid only if the **ClientType** parameter is set to **ECS_CLIENT**. This parameter indicates the system architecture where the HBR client resides. Valid values:
     *
     *   **amd64**
     *   **386**
     *
     * @example amd64
     *
     * @var string
     */
    public $archType;

    /**
     * @description The protection status of the HBR client. Valid values:
     *
     *   **UNPROTECTED**: The HBR client is not protected.
     *   **PROTECTED**: The HBR client is protected.
     *
     * @example PROTECTED
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The ID of the HBR client.
     *
     * @example c-*********************
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The type of the HBR client. Valid value: **ECS_CLIENT**, which indicates an HBR client for ECS file backup.
     *
     * @example ECS_CLIENT
     *
     * @var string
     */
    public $clientType;

    /**
     * @description The version number of the HBR client.
     *
     * @example 2.4.5
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The time when the HBR client was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The hostname of the HBR client.
     *
     * @example hostname
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The ID of the instance.
     *
     *   If the HBR client is used to back up ECS files, this parameter indicates the ID of an ECS instance.
     *   If the HBR client is used to back up on-premises files, this parameter indicates the hardware fingerprint that is generated based on the system information.
     *
     * @example i-*********************
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is valid only if the **ClientType** parameter is set to **ECS_CLIENT**. This parameter indicates the name of the ECS instance.
     *
     * @example instancename
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The last heartbeat time of the HBR client. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $lastHeartBeatTime;

    /**
     * @description The latest version number of the HBR client.
     *
     * @example 2.4.5
     *
     * @var string
     */
    public $maxClientVersion;

    /**
     * @description This parameter is valid only if the **ClientType** parameter is set to **ECS_CLIENT**. This parameter indicates the operating system type of the HBR client. Valid values:
     *
     *   **windows**
     *   **linux**
     *
     * @example linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description This parameter is valid only if the **ClientType** parameter is set to **ECS_CLIENT**. This parameter indicates the internal IP address of the ECS instance.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $privateIpV4;

    /**
     * @description The configuration information of the HBR client.
     *
     * @var settings
     */
    public $settings;

    /**
     * @description The status of the HBR client. Valid values:
     *
     *   **REGISTERED**: The HBR client is registered.
     *   **ACTIVATED**: The HBR client is enabled.
     *   **DEACTIVATED**: The HBR client fails to be enabled.
     *   **INSTALLING**: The HBR client is being installed.
     *   **INSTALL_FAILED**: The HBR client fails to be installed.
     *   **NOT_INSTALLED**: The HBR client is not installed.
     *   **UPGRADING**: The HBR client is being upgraded.
     *   **UPGRADE_FAILED**: The HBR client fails to be upgraded.
     *   **UNINSTALLING**: The HBR client is being uninstalled.
     *   **UNINSTALL_FAILED**: The HBR client fails to be uninstalled.
     *   **STOPPED**: The HBR client is out of service.
     *   **UNKNOWN**: The HBR client is disconnected.
     *
     * @example ACTIVATED
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag information.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The time when the HBR client was updated. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description This parameter is valid only if the **ClientType** parameter is set to **ECS_CLIENT**. This parameter indicates the zone of the HBR client.
     *
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appliance'         => 'Appliance',
        'archType'          => 'ArchType',
        'backupStatus'      => 'BackupStatus',
        'clientId'          => 'ClientId',
        'clientType'        => 'ClientType',
        'clientVersion'     => 'ClientVersion',
        'createdTime'       => 'CreatedTime',
        'hostname'          => 'Hostname',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'lastHeartBeatTime' => 'LastHeartBeatTime',
        'maxClientVersion'  => 'MaxClientVersion',
        'osType'            => 'OsType',
        'privateIpV4'       => 'PrivateIpV4',
        'settings'          => 'Settings',
        'status'            => 'Status',
        'tags'              => 'Tags',
        'updatedTime'       => 'UpdatedTime',
        'zoneId'            => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliance) {
            $res['Appliance'] = $this->appliance;
        }
        if (null !== $this->archType) {
            $res['ArchType'] = $this->archType;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->lastHeartBeatTime) {
            $res['LastHeartBeatTime'] = $this->lastHeartBeatTime;
        }
        if (null !== $this->maxClientVersion) {
            $res['MaxClientVersion'] = $this->maxClientVersion;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->privateIpV4) {
            $res['PrivateIpV4'] = $this->privateIpV4;
        }
        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clients
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Appliance'])) {
            $model->appliance = $map['Appliance'];
        }
        if (isset($map['ArchType'])) {
            $model->archType = $map['ArchType'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['LastHeartBeatTime'])) {
            $model->lastHeartBeatTime = $map['LastHeartBeatTime'];
        }
        if (isset($map['MaxClientVersion'])) {
            $model->maxClientVersion = $map['MaxClientVersion'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['PrivateIpV4'])) {
            $model->privateIpV4 = $map['PrivateIpV4'];
        }
        if (isset($map['Settings'])) {
            $model->settings = settings::fromMap($map['Settings']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
