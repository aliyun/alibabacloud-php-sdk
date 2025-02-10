<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ModifyExpressConnectTrafficQosRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $dstCidr;
    /**
     * @var string
     */
    public $dstIPv6Cidr;
    /**
     * @var string
     */
    public $dstPortRange;
    /**
     * @var int
     */
    public $matchDscp;
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
    public $protocol;
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
     * @var int
     */
    public $remarkingDscp;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var string
     */
    public $ruleDescription;
    /**
     * @var string
     */
    public $ruleId;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var string
     */
    public $srcCidr;
    /**
     * @var string
     */
    public $srcIPv6Cidr;
    /**
     * @var string
     */
    public $srcPortRange;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'dstCidr'              => 'DstCidr',
        'dstIPv6Cidr'          => 'DstIPv6Cidr',
        'dstPortRange'         => 'DstPortRange',
        'matchDscp'            => 'MatchDscp',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'priority'             => 'Priority',
        'protocol'             => 'Protocol',
        'qosId'                => 'QosId',
        'queueId'              => 'QueueId',
        'regionId'             => 'RegionId',
        'remarkingDscp'        => 'RemarkingDscp',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ruleDescription'      => 'RuleDescription',
        'ruleId'               => 'RuleId',
        'ruleName'             => 'RuleName',
        'srcCidr'              => 'SrcCidr',
        'srcIPv6Cidr'          => 'SrcIPv6Cidr',
        'srcPortRange'         => 'SrcPortRange',
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

        if (null !== $this->dstCidr) {
            $res['DstCidr'] = $this->dstCidr;
        }

        if (null !== $this->dstIPv6Cidr) {
            $res['DstIPv6Cidr'] = $this->dstIPv6Cidr;
        }

        if (null !== $this->dstPortRange) {
            $res['DstPortRange'] = $this->dstPortRange;
        }

        if (null !== $this->matchDscp) {
            $res['MatchDscp'] = $this->matchDscp;
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

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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

        if (null !== $this->remarkingDscp) {
            $res['RemarkingDscp'] = $this->remarkingDscp;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->srcCidr) {
            $res['SrcCidr'] = $this->srcCidr;
        }

        if (null !== $this->srcIPv6Cidr) {
            $res['SrcIPv6Cidr'] = $this->srcIPv6Cidr;
        }

        if (null !== $this->srcPortRange) {
            $res['SrcPortRange'] = $this->srcPortRange;
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

        if (isset($map['DstCidr'])) {
            $model->dstCidr = $map['DstCidr'];
        }

        if (isset($map['DstIPv6Cidr'])) {
            $model->dstIPv6Cidr = $map['DstIPv6Cidr'];
        }

        if (isset($map['DstPortRange'])) {
            $model->dstPortRange = $map['DstPortRange'];
        }

        if (isset($map['MatchDscp'])) {
            $model->matchDscp = $map['MatchDscp'];
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

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
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

        if (isset($map['RemarkingDscp'])) {
            $model->remarkingDscp = $map['RemarkingDscp'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SrcCidr'])) {
            $model->srcCidr = $map['SrcCidr'];
        }

        if (isset($map['SrcIPv6Cidr'])) {
            $model->srcIPv6Cidr = $map['SrcIPv6Cidr'];
        }

        if (isset($map['SrcPortRange'])) {
            $model->srcPortRange = $map['SrcPortRange'];
        }

        return $model;
    }
}
