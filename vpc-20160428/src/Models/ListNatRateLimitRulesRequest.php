<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ListNatRateLimitRulesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $ruleIds;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $sourceCIDR;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'maxResults' => 'MaxResults',
        'natGatewayId' => 'NatGatewayId',
        'nextToken' => 'NextToken',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'ruleIds' => 'RuleIds',
        'ruleName' => 'RuleName',
        'sourceCIDR' => 'SourceCIDR',
    ];

    public function validate()
    {
        if (\is_array($this->ruleIds)) {
            Model::validateArray($this->ruleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleIds) {
            if (\is_array($this->ruleIds)) {
                $res['RuleIds'] = [];
                $n1 = 0;
                foreach ($this->ruleIds as $item1) {
                    $res['RuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
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

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = [];
                $n1 = 0;
                foreach ($map['RuleIds'] as $item1) {
                    $model->ruleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }

        return $model;
    }
}
