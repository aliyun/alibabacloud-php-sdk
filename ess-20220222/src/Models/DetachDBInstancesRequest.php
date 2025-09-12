<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DetachDBInstancesRequest extends Model
{
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
    public $forceDetach;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $removeSecurityGroup;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'DBInstances' => 'DBInstances',
        'forceDetach' => 'ForceDetach',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'removeSecurityGroup' => 'RemoveSecurityGroup',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId' => 'ScalingGroupId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->DBInstances) {
            if (\is_array($this->DBInstances)) {
                $res['DBInstances'] = [];
                $n1 = 0;
                foreach ($this->DBInstances as $item1) {
                    $res['DBInstances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->forceDetach) {
            $res['ForceDetach'] = $this->forceDetach;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->removeSecurityGroup) {
            $res['RemoveSecurityGroup'] = $this->removeSecurityGroup;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n1 = 0;
                foreach ($map['DBInstances'] as $item1) {
                    $model->DBInstances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ForceDetach'])) {
            $model->forceDetach = $map['ForceDetach'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemoveSecurityGroup'])) {
            $model->removeSecurityGroup = $map['RemoveSecurityGroup'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
