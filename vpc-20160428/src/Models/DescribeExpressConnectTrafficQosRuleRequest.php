<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class DescribeExpressConnectTrafficQosRuleRequest extends Model
{
    /**
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
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $queueId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string[]
     */
    public $ruleIdList;

    /**
     * @var string[]
     */
    public $ruleNameList;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'qosId' => 'QosId',
        'queueId' => 'QueueId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ruleIdList' => 'RuleIdList',
        'ruleNameList' => 'RuleNameList',
    ];

    public function validate()
    {
        if (\is_array($this->ruleIdList)) {
            Model::validateArray($this->ruleIdList);
        }
        if (\is_array($this->ruleNameList)) {
            Model::validateArray($this->ruleNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->ruleIdList) {
            if (\is_array($this->ruleIdList)) {
                $res['RuleIdList'] = [];
                $n1 = 0;
                foreach ($this->ruleIdList as $item1) {
                    $res['RuleIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleNameList) {
            if (\is_array($this->ruleNameList)) {
                $res['RuleNameList'] = [];
                $n1 = 0;
                foreach ($this->ruleNameList as $item1) {
                    $res['RuleNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['RuleIdList'])) {
            if (!empty($map['RuleIdList'])) {
                $model->ruleIdList = [];
                $n1 = 0;
                foreach ($map['RuleIdList'] as $item1) {
                    $model->ruleIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleNameList'])) {
            if (!empty($map['RuleNameList'])) {
                $model->ruleNameList = [];
                $n1 = 0;
                foreach ($map['RuleNameList'] as $item1) {
                    $model->ruleNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
