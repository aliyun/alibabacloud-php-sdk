<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponseBody\clients\settings;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupClientsResponseBody\clients\tags;

class clients extends Model
{
    /**
     * @var bool
     */
    public $appliance;

    /**
     * @var string
     */
    public $archType;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $lastHeartBeatTime;

    /**
     * @var string
     */
    public $maxClientVersion;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $privateIpV4;

    /**
     * @var settings
     */
    public $settings;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appliance' => 'Appliance',
        'archType' => 'ArchType',
        'backupStatus' => 'BackupStatus',
        'clientId' => 'ClientId',
        'clientType' => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'createdTime' => 'CreatedTime',
        'hostname' => 'Hostname',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'lastHeartBeatTime' => 'LastHeartBeatTime',
        'maxClientVersion' => 'MaxClientVersion',
        'osType' => 'OsType',
        'privateIpV4' => 'PrivateIpV4',
        'settings' => 'Settings',
        'status' => 'Status',
        'tags' => 'Tags',
        'updatedTime' => 'UpdatedTime',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->settings) {
            $this->settings->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Settings'] = null !== $this->settings ? $this->settings->toArray($noStream) : $this->settings;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
