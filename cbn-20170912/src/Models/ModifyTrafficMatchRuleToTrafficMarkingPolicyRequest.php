<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ModifyTrafficMatchRuleToTrafficMarkingPolicyRequest extends Model
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
     * @var string
     */
    public $trafficMarkingPolicyId;
    /**
     * @var string
     */
    public $trafficMatchRuleDescription;
    /**
     * @var string
     */
    public $trafficMatchRuleId;
    /**
     * @var string
     */
    public $trafficMatchRuleName;
    protected $_name = [
        'clientToken'                 => 'ClientToken',
        'dryRun'                      => 'DryRun',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'trafficMarkingPolicyId'      => 'TrafficMarkingPolicyId',
        'trafficMatchRuleDescription' => 'TrafficMatchRuleDescription',
        'trafficMatchRuleId'          => 'TrafficMatchRuleId',
        'trafficMatchRuleName'        => 'TrafficMatchRuleName',
    ];

    public function validate()
    {
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

        if (null !== $this->trafficMarkingPolicyId) {
            $res['TrafficMarkingPolicyId'] = $this->trafficMarkingPolicyId;
        }

        if (null !== $this->trafficMatchRuleDescription) {
            $res['TrafficMatchRuleDescription'] = $this->trafficMatchRuleDescription;
        }

        if (null !== $this->trafficMatchRuleId) {
            $res['TrafficMatchRuleId'] = $this->trafficMatchRuleId;
        }

        if (null !== $this->trafficMatchRuleName) {
            $res['TrafficMatchRuleName'] = $this->trafficMatchRuleName;
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

        if (isset($map['TrafficMarkingPolicyId'])) {
            $model->trafficMarkingPolicyId = $map['TrafficMarkingPolicyId'];
        }

        if (isset($map['TrafficMatchRuleDescription'])) {
            $model->trafficMatchRuleDescription = $map['TrafficMatchRuleDescription'];
        }

        if (isset($map['TrafficMatchRuleId'])) {
            $model->trafficMatchRuleId = $map['TrafficMatchRuleId'];
        }

        if (isset($map['TrafficMatchRuleName'])) {
            $model->trafficMatchRuleName = $map['TrafficMatchRuleName'];
        }

        return $model;
    }
}
