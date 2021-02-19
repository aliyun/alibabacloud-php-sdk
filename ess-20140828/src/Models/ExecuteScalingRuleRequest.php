<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class ExecuteScalingRuleRequest extends Model
{
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
    public $scalingRuleAri;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var float
     */
    public $breachThreshold;

    /**
     * @var float
     */
    public $metricValue;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scalingRuleAri'       => 'ScalingRuleAri',
        'clientToken'          => 'ClientToken',
        'breachThreshold'      => 'BreachThreshold',
        'metricValue'          => 'MetricValue',
        'ownerAccount'         => 'OwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scalingRuleAri) {
            $res['ScalingRuleAri'] = $this->scalingRuleAri;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->breachThreshold) {
            $res['BreachThreshold'] = $this->breachThreshold;
        }
        if (null !== $this->metricValue) {
            $res['MetricValue'] = $this->metricValue;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScalingRuleAri'])) {
            $model->scalingRuleAri = $map['ScalingRuleAri'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['BreachThreshold'])) {
            $model->breachThreshold = $map['BreachThreshold'];
        }
        if (isset($map['MetricValue'])) {
            $model->metricValue = $map['MetricValue'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
