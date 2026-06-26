<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ResidentResourcePool extends Model
{
    /**
     * @var ResidentResourceAllocationStatus
     */
    public $allocationStatus;

    /**
     * @var string
     */
    public $associatedPoolId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $poolType;

    /**
     * @var string
     */
    public $residentResourcePoolId;

    /**
     * @var string
     */
    public $residentResourcePoolName;

    /**
     * @var ResidentResourceCapacity
     */
    public $resourcePoolCapacity;

    /**
     * @var ResidentResourceCapacity
     */
    public $resourcePoolConfig;

    /**
     * @var TimedPoolConfig
     */
    public $timedConfig;
    protected $_name = [
        'allocationStatus' => 'allocationStatus',
        'associatedPoolId' => 'associatedPoolId',
        'createdTime' => 'createdTime',
        'expireTime' => 'expireTime',
        'lastModifiedTime' => 'lastModifiedTime',
        'poolType' => 'poolType',
        'residentResourcePoolId' => 'residentResourcePoolId',
        'residentResourcePoolName' => 'residentResourcePoolName',
        'resourcePoolCapacity' => 'resourcePoolCapacity',
        'resourcePoolConfig' => 'resourcePoolConfig',
        'timedConfig' => 'timedConfig',
    ];

    public function validate()
    {
        if (null !== $this->allocationStatus) {
            $this->allocationStatus->validate();
        }
        if (null !== $this->resourcePoolCapacity) {
            $this->resourcePoolCapacity->validate();
        }
        if (null !== $this->resourcePoolConfig) {
            $this->resourcePoolConfig->validate();
        }
        if (null !== $this->timedConfig) {
            $this->timedConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationStatus) {
            $res['allocationStatus'] = null !== $this->allocationStatus ? $this->allocationStatus->toArray($noStream) : $this->allocationStatus;
        }

        if (null !== $this->associatedPoolId) {
            $res['associatedPoolId'] = $this->associatedPoolId;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->poolType) {
            $res['poolType'] = $this->poolType;
        }

        if (null !== $this->residentResourcePoolId) {
            $res['residentResourcePoolId'] = $this->residentResourcePoolId;
        }

        if (null !== $this->residentResourcePoolName) {
            $res['residentResourcePoolName'] = $this->residentResourcePoolName;
        }

        if (null !== $this->resourcePoolCapacity) {
            $res['resourcePoolCapacity'] = null !== $this->resourcePoolCapacity ? $this->resourcePoolCapacity->toArray($noStream) : $this->resourcePoolCapacity;
        }

        if (null !== $this->resourcePoolConfig) {
            $res['resourcePoolConfig'] = null !== $this->resourcePoolConfig ? $this->resourcePoolConfig->toArray($noStream) : $this->resourcePoolConfig;
        }

        if (null !== $this->timedConfig) {
            $res['timedConfig'] = null !== $this->timedConfig ? $this->timedConfig->toArray($noStream) : $this->timedConfig;
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
        if (isset($map['allocationStatus'])) {
            $model->allocationStatus = ResidentResourceAllocationStatus::fromMap($map['allocationStatus']);
        }

        if (isset($map['associatedPoolId'])) {
            $model->associatedPoolId = $map['associatedPoolId'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['poolType'])) {
            $model->poolType = $map['poolType'];
        }

        if (isset($map['residentResourcePoolId'])) {
            $model->residentResourcePoolId = $map['residentResourcePoolId'];
        }

        if (isset($map['residentResourcePoolName'])) {
            $model->residentResourcePoolName = $map['residentResourcePoolName'];
        }

        if (isset($map['resourcePoolCapacity'])) {
            $model->resourcePoolCapacity = ResidentResourceCapacity::fromMap($map['resourcePoolCapacity']);
        }

        if (isset($map['resourcePoolConfig'])) {
            $model->resourcePoolConfig = ResidentResourceCapacity::fromMap($map['resourcePoolConfig']);
        }

        if (isset($map['timedConfig'])) {
            $model->timedConfig = TimedPoolConfig::fromMap($map['timedConfig']);
        }

        return $model;
    }
}
