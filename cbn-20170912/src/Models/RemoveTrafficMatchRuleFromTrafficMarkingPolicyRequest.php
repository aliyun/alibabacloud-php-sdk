<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class RemoveTrafficMatchRuleFromTrafficMarkingPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

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
     * @var string[]
     */
    public $trafficMarkRuleIds;

    /**
     * @var string
     */
    public $trafficMarkingPolicyId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'trafficMarkRuleIds' => 'TrafficMarkRuleIds',
        'trafficMarkingPolicyId' => 'TrafficMarkingPolicyId',
    ];

    public function validate()
    {
        if (\is_array($this->trafficMarkRuleIds)) {
            Model::validateArray($this->trafficMarkRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

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

        if (null !== $this->trafficMarkRuleIds) {
            if (\is_array($this->trafficMarkRuleIds)) {
                $res['TrafficMarkRuleIds'] = [];
                $n1 = 0;
                foreach ($this->trafficMarkRuleIds as $item1) {
                    $res['TrafficMarkRuleIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->trafficMarkingPolicyId) {
            $res['TrafficMarkingPolicyId'] = $this->trafficMarkingPolicyId;
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

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

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

        if (isset($map['TrafficMarkRuleIds'])) {
            if (!empty($map['TrafficMarkRuleIds'])) {
                $model->trafficMarkRuleIds = [];
                $n1 = 0;
                foreach ($map['TrafficMarkRuleIds'] as $item1) {
                    $model->trafficMarkRuleIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TrafficMarkingPolicyId'])) {
            $model->trafficMarkingPolicyId = $map['TrafficMarkingPolicyId'];
        }

        return $model;
    }
}
