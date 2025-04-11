<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTrafficMarkingPolicyRequest\trafficMatchRules;

class CreateTrafficMarkingPolicyRequest extends Model
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
     * @var int
     */
    public $markingDscp;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $priority;

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
    public $trafficMarkingPolicyName;

    /**
     * @var trafficMatchRules[]
     */
    public $trafficMatchRules;

    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'markingDscp' => 'MarkingDscp',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'priority' => 'Priority',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'trafficMarkingPolicyDescription' => 'TrafficMarkingPolicyDescription',
        'trafficMarkingPolicyName' => 'TrafficMarkingPolicyName',
        'trafficMatchRules' => 'TrafficMatchRules',
        'transitRouterId' => 'TransitRouterId',
    ];

    public function validate()
    {
        if (\is_array($this->trafficMatchRules)) {
            Model::validateArray($this->trafficMatchRules);
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

        if (null !== $this->markingDscp) {
            $res['MarkingDscp'] = $this->markingDscp;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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

        if (null !== $this->trafficMarkingPolicyName) {
            $res['TrafficMarkingPolicyName'] = $this->trafficMarkingPolicyName;
        }

        if (null !== $this->trafficMatchRules) {
            if (\is_array($this->trafficMatchRules)) {
                $res['TrafficMatchRules'] = [];
                $n1 = 0;
                foreach ($this->trafficMatchRules as $item1) {
                    $res['TrafficMatchRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
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

        if (isset($map['MarkingDscp'])) {
            $model->markingDscp = $map['MarkingDscp'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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

        if (isset($map['TrafficMarkingPolicyName'])) {
            $model->trafficMarkingPolicyName = $map['TrafficMarkingPolicyName'];
        }

        if (isset($map['TrafficMatchRules'])) {
            if (!empty($map['TrafficMatchRules'])) {
                $model->trafficMatchRules = [];
                $n1 = 0;
                foreach ($map['TrafficMatchRules'] as $item1) {
                    $model->trafficMatchRules[$n1++] = trafficMatchRules::fromMap($item1);
                }
            }
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
