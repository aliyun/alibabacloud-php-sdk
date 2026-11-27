<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListNatRateLimitRulesResponseBody\ruleInfos;

class ListNatRateLimitRulesResponseBody extends Model
{
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
     * @var string
     */
    public $requestId;

    /**
     * @var ruleInfos[]
     */
    public $ruleInfos;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'natGatewayId' => 'NatGatewayId',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'ruleInfos' => 'RuleInfos',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->ruleInfos)) {
            Model::validateArray($this->ruleInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleInfos) {
            if (\is_array($this->ruleInfos)) {
                $res['RuleInfos'] = [];
                $n1 = 0;
                foreach ($this->ruleInfos as $item1) {
                    $res['RuleInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleInfos'])) {
            if (!empty($map['RuleInfos'])) {
                $model->ruleInfos = [];
                $n1 = 0;
                foreach ($map['RuleInfos'] as $item1) {
                    $model->ruleInfos[$n1] = ruleInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
