<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListDiskOpsEventsResponseBody\eventList;

use AlibabaCloud\Tea\Model;

class diskOpsEventInfo extends Model
{
    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $currentActivity;

    /**
     * @var string
     */
    public $currentActivityState;

    /**
     * @var string
     */
    public $diskDevice;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $diskMountPoint;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var int
     */
    public $eventTriggerTime;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'clusterBizId'         => 'ClusterBizId',
        'clusterName'          => 'ClusterName',
        'currentActivity'      => 'CurrentActivity',
        'currentActivityState' => 'CurrentActivityState',
        'diskDevice'           => 'DiskDevice',
        'diskId'               => 'DiskId',
        'diskMountPoint'       => 'DiskMountPoint',
        'eventId'              => 'EventId',
        'eventTriggerTime'     => 'EventTriggerTime',
        'eventType'            => 'EventType',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'instanceStatus'       => 'InstanceStatus',
        'privateIp'            => 'PrivateIp',
        'regionId'             => 'RegionId',
        'userId'               => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->currentActivity) {
            $res['CurrentActivity'] = $this->currentActivity;
        }
        if (null !== $this->currentActivityState) {
            $res['CurrentActivityState'] = $this->currentActivityState;
        }
        if (null !== $this->diskDevice) {
            $res['DiskDevice'] = $this->diskDevice;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskMountPoint) {
            $res['DiskMountPoint'] = $this->diskMountPoint;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventTriggerTime) {
            $res['EventTriggerTime'] = $this->eventTriggerTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskOpsEventInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CurrentActivity'])) {
            $model->currentActivity = $map['CurrentActivity'];
        }
        if (isset($map['CurrentActivityState'])) {
            $model->currentActivityState = $map['CurrentActivityState'];
        }
        if (isset($map['DiskDevice'])) {
            $model->diskDevice = $map['DiskDevice'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskMountPoint'])) {
            $model->diskMountPoint = $map['DiskMountPoint'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventTriggerTime'])) {
            $model->eventTriggerTime = $map['EventTriggerTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
