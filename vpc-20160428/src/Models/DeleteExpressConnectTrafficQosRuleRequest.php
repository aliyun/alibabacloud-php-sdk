<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DeleteExpressConnectTrafficQosRuleRequest extends Model
{
    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example qos-2giu0a6vd5x0mv4700
     *
     * @var string
     */
    public $qosId;

    /**
     * @description This parameter is required.
     *
     * @example qos-queue-9nyx2u7n71s2rcy4n5
     *
     * @var string
     */
    public $queueId;

    /**
     * @description This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description This parameter is required.
     *
     * @example qos-rule-iugg0l9x27f2nocouj
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'qosId'                => 'QosId',
        'queueId'              => 'QueueId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ruleId'               => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExpressConnectTrafficQosRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
