<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTrafficMarkingPolicyAttributeRequest\addTrafficMatchRules;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTrafficMarkingPolicyAttributeRequest\deleteTrafficMatchRules;

class UpdateTrafficMarkingPolicyAttributeRequest extends Model
{
    /**
     * @var addTrafficMatchRules[]
     */
    public $addTrafficMatchRules;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var deleteTrafficMatchRules[]
     */
    public $deleteTrafficMatchRules;

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
     * @var string
     */
    public $trafficMarkingPolicyDescription;

    /**
     * @var string
     */
    public $trafficMarkingPolicyId;

    /**
     * @var string
     */
    public $trafficMarkingPolicyName;
    protected $_name = [
        'addTrafficMatchRules' => 'AddTrafficMatchRules',
        'clientToken' => 'ClientToken',
        'deleteTrafficMatchRules' => 'DeleteTrafficMatchRules',
        'dryRun' => 'DryRun',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'trafficMarkingPolicyDescription' => 'TrafficMarkingPolicyDescription',
        'trafficMarkingPolicyId' => 'TrafficMarkingPolicyId',
        'trafficMarkingPolicyName' => 'TrafficMarkingPolicyName',
    ];

    public function validate()
    {
        if (\is_array($this->addTrafficMatchRules)) {
            Model::validateArray($this->addTrafficMatchRules);
        }
        if (\is_array($this->deleteTrafficMatchRules)) {
            Model::validateArray($this->deleteTrafficMatchRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addTrafficMatchRules) {
            if (\is_array($this->addTrafficMatchRules)) {
                $res['AddTrafficMatchRules'] = [];
                $n1 = 0;
                foreach ($this->addTrafficMatchRules as $item1) {
                    $res['AddTrafficMatchRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deleteTrafficMatchRules) {
            if (\is_array($this->deleteTrafficMatchRules)) {
                $res['DeleteTrafficMatchRules'] = [];
                $n1 = 0;
                foreach ($this->deleteTrafficMatchRules as $item1) {
                    $res['DeleteTrafficMatchRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->trafficMarkingPolicyDescription) {
            $res['TrafficMarkingPolicyDescription'] = $this->trafficMarkingPolicyDescription;
        }

        if (null !== $this->trafficMarkingPolicyId) {
            $res['TrafficMarkingPolicyId'] = $this->trafficMarkingPolicyId;
        }

        if (null !== $this->trafficMarkingPolicyName) {
            $res['TrafficMarkingPolicyName'] = $this->trafficMarkingPolicyName;
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
        if (isset($map['AddTrafficMatchRules'])) {
            if (!empty($map['AddTrafficMatchRules'])) {
                $model->addTrafficMatchRules = [];
                $n1 = 0;
                foreach ($map['AddTrafficMatchRules'] as $item1) {
                    $model->addTrafficMatchRules[$n1++] = addTrafficMatchRules::fromMap($item1);
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeleteTrafficMatchRules'])) {
            if (!empty($map['DeleteTrafficMatchRules'])) {
                $model->deleteTrafficMatchRules = [];
                $n1 = 0;
                foreach ($map['DeleteTrafficMatchRules'] as $item1) {
                    $model->deleteTrafficMatchRules[$n1++] = deleteTrafficMatchRules::fromMap($item1);
                }
            }
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

        if (isset($map['TrafficMarkingPolicyDescription'])) {
            $model->trafficMarkingPolicyDescription = $map['TrafficMarkingPolicyDescription'];
        }

        if (isset($map['TrafficMarkingPolicyId'])) {
            $model->trafficMarkingPolicyId = $map['TrafficMarkingPolicyId'];
        }

        if (isset($map['TrafficMarkingPolicyName'])) {
            $model->trafficMarkingPolicyName = $map['TrafficMarkingPolicyName'];
        }

        return $model;
    }
}
