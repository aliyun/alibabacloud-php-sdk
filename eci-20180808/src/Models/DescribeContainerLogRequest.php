<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerLogRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example eci-uf6fonnghi50v6nq****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The name of the container.
     *
     * @example nginx
     *
     * @var string
     */
    public $containerName;

    /**
     * @description Specifies whether to query the logs of the previous container if the container exits and restarts. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $lastTime;

    /**
     * @description The limit on the total size of logs. Unit: bytes. Valid values: 1 to 1048576(1 MB).
     *
     * @example 123798
     *
     * @var int
     */
    public $limitBytes;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the elastic container instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description A relative time in seconds before the current time from which to show logs. Examples: 10, 20, and 30.
     *
     * @example 10
     *
     * @var int
     */
    public $sinceSeconds;

    /**
     * @description The beginning of the time range to query. Specify the time in the RFC 3339 standard. The time must be in UTC.
     *
     * @example 2018-08-02T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The number of log entries that you want to query. Default value: 500. Maximum value: 2000. A maximum of 1 MB of logs can be returned.
     *
     * @example 500
     *
     * @var int
     */
    public $tail;

    /**
     * @description Specifies whether to return the timestamps of logs. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $timestamps;
    protected $_name = [
        'containerGroupId'     => 'ContainerGroupId',
        'containerName'        => 'ContainerName',
        'lastTime'             => 'LastTime',
        'limitBytes'           => 'LimitBytes',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sinceSeconds'         => 'SinceSeconds',
        'startTime'            => 'StartTime',
        'tail'                 => 'Tail',
        'timestamps'           => 'Timestamps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->limitBytes) {
            $res['LimitBytes'] = $this->limitBytes;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sinceSeconds) {
            $res['SinceSeconds'] = $this->sinceSeconds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tail) {
            $res['Tail'] = $this->tail;
        }
        if (null !== $this->timestamps) {
            $res['Timestamps'] = $this->timestamps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['LimitBytes'])) {
            $model->limitBytes = $map['LimitBytes'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SinceSeconds'])) {
            $model->sinceSeconds = $map['SinceSeconds'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tail'])) {
            $model->tail = $map['Tail'];
        }
        if (isset($map['Timestamps'])) {
            $model->timestamps = $map['Timestamps'];
        }

        return $model;
    }
}
