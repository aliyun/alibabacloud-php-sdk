<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifyQosCarRequest extends Model
{
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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $qosCarId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $limitType;

    /**
     * @var int
     */
    public $minBandwidthAbs;

    /**
     * @var int
     */
    public $maxBandwidthAbs;

    /**
     * @var int
     */
    public $minBandwidthPercent;

    /**
     * @var int
     */
    public $maxBandwidthPercent;

    /**
     * @var string
     */
    public $percentSourceType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'description'          => 'Description',
        'regionId'             => 'RegionId',
        'qosId'                => 'QosId',
        'qosCarId'             => 'QosCarId',
        'priority'             => 'Priority',
        'limitType'            => 'LimitType',
        'minBandwidthAbs'      => 'MinBandwidthAbs',
        'maxBandwidthAbs'      => 'MaxBandwidthAbs',
        'minBandwidthPercent'  => 'MinBandwidthPercent',
        'maxBandwidthPercent'  => 'MaxBandwidthPercent',
        'percentSourceType'    => 'PercentSourceType',
        'name'                 => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->qosCarId) {
            $res['QosCarId'] = $this->qosCarId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }
        if (null !== $this->minBandwidthAbs) {
            $res['MinBandwidthAbs'] = $this->minBandwidthAbs;
        }
        if (null !== $this->maxBandwidthAbs) {
            $res['MaxBandwidthAbs'] = $this->maxBandwidthAbs;
        }
        if (null !== $this->minBandwidthPercent) {
            $res['MinBandwidthPercent'] = $this->minBandwidthPercent;
        }
        if (null !== $this->maxBandwidthPercent) {
            $res['MaxBandwidthPercent'] = $this->maxBandwidthPercent;
        }
        if (null !== $this->percentSourceType) {
            $res['PercentSourceType'] = $this->percentSourceType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyQosCarRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['QosCarId'])) {
            $model->qosCarId = $map['QosCarId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }
        if (isset($map['MinBandwidthAbs'])) {
            $model->minBandwidthAbs = $map['MinBandwidthAbs'];
        }
        if (isset($map['MaxBandwidthAbs'])) {
            $model->maxBandwidthAbs = $map['MaxBandwidthAbs'];
        }
        if (isset($map['MinBandwidthPercent'])) {
            $model->minBandwidthPercent = $map['MinBandwidthPercent'];
        }
        if (isset($map['MaxBandwidthPercent'])) {
            $model->maxBandwidthPercent = $map['MaxBandwidthPercent'];
        }
        if (isset($map['PercentSourceType'])) {
            $model->percentSourceType = $map['PercentSourceType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
