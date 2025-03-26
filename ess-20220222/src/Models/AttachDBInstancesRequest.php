<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class AttachDBInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $attachMode;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $DBInstances;

    /**
     * @var bool
     */
    public $forceAttach;

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
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attachMode' => 'AttachMode',
        'clientToken' => 'ClientToken',
        'DBInstances' => 'DBInstances',
        'forceAttach' => 'ForceAttach',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstances)) {
            Model::validateArray($this->DBInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachMode) {
            $res['AttachMode'] = $this->attachMode;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->DBInstances) {
            if (\is_array($this->DBInstances)) {
                $res['DBInstances'] = [];
                $n1 = 0;
                foreach ($this->DBInstances as $item1) {
                    $res['DBInstances'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->forceAttach) {
            $res['ForceAttach'] = $this->forceAttach;
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

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AttachMode'])) {
            $model->attachMode = $map['AttachMode'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n1 = 0;
                foreach ($map['DBInstances'] as $item1) {
                    $model->DBInstances[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ForceAttach'])) {
            $model->forceAttach = $map['ForceAttach'];
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

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
