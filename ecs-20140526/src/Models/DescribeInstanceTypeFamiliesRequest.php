<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceTypeFamiliesRequest extends Model
{
    /**
     * @description The generation of the instance family. For more information, see [Instance families](~~25378~~). Valid values:
     *
     *   ecs-1: Generation I, which consists of the earliest and cost-effective instance types
     *   ecs-2: Generation II, which provides upgraded software and hardware and higher performance than Generation I
     *   ecs-3: Generation III, which consists of high-performance instance families and is suitable for different business scenarios
     *   ecs-4: Generation IV, which consists of enterprise-level instance families (such as g5, c5, and r5), Bare Metal Instance families (such as ebmc5s, ebmg5s, and ebmr5s), and burstable instance families (such as t5) that can meet a wide variety of business requirements with lower latency
     *   ecs-5: Generation V, which consists of enterprise-level instance families (such as g6, c6, and r6), Bare Metal Instance families (such as ebmg6, ebmg6e, and ebmc6), and storage enhanced instance families (such as g6e) and delivers quick response and higher performance
     *   ecs-6: Generation VI, which consists of enterprise-level instance families (such as hfc7, hfg7, and hfr7) and Bare Metal Instance families (such as ebmhfg7) and is in invitational preview
     *
     * @example ecs-5
     *
     * @var string
     */
    public $generation;

    /**
     * @example ECSforCloud@Alibaba.com
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @example 155780923770
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ECSforCloud
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @example 155780923770
     *
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'generation'           => 'Generation',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTypeFamiliesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
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

        return $model;
    }
}
