<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;

class DescribeContainerLogRequest extends Model
{
    /**
     * @var string
     */
    public $containerGroupId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var bool
     */
    public $lastTime;

    /**
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
     * @var int
     */
    public $sinceSeconds;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $tail;

    /**
     * @var bool
     */
    public $timestamps;
    protected $_name = [
        'containerGroupId' => 'ContainerGroupId',
        'containerName' => 'ContainerName',
        'lastTime' => 'LastTime',
        'limitBytes' => 'LimitBytes',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sinceSeconds' => 'SinceSeconds',
        'startTime' => 'StartTime',
        'tail' => 'Tail',
        'timestamps' => 'Timestamps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
